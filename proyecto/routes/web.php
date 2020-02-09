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

Route::get('/', 'HomeController@getHome');

Route::post('catalog/create', 'CatalogController@create');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('reset', 'Auth\LoginController@passwordReset');

Route::get('login', function () {
    return view('auth.login');
});

Route::get('catalog', 'CatalogController@getIndex');

Route::get('catalog/show/{key}', 'CatalogController@getShow');

Route::get('/edit/catalog/show/{key}', 'CatalogController@getEdit');

Route::post('catalog/editar/{id}', 'CatalogController@PostEdit');

Route::post('catalog/rent/{id}', 'CatalogController@putRent');

Route::post('catalog/unrent/{id}', 'CatalogController@putReturn');

Route::get('catalog/create', 'CatalogController@getCreate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
