<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dosen;

class DosenPengujiController extends Controller
{
    function home_dosen_penguji() {
        session_start();
        return view("dosen/DosenPenguji/home_dosen_penguji");
    }
    
    function atur_jadwal_sidang_dosen_penguji() {
    	session_start();
    	return view("dosen/DosenPenguji/atur_jadwal_sidang_dosen_penguji");
    }

    function feedback_sidang_dosen_penguji() {
    	session_start();
    	return view("dosen/DosenPenguji/feedback_sidang_dosen_penguji");
    }

    function feedback_sidang_mahasiswa_dosen_penguji() {
    	session_start();
    	return view("dosen/DosenPenguji/feedback_sidang_mahasiswa_dosen_penguji");
    }

	function dokumen_ta(){
			session_start();
			
			$id_dosen= Dosen::where('id_user', $_SESSION["id_user"])->get()->first()->id_dosen;
		
			$tugas_akhir = DB::table('tugas_akhir')
				->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
				->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
				->leftJoin('Pengajuan_sidang', 'Pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
				->leftJoin('Hasil_ta', 'Hasil_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
				->leftJoin('dosen_penguji_ta', 'dosen_penguji_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
			
				->where([
				 ['dosen_penguji_ta.id_dosen', '=',$id_dosen],
				 ['tugas_akhir.status_tugas_akhir', '>=',5],
				])
				->get();
		
		
		return view("dosen/DosenPenguji/dokumen_ta" , array('tugas_akhir' => $tugas_akhir) );
		
		
		
		
	}
    function pengumuman() {
        session_start();
        return view("dosen/DosenPenguji/pengumuman");
    }
	function list_jadwal_sidang(){
		 session_start();
		 
		 		$id_dosen= Dosen::where('id_user', $_SESSION["id_user"])->get()->first()->id_dosen;
			//return $id_dosen;
			
			
		$ta = DB::table('pengajuan_sidang')
		
		->leftJoin('hasil_ta', 'tugas_akhir.id_tugas_akhir', '=', 'hasil_ta.id_tugas_akhir')
        ->leftJoin('dosen_penguji_ta', 'tugas_akhir.id_tugas_akhir', '=', 'dosen_penguji_ta.id_tugas_akhir')
        ->leftJoin('pengajuan_sidang', 'tugas_akhir.id_tugas_akhir', '=', 'pengajuan_sidang.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'tugas_akhir.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
	  
		->where('dosen_penguji_ta.id_dosen','=', $id_dosen)
		->where('pengajuan_sidang.status','=', 2)
        ->where('tugas_akhir.status_tugas_akhir','!=', 12)
		
      
		->get();

      

		return view("dosen/DosenPenguji/list_jadwal_sidang", array('ta' => $ta));

  
		 
	}


}
