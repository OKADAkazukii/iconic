<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InquiryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inquiry')->insert([
            'create_time' => '2018-11-02',
            'user_id' => '1',
            'contractor_id' => '1',
            'tel' => '03-1111-2222',
            'income' => '岡田',
            'relation' => '父',
            'overview' => '雨漏り',
            'sales' => 'エッジクルー',
            'agency' => 'AKIBAラボ',
            'contents' => '雨漏りしているので、修繕を依頼',
            'response' => '修繕業者を手配',
            'work' => 'UNKNOWN',
            'contact' => '岡田（携帯）',
            'contact_n' => '080-1111-2222',
            'call_time' => '午前中'
        ]);
    }
}
