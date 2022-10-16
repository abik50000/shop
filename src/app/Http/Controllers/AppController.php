<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Services\Shop;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Main page
     */
    public function shop()
    {
        return view('shop')->with([
            'category'   => 'All categories',
            'categories' => Category::accordion(),
            'products'   => Product::with('category')->paginate(12)
        ]);
    }

    /**
     * Category page
     */
    public function category(Request $request, Shop $shop)
    {
        $category = Category::where('slug', $request->slug)->firstOrFail();

        return view('shop')->with([
            'category'   => $category->name,
            'categories' => Category::accordion(),
            'products'   => $shop->getProducts($category->id, 12)
        ]);
    }

    /**
     * Contact page
     */
    public function contact()
    {
        return view('contact');
    }

}
