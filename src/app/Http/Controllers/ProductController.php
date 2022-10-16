<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Product page
     */
    public function product(Request $request)
    {
        return view('product')->with([
            'product' => Product::where('slug', $request->slug)->with('category')->firstOrFail()
        ]);
    }


}
