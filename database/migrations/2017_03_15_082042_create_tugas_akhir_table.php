<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasAkhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_akhir', function (Blueprint $table) {
            $table->increments('id_tugas_akhir');
            $table->string('status_tugas_akhir', 3);
            $table->date('tgl_pengajuan');
            $table->unsignedInteger('id_jenis_ta');
            $table->foreign('id_jenis_ta')
            ->references('id_jenis_ta')->on('jenis_ta')
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
        Schema::dropIfExists('tugas_akhir');
    }
}
