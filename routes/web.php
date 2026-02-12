<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-Javier', function () {
    return "Javier Luna Diaz";
});

Route::get('/mi-Javier/php-basico', function () {
    return "Javier Luna Diaz";
});


