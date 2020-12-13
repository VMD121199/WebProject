<?php

use Illuminate\Database\Seeder;

class TieuchuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$results = DB::table('tieuchuans')->insert([
        	['tentieuchuan'=>'Tiêu chuẩn 1','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 2','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 3','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 4','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 5','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 6','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 7','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 8','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 9','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 10','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 11','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 12','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 13','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 14','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 15','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 16','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 17','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 18','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 19','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 20','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 21','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 22','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 23','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 24','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 25','cap_id'=>'1'],
        	['tentieuchuan'=>'Tiêu chuẩn 1','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 2','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 3','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 4','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 5','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 6','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 7','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 8','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 9','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 10','cap_id'=>'2'],
        	['tentieuchuan'=>'Tiêu chuẩn 11','cap_id'=>'2'],
        ]);
    }
}
