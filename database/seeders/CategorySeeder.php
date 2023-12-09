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
                    'category_name' => 'SF/ファンタジー'
                ],
                [
                    'category_name' => 'ダークファンタジー'
                ],
                [
                    'category_name' => 'アクション/バトル'
                ],
                [
                    'category_name' => 'コメディ'
                ],
                [
                    'category_name' => 'ドラマ'
                ],
                [
                    'category_name' => 'サスペンス'
                ],
                [
                    'category_name' => 'アドベンチャー'
                ],
                [
                    'category_name' => '学園/青春'
                ],
                [
                    'category_name' => 'サバイバル'
                ],
                [
                    'category_name' => 'ラブコメディ'
                ],
                [
                    'category_name' => 'ロボット/メカ'
                ]
         ]);
    }
}
