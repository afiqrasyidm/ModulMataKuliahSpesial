<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_pembimbing extends Model
{
  protected $table = 'dosen_pembimbing_ta';
  protected $fillable = ['id', 'id_dosen', 'id_tugas_akhir'];
}
