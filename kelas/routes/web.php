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

Route::get('/', 'SiteController@index');
Route::get('/about','SiteController@about');
Route::get('/sites/register','SiteController@register');
Route::post('/postregister','SiteController@postregister');

Route::get('/hello', function() {
	return "Hello World" ;
});

Route::get('/auths/login','AuthController@login')->name('login');
Route::get('/logout','AuthController@logout');
Route::post('/postlogin','AuthController@postlogin');

Route::group(['middleware' => ['auth', 'checkRole:admin,mahasiswa']], function(){

Route::get('/kelas','KelasController@index')->middleware('auth');
Route::post('/kelas/create','KelasController@create');
Route::get('/kelas/{id_kelas}/edit','KelasController@edit');
Route::post('/kelas/{id_kelas}/update','KelasController@update');
Route::get('/kelas/{id_kelas}/delete','KelasController@delete');
Route::get('/kelas/export','KelasController@export');
Route::get('/kelas/exportpdf','KelasController@exportpdf');
Route::get('/kelas/upload', 'KelasController@upload');
Route::post('/kelas/upload/proses', 'KelasController@proses_upload');
});

Route::get('/mahasiswa', 'MahasiswaController@index')->middleware('auth');
Route::post('/mahasiswa/create','MahasiswaController@create');
Route::get('/mahasiswa/{npk}/edit','MahasiswaController@edit');
Route::post('/mahasiswa/{npk}/update','MahasiswaController@update');
Route::get('/mahasiswa/{npk}/delete','MahasiswaController@delete');
route::get('mahasiswa/export','MahasiswaController@export');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group(['middleware' => ['auth','checkRole:admin,mahasiswa']], function(){
Route::get('/dashboard', 'DashboardController@index');
});