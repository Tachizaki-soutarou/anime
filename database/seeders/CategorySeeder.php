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
                    'category_name' => 'SF'
                ],
                [
                    // 2
                    'category_name' => 'ファンタジー'
                ],
                [
                    // 3
                    'category_name' => 'ダークファンタジー'
                ],
                [
                    // 4
                    'category_name' => 'アクション/バトル'
                ],
                [
                    // 5
                    'category_name' => 'コメディ'
                ],
                [
                    // 6
                    'category_name' => 'ドラマ'
                ],
                [
                    // 7
                    'category_name' => 'サスペンス'
                ],
                [
                    // 8
                    'category_name' => 'ホラー'
                ],
                [
                    // 9
                    'category_name' => 'アドベンチャー'
                ],
                [
                    // 10
                    'category_name' => '学園/青春'
                ],
                [
                    // 11
                    'category_name' => 'サバイバル'
                ],
                [
                    // 12
                    'category_name' => 'ラブコメディ'
                ],
                [
                    // 13
                    'category_name' => 'ロボット/メカ'
                ]
         ]);
    }
}
