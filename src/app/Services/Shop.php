<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;

class Shop
{
    /**
     * Get All products by category
     *
     * @return Collection
     */
    public function getAllProducts()
    {
        return Product::with('category')->get();
    }

    /**
     * Get products by category
     *
     * @param int|null $category_id
     * @return Collection
     */
    public function getProducts($category_id, $paginate = 0)
    {
        $category = Category::with('children')->find($category_id);

        $cats = [$category->id];

        foreach ($category->children as $secondCat) {

            $cats[] = $secondCat->id;

            foreach ($secondCat->children as $thirdCat) {
                $cats[] = $thirdCat->id;
            }
        }

        return $paginate == 0
            ? Product::query()
                ->whereIn('category_id', $cats)
                ->with('category')
                ->get()
            : Product::query()
                ->whereIn('category_id', $cats)
                ->with('category')
                ->paginate($paginate);
    }


}
