<?php

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

Route::get('/', function () {
    return view('welcome');
});

/** PRODUCT ROUTES */
//include('products/products.php');

/** PRODUCT ROUTES RESOURCE CONTROLLER */
Route::resource('products', 'ProductController');