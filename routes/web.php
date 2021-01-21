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
});


//enruto el controlador de cliente
//este controlador contiene toda la logica de 'cliente', la visualisacion y la logica de la base de datos.
//revisar que dentro del controlador, redireccionos a los view. Esto se cumplira segun si genero un GET, POST o PUT
Route::resource('Cliente', 'ClienteController');

Route::resource('Producto', 'ProductoController');
Route::resource('Venta', 'VentaController');