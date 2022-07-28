<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerAuthors;
use App\Http\Controllers\ControllerBooks;
use App\Http\Controllers\ControllerAdminBooks;
use App\Http\Controllers\ControllerAdminAuthors;
use App\Http\Controllers\ControllerMain;
use App\Http\Controllers\ControllerAuthorization;
use App\Http\Controllers\ControllerDeleteBooks;
use App\Http\Controllers\ControllerEditBooks;
use App\Http\Controllers\ControllerCreateBooks;
use App\Http\Controllers\ControllerCreateAuthors;
use App\Http\Controllers\ControllerDeleteAuthors;
use App\Http\Controllers\ControllerEditAuthors;


Route::get('/', [ControllerMain::class, 'show']);



Route::get('/authorization', [ControllerAuthorization::class, 'show']);
Route::post('/authorization', [ControllerAuthorization::class, 'authorization']);



Route::get('/authors', [ControllerAuthors::class, 'show']);
Route::get('/authors/{id}', [ControllerBooks::class, 'show'])->where('id', '[0-9]+');



Route::get('/admin', [ControllerAdmin::class, 'show']);



Route::get('/admin/books', [ControllerAdminBooks::class, 'show']);

Route::get('/admin/books/deleteBook{id}', [ControllerDeleteBooks::class, 'deleteBook']);

Route::get('/admin/books/editBook{id}', [ControllerEditBooks::class, 'editBookForm']);
Route::post('/admin/books/editBook{id}', [ControllerEditBooks::class, 'editBook']);

Route::get('/admin/books/createBook', [ControllerCreateBooks::class, 'createBookForm']);
Route::post('/admin/books/createBook', [ControllerCreateBooks::class, 'createBook']);



Route::get('/admin/authors', [ControllerAdminAuthors::class, 'show']);

Route::get('/admin/authors/createAuthor', [ControllerCreateAuthors::class, 'createAuthorForm']);
Route::post('/admin/authors/createAuthor', [ControllerCreateAuthors::class, 'createAuthor']);

Route::get('/admin/authors/deleteAuthor{id}', [ControllerDeleteAuthors::class, 'deleteAuthor']);

Route::get('/admin/authors/editAuthor{id}', [ControllerEditAuthors::class, 'editAuthorForm']);
Route::post('/admin/authors/editAuthor{id}', [ControllerEditAuthors::class, 'editAuthor']);
