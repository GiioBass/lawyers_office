<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Affairs/index');
})->name('home');

Route::resource('/client', 'ClientController');
Route::resource('/lawyer', 'LawyerController');
Route::resource('/affair', 'AffairController');

