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
                'star' => '4',
                'comment_title' => 'マジで好き',
                'comment' => 'キャラの絵がかわいい',
                'user_id' => '1',
                'anime_id' => '2'
            ]
         ]);
    }
}
