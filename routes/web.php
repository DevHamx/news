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

Auth::routes();

Route::get('/', 'NewsController@index')->name('home');
Route::post('addComents', 'NewsController@addComents')->name('addComents');
Route::get('/profil/{userEmail}', 'NewsController@userProfile')->name('userProfile');
Route::get('/create', 'NewsController@create')->name('create');
Route::post('/create', 'NewsController@store')->name('store');
Route::post('rateNews', 'NewsController@rateNews')->name('rateNews');


