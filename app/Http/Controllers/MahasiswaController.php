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
}
