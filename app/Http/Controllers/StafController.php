<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staf;
use App\Dosen;
use App\Pengajuan_sidang;
use SSO\SSO;

class StafController extends Controller
{
	
	 var $stafs;
	 
	 
  //    public function __construct() {
  //       $this->stafs = Staf::all(array('nama'));
  //   }
	
	
	
	 // public function cari_staf() {
		
		// if(SSO::authenticate())	{
		// 	$user = SSO::getUser();
		// 	$_SESSION["user_login"] = $user;

		// 	$staf = Staf::find(4);
		// 	return view('staf/homepage_staf', array('staf' => $staf));
				
		// }
	
  //   }
	 function verifikasi_permohonan_sidang() {
      session_start();


      $ta = DB::table('pengajuan_sidang')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang.id_mahasiswa')
        ->where('tugas_akhir.status_tugas_akhir','=', '11')
        ->get();

      

    return view("staf/verifikasi_permohonan_sidang", array('ta' => $ta));

    }

	function verifikasi_permohonan_sidangPost($id_pengajuan)
	{ 
	  session_start();


	    DB::table('pengajuan_sidang')
	            ->where('id_pengajuan', $id_pengajuan)
	            ->update(['id_maker' =>  $_SESSION["id_user"],'status' => 2]);
	   
	    return redirect()->route('staf/verifikasi-permohonan-sidang');
	    
	  
	}

    function post_pengumuman() {
    	session_start();
    	return view("staf/post_pengumuman");
    }
	
	function verifikasi_permohonan_ta() {
        session_start();

        $tugas_akhir = DB::table('tugas_akhir')
                ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('prodi', 'prodi.id_prodi', '=', 'mahasiswa.id_prodi')
                ->leftJoin('fakultas', 'fakultas.id_fakultas', '=', 'prodi.id_fakultas')
                ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
                ->where('tugas_akhir.status_tugas_akhir','>=','7')
                ->get();

        //return $tugas_akhir;

        return view("staf/verifikasi_permohonan_ta", ['tugas_akhir' => $tugas_akhir]);
    }
	
    function verifikasi_ta($id_tugas_akhir){
    	session_start();

    	DB::table('tugas_akhir')
            ->where('id_tugas_akhir', $id_tugas_akhir)
            ->update(['status_tugas_akhir' => 8]);
	
		$tugas_akhir = DB::table('tugas_akhir')
                ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('prodi', 'prodi.id_prodi', '=', 'mahasiswa.id_prodi')
                ->leftJoin('fakultas', 'fakultas.id_fakultas', '=', 'prodi.id_fakultas')
                ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
                ->where('tugas_akhir.status_tugas_akhir','>=','7')
                ->orderBy('tugas_akhir.status_tugas_akhir', 'ASC')
                ->get();

        //return $tugas_akhir;

        return view("staf/verifikasi_permohonan_ta", ['tugas_akhir' => $tugas_akhir]);
    }
}
