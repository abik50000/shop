<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Services\Slugify;
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
        $cat = Category::with('parent')->find(12);

        dd($cat );
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
