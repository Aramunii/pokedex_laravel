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

Route::get('/',             'mainController@home')->name('home');

Route::get('/login',        'mainController@showLogin')->name('showLogin');
Route::post('/login',       'mainController@postLogin')->name('postLogin');

Route::get('/cadastrar',    'mainController@showRegister')->name('showRegister');
Route::post('/cadastrar',   'mainController@postRegister')->name('postRegister');

Route::get('/logout',       'mainController@postLogout')->name('logout');

Route::get('/mapa',         'mapController@showMap')->name('showMap');


Route::get('/bolsa',        'bagController@showBag')->name('showBag');

Route::post('/bolsa/capturar',     'bagController@catchPoke');


Route::get('/inicio', 'startController@showIndex')->name('start');

Route::post('/inicio/escolher' , 'startController@choosePoke')->name('choose');



