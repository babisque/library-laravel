<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); // home

Route::get('/livros', 'App\Http\Controllers\BookController@index')
    ->name('listar_livros');
Route::get('/livros/adicionar', 'App\Http\Controllers\BookController@create')
    ->name('adicionar_livro');
Route::post('/livros/adicionar', 'App\Http\Controllers\BookController@store');
Route::delete('/livros/{id}', 'App\Http\Controllers\BookController@destroy');
