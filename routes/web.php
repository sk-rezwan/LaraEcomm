<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontController@index');
Route::get('/shirts', 'FrontController@shirts');
Route::get('/shirt', 'FrontController@shirt');
Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('Home');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product', 'ProductsController');
    Route::resource('category', 'CategoriesController');
});