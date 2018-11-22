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
            'create_time' => '2018-11-02 19:10',
            'user_id' => '1',
            'contractor_id' => '1',
            'tel' => '03-1111-2222',
            'tel2' => '',
            'income' => '岡田',
            'relation' => '父',
            'overview' => '雨漏り',
            'sales' => 'エッジクルー',
            'agency' => 'AKIBAラボ',
            'contents' => '雨漏りしているので、修繕を依頼',
            'response' => '修繕業者を手配',
            'work' => '業者作業完了',
            'contact' => '岡田（携帯）',
            'contact_n' => '080-1111-2222',
            'call_time' => '午前中',
            'status' => '3'
        ]);
        DB::table('inquiry')->insert([
            'create_time' => '2018-11-11 09:27',
            'user_id' => '2',
            'contractor_id' => '2',
            'tel' => '03-0000-0000',
            'tel2' => '',
            'income' => '早坂',
            'relation' => '本人',
            'overview' => 'ユニットバスの浴槽にヒビ',
            'sales' => 'エッジクルー',
            'agency' => 'AKIBAラボ',
            'contents' => '愛用しているユニットバスが壊れたので、修繕を依頼',
            'response' => '',
            'work' => '',
            'contact' => '早坂（携帯）',
            'contact_n' => '080-0000-0000',
            'call_time' => '午前中',
            'status' => '0'
        ]);
        DB::table('inquiry')->insert([
            'create_time' => '2018-11-02 09:27',
            'user_id' => '2',
            'contractor_id' => '1',
            'tel' => '03-0000-0001',
            'tel2' => '',
            'income' => '岡田',
            'relation' => '本人',
            'overview' => '浴槽にヒビ',
            'sales' => 'エッジクルー',
            'agency' => 'AKIBAラボ',
            'contents' => '水が漏れてしまうとのことで、修繕を依頼',
            'response' => '業者手配',
            'work' => '',
            'contact' => '岡田（携帯）',
            'contact_n' => '080-0000-1111',
            'call_time' => 'いつでもOK',
            'status' => '1'
        ]);
    }
}
