<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topik extends Model
{
    protected $table = 'topik';
    protected $fillable = ['id_topik', 'judul_topik', 'deskripsi', 'id_user_dosen', 'id_user_industri'];
}