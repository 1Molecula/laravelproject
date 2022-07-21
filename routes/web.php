<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerBooks;
use App\Http\Controllers\ControllerAdminBooks;
use App\Http\Controllers\ControllerAdminAuthor;


Route::get('/', [ControllerBooks::class, 'show']);

Route::get('/admin', [ControllerAdmin::class, 'show']);

Route::get('/admin/books', [ControllerAdminBooks::class, 'show']);

Route::get('/admin/authors', [ControllerAdminAuthors::class, 'show']);
