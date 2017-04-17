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

   function hasil_ta() {
        session_start();
        return view("dosen/DosenPenguji/hasil_ta");
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
        ->leftJoin('dosen_penguji_ta', 'pengajuan_sidang.id_tugas_akhir', '=', 'dosen_penguji_ta.id_tugas_akhir')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'tugas_akhir.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
	    ->leftJoin('hasil_ta', 'hasil_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
      
		->where('dosen_penguji_ta.id_dosen','=', $id_dosen)
		->where('pengajuan_sidang.status','=', 2)
        
		->get();

      

		return view("dosen/DosenPenguji/list_jadwal_sidang", array('ta' => $ta));

  
		 
	}


}
