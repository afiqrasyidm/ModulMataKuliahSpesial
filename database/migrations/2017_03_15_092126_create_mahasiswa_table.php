<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id_mahasiswa');
            $table->string('nama_mahasiswa', 50);
            $table->string('NPM', 15);
			
			$table->string('email', 30);
			$table->integer('jumlah_sks');
			$table->integer('semester');
			
			
			$table->string('jenjang', 2);
						
			
			
			
			
			

            $table-> unsignedInteger ('id_user');
			
			
			
            $table->foreign('id_user')
            ->references('id_user')->on('user')
            ->onDelete('cascade');
            
			
			
            $table-> unsignedInteger ('id_tugas_akhir');
			
			
			
            $table->foreign('id_tugas_akhir')
            ->references('id_tugas_akhir')->on('tugas_akhir')
            ->onDelete('cascade');
            
			
            $table-> unsignedInteger ('id_prodi');
			
			
			
            $table->foreign('id_prodi')
            ->references('id_prodi')->on('prodi')
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
        //
    }
}
