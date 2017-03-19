<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
      protected $table = 'Fakultas';
    protected $fillable = ['nama_fakultas', ' id_universitas'];
}
