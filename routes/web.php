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
Route::resource('comentario','ComentarioController');



Route::get('mujeres','MenuController@Mujeres');
Route::get('Calzado_Mujer','MenuController@Calzado_Mujer');
Route::get('Accesorios_Mujer','MenuController@Accesorios_Mujer');
Route::get('Ropa_Mujer','MenuController@Ropa_Mujer');

Route::get('admin','FrontController@admin');
route::get('info','frontController@info');
route::get('quebuscamos','frontController@quebuscamos');
route::get('terminos','frontController@terminos');
route::get('historia','frontController@historia');
route::get('tienda','frontController@tienda');
route::get('vender','frontController@vender');
route::get('consignacion','frontController@consignacion');




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

Route::get('logout','LoginController@salir')->name('login.logout');

Route::get('aprobacion','ProductoController@aprobacion');


Route::get('viewaprobacion/{id}','ProductoController@viewaprobacion')->name('producto.viewaprobacion');
Route::get('verproductosusuario/{id}','MenuController@verproductosusuario')->name('verproductosusuario');

Route::get('aprobar/{id}','ProductoController@aprobar')->name('producto.aprobar');
Route::get('direccion/{id}','FrontController@direccion')->name('front.direccion');

Route::resource('login','LoginController');

Route::get('prueba', function() {
	dd(\Auth::user()->id);
});

