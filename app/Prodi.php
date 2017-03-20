<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'Prodi';
    protected $fillable = ['nama_prodi', 'id_fakultas'];
}
