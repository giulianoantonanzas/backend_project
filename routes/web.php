<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.home');
})->name("home");


//enruto el controlador de cliente
//este controlador contiene toda la logica de 'cliente', la visualisacion y la logica de la base de datos.
//revisar que dentro del controlador, redireccionos a los view. Esto se cumplira segun si genero un GET, POST o PUT
Route::resource('cliente', 'ClienteController');
Route::resource('producto', 'ProductoController');
Route::resource('venta', 'VentaController');


//route::group sirve para hacer un grupo de rutas de algun controlador
//en este caso lo aplicare para hacer buscadores.
Route::group(['prefix' => 'cliente'], function () {
    Route::post('search','ClienteController@search')->name('cliente.search');
});
Route::group(['prefix' => 'producto'], function () {
    Route::post('search','ProductoController@search')->name('producto.search');
});
Route::group(['prefix' => 'venta'], function () {
    Route::post('search','VentaController@search')->name('venta.search');
});