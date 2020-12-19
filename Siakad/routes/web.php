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
    Route::get('/dosen','User\DosenController@index')->name('dosen.index');
    Route::post('/dosen/create','User\DosenController@store')->name('dosen.store');
    Route::get('/dosen/create','User\DosenController@create')->name('dosen.create');
    Route::get('/dosen/{nim}/delete','User\DosenController@destroy')->name('dosen.delete');
    Route::get('/dosen/{nim}/edit','User\DosenController@edit')->name('dosen.edit');
    Route::put('/dosen/{nim}/update','User\DosenController@update')->name('dosen.update');

    Route::get('/mahasiswa', 'User\MahasiswaController@index');
    Route::post('/mahasiswa/create', 'User\MahasiswaController@create');
    Route::get('/mahasiswa/{npm}/edit', 'User\MahasiswaController@edit');
    Route::post('/mahasiswa/{npm}/update', 'User\MahasiswaController@update');
    Route::get('/mahasiswa/{npm}/delete', 'User\MahasiswaController@destroy');

    Route::get('/fakultas','Akademik\FakultasController@index')->name('fakultas.index');
    Route::get('/fakultas/create','Akademik\FakultasController@create')->name('fakultas.create');
    Route::post('/fakultas/create','Akademik\FakultasController@store')->name('fakultas.store');
    Route::get('/fakultas/{id_fakultas}/edit','Akademik\FakultasController@edit')->name('fakultas.edit');
    Route::put('/fakultas/{id_fakultas}/update','Akademik\FakultasController@update')->name('fakultas.update');
    Route::get('/fakultas/{id_fakultas}/delete','Akademik\FakultasController@destroy')->name('fakultas.delete');
});

Route::get('/jurusan', 'Akademik\JurusanController@create');

Route::get('/mahasiswa', function () {
    return view('Frontend/Mahasiswa/home');
});

Route::get('/mahasiswa/krs', function () {
    return view ('Frontend/Mahasiswa/KRS');
});

Route::get('/coba', function () {
    return view ('Frontend/Mahasiswa/coba');
});