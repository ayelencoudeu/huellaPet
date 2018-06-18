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
Route::get('/', 'testController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('modificarDatos','ModificarController@modificar')->name('modificarDatos');
Route::get('/products/{id}', 'ProductController@show'); //vista de producto

Route::post('/cart', 'CartDetailController@store' );


Route::middleware(['auth','admin'])->group(function () {


		Route::get('/admin/products', 'Admin\ProductController@index'); // listado
		Route::get('/admin/products/create', 'Admin\ProductController@create'); // crear
		Route::post('/admin/products', 'Admin\ProductController@store'); // registrar

		Route::get('/admin/products/{id}/edit', 'Admin\ProductController@edit'); // formulario de Edicion
		Route::post('/admin/products/{id}/edit', 'Admin\ProductController@update'); // actualizar
		Route::post('/admin/products/{id}/delete', 'Admin\ProductController@destroy'); // form eliminar

		Route::get('/admin/products/{id}/images', 'Admin\ImageController@index'); // form eliminar
		Route::post('/admin/products/{id}/images', 'Admin\ImageController@store'); // registrar
		Route::delete('/admin/products/{id}/images', 'Admin\ImageController@destroy'); // imagen eliminar

		Route::get('/admin/products/{id}/images/select/{image}', 'Admin\ImageController@select');
});

