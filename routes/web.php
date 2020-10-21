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

Route::get('estudiante','estudianteController@index')->name('estudiante.index');
Route::get('estudiante/crear_nuevo','EstudianteController@create')->name('estudiante.crear_nuevo');
Route::post('estudiante/guardar','EstudianteController@store')->name('estudiante.guardar');

