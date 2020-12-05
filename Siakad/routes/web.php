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
    Route::get('/admin', 'User\AdminController@index')->name('admin.index');
    Route::get('/dosen/create','User\DosenController@create')->name('dosen.create');
    Route::get('/dosen','User\DosenController@index')->name('indexDosen');
    Route::post('/dosen/create','User\DosenController@store')->name('createDosenStore');
    Route::delete('/dosen/delete','User\AdminController@destroy')->name('deleteDosen');
    #irul
//    Route::get('/editDosen/{nim}/edit','User\DosenController@edit')->name('editDosen');
    #ilham
    Route::get('dosen/{nim}/edit','User\DosenController@edit')->name('editDosen');
    Route::put('/dosen/{nim}/edit','User\DosenController@update')->name('updateDosen');

    Route::get('/mahasiswa', 'User\MahasiswaController@index');
    Route::post('/mahasiswa/create', 'User\MahasiswaController@create');
    Route::get('/mahasiswa/{npm}/edit', 'User\MahasiswaController@edit');
    Route::post('/mahasiswa/{npm}/update', 'User\MahasiswaController@update');
    Route::get('/mahasiswa/{npm}/delete', 'User\MahasiswaController@destroy');


});

Route::get('/jurusan', 'Akademik\JurusanController@create');

