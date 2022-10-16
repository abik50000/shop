<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('shop');
    }

    /**
     * Contact page
     */
    public function contact()
    {
        return view('contact');
    }

}
