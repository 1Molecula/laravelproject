<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerAuthors;
use App\Http\Controllers\ControllerBooks;
use App\Http\Controllers\ControllerAdminBooks;
use App\Http\Controllers\ControllerAdminAuthors;
use App\Http\Controllers\ControllerMain;
use App\Http\Controllers\ControllerAuthentication;
use App\Http\Controllers\ControllerDeleteBooks;
use App\Http\Controllers\ControllerEditBooks;
use App\Http\Controllers\ControllerCreateBooks;
use App\Http\Controllers\ControllerCreateAuthors;
use App\Http\Controllers\ControllerDeleteAuthors;
use App\Http\Controllers\ControllerEditAuthors;
use App\Http\Controllers\ControllerRegistration;
use App\Http\Controllers\ControllerTemperature;


Route::get('/', [ControllerMain::class, 'show']);



Route::get('/authentication', function (){
    if(Auth::check()){
        return redirect('/admin');
    }
    return view('authentication');
});
Route::post('/authentication', [ControllerAuthentication::class, 'authentication']);



Route::get('/registration', function (){
    if(Auth::check()){
        return redirect('/admin');
    }
    return view('registration');
});
Route::post('/registration', [ControllerRegistration::class, 'saveNewUser']);


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


Route::get('/authors', [ControllerAuthors::class, 'show']);
Route::get('/authors/{id}', [ControllerBooks::class, 'show'])->where('id', '[0-9]+');


Route::get('/weather', [ControllerTemperature::class, 'tableTemperature']);



Route::get('/admin', [ControllerAdmin::class, 'show']) ->middleware('auth');



Route::get('/admin/books', [ControllerAdminBooks::class, 'show']) ->middleware('auth');

Route::get('/admin/books/deleteBook{id}', [ControllerDeleteBooks::class, 'deleteBook']) ->middleware('auth');

Route::get('/admin/books/editBook{id}', [ControllerEditBooks::class, 'editBookForm']) ->middleware('auth');
Route::post('/admin/books/editBook{id}', [ControllerEditBooks::class, 'editBook']) ->middleware('auth');

Route::get('/admin/books/createBook', [ControllerCreateBooks::class, 'createBookForm']) ->middleware('auth');
Route::post('/admin/books/createBook', [ControllerCreateBooks::class, 'createBook']) ->middleware('auth');



Route::get('/admin/authors', [ControllerAdminAuthors::class, 'show']) ->middleware('auth');

Route::get('/admin/authors/createAuthor', [ControllerCreateAuthors::class, 'createAuthorForm']) ->middleware('auth');
Route::post('/admin/authors/createAuthor', [ControllerCreateAuthors::class, 'createAuthor']) ->middleware('auth');

Route::get('/admin/authors/deleteAuthor{id}', [ControllerDeleteAuthors::class, 'deleteAuthor']) ->middleware('auth');

Route::get('/admin/authors/editAuthor{id}', [ControllerEditAuthors::class, 'editAuthorForm']) ->middleware('auth');
Route::post('/admin/authors/editAuthor{id}', [ControllerEditAuthors::class, 'editAuthor']) ->middleware('auth');
