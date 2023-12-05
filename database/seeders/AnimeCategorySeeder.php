<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('anime_category')->insert([
                // 呪術廻戦
                [
                    'anime_id' => 1, 
                    'category_id' => 2
                ],
                [
                    'anime_id' => 1,
                    'category_id' => 3
                ],
                // メイドインアビス
                [
                    'anime_id' => 2,
                    'category_id' => 2
                ],
                [
                    'anime_id' => 2,
                    'category_id' => 7
                ],
                // SPY×FAMILY
                [
                    'anime_id' => 3,
                    'category_id' => 3
                ],
                [
                    'anime_id' => 3,
                    'category_id' => 4
                ],
                // ヴァイオレット・エヴァーガーデン
                [
                    'anime_id' => 4,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 4,
                    'category_id' => 5
                ],
                // ノラガミ
                [
                    'anime_id' => 5,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 5,
                    'category_id' => 3
                ],
                // ソードアート・オンライン
                [
                    'anime_id' => 6,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 6,
                    'category_id' => 3
                ],
                // 鬼滅の刃
                [
                    'anime_id' => 7,
                    'category_id' => 2
                ],
                [
                    'anime_id' => 7,
                    'category_id' => 3
                ],
                // この素晴らしい世界に祝福を！
                [
                    'anime_id' => 8,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 8,
                    'category_id' => 4
                ],
                // 暗殺教室
                [
                    'anime_id' => 9,
                    'category_id' => 4
                ],
                [
                    'anime_id' => 9,
                    'category_id' => 8
                ],
                // 転生したらスライムだった件
                [
                    'anime_id' => 10,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 10,
                    'category_id' => 3
                ],
                // 陰の実力者になりたくて！
                [
                    'anime_id' => 11,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 11,
                    'category_id' => 4
                ],
                // 約束のネバーランド
                [
                    'anime_id' => 12,
                    'category_id' => 2
                ],
                [
                    'anime_id' => 12,
                    'category_id' => 6
                ],
                // Dr.STONE --ドクターストーン--
                [
                    'anime_id' => 13,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 13,
                    'category_id' => 9
                ]
         ]);
    }
}
