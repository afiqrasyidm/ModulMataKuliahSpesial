<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dosen;
use App\Feedback_tugas_akhir;
use Illuminate\Support\Facades\Input;

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
	
	function pengajuan_topik_ta() {
        session_start();
        return view("dosen/pengajuan_topik_dosen");
    }

    function verifikasi_permohonan_ta() {
        session_start();
        $id_dosen= Dosen::where('id_user', $_SESSION["id_user"])->get()->first()->id_dosen;

        $tugas_akhir = DB::table('tugas_akhir')
                ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('prodi', 'prodi.id_prodi', '=', 'mahasiswa.id_prodi')
                ->leftJoin('fakultas', 'fakultas.id_fakultas', '=', 'prodi.id_fakultas')
                ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
                ->where('dosen_pa.id_dosen', '=', $id_dosen)
                ->where('tugas_akhir.status_tugas_akhir','>=','6')
                ->orderBy('tugas_akhir.status_tugas_akhir', 'ASC')
                ->get();

        //return $tugas_akhir;

        return view("dosen/PA/verifikasi_pengajuan_ta", ['tugas_akhir' => $tugas_akhir]);
    }

    function detail_permohonan_ta($id_tugas_akhir) {
        session_start();

        $tugas_akhir = DB::table('tugas_akhir')
                ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('prodi', 'prodi.id_prodi', '=', 'mahasiswa.id_prodi')
                ->leftJoin('fakultas', 'fakultas.id_fakultas', '=', 'prodi.id_fakultas')
                ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
                ->where('tugas_akhir.id_tugas_akhir','=', $id_tugas_akhir)
                ->get()
                ->first();
        //return $tugas_akhir;
        return view("dosen/PA/detail_permohonan_ta", ['tugas_akhir' => $tugas_akhir]);
    }

    function detail_permohonan_ta_submit($id_tugas_akhir) {
        session_start();
        $feedback_tugas_akhir = new Feedback_tugas_akhir;
        $feedback_tugas_akhir->komentar = Input::get('feedback');
        $feedback_tugas_akhir->id_tugas_akhir = $id_tugas_akhir;

        if (Input::get('action')=='Setujui') {
            $this->setujui_permohonan_ta($id_tugas_akhir);
        } else if (Input::get('action')=='Tolak') {
            $this->tolak_permohonan_ta();
        } else {
            return 'Something Error!';
        }
    }

    function setujui_permohonan_ta($id_tugas_akhir) {
        $tugas_akhir = DB::table('tugas_akhir')
            ->where('tugas_akhir.id_tugas_akhir','=', $id_tugas_akhir)
            ->update(['status_tugas_akhir' => 7]);

        $tugas_akhir = DB::table('tugas_akhir')
                ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('prodi', 'prodi.id_prodi', '=', 'mahasiswa.id_prodi')
                ->leftJoin('fakultas', 'fakultas.id_fakultas', '=', 'prodi.id_fakultas')
                ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
                ->where('dosen_pa.id_dosen', '=', $id_dosen)
                ->where('tugas_akhir.status_tugas_akhir','>=','6')
                ->orderBy('tugas_akhir.status_tugas_akhir', 'ASC')
                ->get();

        //return $tugas_akhir;

        return view("dosen/PA/verifikasi_pengajuan_ta", ['tugas_akhir' => $tugas_akhir]);
    }

    function tolak_permohonan_ta() {

        DB::table('feedback_tugas_akhir')
            ->insert(['feedback_dosen_pa'=> Input::get('feedback'), "id_tugas_akhir"=> $id_tugas_akhir]);

        $tugas_akhir = DB::table('tugas_akhir')
                ->leftJoin('dosen_pa', 'dosen_pa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'tugas_akhir.id_mahasiswa')
                ->leftJoin('prodi', 'prodi.id_prodi', '=', 'mahasiswa.id_prodi')
                ->leftJoin('fakultas', 'fakultas.id_fakultas', '=', 'prodi.id_fakultas')
                ->leftJoin('topik', 'topik.id_topik', '=', 'tugas_akhir.id_topik')
                ->where('dosen_pa.id_dosen', '=', $id_dosen)
                ->where('tugas_akhir.status_tugas_akhir','>=','6')
                ->orderBy('tugas_akhir.status_tugas_akhir', 'ASC')
                ->get();

        //return $tugas_akhir;

        return view("dosen/PA/verifikasi_pengajuan_ta", ['tugas_akhir' => $tugas_akhir]);
    }
}
