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
    Route::get('/admin/dosen','User\DosenController@index')->name('dosen.index');
    Route::post('/admin/dosen/create','User\DosenController@store')->name('dosen.store');
    Route::get('/admin/dosen/create','User\DosenController@create')->name('dosen.create');
    Route::get('/admin/dosen/{nim}/delete','User\DosenController@destroy')->name('dosen.delete');
    Route::get('/admin/dosen/{nim}/edit','User\DosenController@edit')->name('dosen.edit');
    Route::put('/admin/dosen/{nim}/update','User\DosenController@update')->name('dosen.update');

    Route::get('/admin/mahasiswa','User\MahasiswaController@index')->name('mahasiswa.index');

    Route::get('/mahasiswa', 'User\MahasiswaController@index');
    Route::post('/mahasiswa/create', 'User\MahasiswaController@create');
    Route::get('/mahasiswa/{npm}/edit', 'User\MahasiswaController@edit');
    Route::post('/mahasiswa/{npm}/update', 'User\MahasiswaController@update')->name('mahasiswa.update');
    Route::get('/mahasiswa/{npm}/delete', 'User\MahasiswaController@destroy')->name('mahasiswa.delete');

    Route::get('/admin/akun','User\AkunController@index')->name('akun.index');
    Route::get('/admin/akun/create','User\AkunController@create')->name('akun.create');
    Route::get('/admin/akun/{id_akun}/edit','User\AkunController@edit')->name('akun.edit');
    Route::put('/admin/akun/{id_akun}/update','User\AkunController@update')->name('akun.update');
    Route::get('/admin/akun/{id_akun}/delete','User\AkunController@destroy')->name('akun.delete');

    Route::get('/admin/fakultas','Akademik\FakultasController@index')->name('fakultas.index');
    Route::get('/admin/fakultas/create','Akademik\FakultasController@create')->name('fakultas.create');
    Route::post('/admin/fakultas/create','Akademik\FakultasController@store')->name('fakultas.store');
    Route::get('/admin/fakultas/{id_fakultas}/edit','Akademik\FakultasController@edit')->name('fakultas.edit');
    Route::put('/admin/fakultas/{id_fakultas}/update','Akademik\FakultasController@update')->name('fakultas.update');
    Route::get('/admin/fakultas/{id_fakultas}/delete','Akademik\FakultasController@destroy')->name('fakultas.delete');

    Route::get('/admin/jurusan','Akademik\JurusanController@index')->name('jurusan.index');
    Route::get('/admin/jurusan/create','Akademik\JurusanController@create')->name('jurusan.create');
    Route::post('/admin/jurusan/create','Akademik\JurusanController@store')->name('jurusan.store');
    Route::get('/admin/jurusan/{id_jurusan}/delete','Akademik\JurusanController@destroy')->name('jurusan.delete');
    Route::get('/admin/jurusan/{id_jurusan}/edit','Akademik\JurusanController@edit')->name('jurusan.edit');
    Route::put('/admin/jurusan/{id_jurusan}/update','Akademik\JurusanController@update')->name('jurusan.update');
    

    Route::get('/admin/matkul','Akademik\MatkulController@index')->name('matkul.index');
    Route::post('/admin/matkul/create','Akademik\MatkulController@store')->name('matkul.store');
    Route::get('/admin/matkul/{kode_mk}/edit','Akademik\MatkulController@edit')->name('matkul.edit');
    Route::put('/admin/matkul/{kode_mk}/update','Akademik\MatkulController@update')->name('matkul.update');
    Route::get('/admin/matkul/{kode_mk}/delete','Akademik\MatkulController@destroy')->name('matkul.delete');
});

// Route::get('/jurusan', 'Akademik\JurusanController@create');

Route::get('/mahasiswa', function () {
    return view('Frontend/Mahasiswa/home');
});

Route::get('/mahasiswa/krs', function () {
    return view ('Frontend/Mahasiswa/KRS');
});

Route::get('/coba', function () {
    return view ('Frontend/Mahasiswa/coba');
});