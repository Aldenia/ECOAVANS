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

use Illuminate\Routing\Console\MiddlewareMakeCommand;

Route::get('/', function () {
    return view('indexInformation');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/voluntary','VoluntaryController@index')->name('Voluntario');


//Route::post('/', );
//Route::get('/', funtion(){
  //  return view('layout');
//});
Route::resource('/galeria','InformationController');
Route::resource('/crear','InformationController@create');
// Rutas CRUD
 
/* Crear */
Route::get('admin/information/create', 'InformationController@create')->name('admin/information/create');
Route::put('admin/information/store', 'InformationController@store')->name('admin/information/store');
 
/* Leer */
Route::get('/information', 'InformationController@index')->name('/information');
 
/* Actualizar */
Route::get('admin/information/edit/{id}', 'InformationController@edit')->name('admin/information/edit');
Route::put('admin/information/update/{id}', 'InformationController@update')->name('admin/information/update');
 
/* Eliminar */
Route::put('admin/information/delete/{id}', 'InformationController@delete')->name('admin/information/delete');
 
/* Eliminar imagen de un registro */
Route::get('admin/information/deleteimage/{id}{bid}', 'InformationController@deleteimage')->name('admin/information/deleteimage');
 
/* Vista para los detalles de un registro */
Route::get('admin/information/details/{id}', ['as' => 'admin/information/details', 'uses' => 'InformationController@details']);




