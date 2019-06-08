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
Route::resource('menu','MenuController');
Route::resource('front','FrontController');
Route::resource('pruebaModificada','ProductoController');
Route::resource('otraPrueba','ProductoController');



Route::get('mujeres','MenuController@Mujeres');
Route::get('Calzado_Mujer','MenuController@Calzado_Mujer');
Route::get('Accesorios_Mujer','MenuController@Accesorios_Mujer');
Route::get('Ropa_Mujer','MenuController@Ropa_Mujer');



Route::get('hombres','MenuController@Hombres');
Route::get('Calzado_Hombre','MenuController@Calzado_Hombre');
Route::get('Accesorios_Hombre','MenuController@Accesorios_Hombre');
Route::get('Ropa_Hombre','MenuController@Ropa_Hombre');



Route::get('niños','MenuController@Niños');

Route::get('Calzado_Niño','MenuController@Calzado_Niño');
Route::get('Accesorios_Niño','MenuController@Accesorios_Niño');
Route::get('Ropa_Niño','MenuController@Ropa_Niño');

Route::get('/','FrontController@index');
//Route::get('admin','FrontController@admin');
Route::resource('producto','ProductoController');
Route::resource('usuario','UsuarioController');
Route::resource('login','LoginController');

Route::get('prueba', function() {
	dd(\Auth::user()->id);
});

