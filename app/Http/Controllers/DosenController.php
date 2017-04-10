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


use App\Pengambil_topik;

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
	
	
	public function verifikasi_pengambilan_topik_ta(){
			session_start();
			$id_dosen= Dosen::where('id_user', $_SESSION["id_user"])->get()->first()->id_dosen;
			$topik= Topik::where(
			[
			['id_dosen', $id_dosen],
			
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

			return view("dosen/verifikasi_pengambilan_topik_ta" , array('topik' => $topik, 'array' => $array) );
			
			 
		
		
			
	
	
	}
	
	
	
	public function detail_topik_ta($id_topik){
	 	session_start();
			
			
		
    		$topik = DB::table('topik')
				->leftJoin('Pengambil_topik', 'topik.id_topik', '=', 'topik.id_topik')
				->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'Pengambil_topik.id_mahasiswa')
				->leftJoin('tugas_akhir', 'tugas_akhir.id_mahasiswa', '=', 'Pengambil_topik.id_mahasiswa')
				->where([
				 ['topik.id_topik', '=', $id_topik],
				['Pengambil_topik.id_topik', '=', $id_topik],
				['tugas_akhir.id_topik', '=', $id_topik],
				])
				->get();
				
				
				//return $topik;
			
			//jika belum ada pendaftar
			if($topik->isEmpty()){
				$topik = DB::table('topik')
						->where([
						 ['topik.id_topik', '=', $id_topik],
						])
						->get();
					//	return "lol";
				return view("dosen/detail_topik_ta_tidak_ada " , array('topik' => $topik ));
				
			}
			//jika sudah
			else{
				return view("dosen/detail_topik_ta " , array('topik' => $topik ));
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
		return redirect()->route('dosen/pengajuan-topik/detail/',$id_topik);
		
	}
	
	public function hentikan_topik($id_topik){
		session_start();
		
		
		DB::table('topik')
            ->where('id_topik', $id_topik)
            ->update(['sudah_diambil' => 1]);
	
		return redirect()->route('dosen/pengajuan-topik/detail/',$id_topik);
		
	}
	
	


}
