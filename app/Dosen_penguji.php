<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_penguji extends Model
{
   protected $table = 'dosen_penguji_ta';
  protected $fillable = ['id', 'id_dosen', 'id_tugas_akhir'];
}
