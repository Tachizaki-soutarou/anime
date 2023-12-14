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
                ],
                // からかい上手の高木さん
                [
                    'anime_id' => 14,
                    'category_id' => 8
                ],
                [
                    'anime_id' => 14,
                    'category_id' => 10
                ],
                // 無職転生 ～異世界行ったら本気だす～
                [
                    'anime_id' => 15,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 15,
                    'category_id' => 3
                ],
                // コードギアス 反逆のルルーシュ
                [
                    'anime_id' => 16,
                    'category_id' => 2
                ],
                [
                    'anime_id' => 16,
                    'category_id' => 11
                ],
                // チェンソーマン
                [
                    'anime_id' => 17,
                    'category_id' => 2
                ],
                [
                    'anime_id' => 17,
                    'category_id' => 3
                ],
                // Re:ゼロから始める異世界生活
                [
                    'anime_id' => 18,
                    'category_id' => 2
                ],
                [
                    'anime_id' => 18,
                    'category_id' => 3
                ],
                // 五等分の花嫁
                [
                    'anime_id' => 19,
                    'category_id' => 8
                ],
                [
                    'anime_id' => 19,
                    'category_id' => 10
                ],
                // ノーゲーム・ノーライフ
                [
                    'anime_id' => 20,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 20,
                    'category_id' => 4
                ],
                // 魔法少女まどか☆マギカ
                [
                    'anime_id' => 21,
                    'category_id' => 1
                ],
                [
                    'anime_id' => 21,
                    'category_id' => 2
                ],
                // ようこそ実力至上主義の教室へ
                [
                    'anime_id' => 22,
                    'category_id' => 6
                ],
                [
                    'anime_id' => 22,
                    'category_id' => 8
                ],
                // 東京喰種
                [
                    'anime_id' => 23,
                    'category_id' => 2
                ],
                [
                    'anime_id' => 23,
                    'category_id' => 6
                ]
                // 東京喰種
                // [
                //     'anime_id' => ,
                //     'category_id' => 
                // ],
                // [
                //     'anime_id' => ,
                //     'category_id' => 
                // ]
         ]);
    }
}
