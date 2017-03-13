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
Route::get('/', ['as' => '/', 'uses' =>'MainController@index']);

Route::get('/delay', ['as' => '/delay', 'uses' =>'MainController@delay']);

Route::get('/login-sso', ['as' => 'login-sso', 'uses' => 'MainController@login_sso']);

Route::get('/login', ['as' => 'login', 'uses' => 'MainController@login']);

Route::post('/login', ['as' => 'login-submit', 'uses' => 'MainController@login_submit']);

Route::get('/registrasi', ['as' => 'registrasi', 'uses' => 'MainController@registrasi']);

Route::post('/registrasi', ['as' => 'registrasi-submit', 'uses' => 'MainController@registrasi_submit']);

Route::get('/logout-sso', ['as' => 'logout-sso', 'uses' => 'MainController@logout_sso']);

Route::get('/homepage/mahasiswa', ['as' => 'homepage/mahasiswa', 'uses' => 'MainController@mahasiswa_homepage']);

Route::get('/mahasiswa/pengajuan-topik', ['as' => 'mahasiswa/pengajuan-topik', 'uses' => 'MahasiswaController@pengajuan_topik']);

Route::get('/mahasiswa/pengajuan-permohonan-ta', ['as' => 'mahasiswa/pengajuan-permohonan-ta', 'uses' => 'MahasiswaController@pengajuan_permohonan_ta']);

Route::get('/mahasiswa/pengajuan-pembimbing-ta', ['as' => 'mahasiswa/pengajuan-pembimbing-ta', 'uses' => 'MahasiswaController@pengajuan_pembimbing_ta']);

Route::get('/homepage/staf', ['as' => 'homepage/staf', 'uses' => 'MainController@staf_homepage']);

Route::get('/homepage/dosen', ['as' => 'homepage/dosen', 'uses' => 'MainController@dosen_homepage']);

Route::get('/testStaf', 'StafController@cari_staf' );

//test untuk view FTBS-S2-S3

Route::get('/login-sso-FTBS-S2-S3', ['as' => 'login-sso-FTBS-S2-S3', 'uses' => 'MainController@login_sso_FTBS_S2_S3']);

Route::get('/homepage/mahasiswa_FTBS_S2_S3', ['as' => 'homepage/mahasiswa_FTBS_S2_S3', 'uses' => 'MainController@homepage_mahasiswa_FTBS_S2_S3']);

