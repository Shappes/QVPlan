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

Route::get('home', 'HomeController@index')->name('home');
Route::get('vrequests', 'VRequestController@index')->name('vrequests');
Route::get('cpanel', 'VRequestController@show')->name('cpanel');
Route::get('myrequests', 'VRequestController@show2')->name('myrequests');
Route::get('myrequests/{id}', 'VRequestController@show3')->name('view');
Route::get('myrequests/{id}/edit', 'VRequestController@edit')->name('edit');
Route::post('myrequests/{id}/update', 'VRequestController@update')->name('update');
Route::post('vrequests', 'VRequestController@store');
