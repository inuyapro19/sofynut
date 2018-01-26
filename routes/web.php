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

Route::get('email',function(){
	return new App\mail\SendMail('pedro','araya','955226632','pedroaraya@fizz.cl','este mensaje se genero automaticamente');
});

Route::get('/','PrincipalController@index')->name('inicio');
Route::get('/quienes_somos','PrincipalController@quienes_somos')->name('nosostros');


Route::get('/producto_single/{slug}','PrincipalController@producto_singles')->name('producto_single');


Route::get('/contacto','PrincipalController@contacto')->name('form_contacto');

Route::post('enviar_formulario','PrincipalController@enviar_formulario')->name('envio_form');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('productos', 'ProductoController');

Route::resource('sliders', 'SliderController');

Route::resource('informacions', 'InformacionController');