<?php


namespace App\Repositories;


use App\Models\Category;

class CategoryRepository
{
    /**
     * Return category id by name of category
     *
     * @param  string  $categoryName
     *
     * @return string
     */
    public function getCategoryIdByName(string $categoryName): string
    {
        return Category::query()
            ->select('id')
            ->where('category', '=', $categoryName)
            ->get();
    }
}
