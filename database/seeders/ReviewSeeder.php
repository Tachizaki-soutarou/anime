<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
                [
                    'star' => '2',
                    'comment' => 'おもしろい',
                    'user_id' => '1',
                    'anime_id' => '1'
                ],
                [
                    'star' => '3',
                    'comment' => 'すごくおもしろい',
                    'user_id' => '1',
                    'anime_id' => '1'
                ],
                [
                    'star' => '4',
                    'comment' => '超おもしろい',
                    'user_id' => '1',
                    'anime_id' => '1'
                ]
         ]);
    }
}
