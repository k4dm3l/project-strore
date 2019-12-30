<?php

/** Normal

// GET PRODUCT
Route::get('/product/get/{id}', function() {
    return view('products.getone');
});

// GET ALL PRODUCTS
Route::get('/product/all', function() {
    return view('products.getall');
});

// CREATE PRODUCT
Route::get('/product/new', function() {
    return view('products.create');
});

// UPDATE PRODUCT
Route::put('/product/update/{id}', function() {
    return view('products.update');
});

// DELETE PRODUCT
Route::delete('/product/delete/{id}', function() {
    return view('products.delete');
});

 */