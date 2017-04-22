<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback_tugas_akhir extends Model
{
    protected $table = 'feedback_tugas_akhir';
    protected $fillable = ['id_feedback_tugas_akhir', 'komentar', 'id_maker', 'id_tugas_akhir'];
}