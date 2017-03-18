<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staf;
use SSO\SSO;

class IndustriController extends Controller
{
	
<<<<<<< HEAD
	 // var $industri;
	 
	 
  //    public function __construct() {
  //       $this->industri = Industri::all(array('nama'));
    
	
	function pengajuan_topik_ta () {
=======
	function pengajuan_topik_ta() {
>>>>>>> 44ca8e355d876b27eb0f5d67b28ac201876719c0

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

}
