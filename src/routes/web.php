<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [AppController::class, 'shop'])->name('index');

Route::get('/shop/{slug}', [AppController::class, 'category'])->name('category');

Route::get('/contact', [AppController::class, 'contact'])->name('contact');

Route::get('/product/{slug}', [ProductController::class, 'product'])->name('product');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::get('/orders', [CartController::class, 'orders'])->name('orders');


Route::post('/contact-mail', [MailController::class, 'contactMail'])->name('contact-mail');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
