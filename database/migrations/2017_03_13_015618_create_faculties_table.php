<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('faculties', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nama',40)->unique();
            $table-> unsignedInteger ('id_universitas');
            $table->foreign('id_universitas')
            ->references('id')->on('universities')
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
