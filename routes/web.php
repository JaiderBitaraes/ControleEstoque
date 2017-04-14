<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/api/category/create', 'CategoryController@create');

Route::get('/api/category/getAll', 'CategoryController@getAll');


Route::post('/api/stock/create', 'EstoqueController@create');

// Route s Situacão;
Route::post('/api/situation/create', 'SituacaoController@create');

Route::get('/api/situation/getAll','SituacaoController@getAll');

Route::get('/api/situation/getById/{id}','SituacaoController@getById');

Route::put('/api/situation/update/{id}','SituacaoController@update');

Route::delete('/api/situation/delete/{id}','SituacaoCOntroller@delete');

Route::get('/api/category/getById/{id}','CategoryController@getById');

Route::put('/api/category/update/{id}','CategoryController@update');

Route::delete('/api/category/delete/{id}','CategoryController@delete');

Route::get('/situation', function () {
    return view('situation');
});

// Route::post();

Route::post('/api/products/create', 'ProductController@create');

// Routes Unity Post

Route::post('/api/unity/create', 'UnityController@create');

// Routes Unity Get

Route::get('/api/unity/getAll', 'UnityController@getAll');

Route::get('/api/unity/getById/{id}', 'UnityController@getById');

// Routes Unity Put

Route::put('/api/unity/update/{id}', 'UnityController@update');
// Routes Unity Delete

Route::delete('/api/unity/delete/{id}', 'UnityController@delete');

