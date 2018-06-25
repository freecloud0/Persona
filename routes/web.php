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
    return view('formulario/inicio');
});
Route::get('create', function () {
    return view('formulario/configuracion/create');
});
Route::get('test', function () {
    return view('welcome');
});
Route::get('/departamento','DepartamentoController@index');
Route::get('/create','DepartamentoController@create');


