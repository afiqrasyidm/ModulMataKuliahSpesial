<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staf;
use SSO\SSO;

class IndustriController extends Controller
{
	
	function pengajuan_topik_ta() {

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
