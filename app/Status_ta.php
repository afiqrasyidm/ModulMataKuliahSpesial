<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_ta extends Model
{
    protected $table = 'referensi_status_ta';
    protected $fillable = ['status', 'id_maker'];
}