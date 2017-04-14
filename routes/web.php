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

// Route::post();



Route::post('/api/products/create', 'ProductController@create');

// Routes Unity Post

Route::post ('/api/unity/create', 'UnityController@create');

Route::post ('/api/unity/update', 'UnityController@update');

// Routes Unity Get

Route::get ('/api/unity/getAll', 'UnityController@getAll');

Route::get ('/api/unity/getById/{id}', 'UnityController@getById');