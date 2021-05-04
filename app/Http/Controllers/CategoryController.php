<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(string $category): Factory|View|Application
    {
        $categoryId = Category::query()->select('id')->where('category', '=', $category)->get();
        $categoryId = json_decode($categoryId, true);

        $brands = Category::find(intval($categoryId[0]['id']));
        $brands = $brands->brands;

        return view('brands', ['brands' => $brands]);
    }
}
