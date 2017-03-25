<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas_akhir extends Model
{
    protected $table = 'tugas_akhir';
    protected $fillable = ['id_tugas_akhir', 'status_tugas_akhir', 'tgl_pengajuan', 'id_jenis_ta', 'id_mahasiswa', 'judul_ta', 'id_topik'];
}
