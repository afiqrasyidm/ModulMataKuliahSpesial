<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referensi_status_ta extends Model
{
     protected $table = 'referensi_status_ta';
  	protected $fillable = ['id_referensi_status_ta', 'status', 'id_maker'];
}
