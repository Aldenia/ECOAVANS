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

//SI FUNCIONA
Route::get('hola', function(){
    return view('layout');
});

route::view('/app', 'layouts.app');

Route::resource ('/voluntariado', 'Voluntary.index');

