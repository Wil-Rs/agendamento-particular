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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get( '/agendamentos', 'AgendamentoController@index' );
Route::get( '/agendamentos/novo', 'AgendamentoController@create' );
Route::post( '/agendamentos/create', 'AgendamentoController@store' );
Route::get( '/agendamentos/{id}/edit', 'AgendamentoController@edit' );
Route::post( 'agendamentos/update/{id}', 'AgendamentoController@update' );
Route::delete( 'agendamentos/delete/{id}', 'AgendamentoController@destroy' );


Route::get( '/pacientes', 'PacienteController@pacientes' );
Route::get( '/pacientes/novo', 'PacienteController@new' );
Route::post( '/pacientes/create', 'PacienteController@create' );
Route::get( '/pacientes/{id}/editar', 'PacienteController@edit' );
Route::post( '/pacientes/update/{id}', 'PacienteController@update' );
Route::delete( '/pacientes/deletar/{id}', 'PacienteController@delete' );

Route::get( '/medicos', 'MedicoController@index' );
Route::get( '/medicos/novo', 'MedicoController@create' );
Route::post( '/medicos/create', 'MedicoController@store' );
Route::get( '/medicos/{id}/editar', 'MedicoController@edit' );
Route::post( 'medicos/update/{id}', 'MedicoController@update' );
Route::delete( '/medicos/deletar/{id}', 'MedicoController@destroy' );