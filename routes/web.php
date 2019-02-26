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

//Ruta está compuesta en 4 cosas
//1.- URL
//2.- Que controller y que funcion de ese controller responden a esa solicitud
//3.- Nombre de la ruta (opcional)
//4.- Metodo HTTP

Route::get('/', function () {
    
    return redirect()->route('dashboard');

});

Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
Route::resource('mascotas', 'MascotaController');
Route::get('/perfil', 'PerfilController@edit')->name('perfil.edit');
Route::resource('especies', 'EspecieController');
Auth::routes(['register' => false]);
