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
use App\Dosen;

use App\Pengajuan_sidang;
use App\Pengajuan_sidang_topik;
use App\Hasil_ta;
use App\Dosen_pembimbing;
use App\Referensi_status_sidang;
use App\Referensi_status_sidang_topik;
use App\feedback_tugas_akhir;

use App\Status_ta;
use App\Status_sidang;

use Carbon\Carbon;

class MahasiswaController extends Controller
{
    function pengajuan_topik() {
    	session_start();
		$ubah=true;
		$mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first();

		$id_mahasiswa = $mahasiswa->id_mahasiswa;
		if($mahasiswa->is_sudah_ambil_ta == 0){

			 	return view("mahasiswa/mahasiswa_belum_ambil_ta");
		}



		
		$tugas_akhir = DB::table('tugas_akhir')
				->leftJoin('referensi_status_ta', 'tugas_akhir.status_tugas_akhir', '=', 'referensi_status_ta.id_referensi_status_ta')
				
				->where([
				 ['tugas_akhir.id_mahasiswa', '=', $id_mahasiswa],
				
				])
				->get()
				->first()
				;
	//	return $tugas_akhir;
		//jika belum milih topik
		if($tugas_akhir==NULL){


			$topik = DB::table('topik')
				->leftJoin('industri', 'topik.id_industri', '=', 'industri.id_industri')
				->leftJoin('dosen', 'topik.id_dosen', '=', 'dosen.id_dosen')
				->where('topik.sudah_diambil', '=', 0)
				->get();


		 	return view("mahasiswa/pengajuan_topik", array('topik' => $topik));

		}
		//jika sudah tampilkan detailnya
		else {


			$topik_yang_diambil= Topik::where('id_topik', $tugas_akhir->id_topik)->get()->first();

			//ambil jumlah mahasiswa yang telah mengambil topik itu

			$jumlah_pengambil_topik = Tugas_akhir::where('id_topik',$tugas_akhir->id_topik )->get()->count();

			//diambil industri
			if($topik_yang_diambil->id_industri != NULL){

				$industri = Industri::where('id_industri', $topik_yang_diambil->id_industri )->get()->first();


				return view("mahasiswa/pengajuan_topik " , array('topik_yang_diambil' => $topik_yang_diambil, 'industri' => $industri, 'tugas_akhir' => $tugas_akhir
				, 'jumlah_pengambil_topik' => $jumlah_pengambil_topik) );
			}
			//berarti diajukan oleh dosen

				else{

				$dosen = Dosen::where('id_dosen', $topik_yang_diambil->id_dosen )->get()->first();
      //
				return view("mahasiswa/pengajuan_topik " , array('topik_yang_diambil' => $topik_yang_diambil, 'dosen' => $dosen, 'tugas_akhir' => $tugas_akhir
				,'jumlah_pengambil_topik' => $jumlah_pengambil_topik

				) );
			}
		}
	}

    public function pengajuan_permohonan_ta() {
    	session_start();

   		$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
    	$tugas_akhir = DB::table('tugas_akhir')
          ->leftJoin('referensi_status_ta', 'tugas_akhir.status_tugas_akhir', '=', 'referensi_status_ta.id_referensi_status_ta')
          ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
          ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
          ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_pa.id_dosen')
          ->where('tugas_akhir.id_mahasiswa', '=', $id_mahasiswa)
          ->get()->first();
    	//Mahasiswa belum mengajukan ta || belum mengajukan topik
    	if ($tugas_akhir==null || $tugas_akhir->status_tugas_akhir==3 || $tugas_akhir->status_tugas_akhir==4 ) {
    		return view("mahasiswa/belum_mengajukan_topik");
    	}

    	//Sudah mengajukan TA->otomatis topik udah
    	else {
    		$topik = Topik::where('id_topik', $tugas_akhir->id_topik)->get()->first();
    		$komentars = DB::table('feedback_tugas_akhir')
    			->leftJoin('tugas_akhir', 'feedback_tugas_akhir.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
    			->where('tugas_akhir.id_mahasiswa', '=', $id_mahasiswa)
    			->leftJoin('user', 'user.id_user', '=', 'feedback_tugas_akhir.id_maker')	
    			->leftJoin('dosen', 'user.id_user', '=', 'dosen.id_user')
    			->leftJoin('mahasiswa', 'user.id_user', '=', 'mahasiswa.id_user')
    			->select('feedback_tugas_akhir.id_maker as tugas_akhir_id_maker', 'feedback_tugas_akhir.created_at as tugas_akhir_created_at', 'feedback_tugas_akhir.*', 'user.*', 'dosen.*', 'mahasiswa.*')
                ->distinct()
                ->orderBy('tugas_akhir_created_at', 'desc')
                ->get();

    		//return $komentars;
    		return view('mahasiswa/pengajuan_permohonan_ta', ['topik' => $topik->topik_ta, 'tugas_akhir' => $tugas_akhir, 'komentars' => $komentars]);
    	}
    }

    public function pengajuan_permohonan_ta_ubah() {
    	session_start();

   		$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
    	$tugas_akhir = DB::table('tugas_akhir')
          ->leftJoin('referensi_status_ta', 'tugas_akhir.status_tugas_akhir', '=', 'referensi_status_ta.id_referensi_status_ta')
          ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
          ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
          ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_pa.id_dosen')
          ->where('tugas_akhir.id_mahasiswa', '=', $id_mahasiswa)
          ->get()->first();

        $topik = Topik::where('id_topik', $tugas_akhir->id_topik)->get()->first();
		$komentars = DB::table('feedback_tugas_akhir')
			->leftJoin('tugas_akhir', 'feedback_tugas_akhir.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
	    			->where('tugas_akhir.id_mahasiswa', '=', $id_mahasiswa)
			->leftJoin('user', 'user.id_user', '=', 'feedback_tugas_akhir.id_maker')	
			->leftJoin('dosen', 'user.id_user', '=', 'dosen.id_user')
			->leftJoin('mahasiswa', 'user.id_user', '=', 'mahasiswa.id_user')
			->select('feedback_tugas_akhir.id_maker as tugas_akhir_id_maker', 'feedback_tugas_akhir.created_at as tugas_akhir_created_at', 'feedback_tugas_akhir.*', 'user.*', 'dosen.*', 'mahasiswa.*')
            ->distinct()
            ->orderBy('tugas_akhir_created_at', 'desc')
            ->get();

		//return $komentars;
		return view('mahasiswa/pengajuan_permohonan_ta_ubah', ['topik' => $topik->topik_ta, 'tugas_akhir' => $tugas_akhir, 'komentars' => $komentars]);
    }

    public function pengajuan_permohonan_ta_ubah_submit() {
    	session_start();
    	$validator = Validator::make(
        Input::all(),
        array(
           	"judul_ta" => "required",
	        )
	    );

    	if($validator->passes()) {
	    	$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
	    	$id_jenis_ta = 0;

	    	$jenjang = $_SESSION["mahasiswa"]->jenjang;
		      		if($jenjang=='S1') {
		      			$id_jenis_ta = 1;
		      		} else if ($jenjang=='S2') {
		      			$id_jenis_ta = 2;
		      		} else if($jenjang=='S3') {
		      			$id_jenis_ta = 3;
		      		}

	    	DB::table('tugas_akhir')
            ->where('id_mahasiswa', $id_mahasiswa)
            ->update(['judul_ta' => Input::get('judul_ta'), 'status_tugas_akhir' => 6, 'tgl_pengajuan' => Carbon::today()->toDateString(), 'id_jenis_ta' => $id_jenis_ta]);

            return redirect()->route('/mahasiswa/pengajuan-permohonan-ta-sukses');
	    }

	    //Data error:
	        return Redirect::to('/mahasiswa/pengajuan-permohonan-ta')
	            ->withErrors($validator)
	            ->withInput();
    }

    public function pengajuan_permohonan_ta_sukses() {
    	return view("mahasiswa/pengajuan_permohonan_ta_sukses");
    }

    public function pengajuan_permohonan_ta_submit_komentar() {
    	session_start();

   		$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
    	$tugas_akhir = DB::table('tugas_akhir')
          ->leftJoin('referensi_status_ta', 'tugas_akhir.status_tugas_akhir', '=', 'referensi_status_ta.id_referensi_status_ta')
          ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
          ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
          ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_pa.id_dosen')
          ->where('tugas_akhir.id_mahasiswa', '=', $id_mahasiswa)
          ->get()->first();

    	$feedback_tugas_akhir = new Feedback_tugas_akhir;
        $feedback_tugas_akhir->komentar = Input::get('komentar');
        $feedback_tugas_akhir->id_tugas_akhir = $tugas_akhir->id_tugas_akhir;
        $feedback_tugas_akhir->id_maker =$_SESSION["id_user"];
        $feedback_tugas_akhir->save();

        return Redirect::to('/mahasiswa/pengajuan-permohonan-ta');
    }

    public function pengajuan_permohonan_ta_submit() {
    	session_start();
    	$validator = Validator::make(
        Input::all(),
        array(
           	"judul_ta" => "required",
	        )
	    );

    	if($validator->passes()) {
	    	$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
	    	$id_jenis_ta = 0;

	    	$jenjang = $_SESSION["mahasiswa"]->jenjang;
		      		if($jenjang=='S1') {
		      			$id_jenis_ta = 1;
		      		} else if ($jenjang=='S2') {
		      			$id_jenis_ta = 2;
		      		} else if($jenjang=='S3') {
		      			$id_jenis_ta = 3;
		      		}

	    	DB::table('tugas_akhir')
            ->where('id_mahasiswa', $id_mahasiswa)
            ->update(['judul_ta' => Input::get('judul_ta'), 'status_tugas_akhir' => 6, 'tgl_pengajuan' => Carbon::today()->toDateString(), 'id_jenis_ta' => $id_jenis_ta]);

            return redirect()->route('/mahasiswa/pengajuan-permohonan-ta-sukses');
	    }

	    //Data error:
	        return Redirect::to('/mahasiswa/pengajuan-permohonan-ta')
	            ->withErrors($validator)
	            ->withInput();
    }

    function pengajuan_pembimbing_ta() {
    	session_start();
        $id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
        $tugas_akhir = Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();
        $topik = DB::table('topik')
          ->leftJoin('industri', 'topik.id_industri', '=', 'industri.id_industri')
          ->leftJoin('dosen', 'topik.id_dosen', '=', 'dosen.id_dosen')
          ->where('topik.sudah_diambil', '=', 0)
          ->get();


			if ($tugas_akhir == NULL){
				return view("mahasiswa/failed_pengajuan_pembimbing", array('tugas_akhir' => $tugas_akhir));
			}
			else if($tugas_akhir->status_tugas_akhir < 8){

				return view("mahasiswa/failed_pengajuan_pembimbing", array('tugas_akhir' => $tugas_akhir));
    		 	// return view("mahasiswa/pengajuan_topik", array('topik' => $topik));

    		}

          $dosenpembimbings = DB::table('dosen_pembimbing_ta')
            ->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_pembimbing_ta.id_dosen')
            ->where('dosen_pembimbing_ta.id_tugas_akhir', '=', $tugas_akhir->id_tugas_akhir)
            ->get()->first();
// return $dosenpembimbing;

    	

          $dosenpembimbing = DB::table('dosen')->get();

     //    $data[""] = "TEST";
    	// $data['dosenpembimbings'] = $dosenpembimbings;
    	// $data['dosenpembimbing'] = $dosenpembimbing;

    	// if(count($dosenpembimbings) > 0)
    	// 	$dosen_pembimbing = $dosenpembimbings;

        //sudah memilih topik
		$topik_yang_diambil= Topik::where('id_topik', $tugas_akhir->id_topik)->get()->first();
		//sudah mengambil tugas akhir
		if ($tugas_akhir!=NULL) {
			//jika belum ambil dosen pembimbing
          if($dosenpembimbings == NULL ){
          	// return 'test';
            $dosenpembimbing = DB::table('dosen')
            ->get();
            return view("mahasiswa/pengajuan_pembimbing_ta")->with('dosenpembimbing', $dosenpembimbing);
          }
		  //topik yang diambil dari dosen
		else if($topik_yang_diambil->id_dosen !=NULL){
			if($tugas_akhir->status_tugas_akhir==8){
			
				DB::table('tugas_akhir')
						->where('id_tugas_akhir', $tugas_akhir->id_tugas_akhir)
						->update(['id_maker' =>  $_SESSION["id_user"],'status_tugas_akhir' => 10]);
			}	
			
			  return view("mahasiswa/pengajuan_pembimbing_ta", array('dosenpembimbings' => $dosenpembimbings,  'tugas_akhir' => $tugas_akhir));
		}
		//sudah mengajukan dosen pembimbing
          else {
          	// return 'test1';
          	$id_dosen = DB::table('topik')->where('id_topik', '=', $tugas_akhir->id_topik)->get()[0]->id_dosen;
          
         	//return $tugas_akhir;
            return view("mahasiswa/pengajuan_pembimbing_ta", array('dosenpembimbings' => $dosenpembimbings, 'tugas_akhir' => $tugas_akhir));
          }

        }

    }
	//method yang hanya jalan jika dosen pembimbing menolak dan mahasiswa mengulangi pengajuan dosbem
	public function pengajuan_pembimbing_ta_submit(){
		session_start();
		 
		DB::table('dosen_pembimbing_ta')
		->where('id_tugas_akhir', '=', Input::get ('id_tugas_akhir'))
		->where('id_dosen', '=', Input::get ('id_dosen'))
		
		->delete();
		
		return redirect()->route('mahasiswa/pengajuan-pembimbing-ta');
		
	
	}

    public function detail_dosen($id_dosen){
      session_start();

        $dosenpembimbing = Dosen::where('id_dosen', $id_dosen)->get()->first();

          return view("mahasiswa/detail_dosen " , array('dosenpembimbing' => $dosenpembimbing) );


    }

    public function pengajuan_dosenpembimbing($id_dosen){

        session_start();

        $id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;

        $id_tugas_akhir = Tugas_akhir::where('id_mahasiswa', $id_mahasiswa)->get();
        // return $id_tugas_akhir;

        $dosen_pembimbing = new dosen_pembimbing;
        $dosen_pembimbing->id_dosen = $id_dosen;
        $dosen_pembimbing->id_tugas_akhir = $id_tugas_akhir->first()->id_tugas_akhir;
        $dosen_pembimbing->status_dosen_pembimbing = 1;
        $dosen_pembimbing->id_maker = $_SESSION["id_user"];
        $dosen_pembimbing->save();

        $_SESSION["mahasiswa_pengajuan_dosbing"] = true;	
        return redirect()->route('mahasiswa/pengajuan-pembimbing-ta');

    }

	public function ubah_pengajuan_pembimbing($id){

		session_start();
		$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;

			$dosbingajuanlama = dosen_pembimbing_ta::where('id', $id )->get()->first();

					//menghapus ajuan dosbing
					DB::table('dosen_pembimbing_ta')->where('id', '=', $id)->delete();
					

			return redirect()->route('mahasiswa/pengajuan-pembimbing-ta');

	}

    function pengumuman() {
        session_start();
        return view("mahasiswa/pengumuman");
    }

	public function pengajuan_topik_ta(){
		session_start();
    	return view("mahasiswa/pengajuan_topik_mandiri");
	}
	public function failed_pengajuan_sidang_ta(){
		session_start();
    	return view("mahasiswa/failed_pengajuan_sidang_ta");
	}

	public function failed_pengajuan_sidang_topik(){
		session_start();
    	return view("mahasiswa/failed_pengajuan_sidang_topik");
	}

	public function pengajuan_sidang_ta(){
		session_start();

		$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;

		$tugas_akhir= Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();

		$sidang = Pengajuan_sidang::where('id_mahasiswa', $id_mahasiswa)->get()->first();

		//Jika sudah mengambil tugas akhir
		if($tugas_akhir!= null){
			//Jika sudah siap sidang TA
			if($tugas_akhir->status_tugas_akhir>=11){
				//Jika belum mengajukan sidang
				if($sidang==null){
					//pengajuan sidang TA
					if($tugas_akhir!=NULL){
						$informasi_ta = DB::table('tugas_akhir')
							->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
							->where([['tugas_akhir.id_mahasiswa', '=', $id_mahasiswa]])
							->get()->first();
		  				return view("mahasiswa/pengajuan_sidang_ta", array('informasi_ta' => $informasi_ta, 'sidang' => $sidang));
					}
					//Jika pengajuan sidang TA ada tapi tugas akhir terhapus
					else{
						 return view("mahasiswa/failed_pengajuan_sidang_ta", array('tugas_akhir' => $tugas_akhir));
					}
				}
				//Jika sudah mengajukan sidang
				else{

					$status = Referensi_status_sidang::where('id_referensi_status_sidang', $sidang->status)->get()->first();

					$informasi_ta = DB::table('tugas_akhir')
							->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')							
							->leftJoin('dosen_pembimbing_ta', 'dosen_pembimbing_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
							->leftJoin('dosen', 'dosen_pembimbing_ta.id_dosen', '=', 'dosen.id_dosen')
							->where([['tugas_akhir.id_mahasiswa', '=', $id_mahasiswa]])
							->get()->first();
					
					$informasi_penguji = DB::table('tugas_akhir')
							->leftJoin('dosen_penguji_ta', 'dosen_penguji_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
							->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_penguji_ta.id_dosen')
							->where([['tugas_akhir.id_mahasiswa', '=', $id_mahasiswa]])
							->get();
					$i=1;

					$informasi_sidang = DB::table('pengajuan_sidang')->get()->first();

					return view("mahasiswa/pengajuan_sidang_ta", array('tugas_akhir' => $tugas_akhir, 'informasi_ta'=> $informasi_ta,'sidang' => $sidang, 'informasi_sidang'=> $informasi_sidang, 'status'=> $status, 'informasi_penguji'=> $informasi_penguji, 'i'=>$i));
				}
			}
			//Jika belum siap sidang TA
			else{
			 return view("mahasiswa/failed_pengajuan_sidang_ta", array('tugas_akhir' => $tugas_akhir));
			}
		}
		//Jika belum mengambil tugas akhir
		else{
			 return view("mahasiswa/failed_pengajuan_sidang_ta", array('tugas_akhir' => $tugas_akhir));
			}

	}

	public function pengajuan_sidang_topik(){
		session_start();
		$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;

		$tugas_akhir= Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();

		$sidang_topik = Pengajuan_sidang_topik::where('id_mahasiswa', $id_mahasiswa)->get()->first();
		
		$status_ta = 0;
		//Jika sudah mengambil topik
		if($tugas_akhir!= null){

			$status_ta = DB::table('tugas_akhir')
							->leftJoin('referensi_status_ta', 'tugas_akhir.status_tugas_akhir', '=', 'referensi_status_ta.id_referensi_status_ta')
							->where([['tugas_akhir.id_mahasiswa', '=', $id_mahasiswa]])
							->get()->first();

			//Jika sudah siap mengajukan sidang topik
			if($tugas_akhir->status_tugas_akhir>=10){
				
				if($sidang_topik!=null){

					//Jika belum mengajukan sidang topik
					if($sidang_topik->status==1){

						if($tugas_akhir!=NULL){
							//pengajuan sidang topik
							$informasi_topik = DB::table('tugas_akhir')
								->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
								->where([['tugas_akhir.id_mahasiswa', '=', $id_mahasiswa]])
								->get()->first();

			  				return view("mahasiswa/pengajuan_sidang_topik", array('informasi_topik' => $informasi_topik, 'sidang_topik' => $sidang_topik));
						}
						//Jika pengajuan sidang topik ada tapi topik terhapus
						else{
							 return view("mahasiswa/failed_pengajuan_sidang_topik", array('tugas_akhir' => $tugas_akhir,'status_ta' => $status_ta, 'sidang_topik'=>$sidang_topik));
						}
					}
					//Jika sudah mengajukan sidang topik
					else{
							$status = Referensi_status_sidang_topik::where('id_referensi_status_sidang', $sidang_topik->status)->get()->first();
							$informasi_topik = DB::table('tugas_akhir')
									->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')							
									->leftJoin('dosen_pembimbing_ta', 'dosen_pembimbing_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
									->leftJoin('dosen', 'dosen_pembimbing_ta.id_dosen', '=', 'dosen.id_dosen')
									->where([['tugas_akhir.id_mahasiswa', '=', $id_mahasiswa]])
									->get()->first();
							$informasi_penguji = DB::table('tugas_akhir')
									->leftJoin('dosen_penguji_ta', 'dosen_penguji_ta.id_tugas_akhir', '=', 'tugas_akhir.id_tugas_akhir')
									->leftJoin('dosen', 'dosen.id_dosen', '=', 'dosen_penguji_ta.id_dosen')
									->where([['tugas_akhir.id_mahasiswa', '=', $id_mahasiswa]])
									->get();
							$i=1;
							$informasi_sidang_topik = DB::table('pengajuan_sidang_topik')->get()->first();
							return view("mahasiswa/pengajuan_sidang_topik", array('tugas_akhir' => $tugas_akhir, 'informasi_topik'=> $informasi_topik,'sidang_topik' => $sidang_topik, 'informasi_sidang_topik'=> $informasi_sidang_topik, 'status'=> $status, 'informasi_penguji'=> $informasi_penguji, 'i'=>$i));				
						}
				}
				else{
			 		return view("mahasiswa/failed_pengajuan_sidang_topik", array('tugas_akhir' => $tugas_akhir,'status_ta' => $status_ta, 'sidang_topik'=>$sidang_topik));
				}
			}
		
			//Belum siap mengajukan sidang topik
			else{
			 return view("mahasiswa/failed_pengajuan_sidang_topik", array('tugas_akhir' => $tugas_akhir,'status_ta' => $status_ta, 'sidang_topik'=>$sidang_topik));
			}
		}
		//Jika belum mengambil topik
		else{
			 return view("mahasiswa/failed_pengajuan_sidang_topik", array('tugas_akhir' => $tugas_akhir, 'sidang_topik'=>$sidang_topik));
			}
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

			$tugas_akhir->status_tugas_akhir = "5";
			$tugas_akhir->id_maker = $_SESSION["id_user"];

			$tugas_akhir->save();
			$_SESSION["mahasiswa_pengajuan_topik"] = true;	
			
			return redirect()->route('mahasiswa/pengajuan-topik');
	    }

	    //Data error or username taken:
		return Redirect::to('mahasiswa/pengajuan-topik-ta')
			->withErrors($validator)
			->withInput();
    }

	public function ubah_pengajuan_topik_ta($id_topik, $id_tugas_akhir){

		session_start();
		$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;

			$topik = Topik::where('id_topik', $id_topik )->get()->first();
			//jika topik diajukan secara mandiri
			if($topik->id_dosen == NULL && $topik->id_industri == NULL )
			{

					DB::table('tugas_akhir')->where('id_tugas_akhir', '=', $id_tugas_akhir)->delete();
					DB::table('topik')->where('id_topik', '=', $id_topik)->delete();


			}
			//jika topik diajukan dosen atau industri
			else{
					//menghapus tugas akhir
					DB::table('tugas_akhir')->where('id_tugas_akhir', '=', $id_tugas_akhir)->delete();
					//menghapus row pengambil topik
					
					if($topik->id_dosen != NULL){
						DB::table('dosen_pembimbing_ta')->where('id_tugas_akhir', '=', $id_tugas_akhir)->delete();
					}


				}
				
			$_SESSION["mahasiswa_perubahan_topik"] = true;	
			return redirect()->route('mahasiswa/pengajuan-topik');
	}
	public function detail_topik_ta($id_topik){
	 	session_start();
    		$topik = Topik::where('id_topik', $id_topik )->get()->first();

			$jumlah_pengambil_topik = Tugas_akhir::where('id_topik', $id_topik )->get()->count();


			if($topik->id_industri != NULL ){

				$industri = Industri::where('id_industri', $topik->id_industri )->get()->first();

				return view("mahasiswa/detail_topik_ta " , array('topik' => $topik, 'industri' => $industri, 'jumlah_pengambil_topik' => $jumlah_pengambil_topik) );

			}
			//berarti diajukan oleh dosen
			else{
				$dosen = Dosen::where('id_dosen', $topik->id_dosen )->get()->first();


				return view("mahasiswa/detail_topik_ta " , array('topik' => $topik, 'dosen' => $dosen, 'jumlah_pengambil_topik' => $jumlah_pengambil_topik) );

			}


	}
	public function pengajuan_topik_ta_dosen_industri($id_topik){
			session_start();

			$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;



			$tugas_akhir = new Tugas_akhir;

			$tugas_akhir->id_mahasiswa = $id_mahasiswa;

			$tugas_akhir->id_topik = $id_topik;

			$tugas_akhir->status_tugas_akhir = "3";
			$tugas_akhir->id_maker = $_SESSION["id_user"];


			$tugas_akhir->save();
			
			$_SESSION["mahasiswa_pengajuan_topik"] = true;	
			return redirect()->route('mahasiswa/pengajuan-topik');

	}

	public function pengajuan_sidang_ta_submit() {
		session_start();

			$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;


			$tugas_akhir= Tugas_akhir::where('id_mahasiswa', $id_mahasiswa)->get()->first()->status_tugas_akhir;


			$id_tugas_akhir= Tugas_akhir::where('id_mahasiswa', $id_mahasiswa)->get()->first()->id_tugas_akhir;

			//Validasi: Tidak bisa mengajukan
			if($tugas_akhir<11){
			 	return view("mahasiswa/failed_pengajuan_sidang_ta", array('tugas_akhir' => $tugas_akhir));
			}

			else{
				$pengajuan_sidang = new Pengajuan_sidang;

				$pengajuan_sidang->id_mahasiswa = $id_mahasiswa;

				$pengajuan_sidang->id_maker =  $_SESSION["id_user"];

				$pengajuan_sidang->id_tugas_akhir = $id_tugas_akhir;

				$pengajuan_sidang->status = "1";

				$pengajuan_sidang->save();

				$_SESSION["mahasiswa_pengajuan_sidang"] = true;	
				
				return redirect()->route('mahasiswa/pengajuan-sidang-ta');
				//return view("validasi_keberhasilan/berhasil" , array('tugas_akhir' => $tugas_akhir));
			}
    }

    public function pengajuan_sidang_topik_submit() {
		session_start();

			$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;


			$tugas_akhir= Tugas_akhir::where('id_mahasiswa', $id_mahasiswa)->get()->first()->status_tugas_akhir;


			$id_tugas_akhir= Tugas_akhir::where('id_mahasiswa', $id_mahasiswa)->get()->first()->id_tugas_akhir;

			//Validasi: Tidak bisa mengajukan
			if($tugas_akhir<10){
			 	return view("mahasiswa/failed_pengajuan_sidang_topik", array('tugas_akhir' => $tugas_akhir));
			}

			else{

				DB::table('pengajuan_sidang_topik')
	            ->where('id_tugas_akhir', $id_tugas_akhir)
	            ->update(
				
				['id_maker' =>  $_SESSION["id_user"],
				 'status' => 2,
				]);

				$_SESSION["mahasiswa_pengajuan_sidang_topik"] = true;	
				
				return redirect()->route('mahasiswa/pengajuan-sidang-topik');
				//return view("validasi_keberhasilan/berhasil" , array('tugas_akhir' => $tugas_akhir));
			}

    }


  function upload_hasil_ta() {
    	session_start();

   		$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
    	$tugas_akhir = Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();
    	$status_ta =0;

    	if($tugas_akhir!= null){
    		$pengajuan_sidang = Pengajuan_sidang::where('id_mahasiswa', $id_mahasiswa )->get()->first();

    		$status_ta= Status_ta::where('id_referensi_status_ta', $tugas_akhir->status_tugas_akhir)->get()->first();
    		$status_sidang = 0;
    		// return $status_ta;
    		if($pengajuan_sidang!= null){
 			
    			$status_sidang= Status_sidang::where('id_referensi_status_sidang', $pengajuan_sidang->status)->get()->first();
    			//return $status_sidang;

	    		if($pengajuan_sidang->status==2 && $tugas_akhir->status_tugas_akhir>10){

			    	$id_tugas_akhir = $tugas_akhir->id_tugas_akhir;
			        $hasil_ta = Hasil_ta::where('id_tugas_akhir', $id_tugas_akhir)->get()->first();
			        $status_ta = $status_ta->id_referensi_status_ta;

			        if($hasil_ta!=NULL){
			    		return view("mahasiswa/upload_hasil_ta " , array('hasil_ta' => $hasil_ta, 'status_ta' => $status_ta) );

			    	}
			    	return view("mahasiswa/upload_hasil_ta");
			    }
			    else
			    {
			    	return view("mahasiswa/failed_upload_hasil_ta", array('status_sidang' => $status_sidang, 'status_ta' => $status_ta ));
			    }
			}
			else
			{
			    return view("mahasiswa/failed_upload_hasil_ta", array('status_sidang' => $status_sidang, 'status_ta' => $status_ta  ));
			}

	    }
	    else{

	    	return view("mahasiswa/failed_upload_hasil_ta", array( 'status_ta' => $status_ta));
	    }
    }


  function upload_hasil_taPost(Request $request)

    {	session_start();

    	$mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first();
    	$id_mahasiswa = $mahasiswa->id_mahasiswa;
    	$npm_mahasiswa = $mahasiswa->NPM;
    	$tugas_akhir = Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();
    	$id_tugas_akhir = $tugas_akhir->id_tugas_akhir;


        $hasil_ta = Hasil_ta::where('id_tugas_akhir', $id_tugas_akhir)->get()->first();




	        if($hasil_ta==NULL){
	        	$hasil_ta = new Hasil_ta;
	    		$this->validate($request, [
	            	'file' => 'required|mimes:pdf',
	       		 ]);


          		$fileName = $npm_mahasiswa.'.'.$request->file->getClientOriginalExtension();


	        	$request->file->move(public_path('files'), $fileName);

	       		$hasil_ta->dokumen = $fileName;
		        $hasil_ta->id_tugas_akhir = $id_tugas_akhir;
		        $hasil_ta->id_maker = $_SESSION["id_user"];
		        $hasil_ta->save();

		        $_SESSION["detail_upload_submit_first"] = true;	
		    	return back()
		    		->with('path',$fileName);
	    	}
    }

    	public function ubah_dokumen_ta($id_tugas_akhir){
    		session_start();

   	
			$hasil_ta = Hasil_ta::where('id_tugas_akhir', $id_tugas_akhir )->get()->first();



					DB::table('hasil_ta')->where('id_tugas_akhir', '=', $id_tugas_akhir)->delete();

					$_SESSION["mahasiswa_perubahan_dokumen"] = true;
			return redirect()->route('mahasiswa/upload-hasil-ta');
		
	}

	 	public function failed_upload_hasil_ta(){

		session_start();

    	return view("mahasiswa/failed_upload_hasil_ta");
	}


	public function mahasiswa_homepage(){
		session_start();
		$mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first();
		$tugasakhir = Tugas_akhir::select ('status_tugas_akhir')->where('id_mahasiswa', $mahasiswa->id_mahasiswa)->get()->first();
		$status="";
		$hasil_ta_final="";
		$id_tugas_akhir= Tugas_akhir::select ('id_tugas_akhir')->where('id_mahasiswa', $mahasiswa->id_mahasiswa)->get()->first();
		// $unggahberkas = Hasil_ta::select('id_hasil_ta')->where()
		
					if ($tugasakhir != NULL){
					$status = $tugasakhir->status_tugas_akhir;
					

					$hasil_ta= Hasil_ta::select ('id_hasil_ta')->where('id_tugas_akhir', $id_tugas_akhir->id_tugas_akhir)->get()->first();
					
					//udh pernah upload ta
					if ($hasil_ta!= NULL){
						$hasil_ta_final = Hasil_ta::select('dokumen_revisi')->where('id_tugas_akhir', $id_tugas_akhir->id_tugas_akhir)->get()->first();
						
					}

					//udh upload tp belum final
					
					

					if ($status == '11' && $hasil_ta != NULL && $hasil_ta_final->dokumen_revisi==NULL){
						$status = "Sudah upload";
					}

					//udh upload final
					if ($status =='12' && $hasil_ta != NULL && $hasil_ta_final->dokumen_revisi!= NULL){
						$status = "Sudah upload final";
					}

					//mahasiswa s2 yang pake sidang topik

					$status_sidang_topik = Pengajuan_sidang_topik::select ('status')->where('id_tugas_akhir', $id_tugas_akhir->id_tugas_akhir)->get()->first();
					if ($status_sidang_topik == 3){
						$status = "Siap sidang topik";

					}

				}
						 return view("mahasiswa/homepage_mahasiswa")->with('tugasakhir', $status);
						}
		
	
	

	function upload_hasil_ta_final() {
    	session_start();

   		$id_mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first()->id_mahasiswa;
    	$tugas_akhir = Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();
    	$status_ta =0;

    	if($tugas_akhir!= null){
    		$pengajuan_sidang = Pengajuan_sidang::where('id_mahasiswa', $id_mahasiswa )->get()->first();

    		$status_ta= Status_ta::where('id_referensi_status_ta', $tugas_akhir->status_tugas_akhir)->get()->first();
    	
    		
	    		if( $tugas_akhir->status_tugas_akhir==12){

			    	$id_tugas_akhir = $tugas_akhir->id_tugas_akhir;
			        $hasil_ta = Hasil_ta::where('id_tugas_akhir', $id_tugas_akhir)->get()->first();

			        if($hasil_ta->dokumen_revisi!=NULL){
			    		return view("mahasiswa/upload_hasil_ta_final " , array('hasil_ta' => $hasil_ta) );

			    	}
			    	return view("mahasiswa/upload_hasil_ta_final");
			    }
			    else
			    {
			    	return view("mahasiswa/failed_upload_hasil_ta_final", array( 'status_ta' => $status_ta ));
			    }
		}
			

	    
	    else{

	    	return view("mahasiswa/failed_upload_hasil_ta_final", array( 'status_ta' => $status_ta));
	    }
    }


  function upload_hasil_ta_finalPost(Request $request)

    {	session_start();

    	$mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first();
    	$id_mahasiswa = $mahasiswa->id_mahasiswa;
    	$npm_mahasiswa = $mahasiswa->NPM;
    	$tugas_akhir = Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();
    	$id_tugas_akhir = $tugas_akhir->id_tugas_akhir;


        $hasil_ta = Hasil_ta::where('id_tugas_akhir', $id_tugas_akhir)->get()->first();




	        if($hasil_ta!=NULL){
	        	 $id_hasil_ta = $hasil_ta->id_hasil_ta; 
	        	
	    		$this->validate($request, [
	            	'file' => 'required|mimes:pdf',
	       		 ]);


          		$fileName = $npm_mahasiswa.'_Final'.'.'.$request->file->getClientOriginalExtension();


	        	$request->file->move(public_path('files'), $fileName);
	        	//return $fileName;

				DB::table('hasil_ta')
	            ->where('id_hasil_ta', $id_hasil_ta)
	            ->update(
				
				['id_maker' =>  $_SESSION["id_user"],
				 'dokumen_revisi' => $fileName,
				]);

	            $_SESSION["detail_upload_submit_first"] = true;	
				return back()
		    		->with('path',$fileName);
		    
		}
    }


    	public function ubah_dokumen_ta_final($id_tugas_akhir){
    		session_start();

			$hasil_ta = Hasil_ta::where('id_tugas_akhir', $id_tugas_akhir )->get()->first();

 			$id_hasil_ta = $hasil_ta->id_hasil_ta; 

 			DB::table('hasil_ta')
	            ->where('id_hasil_ta', $id_hasil_ta)
	            ->update(
				
				['id_maker' =>  $_SESSION["id_user"],
				 'dokumen_revisi' => NULL,
				]);
					
					$_SESSION["mahasiswa_perubahan_dokumen"] = true;
			return redirect()->route('mahasiswa/upload-hasil-ta-final');
	}


	 	public function failed_upload_hasil_ta_final(){

		session_start();

    	return view("mahasiswa/failed_upload_hasil_ta_final");
	}

	function jadwal_bimbingan() {
		session_start();

		$mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first();
    	$id_mahasiswa = $mahasiswa->id_mahasiswa;
    	$tugas_akhir = Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();

		$dosen_pembimbing = DB::table('dosen_pembimbing_ta')
				->where('dosen_pembimbing_ta.id_tugas_akhir', $tugas_akhir->id_tugas_akhir)
				->get()->first();

		$jadwal_dosen = DB::table('jadwal_dosen')
				->leftJoin('hari', 'jadwal_dosen.id_hari','=','hari.id_hari')
				->where('jadwal_dosen.id_dosen', $dosen_pembimbing->id_dosen)->get();				

		return view("mahasiswa/jadwal_bimbingan", array( 'jadwal_dosen' => $jadwal_dosen));
	}

	function jadwal_bimbingan_submit() {
		session_start();

		$mahasiswa= Mahasiswa::where('id_user', $_SESSION["id_user"])->get()->first();
    	$id_mahasiswa = $mahasiswa->id_mahasiswa;
    	$tugas_akhir = Tugas_akhir::where('id_mahasiswa', $id_mahasiswa )->get()->first();

    	$jadwal_dosen = DB::table('jadwal_dosen')
				->leftJoin('hari', 'jadwal_dosen.id_hari','=','hari.id_hari')
				->where('jadwal_dosen.id_dosen', $dosen_pembimbing->id_dosen)->get();

		return 'tes';
		if(sizeof(Input::get('pilih_jadwal')) < 1) {
			//Todo
		}
		else if(sizeof(Input::get('pilih_jadwal')) > 3){
			//Todo
		}
		else {
			foreach (Input::get('pilih_jadwal') as $jadwals=>$j) {
				$result_explode = explode('|', $j);

				
				DB::table('jadwal_dosen')
				->where('id_jadwal_dosen', $jadwals->id_jadwal_dosen)
				->update(array('id_tugas_akhir' => $tugas_akhir->id_tugas_akhir));
			}

		}
	}
 
}
