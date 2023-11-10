<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'email' => 'php.portfolio1117@gmail.com',
                'last_name' => '立崎',
                'first_name' => '壮太郎',
                'nick_name' => 'S太',
                'sex' => '男性',
                'age' => '22',
                'password' => bcrypt('tachizaki4855')
            ],
            [
                'email' => 'taro.yamada1111@gmail.com',
                'last_name' => '山田',
                'first_name' => '龍太郎',
                'nick_name' => 'やまたろう',
                'sex' => '男性',
                'age' => '25',
                'password' => bcrypt('yamada1111')
            ],
            [
                'email' => 'sakura.tanaka2222@gmail.com',
                'last_name' => '田中',
                'first_name' => '桜',
                'nick_name' => 'さっくー',
                'sex' => '女性',
                'age' => '23',
                'password' => bcrypt('tanaka2222')
            ]
        ]);
    }
}