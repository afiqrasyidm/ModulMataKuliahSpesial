<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    protected $table = 'industri';
    protected $fillable = ['id_user', 'email', 'nama_industri' , 'nama_lengkap', 'jabatan'];
}