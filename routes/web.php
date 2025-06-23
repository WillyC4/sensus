<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/team', 'team');
Route::view('/services', 'service');
Route::view('/contact', 'contact');