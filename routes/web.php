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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/layout', 'testeController@index')->name('admin.layout');
Route::get('/pacientes_registados', 'admin_controllers\homeController@index')->name('paciente.registado');
Route::get('/Dados_Medicação/show/{id}', 'admin_controllers\MedicacaoController@show')->name('dados.medicacao');

Route::get('/Dados_identificação/show/{id}', 'admin_controllers\identificacaoController@show')->name('dados.identificacao');