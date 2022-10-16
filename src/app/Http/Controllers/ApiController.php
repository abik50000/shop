<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function get(Request $request)
    {
        return Product::where('slug', $request->slug)->first();
    }
}
