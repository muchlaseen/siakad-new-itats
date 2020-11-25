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

Route::get('/', function () {
    return view('awal');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/masuk', 'HomeController@masuk')->name('masuk');

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/admin', 'User\AdminController@index')->name('admin');
    Route::get('/createDosen','User\DosenController@create')->name('dosen.create');
    Route::get('/dosen','User\DosenController@index')->name('indexDosen');
    Route::get('/mahasiswa', 'User\MahasiswaController@index');
    Route::post('/mahasiswa/create', 'User\MahasiswaController@create');
    Route::get('/mahasiswa/{npm}/edit', 'User\MahasiswaController@edit');
    Route::post('/mahasiswa/{npm}/update', 'User\MahasiswaController@update');
    Route::post('/createDosen','User\DosenController@store')->name('createDosenStore');
    Route::get('/editDosen/{nim}/edit','User\DosenController@edit')->name('editDosen');
    Route::put('/editDosen/{nim}/edit','User\DosenController@update')->name('updateDosen');
});


