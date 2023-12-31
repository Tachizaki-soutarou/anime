<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OriginalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('originals')->insert([
                [
                    'original_name' => '漫画'
                ],
                [
                    'original_name' => '小説'
                ],
                [
                    'original_name' => 'アニメ'
                ]
         ]);
    }
}
