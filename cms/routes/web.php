<?php

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
    return view('plantilla');
});

Route::view('/', 'paginas.blog');
Route::view('/administradores', 'paginas.administradores');
Route::view('/categorias', 'paginas.categorias');
Route::view('/articulos', 'paginas.articulos');
Route::view('/opiniones', 'paginas.opiniones');
Route::view('/banner', 'paginas.banner');
Route::view('/anuncios', 'paginas.anuncios');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
