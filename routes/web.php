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

Route::get('/staf/post-pengumuman', ['as' => 'staf/post-pengumuman', 'uses' => 'StafController@post_pengumuman']);

Route::get('/staf/verifikasi-permohonan-ta', ['as' => 'staf/verifikasi-permohonan-ta', 'uses' => 'StafController@verifikasi_permohonan_ta']);

Route::get('/homepage/dosen', ['as' => 'homepage/dosen', 'uses' => 'MainController@dosen_homepage']);

Route::get('/dosen/pilih-role', ['as' => 'dosen/pilih-role', 'uses' => 'DosenController@pilih_role']);

Route::get('/dosen/atur-jadwal-sidang', ['as' => 'dosen/atur-jadwal-sidang', 'uses' => 'DosenController@atur_jadwal_sidang']);

Route::get('/dosen/feedback-sidang', ['as' => 'dosen/feedback-sidang', 'uses' => 'DosenController@feedback_sidang']);

Route::get('/dosen/feedback-sidang/mahasiswa', ['as' => 'dosen/feedback-sidang/mahasiswa', 'uses' => 'DosenController@feedback_sidang_mahasiswa']);

Route::get('/testStaf', 'StafController@cari_staf' );

Route::get('/homepage/industri', ['as' => 'homepage/industri', 'uses' => 'MainController@industri_homepage']);

Route::get('/industri/pengajuan-topik-ta', ['as' => 'industri/pengajuan-topik-ta', 'uses' => 'IndustriController@pengajuan_topik_ta']);

Route::get('industri/lihat-hasil-ta', ['as' => 'industri/lihat-hasil-ta', 'uses' => 'IndustriController@lihat_hasil_ta']);

