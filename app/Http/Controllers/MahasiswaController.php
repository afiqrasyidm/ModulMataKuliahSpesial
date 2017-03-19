<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use App\Topik;

class MahasiswaController extends Controller
{
    function pengajuan_topik() {
    	session_start();
		
		
		$topik = DB::table('topik')
            ->leftJoin('industri', 'topik.id_industri', '=', 'industri.id_industri')
            ->leftJoin('dosen', 'topik.id_dosen', '=', 'dosen.id_dosen')
			->where('topik.sudah_diambil', '=', 0)
            ->get();
	
	
    	return view("mahasiswa/pengajuan_topik", array('topik' => $topik));
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
}
