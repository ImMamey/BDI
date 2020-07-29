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
    return view('index');
});

//Auth::routes(); 


Route::resource('/evaluaciones', 'EvaluacionesController');
Route::resource('/CrearContrato', 'CrearcontratoController');
Route::resource('/CrearFormulaEvaluacion', 'CrearFormulaEvaluacionControllr');
Route::get('/productores', 'ProductoresController@index');
Route::get('/proveedores', 'ProveedoresController@index');
Route::get('/home', 'HomeController@index')->name('home');
