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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pueblos','PueblosController@index');
Route::resource('pueblos','PueblosController');

Route::get('/restaurantes','RestaurantesController@index');
Route::get('/restaurante/get','RestaurantesController@show');
Route::resource('restaurantes','RestaurantesController');


Route::get('/platillos','PlatillosController@index');
Route::get('/platillos/get','PlatillosController@show');
Route::resource('platillos','PlatillosController');


/*-----------API DEL MOMO RUTAS-----------*/

Route::get('/api/pueblos','API\PueblosController@imagenes');


Route::get('/api/restaurantes','API\RestaurantesController@restaurantes');
Route::get('/api/restaurantes/modulo','API\RestaurantesController@restaurantesM');

Route::get('/api/platillos','API\PlatillosController@platillos');
Route::get('/api/platillos/des','API\PlatillosController@descripcion');
Route::get('/api/platillos/video','API\PlatillosController@videos');
