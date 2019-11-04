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

Route::get('/agua', function () {
    return view('agua');
})->name('agua');

Route::get('/luz', function () {
    return view('luz');
})->name('luz');

Route::get('/gas', function () {
    return view('gas');
})->name('gas');
