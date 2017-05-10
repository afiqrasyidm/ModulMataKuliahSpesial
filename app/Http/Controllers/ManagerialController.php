<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staf;
use App\Dosen;
use Carbon\Carbon;
use App\Pengajuan_sidang;
use App\Dosen_penguji;
use Validator;
use Redirect;



class ManagerialController extends Controller
{
	public function managerial_homepage(){
		session_start();
		
		   $ta_perfakulas = DB::table('tugas_akhir')
			->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
			->leftJoin('prodi', 'prodi.id_prodi', '=', 'mahasiswa.id_prodi')
			->leftJoin('fakultas', 'fakultas.id_fakultas', '=', 'prodi.id_prodi')
			->whereYear('tugas_akhir.created_at', date('Y'))
			->get();
		
		   $ta_pertahun = DB::table('tugas_akhir')
			->get();
		
		   $jumlah_dosen = DB::table('dosen')
			->count();
		
		  
		   $jumlah_industri = DB::table('industri')
			->count();
		
			$topik = DB::table('topik')
			
			->where('topik.created_at', date('Y'))
			->get();
			
			
			  $jumlah_mahasiswa = DB::table('mahasiswa')
			->count();
		
		return view('managerial/homepage_managerial' , array( 'jumlah_mahasiswa' => $jumlah_mahasiswa,'topik' => $topik,'jumlah_dosen'=> $jumlah_dosen, 'jumlah_industri' => $jumlah_industri,'ta_pertahun'=>$ta_pertahun ,'ta_perfakulas' => $ta_perfakulas, 'tahun'=> date('Y')));
	}
}
