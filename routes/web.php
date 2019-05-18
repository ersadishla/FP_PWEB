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

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/siswa/showsch/{id}', 'SiswaController@showsch');

Route::post('/siswa/editsch/{id}', 'SiswaController@editsch');

Route::get('/siswa/permanen/{id}', 'SiswaController@permanen');

Route::get('/siswa/pdf/{id}', 'SiswaController@pdfDownload');

Route::get('/siswa/adminadmin', 'SiswaController@admin');

Route::resource('siswa', 'SiswaController');
