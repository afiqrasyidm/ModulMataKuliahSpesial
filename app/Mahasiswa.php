<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['npm', 'nama_mahasiswa', 'email', 'jumlah_sks', 'semester', 'jenjang'];
}