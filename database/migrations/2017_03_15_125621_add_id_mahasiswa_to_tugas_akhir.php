<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdMahasiswaToTugasAkhir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tugas_akhir', function (Blueprint $table) {
            $table->unsignedInteger('id_mahasiswa')->after('id_jenis_ta');
			
			
			
            $table->foreign('id_mahasiswa')
            ->references('id_mahasiswa')->on('mahasiswa')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
