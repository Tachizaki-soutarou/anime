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
                'star' => 4,
                'comment_title' => 'マジで好き',
                'comment' => 'キャラの絵がかわいい',
                'user_id' => 1,
                'anime_id' => 2
            ],
            [
                'star' => 2,
                'comment_title' => 'うーん',
                'comment' => '個人的にはあんまり…',
                'user_id' => 2,
                'anime_id' => 2
            ],
            [
                'star' => 5,
                'comment_title' => '求めていたもの',
                'comment' => 'ガチで最高',
                'user_id' => 2,
                'anime_id' => 4
            ],
            [
                'star' => 4,
                'comment_title' => 'いいね',
                'comment' => 'おもしろい',
                'user_id' => 1,
                'anime_id' => 5
            ],
            [
                'star' => 3,
                'comment_title' => 'ぶっちゃけ普通',
                'comment' => 'ストーリはおもろい',
                'user_id' => 2,
                'anime_id' => 4
            ],
            [
                // 1～5の中で好きな数字
                'star' => 2,
                // 感想タイトル
                'comment_title' => 'ううーん',
                // 感想
                'comment' => 'あんまり好みでない',
                // 1 or 2 or 3
                'user_id' => 3,
                // 1～20の中で好きな数字
                'anime_id' => 12
            ],
            [
                'star' => 4,
                'comment_title' => '割と好き',
                'comment' => '声優いい感じ',
                'user_id' => 3,
                'anime_id' => 5
            ],
            [
                'star' => 3,
                'comment_title' => '期待できる',
                'comment' => '割と面白かった',
                'user_id' => 2,
                'anime_id' => 16
            ],
            [
                'star' => 1,
                'comment_title' => '酷かった',
                'comment' => '原作と結構違う',
                'user_id' => 2,
                'anime_id' => 14
            ],
            [
                'star' => 5,
                'comment_title' => '神作品です',
                'comment' => '1話でハマりました',
                'user_id' => 3,
                'anime_id' => 7
            ],
            [
                'star' => 4,
                'comment_title' => '面白い',
                'comment' => '内容は面白いけど作画が気になった',
                'user_id' => 1,
                'anime_id' => 19
            ],
            [
                'star' => 3,
                'comment_title' => 'まあ好き',
                'comment' => '悪くなかった',
                'user_id' => 1,
                'anime_id' => 3
            ],
         ]);
    }
}
