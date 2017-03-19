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

            $table->string('judul_topik', 40)->unique;
            $table->string('deskripsi', 150);
            $table->unsignedInteger('id_dosen');
            $table->foreign('id_dosen')
            ->references('id_user')->on('dosen')
            ->onDelete('cascade');
            $table->unsignedInteger('id_industri');
            $table->foreign('id_industri')
            ->references('id_user')->on('industri')
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
        Schema::dropIfExists('topik');
    }
}
