<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerBooks;


Route::get('/', [ControllerBooks::class, 'show']);

Route::get('/admin', [ControllerAdmin::class, 'show']);
