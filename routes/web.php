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

Route::get('/', function () {
    return view('mahasiswanew');
});

Route::get('/mahasiswanew', 'MahasiswanewController@mahasiswanew')->middleware('auth');

Route::get('/mahasiswanew/cari', 'MahasiswanewController@search');

Route::get('mahasiswanew/formulirmahasiswanew', 'MahasiswanewController@formulirmahasiswanew')->middleware('auth');

Route::post('/mahasiswanew/simpanmahasiswanew','MahasiswanewController@simpanmahasiswanew');

Route::get('/mahasiswanew/formulirupdate/{id}', 'MahasiswanewController@formulirupdate');

Route::put('/mahasiswanew/editmahasiswanew/{$id}', 'MahasiswanewController@editmahasiswanew');

Route::get('/mahasiswanew/hapusmahasiswanew/{id}', 'MahasiswanewController@hapusmahasiswanew');

Route::get('/user','AuthController@user')->middleware('auth');

Route::get('/user/formuliruser','AuthController@formuliruser')->middleware('auth');

Route::post('/user/simpanuser','AuthController@simpanuser');

Route::get('/user/formuliredituser/{id}','AuthController@formuliredituser');

Route::put('/user/edituser/{id}','AuthController@edituser');

Route::get('/user/hapususer/{id}','AuthController@hapususer');

Route::get('/login', 'AuthController@login');

Route::post('/user/ceklogin','AuthController@ceklogin');

Route::get('/logout', 'AuthController@logout')->middleware('auth');

