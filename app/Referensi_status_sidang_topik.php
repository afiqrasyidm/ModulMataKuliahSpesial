<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referensi_status_sidang_topik extends Model
{
   protected $table = 'referensi_status_sidang_topik';
   protected $fillable = ['id_referensi_status_sidang', 'status', 'id_maker'];
}
