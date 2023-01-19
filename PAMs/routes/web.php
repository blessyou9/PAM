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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('categoria/{categoria?}', function($categoria=1){
	return "Viendo categoría $categoria";
});

Route::get('colaboradores/{nombre}', function($nombre){
	return "Mostrando el colaborador $nombre";
});

Route::get('tienda/productos/{id}', function($id_producto){
	return "Mostrando el producto $id_producto de la tienda";
});

