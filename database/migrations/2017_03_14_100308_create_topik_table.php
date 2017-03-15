<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topik', function (Blueprint $table) {
            $table->increments('id_topik');
            $table->timestamps();

            $table->string('judul_topik', 40)->unique;
            $table->string('deskripsi', 150);
            $table->foreign('id_user_dosen')
            ->references('id_user_dosen')->on('dosen')
            ->onDelete('cascade');
            $table->foreign('id_user_industri')
            ->references('id_user_industri')->on('industri')
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
        Schema::dropIfExists('topik');
    }
}
