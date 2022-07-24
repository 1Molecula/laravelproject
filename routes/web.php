<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerAuthors;
use App\Http\Controllers\ControllerBooks;
use App\Http\Controllers\ControllerAdminBooks;
use App\Http\Controllers\ControllerAdminAuthors;


Route::get('/', [ControllerAuthors::class, 'show']);

Route::get('/{id}', [ControllerBooks::class, 'show'])->where('id', '[0-9]+');

Route::get('/admin', [ControllerAdmin::class, 'show']);

Route::get('/admin/books', [ControllerAdminBooks::class, 'show']);

Route::get('/admin/authors', [ControllerAdminAuthors::class, 'show']);
