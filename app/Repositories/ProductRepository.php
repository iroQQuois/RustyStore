<?php


namespace App\Repositories;


use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository
{
    /**
     * Return product by category id and brand id
     *
     * @param  int  $categoryId
     * @param  int  $brandId
     *
     * @return string
     */
    public function getProductsByCategoryAndBrand(
        int $categoryId,
        int $brandId
    ): string {
        return Product::query()
            ->where('category_id', '=', $categoryId)
            ->where('brand_id', '=', $brandId)
            ->get();
    }

    /**
     * Return product by id
     *
     * @param  int  $productId
     *
     * @return string
     */
    public function getProductById(int $productId): string
    {
        return Product::query()
            ->where('id', '=', $productId)
            ->get();
    }

    /**
     * @param  string  $query
     *
     * @return string
     */
    public function getProductNameBySearch(string $query): string
    {
        return Product::query()
            ->select('full_title')
            ->where('full_title', 'like', '%'.$query.'%')
            ->get();
    }

    /**
     * @return string
     */
    public function getProductsOrderedById(): string
    {
        return Product::query()
            ->select('full_title')
            ->orderBy('id', 'desc')
            ->get();
    }
}
