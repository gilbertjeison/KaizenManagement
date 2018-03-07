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

Route::get('/loco', function () {
    return view('welcome');
});

Route::get('', function (){
    return 'Papi para programar le toca duro!';
});

Route::get('usuarios/{id}', 'UserController@usuarioDetalle')-> where('id','[0-9]+');

Route::get('usuarios', 'UserController@index');

Route::get('usuarios/nuevo', 'UserController@nuevoUsuario');

Route::get('saludo/{nombre}/{nickname?}', 'WelcomeUserController');