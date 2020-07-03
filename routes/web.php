<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('affair.index');
});

Route::resource('/client', 'ClientController');
Route::resource('/lawyer', 'LawyerController');
Route::resource('/affair', 'AffairController');

