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
                'Latin_alphabet_title' => 'jujutukaisen',
                'first_broadcast_start_date' => '2020/10/03',
                'second_broadcast_start_date' => '2023/07/03',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 呪術廻戦 0',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "運動神経が常人離れしている高校生『虎杖悠仁』。そんなある日、『虎杖』の学校が特級呪物『両面宿儺』の指に群がる呪いだらけになってしまう。\n『虎杖』はサークルの先輩を助けるため、猛毒である『両面宿儺』の指を飲み込こんでしまう…\n人間の負の感情『呪い』から生まれる『呪霊』を『呪い』で祓う、死と隣り合わせの職業『呪術師』。彼らは今日も『呪霊』たちとの戦いに身を投じて行く。",
                'original_id' => 1
            ],
            [
                'title' => 'メイドインアビス',
                'Hiragana_title' => 'めいどいんあびす',
                'Latin_alphabet_title' => 'maidoinabisu',
                'first_broadcast_start_date' => '2017/07/07',
                'second_broadcast_start_date' => '2022/07/06',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 メイドインアビス 深き魂の黎明',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "人類最後の秘境と呼ばれる、未だ底知れぬ巨大な縦穴『アビス』。その大穴の縁に作られた街『オース』には、アビスの探検を担う『探窟家』たちが暮らしていた。\n彼らは、『アビスの呪い』、『原生生物』などの命がけの冒険と引き換えに、日々の糧や超常の『遺物』、そして未知へのロマンを求め、今日も奈落に挑み続ける。",
                'original_id' => 1
            ],
            [
                'title' => 'SPY×FAMILY',
                'Hiragana_title' => 'すぱいふぁみりー',
                'Latin_alphabet_title' => 'supaifamiri-',
                'first_broadcast_start_date' => '2022/04/09',
                'second_broadcast_start_date' => '2023/10/07',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 SPY×FAMILY CODE: White',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "世界各国が水面下で熾烈な情報戦を繰り広げていた時代。西国の情報局対東課『WISE』（ワイズ）所属である凄腕スパイの『黄昏』（たそがれ）は、\n極秘任務のため精神科医『ロイド・フォージャー』に扮し、家族を作ることに。だが、彼が出会った『娘』は超能力者、『妻』は殺し屋だった！\nお互いの正体を隠しながら共に暮らすハプニング連続の仮初めの家族に、世界の平和は託された。",
                'original_id' => 1
            ],
            [
                'title' => 'ヴァイオレット・エヴァーガーデン',
                'Hiragana_title' => 'ゔぁいおれっとえゔぁーがーでん',
                'Latin_alphabet_title' => 'vaiorettoeva-ga-den',
                'first_broadcast_start_date' => '2018/01/11',
                'second_broadcast_start_date' => null,
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => 'ヴァイオレット・エヴァーガーデン 外伝 - 永遠と自動手記人形 -',
                'second_movie' => '劇場版 ヴァイオレット・エヴァーガーデン',
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "4年間にわたる壮絶な大陸戦争で、戦うための道具として生きてきた感情を持たない少女兵『ヴァイオレット・エヴァーガーデン』。\n戦場で両腕を失い義手を付けることになった『ヴァイオレット』は、戦争終結後『自動手記人形』としてC.H郵便社で働くことに。\n彼女の心に残されたのは、戦場の記憶と上官であるギルベルト少佐。彼が最後に告げた『愛してる』という言葉の意味がわからなかった。\n『ヴァイオレット』は、代筆の仕事を通して『愛してる』という言葉の意味を模索していく。",
                'original_id' => 2
            ],
            [
                'title' => 'ノラガミ',
                'Hiragana_title' => 'のらがみ',
                'Latin_alphabet_title' => 'noragami',
                'first_broadcast_start_date' => '2014/01/05',
                'second_broadcast_start_date' => '2015/10/03',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "神の中でも、祀られる社も無い、末端の無名の神『夜ト』は、5円の賽銭でどんな仕事も引き受けている。\nとある依頼のなかで、猫を追いかけていると無意識に道路に飛び出してしまい、とある『少女』に助けられる。\nその代わりに『少女』は事故に遭い、一命を取り留めたものの体と魂が分離しやすい体質になってしまった。\nそれにより『少女』は邪悪な妖に襲われるようになってしまう。そんな彼女を助けるため『夜ト』は、14歳で死んだ少年の霊を『神器』として迎え入れ、\n『少女』、『神器』と共に、様々なトラブルへ立ち向かう。",
                'original_id' => 1
            ],
            [
                'title' => 'ソードアート・オンライン',
                'Hiragana_title' => 'そーどあーと・おんらいん',
                'Latin_alphabet_title' => 'so-doa-toonrain',
                'first_broadcast_start_date' => '2012/07/08',
                'second_broadcast_start_date' => '2014/07/05',
                'third_broadcast_start_date' => '2018/10/07',
                'fourth_broadcast_start_date' => null,
                'first_movie' => 'SAO オーディナル・スケール',
                'second_movie' => 'SAO プログレッシブ 星なき夜のアリア',
                'third_movie' => 'SAO プログレッシブ 冥き夕闇のスケルツォ',
                'fourth_movie' => null,
                'synopsis' => "西暦2022年、世界初のフルダイブ型VRゲーム『ソードアート・オンライン（SAO）』が正式リリースされ、約1万人のプレイヤーで賑わっていた。そんな中、突如ゲームからログアウトボタンが消失していることに気付く。\n開発者である『茅場晶彦』の手によりSAOは、アインクラッドの最上層階到達というSAOのクリア達成までログアウト不可、ゲームオーバーが現実世界の死という恐ろしいデスゲームへと変貌してしまう。\n多くのプレイヤーはこの事実に恐れるが、『キリト』は恐れながらも、この世界で最強ソロプレイヤーとして生き抜くために抗い続ける。",
                'original_id' => 2
            ],
            [
                'title' => '鬼滅の刃',
                'Hiragana_title' => 'きめつのやいば',
                'Latin_alphabet_title' => 'kimetunoyaiba',
                'first_broadcast_start_date' => '2019/04/06',
                'second_broadcast_start_date' => '2021/12/05',
                'third_broadcast_start_date' => '2023/04/09',
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 鬼滅の刃 無限列車編',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "日本の大正時代、竈門家は炭焼きの一家であり、父亡き後、長男の『竈門 炭治郎』は家族を支える大黒柱のような存在だった。\nしかしある日、『炭治郎』が街から帰ると、人を喰らう生き物『鬼』によって家族は惨殺されていた。\n唯一生き残った『妹』も『鬼』へ変えられてしまう。豹変した『妹』に戸惑う『炭治郎』の前に現れたのは、1人の『鬼殺隊』の剣士。\nその出会いをきっかけに『炭治郎』は『妹』を人間へ戻すべく、『鬼殺隊』としての第一歩を踏み出すのであった。",
                'original_id' => 1
            ],
            [
                'title' => 'この素晴らしい世界に祝福を！',
                'Hiragana_title' => 'このすばらしいせかいにしゅくふくを！',
                'Latin_alphabet_title' => 'konosubarasiisekainisyukuhukuwo!',
                'first_broadcast_start_date' => '2016/01/14',
                'second_broadcast_start_date' => '2017/01/12',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => 'この素晴らしい世界に祝福を！紅伝説',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "田舎暮らしの引きこもり自宅警備員『佐藤和真（カズマ）』。目を覚ますと、『水の女神』と称する美しい一人の『少女』がいた。\nとある理由により『カズマ』は命を落としてしまったらしい。『カズマ』は死亡時、失禁していたことを告げられ、『少女』に馬鹿にされてしまう。\nしかし『カズマ』には魔王討伐のために異世界に転生すると言う機会が与えられた。そして『カズマ』が望むものをひとつだけ、転生時に持っていくことができると言う。\nそこで『カズマ』は、散々自分のことを罵倒した報復として、『少女』を持っていくものに指定し、なんと『少女』も強制的に転生させてしまった！\n爆笑不可避の波乱万丈の冒険が始まるのであった。",
                'original_id' => 2
            ],
            [
                'title' => '暗殺教室',
                'Hiragana_title' => 'あんさつきょうしつ',
                'Latin_alphabet_title' => 'ansatukyousitu',
                'first_broadcast_start_date' => '2015/01/10',
                'second_broadcast_start_date' => '2016/01/08',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "日本でも屈指のエリート校、椚ヶ丘中学校。その中には3年E組、通称『エンドのE組』は落ちこぼれの集まるクラスだった。そんなある日、月の7割が蒸発し、三日月になってしまう。\n月を蒸発させた犯人『謎の生命体』が突如E組に現れる。『来年3月に地球も破壊します。その日まで、3年E組の担任教師になりましょう。』と生徒たちの前で宣言した。\n政府はE組の生徒達に極秘任務『暗殺』を言い渡した。しかし、『謎の生命体』の最高速度はマッハ20！\n勉強と暗殺を通して、底辺から頂点へ成り上がる『暗殺教室』が幕を開ける。",
                'original_id' => 1
            ],
            [
                'title' => '転生したらスライムだった件',
                'Hiragana_title' => 'てんせいしたらすらいむだったけん',
                'Latin_alphabet_title' => 'tenseisitarasuraimudattaken',
                'first_broadcast_start_date' => '2018/10/02',
                'second_broadcast_start_date' => '2021/01/12',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 転生したらスライムだった件 紅蓮の絆編',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "大手ゼネコンに勤務しているサラリーマン『三上 悟』は、通り魔に刺され、37歳という若さで死亡してしまう。意識を取り戻すと、自分の姿がスライムになっていると自覚した『三上 悟』。\nその身に宿したスキル『大賢者』に助けられながら、封印されている『暴風竜』に出会い仲良くなった『三上 悟』は互いに名前を付け合った。そして『リムル＝テンペスト』の名を授かるのであった。\nスライムの特性を生かし様々なスキルを身に着ける『リムル＝テンペスト』。そのスキルを活かし、争うことしか知らなかった魔物達を携え、1から人間と魔物の架け橋となる国を作って行く。\n人生ならぬ『スライム生』を突き進んで行く。",
                'original_id' => 2
            ],
            [
                'title' => '陰の実力者になりたくて！',
                'Hiragana_title' => 'かげのじつりょくしゃになりたくて！',
                'Latin_alphabet_title' => 'kagenojituryokusyaninaritakute!',
                'first_broadcast_start_date' => '2022/10/05',
                'second_broadcast_start_date' => '2023/10/04',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "『少年』は物心がついた時から物語の英雄やラスボスでもなく、陰ながら介入し実力を見せていく存在… つまり『陰の実力者』に憧れていた。\n日常では『モブキャラ』を演じ、裏では空手、ボクシングなど強くなるために必要なものを全力で身に着け、己を高める修行に身を置く日々であった。\nそんなある日、度重なる修行のせいなのか、視界がぼやけ、二つの光が『少年』に…\n表では『モブキャラ』、裏では『陰の実力者』として、圧倒的な力の差を見せ活躍してゆく。",
                'original_id' => 2
            ],
            [
                'title' => '約束のネバーランド',
                'Hiragana_title' => 'やくそくのねばーらんど',
                'Latin_alphabet_title' => 'yakusokunoneba-rando',
                'first_broadcast_start_date' => '2019/01/11',
                'second_broadcast_start_date' => '2021/01/08',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "『ママ』と呼ばれるシスターと共に暮らす小さな孤児院『グレイス＝フィールドハウス(GFハウス)』。\nその孤児たちは、教育として定期的な学力試験が行われ、天才的頭脳を有した子供たち。\nそんな孤児たちは、6歳～12歳までの間に里親に引き取られるべく『GFハウス』を出ることになっていた。\nとある日、『コニー』という少女の里親が決まった。『GFハウス』から出立することになり、忘れ物に気付いた最年長『エマ』は、\n最年長『ノーマン』と共に、普段は近付くことが禁止されている、『外へ繋がる門』へ二人は向かう。そこで2人が目にしたものとは...",
                'original_id' => 1
            ],
            [
                'title' => 'Dr.STONE --ドクターストーン--',
                'Hiragana_title' => 'どくたーすとーん',
                'Latin_alphabet_title' => 'dokuta-suto-nn',
                'first_broadcast_start_date' => '2019/07/05',
                'second_broadcast_start_date' => '2021/01/14',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "同級生に告白をすると声高に叫ぶ男『大木大樹』。科学部の友人『石神千空』からあっさりとした激励を受け、想い人に告白をする。\nしかしその瞬間、目の前に学校を覆いこむほどの発光体が迫ってきたのだった。\n人類は、なす術なく光に飲み込まれてしまい、その発光体を体に浴びた地球上の全人類が石化してしまう。\nその出来事から気の遠くなるほどの長い年月を経て、『石神千空』、『大木大樹』は奇跡の復活を果たす。\n『石神千空』は、科学力を駆使し、ゼロから文明を作り直して、全人類を救うことを誓うのであった。",
                'original_id' => 1
            ],
            [
                'title' => 'からかい上手の高木さん',
                'Hiragana_title' => 'からかいじょうずのたかぎさん',
                'Latin_alphabet_title' => 'karakaijouzunotakagisan',
                'first_broadcast_start_date' => '2018/01/08',
                'second_broadcast_start_date' => '2019/07/07',
                'third_broadcast_start_date' => '2022/01/08',
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 からかい上手の高木さん',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "とある地方都市の中学校。ごく普通の中学1年生の男の子『西片』には、ある大きな悩みがあった。それは、隣の席の女の子『高木さん』がいつもいつも自分をからかってくる。\nからかい返そうと日々奮闘。あの手この手で反撃するが、常に彼女が一枚上手。思わせぶり、小悪魔的な言葉で彼は翻弄されるばかり。\nそんな2人の全力からかい青春バトル！今日のからかい勝負の行方は…？",
                'original_id' => 1
            ]
        ]);
    }
}