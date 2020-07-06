<?php

use Illuminate\Support\Facades\Route;

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

Route::get('index', function () {
    return view('frontend.index');
})->name('index');

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('index');

// Route::get('/', function () {
//     return view('product.index');
// });
Route::get('/', 'ProductController@index')->name('index');

Route::get('/product/index', function () {
    return view('product.index');
})->name('product.index');


Route::get('/product', 'ProductController@index')->name('product.index');

Route::get('1', function () {
    return view('frontend.welcome');
})->name('well');

Route::get('about', function () {
    return view('frontend.about');
})->name('about');
 
Route::get('products', function () {
    return view('frontend.products');
})->name('products');
Route::get('store', function () {
    return view('frontend.store');
})->name('store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
