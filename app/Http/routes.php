<?php
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/import/by_air/del/{id}','import_by_air_controller@destroy_get');
Route::resource('/import/by_air', 'import_by_air_controller');

Route::get('/import/by_sea/del/{id}','import_sea_controller@destroy_get');
Route::resource('/import/by_sea', 'import_sea_controller');

Route::get('/import/sk_sea/del/{id}','sk_sea_controler@destroy_get');
Route::resource('/import/sk_sea', 'sk_sea_controler');

Route::get('/dropzone', function()
{
  return view('page.dropzone');
});

Route::resource('/todos','TodoController');
Route::get('/todo-list','TodoController@getTodos');
