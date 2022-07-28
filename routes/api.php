<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerJSON;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/v1/books/list', [ControllerJSON::class, 'getBooks']);
Route::get('/v1/books/by-{id}', [ControllerJSON::class, 'getBook']);
Route::put('/v1/books/update{id}', [ControllerJSON::class, 'updateBook']);
Route::delete('/v1/books/{id}', [ControllerJSON::class, 'deleteBook']);
