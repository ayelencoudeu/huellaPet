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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('modificarDatos','ModificarController@modificar')->name('modificarDatos');;

Route::get('/', 'testController@welcome')->name('home');

Route::get('/admin/products', 'ProductController@index'); // listado

Route::get('/admin/products/create', 'ProductController@create'); // crear

Route::post('/admin/products', 'ProductController@store'); // registrar

