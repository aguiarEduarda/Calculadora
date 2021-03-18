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

Route::get ('/soma', '\App\Http\Controllers\CalculadoraController@soma');
Route::get ('/soma', '\App\Http\Controllers\CalculadoraController@soma')->name('carregarSoma');

Route::post ('/calcular-soma', '\App\Http\Controllers\CalculadoraController@calcularSoma')->name('somar');

//subtração

Route::get ('/subtracao', '\App\Http\Controllers\CalculadoraController@subtracao');
Route::get ('/subtracao', '\App\Http\Controllers\CalculadoraController@subtracao')->name('carregarSubtracao');

Route::post ('/calcular-subtracao', '\App\Http\Controllers\CalculadoraController@calcularSubtracao')->name('subtrair');

//Multiplicação

Route::get ('/multiplicacao', '\App\Http\Controllers\CalculadoraController@multiplicacao');
Route::get ('/multiplicacao', '\App\Http\Controllers\CalculadoraController@multiplicacao')->name('carregarMultiplicacao');

Route::post ('/calcular-multiplicacao', '\App\Http\Controllers\CalculadoraController@calcularMultiplicacao')->name('multiplicar');

//subtração

Route::get ('/divisao', '\App\Http\Controllers\CalculadoraController@divisao');
Route::get ('/divisao', '\App\Http\Controllers\CalculadoraController@divisao')->name('carregarDivisao');

Route::post ('/calcular-divisao', '\App\Http\Controllers\CalculadoraController@calcularDivisao')->name('dividir');
