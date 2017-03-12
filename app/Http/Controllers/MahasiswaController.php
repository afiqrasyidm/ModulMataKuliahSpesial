<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    function pengajuan_topik() {
    	session_start();
    	return view("mahasiswa/pengajuan_topik");
    }

    function pengajuan_permohonan_ta() {
    	session_start();
    	return view("mahasiswa/pengajuan_permohonan_ta");
    }

    function pengajuan_pembimbing_ta() {
    	session_start();
    	return view("mahasiswa/pengajuan_pembimbing_ta");
    }
}
