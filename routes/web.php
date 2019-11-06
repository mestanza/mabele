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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/facturacion', 'StepSizeController@index')->name('facturacion');

Route::get('/agua', 'StepSizeController@index')->name('agua');

Route::get('/luz', 'StepSizeController@index')->name('luz');

Route::get('/gas', 'StepSizeController@index')->name('gas');
