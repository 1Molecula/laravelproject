<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/', function () {
    return view('books');
});

Route::get('/admin', [MyController::class, 'show']);
