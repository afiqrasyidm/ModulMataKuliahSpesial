<?php

namespace App\Http\Controllers;


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

class IndustriController extends Controller
{
	
	 // var $industri;
	 
	 
  //    public function __construct() {
  //       $this->industri = Industri::all(array('nama'));
    
	
	function berhasil_industri () {


		session_start();
		return view("pengajuan_topik/berhasil_industri");
	}
	
	function pengajuan_topik_ta () {


		session_start();
		return view("industri/pengajuan_topik_ta");
	}

	function lihat_hasil_ta () {
		session_start();
		return view("industri/lihat_hasil_ta");
	}

	function pengumuman () {
		session_start();
		return view("industri/pengumuman");
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
			$topik = new Topik;
			$topik->topik_ta = Input::get ('topik_ta');
			$topik->deskripsi = Input::get ('latar_belakang_ta');
			
		
			$topik->id_industri = 	$_SESSION["user_login_industri"]-> id_industri;
			$topik->id_dosen = NULL;
			$topik->sudah_diambil = 0;
			
	       	$topik->save();
	        $penandaRole = "industri";
			
			return view("validasi_keberhasilan/berhasil" , array('penandaRole' => $penandaRole) );
	    }

	    //Data error or username taken:
		return Redirect::to('industri/pengajuan-topik-ta')
			->withErrors($validator)
			->withInput();	
    }
	
	
	
	
	
	
}
