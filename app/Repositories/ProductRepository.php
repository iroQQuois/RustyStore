<?php


namespace App\Repositories;


use App\Models\Product;

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
}
