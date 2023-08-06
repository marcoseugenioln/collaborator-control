<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('unidades');
});

Route::get('unidades/create', 'UnidadeController@create'); 

Route::get('unidades/{id}', 'UnidadeController@show');

Route::post('unidades', 'UnidadeController@store');

Route::get('colaboradores/create', 'ColaboradorController@create'); 

Route::get('colaboradores/{id}', 'ColaboradorController@show');

Route::post('colaboradores', 'ColaboradorController@store');

Route::get('desempenho/create', 'DesempenhoController@create'); 

Route::get('desempenho/{id}', 'DesempenhoController@show'); 

Route::post('desempenho', 'DesempenhoController@store');



