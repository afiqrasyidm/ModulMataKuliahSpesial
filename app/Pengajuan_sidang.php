<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan_sidang extends Model
{
    protected $table = 'pengajuan_sidang';
    protected $fillable = ['id_pengajuan_sidang', 'id_mahasiswa', 'tanggal_pengajuan', 'status'];
}
