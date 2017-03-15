<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilTaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_ta', function (Blueprint $table) {
            $table->increments('id_hasil_ta');

            $table->date('tgl_submit');
            $table->string('dokumen');
            $table->string('dokumen_revisi');
            $table->double('nilai_ta');
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
        Schema::dropIfExists('hasil_ta');
    }
}
