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

Route::get('/admin/user/roles',['Middleware'=>['role','auth', 'web'],  function () {

    return 'Middleware role';
    
}]);

Route::get('/admin', 'AdminController@index'); 
