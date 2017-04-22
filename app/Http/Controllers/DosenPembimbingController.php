<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dosen;
use App\Dosen_pembimbing;
use App\Tugas_akhir;

class DosenPembimbingController extends Controller
{
    function home_dosen_pembimbing() {
        session_start();
        return view("dosen/DosenPembimbing/home_dosen_pembimbing");
    }
    
   function ubah_status_sidang() {
      session_start();

      $id_dosen= Dosen::where('id_user', $_SESSION["id_user"])->get()->first()->id_dosen;
      

      $ta = DB::table('dosen_pembimbing_ta')
        ->leftJoin('tugas_akhir', 'dosen_pembimbing_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
        ->where('tugas_akhir.status_tugas_akhir','>', 9)->where('dosen_pembimbing_ta.id_dosen','=', $id_dosen)
        ->get();

      

    return view("dosen/DosenPembimbing/ubah_status_sidang", array('ta' => $ta));

    }

function ubah_status_sidangPost($id_tugas_akhir)
{ 
  session_start();

  

    DB::table('tugas_akhir')
            ->where('id_tugas_akhir', $id_tugas_akhir)
            ->update(['id_maker' =>  $_SESSION["id_user"],'status_tugas_akhir' => 11]);
   
    return redirect()->route('dosen/pembimbing/ubah-status-sidang');
    
  
}
   //  function feedback_sidang_dosen_penguji() {
   //  	session_start();
   //  	return view("dosen/DosenPenguji/feedback_sidang_dosen_penguji");
   //  }

   //  function feedback_sidang_mahasiswa_dosen_penguji() {
   //  	session_start();
   //  	return view("dosen/DosenPenguji/feedback_sidang_mahasiswa_dosen_penguji");
   //  }

   // function hasil_ta() {
   //      session_start();
   //      return view("dosen/DosenPenguji/hasil_ta");
   //  }

    function pengumuman() {
        session_start();
        return view("dosen/DosenPembimbing/pengumuman");
    }


	function list_jadwal_sidang(){
		
			session_start();
			$id_dosen= Dosen::where('id_user', $_SESSION["id_user"])->get()->first()->id_dosen;
			//return $id_dosen;
			
			
		$ta = DB::table('pengajuan_sidang')
        ->leftJoin('dosen_pembimbing_ta', 'pengajuan_sidang.id_tugas_akhir', '=', 'dosen_pembimbing_ta.id_tugas_akhir')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'tugas_akhir.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
	    ->leftJoin('hasil_ta', 'hasil_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
      
		->where('dosen_pembimbing_ta.id_dosen','=', $id_dosen)
		->where('pengajuan_sidang.status','=', 2)
        ->where('pengajuan_sidang.status','!=', 12)
        
		->get();

      
		//return "lol";
		return view("dosen/DosenPembimbing/list_jadwal_sidang", array('ta' => $ta));

  
	
	}
	function sidang_selesai($id_tugas_akhir){
				session_start();
	
	
			
			DB::table('tugas_akhir')
            ->where('id_tugas_akhir', $id_tugas_akhir)
            ->update(
			
			[
			
			'id_maker' =>  $_SESSION["id_user"],
			
			
			'status_tugas_akhir' =>  12,
			
			]
			
			)
			
			;
   
    return redirect()->route('dosen/pembimbing/list-jadwal-sidang');
     
	}
	function dokumen_ta(){
			session_start();
			
			$id_dosen= Dosen::where('id_user', $_SESSION["id_user"])->get()->first()->id_dosen;
		
			$tugas_akhir = DB::table('tugas_akhir')
				->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
				->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
				->leftJoin('Pengajuan_sidang', 'Pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
				->leftJoin('Hasil_ta', 'Hasil_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
				->leftJoin('dosen_pembimbing_ta', 'dosen_pembimbing_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
			
				->where([
				 ['dosen_pembimbing_ta.id_dosen', '=',$id_dosen],
				 ['tugas_akhir.status_tugas_akhir', '>=',5],
				])
				->get();
		
		
		return view("dosen/DosenPembimbing/dokumen_ta" , array('tugas_akhir' => $tugas_akhir) );
		
	}

	function verifikasi_bimbingan() {
		session_start();

		$bimbingan = DB::table('dosen_pembimbing_ta')
			->leftJoin('dosen', 'dosen_pembimbing_ta.id_dosen', 'dosen.id_dosen')
			->leftJoin('tugas_akhir', 'tugas_akhir.id_tugas_akhir', 'dosen_pembimbing_ta.id_tugas_akhir')
			->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', 'tugas_akhir.id_mahasiswa')
			->leftJoin('topik', 'tugas_akhir.id_topik', 'topik.id_topik')
			->where('dosen.id_user', '=',  $_SESSION["id_user"])->get();

		$dari_dosen = DB::table('dosen')
			->leftJoin('topik', 'topik.id_dosen', 'dosen.id_dosen')
			->leftJoin('tugas_akhir', 'tugas_akhir.id_topik', 'topik.id_topik')
			->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', 'tugas_akhir.id_mahasiswa')
			->where([['dosen.id_user', '=' , $_SESSION["id_user"]], ['topik.sudah_diambil', '>', '0']])
			->get();

		return view("dosen/DosenPembimbing/verifikasi_bimbingan", array('bimbingan' => $bimbingan, 'dari_dosen' => $dari_dosen));
			// return $bimbingan;
		// return $_SESSION;
	}

	function set_verifikasi_bimbingan($status, $id_dpt) {
		session_start();

	 	$pembimbing = Dosen_pembimbing::find($id_dpt);
	 	$pembimbing->status_dosen_pembimbing = $status;
	 	// $dosen_pembimbing->id_maker = $_SESSION["id_user"];
	 	$pembimbing->save();

	 	$tugas_akhir = Tugas_akhir::where('id_tugas_akhir', '=', $pembimbing->id_tugas_akhir)->firstOrFail();
	 	if($status == 2) {
	 		$tugas_akhir->status_tugas_akhir = 10;
	 	} else
	 		$tugas_akhir->status_tugas_akhir = 9;

	 	return redirect()->route('dosen/pembimbing/verifikasi-bimbingan');
	}
	
	function detail_sidang($id_tugas_akhir){
		session_start();
			//return "lol";
					
		$ta = DB::table('pengajuan_sidang')
        ->leftJoin('dosen_pembimbing_ta', 'pengajuan_sidang.id_tugas_akhir', '=', 'dosen_pembimbing_ta.id_tugas_akhir')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'tugas_akhir.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
	    ->leftJoin('hasil_ta', 'hasil_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
      
		->where('pengajuan_sidang.id_tugas_akhir','=', $id_tugas_akhir)
	
        
		->get()
		->first();
		
			return view('dosen/DosenPembimbing/detail_sidang', array('ta' => $ta));;
    	
	}
	function detail_sidang_submit(){
		session_start();
			//return "lol";
					
		    DB::table('tugas_akhir')
            ->where('id_tugas_akhir', Input::get('id_tugas_akhir'))
            ->update(
			
			[
			
			'id_maker' =>  $_SESSION["id_user"],
			
			
			'status_tugas_akhir' =>  12,
			
			]
			
			)
			
			;
   
		
			return view('dosen/DosenPembimbing/detail_sidang', array('ta' => $ta));;
    	
	}

}
