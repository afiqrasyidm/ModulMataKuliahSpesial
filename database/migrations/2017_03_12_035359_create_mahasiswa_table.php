<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id_user');
            $table->timestamps();

            $table->string('npm', 10);
            $table->string('nama_mahasiswa', 50);
            $table->string('email', 30);
            $table->integer('jumlah_sks');
            $table->integer('semester');
            $table->string('jenjang', 2);

            $table->integer('id_tugas_akhir');
            $table->integer('id_prodi');
            $table->integer('id_topik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
