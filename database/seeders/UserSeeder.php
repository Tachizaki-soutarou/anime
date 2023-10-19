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
                'email' => 'php.portfolio1117@gmail.com',
                'last_name' => '立崎',
                'first_name' => '壮太郎',
                'nick_name' => 'S太',
                'sex' => '男性',
                'age' => '22',
                'password' => bcrypt('tachizaki4855'),
        ]);
    }
}