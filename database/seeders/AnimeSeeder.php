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
            [   
                'title' => '呪術廻戦',
                'first_broadcast_start_date' => '2020/10/03',
                'second_broadcast_start_date' => '2023/07/03',
                'synopsis' => "運動神経が常人離れしている高校生・虎杖悠仁、そんなある日、虎杖の学校が\n特級呪物『両面宿儺』の指に群がる呪いだらけになってしまう。\n虎杖はサークルの先輩を助けるため、猛毒である両面宿儺の指を飲み込こんでしまう…\n人間の負の感情から生まれる化け物・呪霊を呪術を使って祓う\n呪術師の闘いが繰り広げられる。",
                'original_id' => 1,
                'category_id' => 2,
            ],
            [
                'title' => 'メイドインアビス',
                'first_broadcast_start_date' => '2017/07/07',
                'second_broadcast_start_date' => '2022/07/06',
                'synopsis' => "人類最後の秘境と呼ばれる、未だ底知れぬ巨大な縦穴『アビス』。\nその大穴の縁に作られた街『オース』には、アビスの探検を担う「探窟家」たちが暮らしていた。\n彼らは、『アビスの呪い』、『原生生物』などの命がけの冒険と引き換えに、\n日々の糧や超常の『遺物』、そして未知へのロマンを求め、今日も奈落に挑み続ける。",
                'original_id' => 1,
                'category_id' => 1,
            ],
            [
                'title' => 'SPY×FAMILY',
                'first_broadcast_start_date' => '2022/04/09',
                'second_broadcast_start_date' => '2023/10/07',
                'synopsis' => "世界各国が水面下で熾烈な情報戦を繰り広げていた時代。\n西国の情報局対東課『WISE』（ワイズ）所属である凄腕スパイの『黄昏』（たそがれ）は、\n極秘任務のため精神科医ロイド・フォージャーに扮し、家族を作ることに。\nだが、彼が出会った娘は超能力者、妻は殺し屋だった！\nお互いの正体を隠しながら共に暮らすハプニング連続の仮初めの家族に、世界の平和は託された。",
                'original_id' => 1,
                'category_id' => 3,
            ]
        ]);
    }
}