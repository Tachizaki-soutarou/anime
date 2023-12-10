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
                'last_name' => '山田',
                'first_name' => '龍太郎',
                'nick_name' => 'やまたろう',
                'birth_date' => Carbon::create('1998', '04', '19'), // YYYY, MM, DD
                'sex' => 2,
                'email' => 'yamada.ryutaro1111@gmail.com',
                'password' => bcrypt('soutarou1117')
            ],
            [
                'last_name' => '一ノ瀬',
                'first_name' => '巧',
                'nick_name' => 'たっくん',
                'birth_date' => Carbon::create('1977', '12', '12'), // YYYY, MM, DD
                'sex' => 2,
                'email' => 'ichinose.takumi2222@gmail.com',
                'password' => bcrypt('ichinosetakumi')
            ]
        ]);
    }
}