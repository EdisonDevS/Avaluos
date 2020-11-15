<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();


/**
 * GUPO DE RUTAS DE ACCESO GENERAL PERO SOLO PARA USUARIOS AUTENTICADOS
 * Namespace: se usa el directorio 'User' en los controladores
 * Middleware: 'suscripcion:demo' se valida la subscripción del usuario
 * Name: 'admin.' se usa como prefijo en las rutas en el grupo, ej. 'admin.index' llama a la ruta que dentro del middleware tiene el name 'index'
 */
Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

});


/**
 * GUPO DE RUTAS PARA EL USUARIO AUTENTICADO
 * Namespace: se usa el directorio 'User' en los controladores
 * Middleware: 'suscripcion:demo' se valida la subscripción del usuario
 * Name: 'admin.' se usa como prefijo en las rutas en el grupo, ej. 'admin.index' llama a la ruta que dentro del middleware tiene el name 'index'
 */
Route::namespace('User')->middleware(['auth', 'suscripcion:demo'])->prefix('user')->name('user.')->group(function () {

    Route::get('avaluos', 'AvaluoController@showMisAvaluos')->name('misavaluos');
    Route::get('editar_avaluo/{id}', 'AvaluoController@showEditarAvaluo')->name('editar_avaluo');
    Route::get('borradores', 'AvaluoController@showBorradores')->name('borradores');
    Route::get('papelera', 'AvaluoController@showPapelera')->name('papelera');


    Route::post('crear_avaluo', 'AvaluoController@crearAvaluo')->name('crear_avaluo');

});
