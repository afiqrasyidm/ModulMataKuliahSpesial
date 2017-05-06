<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan_sidang_topik extends Model
{
    protected $table = 'pengajuan_sidang_topik';
    protected $fillable = ['id_pengajuan','tanggal_pengajuan','status','id_mahasiswa'];
}
