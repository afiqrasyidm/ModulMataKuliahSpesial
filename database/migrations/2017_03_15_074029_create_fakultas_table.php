<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->increments('id_fakultas');

            $table->string('nama_fakultas',40)->unique();
            $table-> unsignedInteger ('id_universitas');
            $table->foreign('id_universitas')
            ->references('id_universitas')->on('universitas')
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
        Schema::dropIfExists('fakultas');
    }
}
