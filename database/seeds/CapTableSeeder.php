<?php

use Illuminate\Database\Seeder;

class CapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caps')->insert([
        	['tencap'=>'CSGD'],
        	['tencap'=>'CTĐT']
        ]);
    }
}
