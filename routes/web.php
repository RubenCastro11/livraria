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
});
Route::get('/livro','App\Http\Controllers\LivrosController@index')
    ->name('livro.index');

Route::get('/genero','App\Http\Controllers\GenerosController@index')
    ->name('genero.index');

Route::get('/editora','App\Http\Controllers\EditorasController@index')
    ->name('editora.index');

Route::get('/autor','App\Http\Controllers\AutoresController@index')
    ->name('autor
    	.index');

Route::get('/livro/{id}/show','App\Http\Controllers\LivrosController@show')
    ->name('livro.show');

Route::get('/genero/{idg}/show','App\Http\Controllers\GenerosController@show')
    ->name('genero.show');

Route::get('/editora/{ide}/show','App\Http\Controllers\EditorasController@show')
    ->name('editora.show');

Route::get('/autor/{ida}/show','App\Http\Controllers\AutoresController@show')
    ->name('autor.show');
