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
    return view('welcome');
});

Auth::routes();
Route::get('/index', '\App\Http\Controllers\Auth\RegisterController@showRegistrationForm');

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/import', 'ImportController@import');
Route::get('importExport', 'ImportController@importExport');
Route::get('downloadExcel/{type}', 'ImportController@downloadExcel');
Route::post('importExcel', 'ImportController@importExcel');
