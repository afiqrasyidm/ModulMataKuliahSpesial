<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_sidang_topik extends Model
{
    protected $table = 'referensi_status_sidang_topik';
    protected $fillable = ['status', 'id_maker'];
}