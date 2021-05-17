<?php


namespace App\Repositories;


use App\Models\Image;

class ImageRepository
{
    /**
     * Return images for product (by product id)
     *
     * @param  int  $productId
     *
     * @return string
     */
    public function getImagesByProductId(int $productId): string
    {
        return Image::query()
            ->select('link')
            ->where('product_id', '=', $productId)
            ->get();
    }
}
