<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industri', function (Blueprint $table) {
            $table->increments('id_industri');
            $table->string('email', 30);
            $table->string('nama_industri', 50);
            $table->string('nama_lengkap', 50);
            $table->string('jabatan', 30);

            $table-> unsignedInteger ('id_user');
            $table->foreign('id_user')
            ->references('id_user')->on('user')
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
        Schema::dropIfExists('industri');
    }
}
