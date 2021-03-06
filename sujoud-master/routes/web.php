<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('Pages/index');
});
Route::get('/about', function () {
    return view('Pages.about');
});
Route::get('/shop', function () {
    return view('Pages.shop');
});
Route::get('/contact', function () {
    return view('Pages.contact');
});
Route::get('/cart', function () {
    return view('Pages.cart');
});
Route::get('/product', function () {
    return view('Pages.product-details');
});
Route::get('/checkout', function () {
    return view('Pages.checkout');
});



