<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengambil_topik extends Model
{
    protected $table = 'pengambil_topik';
	protected $fillable = ['id_pengambil_topik','id_mahasiswa', 'id_topik'];

	
}
