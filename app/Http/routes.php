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

Route::get('/paneladmin', function () {
    return view('base.paneladmin');
});

Route::get('/login', function () {
    return view('login');
});

Route::group(['prefix' => 'especies'], function() {
    Route::get('/', 'ControladorEspecies@index');
    Route::get('agregar', 'ControladorEspecies@create')->name('agregar-especie');
    Route::get('editar/{id}', 'ControladorEspecies@edit')->name('editar');
    Route::post('guardar', 'ControladorEspecies@store')->name('guardar');
});




