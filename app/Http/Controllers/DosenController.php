<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dosen;

class DosenController extends Controller
{
    function pilih_role() {
        session_start();
        return view("dosen/pilih_role");
    }
    
    function atur_jadwal_sidang() {
    	session_start();
    	return view("dosen/atur_jadwal_sidang");
    }

    function feedback_sidang() {
    	session_start();
    	return view("dosen/feedback_sidang");
    }

    function feedback_sidang_mahasiswa() {
    	session_start();
    	return view("dosen/feedback_sidang_mahasiswa");
    }
}
