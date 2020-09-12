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

Route::get('/', function () {
    return view('indexInformation');
});

Route::get('/admin', function () {
    return view('indexAdmin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/voluntariado','VoluntaryController');

Route::resource('/ejemplo', 'ExaVolController');

//SI FUNCIONA
Route::get('hola', function(){
    return view('layout');
});

route::view('/app', 'layouts.app');