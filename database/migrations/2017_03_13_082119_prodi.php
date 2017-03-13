<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prodi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	
    { 
	
		Schema::create('prodi', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nama',40)->unique();
            
			$table-> unsignedInteger ('id_fakultas');
           $table->foreign('id_fakultas')
            ->references('id')->on('fakultas')
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
