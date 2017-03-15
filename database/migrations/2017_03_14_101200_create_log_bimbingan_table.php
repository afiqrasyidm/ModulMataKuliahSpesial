<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogBimbinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_bimbingan', function (Blueprint $table) {
            $table->increments('id_bimbingan');
            $table->timestamps();

            $table->timestamps('waktu_mulai');
            $table->timestamps('waktu_akhir');
            $table->string('keterangan', 100);
            $table->foreign('id_tugas_akhir')
            ->references('id_tugas_akhir')->on('tugas_akhir')
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
        Schema::dropIfExists('log_bimbingan');
    }
}
