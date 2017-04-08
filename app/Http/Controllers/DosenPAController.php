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
	
	public function pengajuan_topik_ta() {
        session_start();
        return view("dosen/pengajuan_topik_dosen");
    }

    public function verifikasi_permohonan_ta() {
        session_start();
        $id_dosen= Dosen::where('id_user', $_SESSION["id_user"])->get()->first()->id_dosen;

        $tugas_akhir = DB::table('tugas_akhir')
                ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('prodi', 'prodi.id_prodi', '=', 'mahasiswa.id_prodi')
                ->leftJoin('fakultas', 'fakultas.id_fakultas', '=', 'prodi.id_fakultas')
                ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
                ->where('dosen_pa.id_dosen', '=', $id_dosen)
                ->get();

        //return $tugas_akhir;

        return view("dosen/PA/verifikasi_pengajuan_ta", ['tugas_akhir' => $tugas_akhir]);
    }


}
