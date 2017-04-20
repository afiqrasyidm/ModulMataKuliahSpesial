<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_sidang extends Model
{
    protected $table = 'referensi_status_sidang';
    protected $fillable = ['status', 'id_maker'];
}