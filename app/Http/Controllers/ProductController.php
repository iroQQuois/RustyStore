<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var CategoryRepository
     * @var BrandRepository
     * @var ProductRepository
     */
    protected CategoryRepository $categoryRepository;
    protected BrandRepository $brandRepository;
    protected ProductRepository $productRepository;

    /**
     * Create a new controller instance.
     *
     * @param  CategoryRepository  $categories
     * @param  BrandRepository  $brands
     * @param  ProductRepository  $products
     * @return void
     */
    public function __construct(
        CategoryRepository $categories,
        BrandRepository $brands,
        ProductRepository $products
    )
    {
        $this->categoryRepository = $categories;
        $this->brandRepository = $brands;
        $this->productRepository = $products;
    }

    /**
     * Action that return view with all products by category and brand
     *
     * @param  string  $category
     * @param  string  $brand
     *
     * @return View
     */
    public function index(string $category, string $brand): View
    {
        $categoryId = $this->categoryRepository->getCategoryIdByName($category);
        $categoryId = json_decode($categoryId, true);

        $brandId = $this->brandRepository->getBrandIdByName($brand);
        $brandId = json_decode($brandId, true);

        $products = $this->productRepository
            ->getProductsByCategoryAndBrand(
            intval($categoryId[0]['id']), intval($brandId[0]['id']));

        return view('products', ['products' => $products, 'brand' => $brand]);
    }
}
