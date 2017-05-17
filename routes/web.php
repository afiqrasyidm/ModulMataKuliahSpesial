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
Route::get('/homepage/mahasiswa', ['as' => 'homepage/mahasiswa', 'uses' => 'MahasiswaController@mahasiswa_homepage']);
Route::get('/mahasiswa/pengajuan-permohonan-ta', ['as' => 'mahasiswa/pengajuan-permohonan-ta', 'uses' => 'MahasiswaController@pengajuan_permohonan_ta']);
Route::post('/mahasiswa/pengajuan-permohonan-ta', ['as' => 'mahasiswa/pengajuan-permohonan-ta-submit', 'uses' => 'MahasiswaController@pengajuan_permohonan_ta_submit']);
Route::get('/mahasiswa/pengajuan-permohonan-ta-ubah', ['as' => 'mahasiswa/pengajuan-permohonan-ta-ubah', 'uses' => 'MahasiswaController@pengajuan_permohonan_ta_ubah']);
Route::post('/mahasiswa/pengajuan-permohonan-ta-ubah', ['as' => 'mahasiswa/pengajuan-permohonan-ta-ubah', 'uses' => 'MahasiswaController@pengajuan_permohonan_ta_ubah_submit']);
Route::post('/mahasiswa/pengajuan-permohonan-ta-submit-komentar/', ['as' => 'mahasiswa/pengajuan-permohonan-ta-submit-komentar', 'uses' => 'MahasiswaController@pengajuan_permohonan_ta_submit_komentar']);
Route::get('mahasiswa/pengajuan-permohonan-ta-sukses', ['as' => '/mahasiswa/pengajuan-permohonan-ta-sukses', 'uses' => 'MahasiswaController@pengajuan_permohonan_ta_sukses']);
Route::get('mahasiswa/pengajuan-pembimbing-ta', ['as' => 'mahasiswa/pengajuan-pembimbing-ta', 'uses' => 'MahasiswaController@pengajuan_pembimbing_ta']);
Route::post('/mahasiswa/pengajuan-pembimbing-ta', ['as' => 'mahasiswa/pengajuan-pembimbing-ta', 'uses' => 'MahasiswaController@pengajuan_pembimbing_ta_submit']);
Route::post('/mahasiswa/jadwal-bimbingan', ['as' => 'mahasiswa/jadwal-bimbingan', 'uses' => 'MahasiswaController@jadwal_bimbingan_submit']);
Route::get('/mahasiswa/jadwal-bimbingan', ['as' => 'mahasiswa/jadwal-bimbingan', 'uses' => 'MahasiswaController@jadwal_bimbingan']);
Route::get('/mahasiswa/log-bimbingan', ['as' => 'mahasiswa/log-bimbingan', 'uses' => 'MahasiswaController@log_bimbingan']);
Route::post('/mahasiswa/log-bimbingan', ['as' => 'mahasiswa/log-bimbingan', 'uses' => 'MahasiswaController@log_bimbingan_submit']);
Route::get('/mahasiswa/pengumuman', ['as' => 'mahasiswa/pengumuman', 'uses' => 'MahasiswaController@pengumuman']);
Route::get('/homepage/staf', ['as' => 'homepage/staf', 'uses' => 'MainController@staf_homepage']);
Route::get('/staf/post-pengumuman', ['as' => 'staf/post-pengumuman', 'uses' => 'StafController@post_pengumuman']);
Route::get('/staf/verifikasi-permohonan-ta', ['as' => 'staf/verifikasi-permohonan-ta', 'uses' => 'StafController@verifikasi_permohonan_ta']);
Route::get('/staf/verifikasi-ta/{id_tugas_akhir}', ['as' => 'staf/verifikasi-ta/{id_tugas_akhir}', 'uses' => 'StafController@verifikasi_ta']);
Route::get('/homepage/dosen', ['as' => 'homepage/dosen', 'uses' => 'MainController@dosen_homepage']);
Route::get('/dosen/penguji/home', ['as' => 'dosen/penguji/home', 'uses' => 'DosenPengujiController@home_dosen_penguji']);
Route::get('/dosen/penguji/atur-jadwal-sidang', ['as' => 'dosen/penguji/atur-jadwal-sidang', 'uses' => 'DosenPengujiController@atur_jadwal_sidang_dosen_penguji']);
Route::get('/dosen/penguji/feedback-sidang', ['as' => 'dosen/penguji/feedback-sidang', 'uses' => 'DosenPengujiController@feedback_sidang_dosen_penguji']);
Route::get('/dosen/penguji/hasil-ta', ['as' => 'dosen/penguji/hasil-ta', 'uses' => 'DosenPengujiController@hasil_ta']);
Route::get('/dosen/penguji/feedback-sidang/mahasiswa', ['as' => 'dosen/penguji/feedback-sidang/mahasiswa', 'uses' => 'DosenPengujiController@feedback_sidang_mahasiswa_dosen_penguji']);
Route::get('/dosen/penguji/pengumuman', ['as' => 'dosen/penguji/pengumuman', 'uses' => 'DosenPengujiController@pengumuman']);
Route::get('/testStaf', 'StafController@cari_staf' );
Route::get('/homepage/industri', ['as' => 'homepage/industri', 'uses' => 'MainController@industri_homepage']);
Route::get('industri/pengumuman', ['as' => 'industri/pengumuman', 'uses' => 'IndustriController@pengumuman']);
Route::get('/dosen/PA/home', ['as' => 'dosen/PA/home', 'uses' => 'DosenPAController@homepage_dosen_PA']);
Route::get('/dosen/PA/verifikasi-permohonan-ta', ['as' => 'dosen/PA/verifikasi-permohonan-ta', 'uses' => 'DosenPAController@verifikasi_permohonan_ta']);
Route::get('/dosen/PA/detail-permohonan-ta/{id_tugas_akhir}', ['as' => 'dosen/PA/detail-permohonan-ta', 'uses' => 'DosenPAController@detail_permohonan_ta']);
Route::get('/staf/detail-permohonan-ta/{id_tugas_akhir}', ['as' => 'staf/detail-permohonan-ta', 'uses' => 'StafController@detail_permohonan_ta']);
Route::post('/dosen/PA/detail-permohonan-ta/{id_tugas_akhir}', ['as' => 'dosen/PA/detail-permohonan-ta', 'uses' => 'DosenPAController@detail_permohonan_ta_submit']);
Route::get('/dosen/PA/pengumuman', ['as' => 'dosen/PA/pengumuman', 'uses' => 'DosenPAController@pengumuman']);
Route::get('/dosen/pembimbing/home', ['as' => 'dosen/pembimbing/home', 'uses' => 'DosenPembimbingController@home_dosen_pembimbing']);
Route::get('/dosen/pembimbing/pengumuman', ['as' => 'dosen/pembimbing/pengumuman', 'uses' => 'DosenPembimbingController@pengumuman']);
//list topik
Route::get('/mahasiswa/pengajuan-topik', ['as' => 'mahasiswa/pengajuan-topik', 'uses' => 'MahasiswaController@pengajuan_topik']);
Route::get('/mahasiswa/pengajuan-topik-first', ['as' => '/mahasiswa/pengajuan-topik-first', 'uses' => 'MahasiswaController@pengajuan_topik_first']);
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
//UBAH PENGAJUAN TA
Route::get('mahasiswa/ubah-pengajuan-topik-ta/{id_topik}/{id_tugas_akhir}', ['as' => 'mahasiswa/ubah-pengajuan-topik-ta', 'uses' => 'MahasiswaController@ubah_pengajuan_topik_ta']);
//PENGAJUAN Sidang Topik MAHASISWA S2 S3
Route::get('mahasiswa/pengajuan-sidang-topik', ['as' => '/mahasiswa/pengajuan-sidang-topik', 'uses' => 'MahasiswaController@pengajuan_sidang_topik']);
Route::post('mahasiswa/pengajuan-sidang-topik', ['as' => 'mahasiswa/pengajuan-sidang-topik', 'uses' => 'MahasiswaController@pengajuan_sidang_topik_submit']);
//PENGAJUAN Sidang Topik Baru MHS S2 S3
Route::get('mahasiswa/pengajuan-sidang-topik-baru/{id_tugas_akhir}', ['as' => '/mahasiswa/pengajuan-sidang-topik-baru', 'uses' => 'MahasiswaController@pengajuan_sidang_topik_baru']);
//Tidak bisa sidang topik
Route::get('mahasiswa/failed-pengajuan-sidang-topik', ['as' => 'mahasiswa/failed-pengajuan-sidang-topik', 'uses' => 'MahasiswaController@failed_pengajuan_sidang_topik']);
//Mengambil topik dari industri dan dosen
Route::get('mahasiswa/pengajuan-topik-ta-dosen-industri/{id_topik}', ['as' => 'mahasiswa/pengajuan-topik-ta-dosen-industri', 'uses'=> 'MahasiswaController@pengajuan_topik_ta_dosen_industri']);
//detail topik TA
Route::get('mahasiswa/pengajuan-topik/detail/{id_topik}', ['as' => 'mahasiswa/pengajuan-topik/detail/', 'uses' => 'MahasiswaController@detail_topik_ta']);
Route::get('/forbidden_access', ['as' => '/forbidden_access', 'uses' => 'MainController@forbidden_access']);
Route::get('/page-not-found', ['as' => '/page-not-found', 'uses' => 'MainController@page_not_found']);
//detail pembimbing TA
Route::get('mahasiswa/pengajuan-pembimbing-ta/detail/{id_dosen}', ['as' => 'mahasiswa/pengajuan-pembimbing-ta/detail/', 'uses' => 'MahasiswaController@detail_dosen']);
Route::get('/forbidden_access', ['as' => '/forbidden_access', 'uses' => 'MainController@forbidden_access']);
Route::get('/page-not-found', ['as' => '/page-not-found', 'uses' => 'MainController@page_not_found']);
//ajukan pembimbing
Route::get('mahasiswa/pengajuan-dosbing/{id_dosen}', ['as' => 'mahasiswa/pengajuan-dosbing', 'uses'=> 'MahasiswaController@pengajuan_dosenpembimbing']);
Route::get('dosen/pembimbing/verifikasi-bimbingan', ['as' => 'dosen/pembimbing/verifikasi-bimbingan', 'uses'=> 'DosenPembimbingController@verifikasi_bimbingan']);
Route::get('dosen/pembimbing/verifikasi-bimbingan/set/{status}/{id_dpt}', ['as' => 'dosen/pembimbing/verifikasi-bimbingan/set/', 'uses'=> 'DosenPembimbingController@set_verifikasi_bimbingan']);
Route::get('dosen/pembimbing/atur-jadwal-bimbingan', ['as' => 'dosen/pembimbing/atur-jadwal-bimbingan', 'uses'=> 'DosenPembimbingController@atur_jadwal_bimbingan']);
Route::post('dosen/pembimbing/atur-jadwal-bimbingan', ['as' => 'dosen/pembimbing/atur-jadwal-bimbingan', 'uses'=> 'DosenPembimbingController@atur_jadwal_bimbingan_submit']);
//verifikasi log bimbingan Dosen Pembimbing
Route::get('dosen/pembimbing/verifikasi-log-bimbingan', ['as' => 'dosen/pembimbing/verifikasi-log-bimbingan', 'uses'=> 'DosenPembimbingController@verifikasi_log_bimbingan']);
Route::get('dosen/pembimbing/verifikasi-log-bimbingan-mahasiswa/{id_tugas_akhir}', ['as' => 'dosen/pembimbing/verifikasi-log-bimbingan/{id_tugas_akhir}', 'uses'=> 'DosenPembimbingController@verifikasi_log_bimbingan_mahasiswa']);
Route::get('dosen/pembimbing/verifikasi-log-bimbingan-mahasiswa-detail/{id_log_bimbingan}', ['as' => 'dosen/pembimbing/verifikasi-log-bimbingan-mahasiswa-detail/{id_log_bimbingan}', 'uses'=> 'DosenPembimbingController@verifikasi_log_bimbingan_mahasiswa_detail']);
Route::get('dosen/pembimbing/setujui-log/{id_log_bimbingan}', ['as' => 'dosen/pembimbing/setujui-log/{id_log_bimbingan}', 'uses'=> 'DosenPembimbingController@setujui_log']);
//homepage managerial
Route::get('/homepage/managerial', ['as' => 'homepage/managerial', 'uses' => 'ManagerialController@managerial_homepage']);
//upload hasil ta
Route::get('/mahasiswa/upload-hasil-ta', ['as' => 'mahasiswa/upload-hasil-ta', 'uses' => 'MahasiswaController@upload_hasil_ta']);
Route::post('/mahasiswa/upload-hasil-ta', ['as' => 'mahasiswa/upload-hasil-ta', 'uses' => 'MahasiswaController@upload_hasil_taPost']);
//upload dokumen gagal
Route::get('mahasiswa/failed-upload-hasil-ta', ['as' => 'mahasiswa/failed-upload-hasil-ta', 'uses' => 'MahasiswaController@failed_upload_hasil_ta']);
//ubah dokumen ta
Route::get('mahasiswa/ubah-dokumen-ta/{id_tugas_akhir}', ['as' => 'mahasiswa/ubah-dokumen-ta', 'uses' => 'MahasiswaController@ubah_dokumen_ta']);
//ubah status siap sidang
Route::get('/dosen/pembimbing/ubah-status-sidang', ['as' => 'dosen/pembimbing/ubah-status-sidang', 'uses' => 'DosenPembimbingController@ubah_status_sidang']);
Route::get('/dosen/pembimbing/status-sidang/{id_tugas_akhir}', ['as' => 'dosen/pembimbing/status-sidang', 'uses' => 'DosenPembimbingController@ubah_status_sidangPost']);
//verifikasi pengambilan topik industri
Route::get('/industri/verifikasi-pengambilan-topik-ta', ['as' => 'industri/verifikasi-pengambilan-topik-ta', 'uses' => 'IndustriController@verifikasi_pengambilan_topik_ta']);
//detail topik industri
Route::get('/industri/pengajuan-topik/detail/{id_topik}', ['as' => 'industri/pengajuan-topik/detail/', 'uses' => 'IndustriController@detail_topik_ta']);
//Disetujui dan tidak disetuk topik oleh industri
Route::get('/industri/setuju-topik/{id_tugas_akhir}/{is_disetujui}/{id_topik}', ['as' => 'industri/setuju-topik/{id_tugas_akhir}/{is_disetujui}/{id_topik}', 'uses' => 'IndustriController@setuju_topik']);
//industri stop pengajuan topik
Route::get('/industri/hentikan-topik/{id_topik}', ['as' => '/industri/hentikan-topik/{id_topik}', 'uses' => 'IndustriController@hentikan_topik']);
//verifikasi pengambilan topik dosen
Route::get('/dosen/verifikasi-pengambilan-topik-ta', ['as' => 'dosen/verifikasi-pengambilan-topik-ta', 'uses' => 'DosenController@verifikasi_pengambilan_topik_ta']);
//detail topik dosen
Route::get('/dosen/pengajuan-topik/detail/{id_topik}', ['as' => 'dosen/pengajuan-topik/detail/', 'uses' => 'DosenController@detail_topik_ta']);
//Disetujui dan tidak disetuk topik oleh dosen
Route::get('/dosen/setuju-topik/{id_tugas_akhir}/{is_disetujui}/{id_topik}', ['as' => 'dosen/setuju-topik/{id_tugas_akhir}/{is_disetujui}/{id_topik}', 'uses' => 'DosenController@setuju_topik']);
//dosen stop pengajuan topik
Route::get('/dosen/hentikan-topik/{id_topik}', ['as' => '/dosen/hentikan-topik/{id_topik}', 'uses' => 'DosenController@hentikan_topik']);
//industri lihat hasil ta
Route::get('industri/lihat-hasil-ta', ['as' => 'industri/lihat-hasil-ta', 'uses' => 'IndustriController@lihat_hasil_ta']);
//dosen lihat hasil ta
Route::get('dosen/lihat-hasil-ta', ['as' => 'dosen/lihat-hasil-ta', 'uses' => 'DosenController@lihat_hasil_ta']);
//list pengajuan sidang (Verifikasi oleh SBA)
Route::get('staf/verifikasi-permohonan-sidang', ['as' => 'staf/verifikasi-permohonan-sidang', 'uses' => 'StafController@verifikasi_permohonan_sidang']);
//Form Verifikasi sidang SBA
Route::get('staf/form-verifikasi-sidang-ta', ['as' => 'staf/form-verifikasi-sidang-ta', 'uses' => 'StafController@form_verifikasi_sidang_ta']);
//Tidak Verifikasi sidang SBA
Route::get('staf/failed-verifikasi-permohonan-sidang', ['as' => 'staf/failed-verifikasi-permohonan-sidang', 'uses' => 'StafController@failed_verifikasi_permohonan_sidang']);
//Verifikasi sidang SBA
Route::get('/staf/permohonan-sidang/{id_pengajuan}', ['as' => 'staf/permohonan-sidang/', 'uses' => 'StafController@verifikasi_permohonan_sidangPost']);
Route::post('/staf/permohonan-sidang/{id_pengajuan}', ['as' => 'staf/permohonan-sidang', 'uses' => 'StafController@verifikasi_permohonan_sidang_submit']);
//Ubah sidang
Route::get('staf/ubah-pengajuan-sidang/{id_tugas_akhir}', ['as' => 'staf/ubah-pengajuan-sidang', 'uses' => 'StafController@ubah_pengajuan_sidang']);
Route::post('staf/ubah-pengajuan-sidang/{id_tugas_akhir}', ['as' => 'staf/ubah-pengajuan-sidang', 'uses' => 'StafController@verifikasi_permohonan_sidang_submit']);
//list jadwal sidang Dosbem
Route::get('/dosen/pembimbing/list-jadwal-sidang', ['as' => 'dosen/pembimbing/list-jadwal-sidang', 'uses' => 'DosenPembimbingController@list_jadwal_sidang']);
//list pengajuan sidang topik (Verifikasi oleh SBA)
Route::get('staf/verifikasi-permohonan-sidang-topik', ['as' => 'staf/verifikasi-permohonan-sidang-topik', 'uses' => 'StafController@verifikasi_permohonan_sidang_topik']);
//Form Verifikasi sidang SBA
Route::get('staf/form-verifikasi-sidang-topik', ['as' => 'staf/form-verifikasi-sidang-topik', 'uses' => 'StafController@form_verifikasi_sidang_topik']);
//Verifikasi sidang topik SBA
Route::get('/staf/permohonan-sidang-topik/{id_pengajuan}', ['as' => 'staf/permohonan-sidang-topik/', 'uses' => 'StafController@verifikasi_permohonan_sidangtopikPost']);
Route::post('/staf/permohonan-sidang-topik/{id_pengajuan}', ['as' => 'staf/permohonan-sidang-topik', 'uses' => 'StafController@verifikasi_permohonan_sidang_topik_submit']);
//Ubah sidang topik
Route::get('staf/ubah-pengajuan-sidang-topik/{id_tugas_akhir}', ['as' => 'staf/ubah-pengajuan-sidang-topik', 'uses' => 'StafController@ubah_pengajuan_sidang_topik']);
Route::post('staf/ubah-pengajuan-sidang-topik/{id_tugas_akhir}', ['as' => 'staf/ubah-pengajuan-sidang-topik', 'uses' => 'StafController@verifikasi_permohonan_sidang_topik_submit']);
//ubah status selesai sidang Dosbem
Route::get('/dosen/pembimbing/sidang-selesai/{id_tugas_akhir}', ['as' => '/dosen/pembimbing/sidang-selesai/', 'uses' => 'DosenPembimbingController@sidang_selesai']);
//list jadwal sidang Dosen Penguji
Route::get('/dosen/penguji/list-jadwal-sidang', ['as' => 'dosen/penguji/list-jadwal-sidang', 'uses' => 'DosenPengujiController@list_jadwal_sidang']);
//dokumen TA dosbem
Route::get('/dosen/pembimbing/dokumen-ta', ['as' => 'dosen/pembimbing/dokumen-ta', 'uses' => 'DosenPembimbingController@dokumen_ta']);
//dokumen TA dosenPenguji
Route::get('/dosen/penguji/dokumen-ta', ['as' => 'dosen/penguji/dokumen-ta', 'uses' => 'DosenPengujiController@dokumen_ta']);
//detail sidang dosbem
Route::get('/dosen/pembimbing/detail-sidang/{id_tugas_akhir}', ['as' => '/dosen/pembimbing/detail-sidang/', 'uses' => 'DosenPembimbingController@detail_sidang']);
Route::post('/dosen/pembimbing/detail-sidang/{id_tugas_akhir}', ['as' => '/dosen/pembimbing/detail-sidang', 'uses' => 'DosenPembimbingController@detail_sidang_submit']);
//list jadwal sidang Dosbem
Route::get('/dosen/pembimbing/list-jadwal-sidang-topik', ['as' => 'dosen/pembimbing/list-jadwal-sidang-topik', 'uses' => 'DosenPembimbingController@list_jadwal_sidang_topik']);
// detail sidang dosbem
Route::get('/dosen/pembimbing/detail-sidang-topik/{id_tugas_akhir}', ['as' => '/dosen/pembimbing/detail-sidang-topik/', 'uses' => 'DosenPembimbingController@detail_sidang_topik']);
Route::post('/dosen/pembimbing/detail-sidang-topik/{id_tugas_akhir}', ['as' => '/dosen/pembimbing/detail-sidang-topik', 'uses' => 'DosenPembimbingController@detail_sidang_topik_submit']);
//ubah status siap sidang
Route::get('/dosen/pembimbing/ubah-status-sidang-topik', ['as' => 'dosen/pembimbing/ubah-status-sidang-topik', 'uses' => 'DosenPembimbingController@ubah_status_sidang_topik']);
Route::get('/dosen/pembimbing/status-sidang-topik/{id_tugas_akhir}/{id_mahasiswa}', ['as' => 'dosen/pembimbing/status-sidang-topik/{id_tugas_akhir}/{id_mahasiswa}', 'uses' => 'DosenPembimbingController@ubah_status_sidang_topikPost']);
// Route::get('/dosen/pembimbing/status-sidang-topik/{id_tugas_akhirid_mahasiswa}', ['as' => 'dosen/pembimbing/status-sidang-topik', 'uses' => 'DosenPembimbingController@ubah_status_sidang_topikPost']);
//upload hasil ta final
Route::get('/mahasiswa/upload-hasil-ta-final', ['as' => 'mahasiswa/upload-hasil-ta-final', 'uses' => 'MahasiswaController@upload_hasil_ta_final']);
Route::post('/mahasiswa/upload-hasil-ta-final', ['as' => 'mahasiswa/upload-hasil-ta-final', 'uses' => 'MahasiswaController@upload_hasil_ta_finalPost']);
//upload dokumen gagal
Route::get('mahasiswa/failed-upload-hasil-ta-final', ['as' => 'mahasiswa/failed-upload-hasil-ta-final', 'uses' => 'MahasiswaController@failed_upload_hasil_ta_final']);
//ubah dokumen ta
Route::get('mahasiswa/ubah-dokumen-ta-final/{id_tugas_akhir}', ['as' => 'mahasiswa/ubah-dokumen-ta-final', 'uses' => 'MahasiswaController@ubah_dokumen_ta_final']);
