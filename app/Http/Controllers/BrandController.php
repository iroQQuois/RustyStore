<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Contracts\View\View;

class BrandController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var CategoryRepository
     */
    protected CategoryRepository $categoryRepository;

    /**
     * Create a new controller instance.
     *
     * @param  CategoryRepository  $categories
     * @return void
     */
    public function __construct(CategoryRepository $categories)
    {
        $this->categoryRepository = $categories;
    }

    /**
     * Action that return view with all brands by selected category
     *
     * @param  string  $category
     *
     * @return View
     */
    public function index(string $category): View
    {
        $categoryId = $this->categoryRepository->getCategoryIdByName($category);
        $categoryId = json_decode($categoryId, true);

        $brands = Category::find(intval($categoryId[0]['id']));
        $brands = $brands->brands;

        return view('brands', ['brands' => $brands, 'category' => $category]);
    }
}
