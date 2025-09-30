<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, haryo!';
});

// Route::get('/user/{haryo}', function ($name) {
//     return "Nama  " . $name;
// });