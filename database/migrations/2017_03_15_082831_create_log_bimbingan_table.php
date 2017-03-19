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
            $table->increments('id_log_bimbingan');
           
            $table->datetime('waktu_mulai');
            $table->datetime('waktu_akhir');
            $table->string('keterangan', 100);
            $table->unsignedInteger('id_tugas_akhir');
            $table->foreign('id_tugas_akhir')
            ->references('id_tugas_akhir')->on('tugas_akhir')
            ->onDelete('cascade');

            $table->timestamps();
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
