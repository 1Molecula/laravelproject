<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerAuthors;
use App\Http\Controllers\ControllerBooks;
use App\Http\Controllers\ControllerAdminBooks;
use App\Http\Controllers\ControllerAdminAuthors;
use App\Http\Controllers\ControllerMain;
use App\Http\Controllers\ControllerAuthorization;
use App\Http\Controllers\ControllerDelete;
use App\Http\Controllers\ControllerEdit;
use App\Http\Controllers\ControllerCreate;


Route::get('/', [ControllerMain::class, 'show']);

Route::get('/authorization', [ControllerAuthorization::class, 'show']);

Route::post('/authorization', [ControllerAuthorization::class, 'authorization']);

Route::get('/authors', [ControllerAuthors::class, 'show']);

Route::get('/authors/{id}', [ControllerBooks::class, 'show'])->where('id', '[0-9]+');

Route::get('/admin', [ControllerAdmin::class, 'show']);

Route::get('/admin/books', [ControllerAdminBooks::class, 'show']);

Route::get('/admin/books/deleteBook{id}', [ControllerDelete::class, 'deleteBook']);

Route::get('/admin/books/editBook{id}', [ControllerEdit::class, 'editBookForm']);
Route::post('/admin/books/editBook{id}', [ControllerEdit::class, 'editBook']);

Route::get('/admin/books/createBook', [ControllerCreate::class, 'createBookForm']);
Route::post('/admin/books/createBook', [ControllerCreate::class, 'createBook']);

Route::get('/admin/authors', [ControllerAdminAuthors::class, 'show']);
