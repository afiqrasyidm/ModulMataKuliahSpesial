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

Route::post('/mahasiswa/pengajuan-permohonan-ta', ['as' => 'mahasiswa/pengajuan-permohonan-ta-submit', 'uses' => 'MahasiswaController@pengajuan_permohonan_ta_submit']);

Route::get('mahasiswa/pengajuan-permohonan-ta-sukses', ['as' => '/mahasiswa/pengajuan-permohonan-ta-sukses', 'uses' => 'MahasiswaController@pengajuan_permohonan_ta_sukses']);

Route::get('/mahasiswa/pengajuan-pembimbing-ta', ['as' => 'mahasiswa/pengajuan-pembimbing-ta', 'uses' => 'MahasiswaController@pengajuan_pembimbing_ta']);

Route::get('/mahasiswa/pengumuman', ['as' => 'mahasiswa/pengumuman', 'uses' => 'MahasiswaController@pengumuman']);

Route::get('/homepage/staf', ['as' => 'homepage/staf', 'uses' => 'MainController@staf_homepage']);

Route::get('/staf/post-pengumuman', ['as' => 'staf/post-pengumuman', 'uses' => 'StafController@post_pengumuman']);

Route::get('/staf/verifikasi-permohonan-ta', ['as' => 'staf/verifikasi-permohonan-ta', 'uses' => 'StafController@verifikasi_permohonan_ta']);

Route::get('/homepage/dosen', ['as' => 'homepage/dosen', 'uses' => 'MainController@dosen_homepage']);

Route::get('/dosen/penguji/home', ['as' => 'dosen/penguji/home', 'uses' => 'DosenPengujiController@home_dosen_penguji']);

Route::get('/dosen/penguji/atur-jadwal-sidang', ['as' => 'dosen/penguji/atur-jadwal-sidang', 'uses' => 'DosenPengujiController@atur_jadwal_sidang_dosen_penguji']);

Route::get('/dosen/penguji/feedback-sidang', ['as' => 'dosen/penguji/feedback-sidang', 'uses' => 'DosenPengujiController@feedback_sidang_dosen_penguji']);

Route::get('/dosen/penguji/hasil-ta', ['as' => 'dosen/penguji/hasil-ta', 'uses' => 'DosenPengujiController@hasil_ta']);

Route::get('/dosen/penguji/feedback-sidang/mahasiswa', ['as' => 'dosen/penguji/feedback-sidang/mahasiswa', 'uses' => 'DosenPengujiController@feedback_sidang_mahasiswa_dosen_penguji']);

Route::get('/dosen/penguji/pengumuman', ['as' => 'dosen/penguji/pengumuman', 'uses' => 'DosenPengujiController@pengumuman']);

Route::get('/testStaf', 'StafController@cari_staf' );

Route::get('/homepage/industri', ['as' => 'homepage/industri', 'uses' => 'MainController@industri_homepage']);



Route::get('industri/lihat-hasil-ta', ['as' => 'industri/lihat-hasil-ta', 'uses' => 'IndustriController@lihat_hasil_ta']);


Route::get('industri/pengumuman', ['as' => 'industri/pengumuman', 'uses' => 'IndustriController@pengumuman']);

Route::get('/dosen/PA/home', ['as' => 'dosen/PA/home', 'uses' => 'DosenPAController@homepage_dosen_PA']);

Route::get('/dosen/PA/pengumuman', ['as' => 'dosen/PA/pengumuman', 'uses' => 'DosenPAController@pengumuman']);

Route::get('/dosen/pembimbing/home', ['as' => 'dosen/pembimbing/home', 'uses' => 'DosenPembimbingController@home_dosen_pembimbing']);

Route::get('/dosen/pembimbing/pengumuman', ['as' => 'dosen/pembimbing/pengumuman', 'uses' => 'DosenPembimbingController@pengumuman']);



//PENGAJUAN topik INDUSTRI

Route::get('industri/pengajuan-topik-ta', ['as' => 'industri/pengajuan-topik-ta', 'uses' => 'IndustriController@pengajuan_topik_ta']);
Route::post('industri/pengajuan-topik-ta', ['as' => 'industri/pengajuan-topik-ta', 'uses' => 'IndustriController@pengajuan_topik_ta_submit']);
Route::get('pengajuan_topik/berhasil_industri', ['as' => 'pengajuan_topik/berhasil_industri', 'uses' => 'IndustriController@berhasil_industri']);


//PENGAJUAN topik  DOSEN
Route::get('dosen/pengajuan-topik-ta', ['as' => 'dosen/pengajuan-topik-ta', 'uses' => 'DosenController@pengajuan_topik_ta']);
Route::post('dosen/pengajuan-topik-ta', ['as' => 'dosen/pengajuan-topik-ta', 'uses' => 'DosenController@pengajuan_topik_ta_submit']);

//PENGAJUAN Topik MAHASISWA

Route::get('mahasiswa/pengajuan-topik-ta', ['as' => 'mahasiswa/pengajuan-topik-ta', 'uses' => 'MahasiswaController@pengajuan_topik_ta']);
Route::post('mahasiswa/pengajuan-topik-ta', ['as' => 'mahasiswa/pengajuan-topik-ta', 'uses' => 'MahasiswaController@pengajuan_topik_ta_submit']);

//PENGAJUAN Sidang MAHASISWA
Route::get('mahasiswa/pengajuan-sidang-ta', ['as' => 'mahasiswa/pengajuan-sidang-ta', 'uses' => 'MahasiswaController@pengajuan_sidang_ta']);
Route::post('mahasiswa/pengajuan-sidang-ta', ['as' => 'mahasiswa/pengajuan-sidang-ta', 'uses' => 'MahasiswaController@pengajuan_sidang_ta_submit']);

//Tidak bisa sidang
Route::get('mahasiswa/failed-pengajuan-sidang-ta', ['as' => 'mahasiswa/failed-pengajuan-sidang-ta', 'uses' => 'MahasiswaController@failed_pengajuan_sidang_ta']);

//Mengambil topik dari industri dan dosen
Route::get('mahasiswa/pengajuan-topik-ta-dosen-industri/{id_topik}', ['as' => 'mahasiswa/pengajuan-topik-ta-dosen-industri', 'uses'=> 'MahasiswaController@pengajuan_topik_ta_dosen_industri']);


//UBAH PENGAJUAN TA

Route::get('mahasiswa/ubah-pengajuan-topik-ta/{id_topik}/{id_tugas_akhir}', ['as' => 'mahasiswa/ubah-pengajuan-topik-ta', 'uses' => 'MahasiswaController@ubah_pengajuan_topik_ta']);


//detail topik TA


Route::get('/mahasiswa/pengajuan-topik/detail/{id_topik}', ['as' => '/mahasiswa/pengajuan-topik/detail/', 'uses' => 'MahasiswaController@detail_topik_ta']);


Route::get('/forbidden_access', ['as' => '/forbidden_access', 'uses' => 'MainController@forbidden_access']);

Route::get('/page-not-found', ['as' => '/page-not-found', 'uses' => 'MainController@page_not_found']);

 
//upload hasil ta
Route::get('/mahasiswa/upload-hasil-ta', ['as' => 'mahasiswa/upload-hasil-ta', 'uses' => 'MahasiswaController@upload_hasil_ta']);
Route::post('/mahasiswa/upload-hasil-ta', ['as' => 'mahasiswa/upload-hasil-ta', 'uses' => 'MahasiswaController@upload_hasil_taPost']);
//ubah dokumen ta
Route::get('mahasiswa/ubah-dokumen-ta/{id_tugas_akhir}', ['as' => 'mahasiswa/ubah-dokumen-ta', 'uses' => 'MahasiswaController@ubah_dokumen_ta']);
//ubah status siap sidang
Route::get('/dosen/pembimbing/ubah-status-sidang', ['as' => 'dosen/pembimbing/ubah-status-sidang', 'uses' => 'DosenPembimbingController@ubah_status_sidang']);

