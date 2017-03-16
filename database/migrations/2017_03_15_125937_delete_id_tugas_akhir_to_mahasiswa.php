<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteIdTugasAkhirToMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('mahasiswa', function($table) {
             $table->dropForeign('mahasiswa_id_tugas_akhir_foreign');
			 
			 $table->dropColumn('id_tugas_akhir');
          
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
