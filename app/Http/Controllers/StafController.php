<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staf;
use App\Dosen;
use Carbon\Carbon;
use App\Pengajuan_sidang;
use App\Pengajuan_sidang_topik;
use App\Dosen_penguji;
use App\Dosen_penguji_topik;
use App\Mahasiswa;
use App\User;
use SSO\SSO;
use Validator;
use Redirect;

class StafController extends Controller
{
	
	 var $stafs;
	 var $temp;
	 
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

	  $list_sidang =  DB::table('pengajuan_sidang')->get();
      $ta = DB::table('pengajuan_sidang')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang.id_mahasiswa')
        ->where('tugas_akhir.status_tugas_akhir','>=', '11')
        ->get();

     if($list_sidang=='[]'){
      	return view("staf/failed_verifikasi_permohonan_sidang");
      }
      else{						
      	return view("staf/verifikasi_permohonan_sidang", array('ta' => $ta));
      }
    }

    function verifikasi_permohonan_sidang_topik() {
      session_start();

	  $list_sidang =  DB::table('pengajuan_sidang_topik')->get();
      $ta = DB::table('pengajuan_sidang_topik')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang_topik.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang_topik.id_mahasiswa')
        ->where('tugas_akhir.status_tugas_akhir','>=', '10')
        ->get();

     if($list_sidang=='[]'){
      	return view("staf/failed_verifikasi_permohonan_sidang_topik");
      }
      else{
      	return view("staf/verifikasi_permohonan_sidang_topik", array('ta' => $ta));

      }
    }

    	public function failed_verifikasi_permohonan_sidang(){

		session_start();

    	return view("staf/failed_verifikasi_permohonan_sidang");
	}

	public function failed_verifikasi_permohonan_sidang_topik(){

		session_start();

    	return view("staf/failed_verifikasi_permohonan_sidang_topik");
	}

	public function ubah_pengajuan_sidang($id_tugas_akhir){
		session_start();
		$ta = DB::table('pengajuan_sidang')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang.id_mahasiswa')
        ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
        ->leftJoin('dosen_pembimbing_ta', 'dosen_pembimbing_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_pembimbing_ta.id_dosen')
        ->where('tugas_akhir.status_tugas_akhir','=', '11')
        ->get()->first();
		$i=1;
		$dosen =  DB::table('dosen')->get();
		//return $dosen;
    	return view("staf/ubah_pengajuan_sidang", array('ta' => $ta, 'dosen' => $dosen, 'dosen2' => $dosen, 'dosen3' => $dosen, 'i'=>$i));
	}

	public function ubah_pengajuan_sidang_topik($id_tugas_akhir){
		session_start();
		$ta = DB::table('pengajuan_sidang_topik')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang_topik.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang_topik.id_mahasiswa')
        ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
        ->leftJoin('dosen_pembimbing_ta', 'dosen_pembimbing_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_pembimbing_ta.id_dosen')
        ->where('tugas_akhir.status_tugas_akhir','=', '10')
        ->get()->first();
		$i=1;
		$dosen =  DB::table('dosen')->get();
		//return $dosen;
    	return view("staf/ubah_pengajuan_sidang_topik", array('ta' => $ta, 'dosen' => $dosen, 'dosen2' => $dosen, 'dosen3' => $dosen, 'i'=>$i));
	}

	function verifikasi_permohonan_sidangPost($id_pengajuan)
	{ 
	  session_start();
      $ta = DB::table('pengajuan_sidang')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang.id_mahasiswa')
        ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
        ->leftJoin('dosen_pembimbing_ta', 'dosen_pembimbing_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_pembimbing_ta.id_dosen')
        ->where('tugas_akhir.status_tugas_akhir','>=', '11')
        ->get()->first();
		$i=1;
		$dosen =  DB::table('dosen')->get();
       $penguji = DB::table('pengajuan_sidang')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang.id_mahasiswa')
        ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
        ->leftJoin('dosen_penguji_ta', 'dosen_penguji_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_penguji_ta.id_dosen')
        ->where('tugas_akhir.status_tugas_akhir','>=', '11')
        ->get();

        return view("staf/form_verifikasi_sidang_ta", array('ta' => $ta, 'dosen' => $dosen, 'dosen2' => $dosen, 'dosen3' => $dosen, 'i'=>$i, 'penguji'=>$penguji));

       
	}

	function verifikasi_permohonan_sidangtopikPost($id_pengajuan)
	{ 
	  session_start();
      $ta = DB::table('pengajuan_sidang_topik')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang_topik.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang_topik.id_mahasiswa')
        ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
        ->leftJoin('dosen_pembimbing_ta', 'dosen_pembimbing_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_pembimbing_ta.id_dosen')
        ->where('tugas_akhir.status_tugas_akhir','>=', '10')
        ->get()->first();
		$i=1;
		$dosen =  DB::table('dosen')->get();
      $penguji = DB::table('pengajuan_sidang_topik')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang_topik.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang_topik.id_mahasiswa')
        ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
        ->leftJoin('dosen_penguji_topik', 'dosen_penguji_topik.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_penguji_topik.id_dosen')
        ->where('tugas_akhir.status_tugas_akhir','>=', '10')
        ->get();

        return view("staf/form_verifikasi_sidang_topik", array('ta' => $ta, 'dosen' => $dosen, 'dosen2' => $dosen, 'dosen3' => $dosen, 'i'=>$i, 'penguji'=>$penguji));
	}

	function verifikasi_permohonan_sidang_submit(){
		session_start();
		$ta = DB::table('pengajuan_sidang')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang.id_mahasiswa')
        ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
        ->where('tugas_akhir.status_tugas_akhir','=', '11')
        ->get()->first();
	//	return Input::get('dosen_penguji_1');
		
				
		//return $id_tugas_akhir;
		 $validator = Validator::make(
	        Input::all(),
			  array(//Unique nya belum
	            "dosen_penguji_1" => "required",
	            "dosen_penguji_2" => "required",
	            "dosen_penguji_3" => "required",
	            "waktu_sidang" => "required",
	            )
	      
	    );
		
    	if($validator->passes()) {
		$success =false;
		date_default_timezone_set("Asia/Jakarta");
        $today = date("Y-m-d h:i");
        $temp = Input::get('waktu_sidang');
        $createdAt = Carbon::parse($temp);
		$suborder= $createdAt->format('Y-m-d h:i');
		$cek_dosen = true;
		$cek_waktu = true;

			if($suborder < $today){
				$validator->getMessageBag()->add('wrong_waktu_sidang', 'Tidak valid, karena waktu sidang sudah lewat');
				$cek_waktu = false;
			}
				
			if(Input::get('dosen_penguji_1') == Input::get('dosen_penguji_2')){
				$cek_dosen = false;

				if(Input::get('dosen_penguji_2') == Input::get('dosen_penguji_3')){
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_2_3', 'Ketiga Dosen Penguji tidak boleh sama');
				}
				else{
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_2', 'Dosen Penguji 1 dan 2 tidak boleh sama');
				}
			}
		
			else if(Input::get('dosen_penguji_1') == Input::get('dosen_penguji_3')){
				$cek_dosen = false;

				if(Input::get('dosen_penguji_3') == Input::get('dosen_penguji_2')){
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_2_3', 'Ketiga Dosen Penguji tidak boleh sama');
				}
				else{
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_3', 'Dosen Penguji 1 dan 3 tidak boleh sama');
				}
			}
			
			else if(Input::get('dosen_penguji_2') == Input::get('dosen_penguji_3')){
				$cek_dosen = false;

				if(Input::get('dosen_penguji_3') == Input::get('dosen_penguji_1')){
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_2_3', 'Ketiga Dosen Penguji tidak boleh sama');
				}
				else{
					$validator->getMessageBag()->add('wrong_dosen_penguji_2_3', 'Dosen Penguji 2 dan 3 tidak boleh sama');
				}
			}
			
			if($cek_waktu == true && $cek_dosen == true){
				$success = true;
			}
		
		if($success){
		DB::table('pengajuan_sidang')
        	->where('id_pengajuan','=', Input::get('id_pengajuan'))
            ->update([
			'waktu_sidang' => Input::get('waktu_sidang'),
			'id_maker' =>  $_SESSION["id_user"],
			]);
			
			$id_tugas_akhir =DB::table('pengajuan_sidang')  
				->where('pengajuan_sidang.id_pengajuan','=', Input::get('id_pengajuan'))
				->get()->first()->id_tugas_akhir;
		
			if($ta->status == 1){
			 $dosen_penguji1 = new dosen_penguji;
			 $dosen_penguji1->id_dosen = Input::get('dosen_penguji_1');
			 $dosen_penguji1->id_tugas_akhir = $id_tugas_akhir;
			 $dosen_penguji1->id_maker = $_SESSION["id_user"];
			 $dosen_penguji1->save();
			 
			 $dosen_penguji2 = new dosen_penguji;
			 $dosen_penguji2->id_dosen = Input::get('dosen_penguji_2');
			 $dosen_penguji2->id_tugas_akhir = $id_tugas_akhir;
			 $dosen_penguji2->id_maker = $_SESSION["id_user"];
			 $dosen_penguji2->save();
			 
			 $dosen_penguji3 = new dosen_penguji;
			 $dosen_penguji3->id_dosen = Input::get('dosen_penguji_3');
			 $dosen_penguji3->id_tugas_akhir = $id_tugas_akhir;
			 $dosen_penguji3->id_maker = $_SESSION["id_user"];
			 $dosen_penguji3->save();
			$_SESSION["sba_verifikasi_pengajuan_sidang"] = true;	

				DB::table('pengajuan_sidang')
	        	->where('id_pengajuan','=', Input::get('id_pengajuan'))
	            ->update([
				'status' => 2,
				]);

			  return redirect()->route('staf/verifikasi-permohonan-sidang');
			}
							
			else{
			   DB::table('dosen_penguji_ta')->where('id_tugas_akhir', '=', $ta->id_tugas_akhir)->delete();

			  $dosen_penguji1 = new dosen_penguji;
			 $dosen_penguji1->id_dosen = Input::get('dosen_penguji_1');
			 $dosen_penguji1->id_tugas_akhir = $id_tugas_akhir;
			 $dosen_penguji1->id_maker = $_SESSION["id_user"];
			 $dosen_penguji1->save();
			 
			 $dosen_penguji2 = new dosen_penguji;
			 $dosen_penguji2->id_dosen = Input::get('dosen_penguji_2');
			 $dosen_penguji2->id_tugas_akhir = $id_tugas_akhir;
			 $dosen_penguji2->id_maker = $_SESSION["id_user"];
			 $dosen_penguji2->save();
			 
			 $dosen_penguji3 = new dosen_penguji;
			 $dosen_penguji3->id_dosen = Input::get('dosen_penguji_3');
			 $dosen_penguji3->id_tugas_akhir = $id_tugas_akhir;
			 $dosen_penguji3->id_maker = $_SESSION["id_user"];
			 $dosen_penguji3->save();
			 $_SESSION["sba_perubahan_verifikasi_pengajuan_sidang"] = true;	

			 return redirect()->route('staf/verifikasi-permohonan-sidang');

			}
		}
		
		 else {
	        //Data error or username taken:
	       if($ta->status==1){
	       	return redirect()->route('staf/permohonan-sidang/',Input::get('id_pengajuan'))
	            ->withErrors($validator)
	            ->withInput();
	       }
	       else{
			return redirect()->route('staf/ubah-pengajuan-sidang', $ta->id_tugas_akhir)
            ->withErrors($validator)
            ->withInput();	       
        	}
	    }
	}
	else {
	        //Data error or username taken:
	       return redirect()->route('staf/ubah-pengajuan-sidang/',Input::get('id_tugas_akhir'))
	            ->withErrors($validator)
	            ->withInput();
	    }

    	//return view("staf/verifikasi_permohonan_ta");

	}

function verifikasi_permohonan_sidang_topik_submit(){
		session_start();
		$ta = DB::table('pengajuan_sidang_topik')
        ->leftJoin('tugas_akhir', 'pengajuan_sidang_topik.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
        ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'pengajuan_sidang_topik.id_mahasiswa')
        ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
        ->where('tugas_akhir.status_tugas_akhir','=', '10')
        ->get()->first();
	//	return Input::get('dosen_penguji_1');
		
				
		//return $id_tugas_akhir;
		 $validator = Validator::make(
	        Input::all(),
			  array(//Unique nya belum
	            "dosen_penguji_1" => "required",
	            "dosen_penguji_2" => "required",
	            "dosen_penguji_3" => "required",
	            "waktu_sidang" => "required",
	            )
	      
	    );
		
    	if($validator->passes()) {
		$success =false;
		date_default_timezone_set("Asia/Jakarta");
        $today = date("Y-m-d h:i");
        $temp = Input::get('waktu_sidang');
        $createdAt = Carbon::parse($temp);
		$suborder= $createdAt->format('Y-m-d h:i');
		$cek_dosen = true;
		$cek_waktu = true;

			if($suborder < $today){
				$validator->getMessageBag()->add('wrong_waktu_sidang', 'Tidak valid, karena waktu sidang sudah lewat');
				$cek_waktu = false;
			}
				
			if(Input::get('dosen_penguji_1') == Input::get('dosen_penguji_2')){
				$cek_dosen = false;

				if(Input::get('dosen_penguji_2') == Input::get('dosen_penguji_3')){
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_2_3', 'Ketiga Dosen Penguji tidak boleh sama');
				}
				else{
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_2', 'Dosen Penguji 1 dan 2 tidak boleh sama');
				}
			}
		
			else if(Input::get('dosen_penguji_1') == Input::get('dosen_penguji_3')){
				$cek_dosen = false;

				if(Input::get('dosen_penguji_3') == Input::get('dosen_penguji_2')){
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_2_3', 'Ketiga Dosen Penguji tidak boleh sama');
				}
				else{
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_3', 'Dosen Penguji 1 dan 3 tidak boleh sama');
				}
			}
			
			else if(Input::get('dosen_penguji_2') == Input::get('dosen_penguji_3')){
				$cek_dosen = false;

				if(Input::get('dosen_penguji_3') == Input::get('dosen_penguji_1')){
					$validator->getMessageBag()->add('wrong_dosen_penguji_1_2_3', 'Ketiga Dosen Penguji tidak boleh sama');
				}
				else{
					$validator->getMessageBag()->add('wrong_dosen_penguji_2_3', 'Dosen Penguji 2 dan 3 tidak boleh sama');
				}
			}
			
			if($cek_waktu == true && $cek_dosen == true){
				$success = true;
			}
		
		if($success){
		DB::table('pengajuan_sidang_topik')
        	->where('id_pengajuan','=', Input::get('id_pengajuan'))
            ->update([
			'waktu_sidang' => Input::get('waktu_sidang'),
			'id_maker' =>  $_SESSION["id_user"],
			]);

			if($ta->status == 2){
			 $dosen_penguji1 = new Dosen_penguji_topik;
			 $dosen_penguji1->id_dosen = Input::get('dosen_penguji_1');
			 $dosen_penguji1->id_tugas_akhir = $ta->id_tugas_akhir;
			 $dosen_penguji1->id_maker = $_SESSION["id_user"];
			 $dosen_penguji1->save();
			 
			 $dosen_penguji2 = new dosen_penguji_topik;
			 $dosen_penguji2->id_dosen = Input::get('dosen_penguji_2');
			 $dosen_penguji2->id_tugas_akhir = $ta->id_tugas_akhir;
			 $dosen_penguji2->id_maker = $_SESSION["id_user"];
			 $dosen_penguji2->save();
			 
			 $dosen_penguji3 = new dosen_penguji_topik;
			 $dosen_penguji3->id_dosen = Input::get('dosen_penguji_3');
			 $dosen_penguji3->id_tugas_akhir = $ta->id_tugas_akhir;
			 $dosen_penguji3->id_maker = $_SESSION["id_user"];
			 $dosen_penguji3->save();
			
			$_SESSION["sba_verifikasi_pengajuan_sidang_topik"] = true;	

				DB::table('pengajuan_sidang_topik')
        		->where('id_pengajuan','=', Input::get('id_pengajuan'))
	            ->update([
				'status' => 3,
				]);
			  return redirect()->route('staf/verifikasi-permohonan-sidang-topik');
			}
							
			else{
			   DB::table('dosen_penguji_topik')->where('id_tugas_akhir', '=', $ta->id_tugas_akhir)->delete();

			 $dosen_penguji1 = new dosen_penguji_topik;
			 $dosen_penguji1->id_dosen = Input::get('dosen_penguji_1');
			 $dosen_penguji1->id_tugas_akhir = $ta->id_tugas_akhir;
			 $dosen_penguji1->id_maker = $_SESSION["id_user"];
			 $dosen_penguji1->save();
			 
			 $dosen_penguji2 = new dosen_penguji_topik;
			 $dosen_penguji2->id_dosen = Input::get('dosen_penguji_2');
			 $dosen_penguji2->id_tugas_akhir =  $ta->id_tugas_akhir;
			 $dosen_penguji2->id_maker = $_SESSION["id_user"];
			 $dosen_penguji2->save();
			 
			 $dosen_penguji3 = new dosen_penguji_topik;
			 $dosen_penguji3->id_dosen = Input::get('dosen_penguji_3');
			 $dosen_penguji3->id_tugas_akhir = $ta->id_tugas_akhir;
			 $dosen_penguji3->id_maker = $_SESSION["id_user"];
			 $dosen_penguji3->save();
			 $_SESSION["sba_perubahan_verifikasi_pengajuan_sidang_topik"] = true;	

			 return redirect()->route('staf/verifikasi-permohonan-sidang-topik');

			}
		}
		
		 else {
	        //Data error or username taken:
	       if($ta->status==2){
	       	return redirect()->route('staf/permohonan-sidang-topik/',Input::get('id_pengajuan'))
	            ->withErrors($validator)
	            ->withInput();
	       }
	       else{
			return redirect()->route('staf/ubah-pengajuan-sidang-topik', $ta->id_tugas_akhir)
            ->withErrors($validator)
            ->withInput();	       
        	}
	    }
	}
	else {
	        //Data error or username taken:
	       return redirect()->route('staf/ubah-pengajuan-sidang-topik/',Input::get('id_tugas_akhir'))
	            ->withErrors($validator)
	            ->withInput();
	    }
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
	
	function detail_permohonan_ta($id_tugas_akhir) {
        session_start();

        $tugas_akhir = DB::table('tugas_akhir')
                ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('prodi', 'prodi.id_prodi', '=', 'mahasiswa.id_prodi')
                ->leftJoin('fakultas', 'fakultas.id_fakultas', '=', 'prodi.id_fakultas')
                ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
                ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_pa.id_dosen')
                ->leftJoin('referensi_status_ta', 'tugas_akhir.status_tugas_akhir', '=', 'referensi_status_ta.id_referensi_status_ta')
                ->where('tugas_akhir.id_tugas_akhir','=', $id_tugas_akhir)
                ->get()
                ->first();

        return view("staf/detail_permohonan_ta", ['tugas_akhir' => $tugas_akhir]);
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
        $mahasiswa_terverifikasi = DB::table('tugas_akhir')
                ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->where('id_tugas_akhir', $id_tugas_akhir)
                ->get()
                ->first();

        $_SESSION["verifikasi_permohonan_ta_berhasil"] = $mahasiswa_terverifikasi->nama_mahasiswa."(".$mahasiswa_terverifikasi->NPM.")";

        return redirect()->route('staf/verifikasi-permohonan-ta');
    }
}
