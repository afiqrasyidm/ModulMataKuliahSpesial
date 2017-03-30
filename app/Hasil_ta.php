<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil_ta extends Model
{
    protected $table = 'hasil_ta';
    protected $fillable = ['id_hasil_ta', 'tgl_submit', 'dokumen', 'dokumen_revisi', 'nilai_ta', 'id_tugas_akhir']; 
}
