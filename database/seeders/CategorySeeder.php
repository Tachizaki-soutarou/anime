<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                [
                    // 1
                    'category_name' => 'SF/ファンタジー'
                ],
                [
                    // 2
                    'category_name' => 'ダークファンタジー'
                ],
                [
                    // 3
                    'category_name' => 'アクション/バトル'
                ],
                [
                    // 4
                    'category_name' => 'コメディ'
                ],
                [
                    // 5
                    'category_name' => 'ドラマ'
                ],
                [
                    // 6
                    'category_name' => 'サスペンス'
                ],
                [
                    // 7
                    'category_name' => 'アドベンチャー'
                ],
                [
                    // 8
                    'category_name' => '学園/青春'
                ],
                [
                    // 9
                    'category_name' => 'サバイバル'
                ],
                [
                    // 10
                    'category_name' => 'ラブコメディ'
                ],
                [
                    // 11
                    'category_name' => 'ロボット/メカ'
                ]
         ]);
    }
}
