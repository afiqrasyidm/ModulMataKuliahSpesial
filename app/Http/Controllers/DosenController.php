<?php

namespace App\Http\Controllers;

use App\Dosen;



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


class DosenController extends Controller
{
    
	
	public function pengajuan_topik_ta() {
        session_start();
        return view("dosen/pengajuan_topik_dosen");
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
			$topik->maksimal_pendaftar = Input::get ('maksimal_pendaftar');
			
			$id_dosen= Dosen::where('id_user', $_SESSION["id_user"])->get()->first()->id_dosen;
			
			$topik->id_industri = 	NULL;
			$topik->id_dosen = $id_dosen;
			$topik->sudah_diambil = 0;
			
	       	$topik->save();
	        $penandaRole = "dosen";
			
			return view("validasi_keberhasilan/berhasil" , array('penandaRole' => $penandaRole) );
	    
		}

	    //Data error or username taken:
		return Redirect::to('dosen/pengajuan-topik-ta')
			->withErrors($validator)
			->withInput();	
    }
	
	
	


}
