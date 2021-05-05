<?php


namespace App\Repositories;


use App\Models\Brand;

class BrandRepository
{
    /**
     * Return brand id by brand name
     *
     * @param  string  $brandName
     *
     * @return string
     */
    public function getBrandIdByName(string $brandName): string
    {
        return Brand::query()
            ->select('id')
            ->where('brand', '=', $brandName)
            ->get();
    }

    /**
     * Return all brand names
     *
     * @return string
     */
    public function getAllBrandNames(): string
    {
        return Brand::query()
            ->select('brand')
            ->get();
    }
}
