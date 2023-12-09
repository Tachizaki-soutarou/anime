<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'last_name' => '立崎',
                'first_name' => '壮太郎',
                'nick_name' => 'S太',
                'birth_date' => Carbon::create('2000', '11', '17'), // YYYY, MM, DD
                'sex' => 1,
                'email' => 'php.portfolio1117@gmail.com',
                'password' => bcrypt('tachizaki4855')
            ]
            // [
            //     'last_name' => '山田',
            //     'first_name' => '龍太郎',
            //     'nick_name' => 'やまたろう',
            //     'sex' => '男性',
            //     'age' => '25',
            //     'email' => 'taro.yamada1111@gmail.com',
            //     'password' => bcrypt('yamada1111')
            // ]
        ]);
    }
}