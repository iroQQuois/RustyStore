<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LiveSearchController extends Controller
{

    /**
     * The task repository instance.
     *
     * @var ProductRepository
     */
    protected ProductRepository $productRepository;

    /**
     * Create a new controller instance.
     *
     * @param  ProductRepository  $products
     */
    public function __construct(ProductRepository $products)
    {
        $this->productRepository = $products;
    }

    /**
     * @return View
     */
    function index(): View
    {
        return view('live_search');
    }

    /**
     * @param  Request  $request
     */
    function action(Request $request)
    {
        if($request->ajax()) {
            $output = '';
            $query = $request->get('query');

            if($query != '') {
                $searchData = $this
                    ->productRepository
                    ->getProductNameBySearch($query);
            } else {
                $searchData = $this->productRepository->getProductsOrderedById();
            }

//            print_r($searchData);
            $searchData = json_decode($searchData, true);
            $total_row = count($searchData);
            print_r($total_row);

            if($total_row > 0) {
                foreach ( $searchData as $row) {
                    print_r($row);
                    $output .= '

        <tr>
      <td>'.$row['full_title'].'</td>
        </tr>
        ';
                }
            } else {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data, JSON_UNESCAPED_SLASHES);
        }
    }
}
