<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('animes')->insert([
                'title' => '呪術廻戦',
                'first_broadcast_start_date' => new DateTime(),
                'second_broadcast_start_date' => new DateTime(),
                'synopsis' => "運動神経が常人離れしている高校生・虎杖悠仁、そんなある日、虎杖の学校が\n特級呪物『両面宿儺』の指に群がる呪いだらけになってしまう。\n虎杖はサークルの先輩を助けるため、猛毒である両面宿儺の指を飲み込こんでしまう…\n人間の負の感情から生まれる化け物・呪霊を呪術を使って祓う\n呪術師の闘いが繰り広げられる。",
                'original_id' => 1,
                'category_id' => 1,
        ]);
    }
}