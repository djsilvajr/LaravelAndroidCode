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
Route::get('/', 'ProdutoController@index');
Route::get('/home', 'ProdutoController@index');
Route::get('/novo', 'ProdutoController@novo');
Route::post('/novo','ProdutoController@adicionar');
Route::get('/editar/{id}', 'ProdutoController@editar');
Route::post('/editar/{id}','ProdutoController@update');
Route::get('/excluir/{id}','ProdutoController@excluir');

 
