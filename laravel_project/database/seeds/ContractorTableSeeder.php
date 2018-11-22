<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('contractor')->insert([
            'name' => '岡田 和樹',
            'service_s' => '2018-10-01',
            'postal' => '121-1111',
            'address' => '東京都',
            'room_number' => '',
        ]);
       DB::table('contractor')->insert([
            'name' => '早坂 重信',
            'service_s' => '2018-10-21',
            'postal' => '121-1234',
            'address' => '福岡県',
            'room_number' => '002',
        ]);
    }
}
