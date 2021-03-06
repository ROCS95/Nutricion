<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'Paciente Controller@index');

//Route::controller("cliente","ClienteController");

Route::group(["middleware"=>"auth"], function (){
    Route::resource('pacienteCRUD', 'PacienteController');
    Route::resource('planCRUD', 'PlanController');

    Route::resource('asignar', 'PlanPacientesController',['only'=>["create", "store", "index"]]);
    Route::resource('listaAlimento', 'AlimentoController');


});