<?php

namespace App\Http\Controllers;
//
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

use App\User;
use App\Industri;
use App\Mahasiswa;

use App\Prodi;
use App\Fakultas;
use App\Topik;
use App\Tugas_akhir;

class MahasiswaController extends Controller
{
    function pengajuan_topik() {
    	session_start();
		
			$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
					 
		 
		$tugas_akhir = Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();
		
		if($tugas_akhir==NULL){
					 
			$topik = DB::table('topik')
				->leftJoin('industri', 'topik.id_industri', '=', 'industri.id_industri')
				->leftJoin('dosen', 'topik.id_dosen', '=', 'dosen.id_dosen')
				->where('topik.sudah_diambil', '=', 0)
				->get();
	
	
		 	return view("mahasiswa/pengajuan_topik", array('topik' => $topik));
		
		}
		
		else {
		
			$topik_yang_diambil= Topik::where('id_topik', $tugas_akhir->id_topik)->get()->first();
		
		 	return view("mahasiswa/pengajuan_topik", array('topik_yang_diambil' => $topik_yang_diambil));
			
		}

	
	
    }

    function pengajuan_permohonan_ta() {
    	session_start();
    	return view("mahasiswa/pengajuan_permohonan_ta");
    }

    function pengajuan_pembimbing_ta() {
    	session_start();
    	return view("mahasiswa/pengajuan_pembimbing_ta");
    }

    function pengumuman() {
        session_start();
        return view("mahasiswa/pengumuman");
    }
	public function pengajuan_topik_ta(){
		session_start();
    	return view("mahasiswa/pengajuan_topik_mandiri");
	}
	
	 public function pengajuan_topik_ta_submit() {
		session_start();
		$validator = Validator::make(
        Input::all(),
        array(
            "topik_ta" => "required",
            "latar_belakang_ta" => "required", 
	        )
	    );

	    $isTopikTaken = count(Topik::where('topik_ta', Input::get('topik_ta'))->get())>0;
	    
	    //topik (unique) Validation. Apakah sudah ada atau belum
	    if($isTopikTaken) {
	        $validator->getMessageBag()->add('duplicate_topik_ta', 'topik ta telah terpakai.');
	    }

	    //jika semua validasi terpenuhi simpan ke database
	    else if($validator->passes()) {
	
		  $id_topik = DB::table('topik')->insertGetId(
			['topik_ta' => Input::get ('topik_ta') , 'deskripsi' => Input::get ('latar_belakang_ta'),'sudah_diambil'=>1 ]);
		  
		  
		  
			
			$penandaRole = "mahasiswa";
			
			$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
			
			$tugas_akhir = new Tugas_akhir;
			
			
			$tugas_akhir->id_mahasiswa = $id_mahasiswa;
			
			$tugas_akhir->id_topik = $id_topik; 
	
			$tugas_akhir->status_tugas_akhir = "000"; 
			
			$tugas_akhir->save();
	        
			
			return view("validasi_keberhasilan/berhasil" , array('penandaRole' => $penandaRole) );
	    }

	    //Data error or username taken:
		return Redirect::to('mahasiswa/pengajuan-topik-ta')
			->withErrors($validator)
			->withInput();	
			
			
    }
	
	
}
