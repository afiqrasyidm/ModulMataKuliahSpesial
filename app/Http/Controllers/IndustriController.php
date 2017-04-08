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

use App\Pengambil_topik;

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
			$topik->maksimal_pendaftar = Input::get ('maksimal_pendaftar');
			
		
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
	
	public function verifikasi_pengambilan_topik_ta(){
			session_start();
			
			$topik= Topik::where(
			[
			['id_industri', $_SESSION["user_login_industri"]-> id_industri],
			
			]
			)->get();
			//memasukkan masing-masing nilai jumlah pendaftar
			$array[] = array();
			
			$i = 0;
			foreach($topik as $t){
				
				$jumlah_pengambil_topik = Pengambil_topik::where('id_topik', $t ->id_topik )->get()->count();
				$array[$i] = $jumlah_pengambil_topik;
				
				$i++;
			}

			return view("industri/verifikasi_pengambilan_topik_ta" , array('topik' => $topik, 'array' => $array) );
			
			 
		
		
			
	
	
	}
	
	
	public function detail_topik_ta($id_topik){
	 	session_start();
			
			
		
    		$topik = DB::table('topik')
				->leftJoin('Pengambil_topik', 'topik.id_topik', '=', 'topik.id_topik')
				->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'Pengambil_topik.id_mahasiswa')
				->leftJoin('industri', 'industri.id_industri', '=', 'topik.id_industri')
				->leftJoin('tugas_akhir', 'tugas_akhir.id_mahasiswa', '=', 'Pengambil_topik.id_mahasiswa')
				->where([
				 ['topik.id_topik', '=', $id_topik],
				['Pengambil_topik.id_topik', '=', $id_topik],
				['tugas_akhir.id_topik', '=', $id_topik],
				])
				->get();

				
			//return $topik;
			
			if($topik->first()->id_industri != NULL ){

			//return $topik->first()->topik_ta;
				return view("industri/detail_topik_ta " , array('topik' => $topik ));

			}
			

	}
	public function setuju_topik($id_tugas_akhir, $is_disetujui, $id_topik){
		session_start();
		
		if($is_disetujui==1)
		DB::table('tugas_akhir')
            ->where('id_tugas_akhir', $id_tugas_akhir)
            ->update(['status_tugas_akhir' => 0]);
		else{
			DB::table('tugas_akhir')
            ->where('id_tugas_akhir', $id_tugas_akhir)
            ->update(['status_tugas_akhir' => -1]);
		}
		return redirect()->route('industri/pengajuan-topik/detail/',$id_topik);
		
	}
	
	public function hentikan_topik($id_topik){
		session_start();
		
		
		DB::table('topik')
            ->where('id_topik', $id_topik)
            ->update(['sudah_diambil' => 1]);
	
		return redirect()->route('industri/pengajuan-topik/detail/',$id_topik);
		
	}
	
	
	
	
	
	
}
