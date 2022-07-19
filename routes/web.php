<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('books');
});

Route::get('/admin', function () {
    return view('admin');
});
