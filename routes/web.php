<?php

use Illuminate\Support\Facades\Route;

//Routes list
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

/***
 * VISTAS DE ADMINISTRADOR
 */
Route::resource('/usuario',UserController::class)->names('user')->parameters(['usuario' => 'user']);

/**
 *CURSOS ROUTES 
 */
Route::resource('cursos',CursoController::class)->names('curso');
/**
 * PROFESOR
 */

Route::get('/docente', 'DocenteController@index')->name('docente.index');


/***
 * NOTA
 */
Route::get('/notas/{curso}', 'NotaController@index')->name('nota.index');
Route::get('/notas/edit/{nota}', 'NotaController@edit')->name('nota.edit');
Route::put('/notas/{nota}/{curso}', 'NotaController@update')->name('nota.update');

/***
 * 
 * ESTUDIANTE
 */

Route::get('/estudiante', 'EstudianteController@index')->name('estudiante.index');
Route::post('/estudiante', 'EstudianteController@store')->name('estudiante.store');
Route::get('/estudiante/mis-notas', 'EstudianteController@notas')->name('estudiante.show');
