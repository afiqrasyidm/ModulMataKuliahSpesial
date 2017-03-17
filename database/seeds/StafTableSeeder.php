<?php

use Illuminate\Database\Seeder;

class StafTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('stafs')->insert([
            'nama' => 'Ojan',
            'nik' => '123',
        ]);
		DB::table('stafs')->insert([
            'nama' => 'Ojan1',
            'nik' => '1232',
        ]);
		DB::table('stafs')->insert([
            'nama' => 'Ojan2',
            'nik' => '1233',
        ]);
		DB::table('stafs')->insert([
            'nama' => 'Ojan12',
            'nik' => '1234',
        ]);
    }
}
