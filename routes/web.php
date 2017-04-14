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

Route::get('/api/category/getAll', 'CategoryController@getAll');


Route::post('/api/stock/create', 'EstoqueController@create');

Route::post('/api/situation/create', 'SituacaoController@create');

Route::get('/api/situation/getAll','SituacaoController@getAll');

Route::get('/api/situation/getById/{id}','SituacaoController@getById');

Route::put('/api/situation/update/{id}','SituacaoController@update');

Route::delete('/api/situation/delete/{id}','SituacaoCOntroller@delete');

Route::get('/api/category/getById/{id}','CategoryController@getById');

Route::put('/api/category/update/{id}','CategoryController@update');

Route::delete('/api/category/delete/{id}','CategoryController@delete');

