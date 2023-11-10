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
                'Hiragana_title' => 'じゅじゅつかいせん',
                'first_broadcast_start_date' => '2020/10/03',
                'second_broadcast_start_date' => '2023/07/03',
                'synopsis' => "運動神経が常人離れしている高校生・虎杖悠仁、そんなある日、虎杖の学校が\n特級呪物『両面宿儺』の指に群がる呪いだらけになってしまう。\n虎杖はサークルの先輩を助けるため、猛毒である両面宿儺の指を飲み込こんでしまう…\n人間の負の感情から生まれる化け物・呪霊を呪術を使って祓う\n呪術師の闘いが繰り広げられる。",
                'original_id' => 1,
                'category_id' => 3,
            ],
            [
                'title' => 'メイドインアビス',
                'Hiragana_title' => 'めいどいんあびす',
                'first_broadcast_start_date' => '2017/07/07',
                'second_broadcast_start_date' => '2022/07/06',
                'synopsis' => "人類最後の秘境と呼ばれる、未だ底知れぬ巨大な縦穴『アビス』。\nその大穴の縁に作られた街『オース』には、アビスの探検を担う『探窟家』たちが暮らしていた。\n彼らは、『アビスの呪い』、『原生生物』などの命がけの冒険と引き換えに、\n日々の糧や超常の『遺物』、そして未知へのロマンを求め、今日も奈落に挑み続ける。",
                'original_id' => 1,
                'category_id' => 2,
            ],
            [
                'title' => 'SPY×FAMILY',
                'Hiragana_title' => 'すぱいふぁみりー',
                'first_broadcast_start_date' => '2022/04/09',
                'second_broadcast_start_date' => '2023/10/07',
                'synopsis' => "世界各国が水面下で熾烈な情報戦を繰り広げていた時代。\n西国の情報局対東課『WISE』（ワイズ）所属である凄腕スパイの『黄昏』（たそがれ）は、\n極秘任務のため精神科医ロイド・フォージャーに扮し、家族を作ることに。\nだが、彼が出会った娘は超能力者、妻は殺し屋だった！\nお互いの正体を隠しながら共に暮らすハプニング連続の仮初めの家族に、世界の平和は託された。",
                'original_id' => 1,
                'category_id' => 4,
            ],
            [
                'title' => 'ヴァイオレット・エヴァーガーデン',
                'Hiragana_title' => 'ゔぁいおれっとえゔぁーがーでん',
                'first_broadcast_start_date' => '2018/01/11',
                'second_broadcast_start_date' => null,
                'synopsis' => "4年間にわたる壮絶な大陸戦争で、戦うための道具として生きてきた感情を持たない少女兵、ヴァイオレット・エヴァーガーデン。\n戦場で両腕を失い義手を付けることになったヴァイオレットは、戦争終結後、『自動手記人形』としてC.H郵便社で働くことに。\n彼女の心に残されたのは、戦場の記憶と上官であるギルベルト少佐。\n彼が最後に告げた『愛してる』という言葉の意味がわからなかった。\nヴァイオレットは、代筆の仕事を通して『愛してる』という言葉の意味を模索していく。",
                'original_id' => 2,
                'category_id' => 5,
            ],
            [
                'title' => 'ノラガミ',
                'Hiragana_title' => 'のらがみ',
                'first_broadcast_start_date' => '2014/01/05',
                'second_broadcast_start_date' => '2015/10/03',
                'synopsis' => "神の中でも、祀られる社も無い、末端の無名の神『夜ト』は、5円の賽銭で水道管修理からコンビニアルバイトまでなんでも引き受けている。\nとある依頼のなかで、猫を追いかけていると無意識に道路に飛び出してしまい、とある『少女』に助けられる。\nその代わりに『少女』は事故に遭ってしまい、一命を取り留めたものの体と魂が分離しやすい体質になってしまった。\nその体質が原因で、『少女』は邪悪な妖に襲われるようになってしまう。そんな彼女を助けるため、14歳で死んだ少年の霊を『神器』として迎え入れ、\n『少女』、『神器』と共に、様々なトラブルに立ち向かう。",
                'original_id' => 1,
                'category_id' => 1,
            ]
        ]);
    }
}