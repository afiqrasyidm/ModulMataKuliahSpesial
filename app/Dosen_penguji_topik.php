<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_penguji_topik extends Model
{
  protected $table = 'dosen_penguji_topik';
  protected $fillable = ['id', 'id_dosen', 'id_tugas_akhir'];
  public $timestamps = false;
}
