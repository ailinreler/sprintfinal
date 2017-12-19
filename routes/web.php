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

Route::get('/', 'indexController@index');

Route::get('/productos', 'indexController@goToProductos');

Route::get('/faq', 'indexController@goToFaq');

Route::get('/contacto', 'indexController@goToContacto');

Route::get('/login', 'indexController@goToLogin')->middleware('guest')->name('login');

Route::get('/register', 'indexController@goToRegister')->middleware('guest');

Route::get('/addproduct', 'ProductController@index')->middleware('typeOfUser:2');

Route::post('/addproduct', 'ProductController@store')->middleware('typeOfUser:2');

Route::get('/editproduct', 'ProductController@editproduct')->middleware('typeOfUser:2');

Route::patch('/updateproduct/{producto}', 'ProductController@update')->middleware('typeOfUser:2');

Route::get('/deleteproduct', 'ProductController@delete')->middleware('typeOfUser:2');

Route::delete('/deleteproduct', 'ProductController@destroy')->middleware('typeOfUser:2');

Route::delete('/deleteproduct/{producto}', 'ProductController@destroy')->middleware('typeOfUser:2');

Route::get('/addcategory', 'CategoryController@index')->middleware('typeOfUser:2');

Route::post('/addcategory', 'CategoryController@store')->middleware('typeOfUser:2');

Route::get('/editcategory', 'CategoryController@edit')->middleware('typeOfUser:2');

Route::patch('/editcategory/{categoria}', 'CategoryController@update')->middleware('typeOfUser:2');

Route::get('/removeCategory', 'CategoryController@removeCategory')->middleware('typeOfUser:2');

Route::delete('removeCategory/{categoria}', 'CategoryController@destroy')->middleware('typeOfUser:2');

Route::post('/buscadorproductos', 'ProductController@search');

Route::get('/carrito', 'ProductController@cart')->middleware('auth');

Route::get('/agregarCarrito/{id}', 'ProductController@agregarCarrito')->middleware('auth');

Route::get('/eliminarcarrito/{producto}', 'ProductController@eliminarcarrito')->middleware('auth');

Route::get('/addbrand', 'BrandController@index')->middleware('typeOfUser:2');

Route::post('/addbrand', 'BrandController@store')->middleware('typeOfUser:2');

Route::get('/editbrand', 'BrandController@edit')->middleware('typeOfUser:2');

Route::patch('/editbrand/{marca}', 'BrandController@update')->middleware('typeOfUser:2');

Route::get('/deletebrand', 'BrandController@delete')->middleware('typeOfUser:2');

Route::delete('/deletebrand/{marca}', 'BrandController@destroy')->middleware('typeOfUser:2');

Route::get('/addtag', 'TagController@index')->middleware('typeOfUser:2');

Route::post('/addtag', 'TagController@store')->middleware('typeOfUser:2');

Route::get('/edittag', 'TagController@edit')->middleware('typeOfUser:2');

Route::patch('/edittag/{tagid}', 'TagController@update')->middleware('typeOfUser:2');

Route::get('/deletetag', 'TagController@delete')->middleware('typeOfUser:2');

Route::delete('deletetag/{tagid}', 'TagController@destroy')->middleware('typeOfUser:2');

Route::get('/edituser', 'UserController@edit')->middleware('typeOfUser:2');

Route::patch('/edituser/{usuario}', 'UserController@update')->middleware('typeOfUser:2');

Route::get('/deleteuser', 'UserController@delete')->middleware('typeOfUser:2');

Route::delete('/deleteuser', 'UserController@destroy')->middleware('typeOfUser:2');

Route::post('/buscar', 'ProductController@buscar');
