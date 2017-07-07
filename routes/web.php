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
    return view('bienvenida');
});

Route::resource('/inicio', 'InicioController');
Route::resource('/productos', 'ProductoController');
Route::resource('/departamentos', 'DepartamentoController');
Route::resource('/empleados', 'EmpleadoController');

Auth::routes();
