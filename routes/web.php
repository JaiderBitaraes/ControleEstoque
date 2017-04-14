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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/api/category/create', 'CategoryController@create');

Route::get('/api/category/get', 'CategoryController@get');

Route::post('/api/stock/create', 'EstoqueController@create');

Route::post('/api/situation/create', 'SituacaoController@create');
