<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Product page
     */
    public function cart()
    {
        return view('cart');
    }
}
