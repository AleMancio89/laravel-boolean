<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dopo-il-corso', 'DopoController@index')->name('dopo-il-corso');

Route::get('/corso', 'CorsoController@index')->name('corso');

Route::get('/camp', 'CampController@index')->name('camp');

Route::get('/utenti', 'UtenteController@index')->name('utenti');

Route::get('/utenti/{id}', 'UtenteController@show')->name('utenti.show');

