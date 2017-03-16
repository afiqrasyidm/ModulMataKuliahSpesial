<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dosen;

class DosenPengujiController extends Controller
{
    function home_dosen_penguji() {
        session_start();
        return view("dosen/DosenPenguji/home_dosen_penguji");
    }
    
    function atur_jadwal_sidang_dosen_penguji() {
    	session_start();
    	return view("dosen/DosenPenguji/atur_jadwal_sidang_dosen_penguji");
    }

    function feedback_sidang_dosen_penguji() {
    	session_start();
    	return view("dosen/DosenPenguji/feedback_sidang_dosen_penguji");
    }

    function feedback_sidang_mahasiswa_dosen_penguji() {
    	session_start();
    	return view("dosen/DosenPenguji/feedback_sidang_mahasiswa_dosen_penguji");
    }

   function hasil_ta() {
        session_start();
        return view("dosen/DosenPenguji/hasil_ta");
    }

    function pengumuman() {
        session_start();
        return view("dosen/DosenPenguji/pengumuman");
    }



}
