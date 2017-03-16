<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dosen;

class DosenPAController extends Controller
{
    function homepage_dosen_PA() {
        session_start();
        return view("dosen/PA/homepage_dosen_PA");
    }


     function pengumuman() {
        session_start();
        return view("dosen/PA/pengumuman");
    }


}
