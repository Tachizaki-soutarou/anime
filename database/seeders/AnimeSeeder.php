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
                'english_title' => 'Jujutsu Kaisen',
                'image' => 'https://productionanimeimage.s3.amazonaws.com/images/%E5%91%AA%E8%A1%93%E5%BB%BB%E6%88%A6.jpg',
                'first_broadcast_start_date' => '2020/10/03',
                'second_broadcast_start_date' => '2023/07/03',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 呪術廻戦 0',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "運動神経が常人離れしている高校生『虎杖悠仁』。\n
                そんなある日、『虎杖』の学校が特級呪物『両面宿儺』の指に群がる呪いだらけになってしまう。\n
                『虎杖』はサークルの先輩を助けるため、猛毒である『両面宿儺』の指を飲み込こんでしまう…\n
                人間の負の感情『呪い』から生まれる『呪霊』を『呪い』で祓う、死と隣り合わせの職業『呪術師』。\n
                彼らは今日も『呪霊』たちとの戦いに身を投じて行く。",
                'original_id' => 1
            ],
            [
                'title' => 'メイドインアビス',
                'Hiragana_title' => 'めいどいんあびす',
                'Latin_alphabet_title' => 'meidoinabisu',
                'english_title' => 'Made in Abyss',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/DonjQphD2bDQLSdh1595CQyfPJyhVLdSZs0lysTv.jpg',
                'first_broadcast_start_date' => '2017/07/07',
                'second_broadcast_start_date' => '2022/07/06',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 メイドインアビス 深き魂の黎明',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "人類最後の秘境と呼ばれる、未だ底知れぬ巨大な縦穴『アビス』。\n
                その大穴の縁に作られた街『オース』には、アビスの探検を担う『探窟家』たちが暮らしていた。\n
                彼らは、『アビスの呪い』、『原生生物』などの命がけの冒険と引き換えに、\n
                日々の糧や超常の『遺物』、そして未知へのロマンを求め、今日も奈落に挑み続ける。",
                'original_id' => 1
            ],
            [
                'title' => 'SPY×FAMILY',
                'Hiragana_title' => 'すぱいふぁみりー',
                'Latin_alphabet_title' => 'supaifamiri-',
                'english_title' => 'Spy Family',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/upOBVpxHDR7sOclvCoLAsz9JklhJEdgDV4fAkR33.jpg',
                'first_broadcast_start_date' => '2022/04/09',
                'second_broadcast_start_date' => '2023/10/07',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 SPY×FAMILY CODE: White',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "世界各国が水面下で熾烈な情報戦を繰り広げていた時代。\n
                西国の情報局対東課『WISE』（ワイズ）所属である凄腕スパイの『黄昏』（たそがれ）は、\n
                極秘任務のため精神科医『ロイド・フォージャー』に扮し、家族を作ることに。\n
                だが、彼が出会った『娘』は超能力者、『妻』は殺し屋だった！\n
                お互いの正体を隠しながら共に暮らすハプニング連続の仮初めの家族に、世界の平和は託された。",
                'original_id' => 1
            ],
            [
                'title' => 'ヴァイオレット・エヴァーガーデン',
                'Hiragana_title' => 'ゔぁいおれっとえゔぁーがーでん',
                'Latin_alphabet_title' => 'vaiorettoeva-ga-den',
                'english_title' => 'Violet Evergarden',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/NcKS0O387qNyURLrmdmipavUUyHfPxuZEjgBt3O7.jpg',
                'first_broadcast_start_date' => '2018/01/11',
                'second_broadcast_start_date' => null,
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => 'ヴァイオレット・エヴァーガーデン 外伝 - 永遠と自動手記人形 -',
                'second_movie' => '劇場版 ヴァイオレット・エヴァーガーデン',
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "4年間にわたる壮絶な大陸戦争で、戦うための道具として生きてきた感情を持たない少女兵『ヴァイオレット・エヴァーガーデン』。\n
                戦場で両腕を失い義手を付けることになった『ヴァイオレット』は、戦争終結後『自動手記人形』としてC.H郵便社で働くことに。\n
                彼女の心に残されたのは、戦場の記憶と上官であるギルベルト少佐。\n
                彼が最後に告げた『愛してる』という言葉の意味がわからなかった。\n
                『ヴァイオレット』は、代筆の仕事を通して『愛してる』という言葉の意味を模索していく。",
                'original_id' => 2
            ],
            [
                'title' => 'ノラガミ',
                'Hiragana_title' => 'のらがみ',
                'Latin_alphabet_title' => 'noragami',
                'english_title' => 'Noragami',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/E1Gc88B92I9wJU0B4OtfeIdXXXtguYZGr2uXPzsT.jpg',
                'first_broadcast_start_date' => '2014/01/05',
                'second_broadcast_start_date' => '2015/10/03',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "神の中でも、祀られる社も無い、末端の無名の神『夜ト』は、5円の賽銭でどんな仕事も引き受けている。\n
                とある依頼のなかで、猫を追いかけていると無意識に道路に飛び出してしまい、とある『少女』に助けられる。\n
                その代わりに『少女』は事故に遭い、一命を取り留めたものの体と魂が分離しやすい体質になってしまった。\n
                それにより『少女』は邪悪な妖に襲われるようになってしまう。\n
                そんな彼女を助けるため『夜ト』は、14歳で死んだ少年の霊を『神器』として迎え入れ、\n
                『少女』、『神器』と共に、様々なトラブルへ立ち向かう。",
                'original_id' => 1
            ],
            [
                'title' => 'ソードアート・オンライン',
                'Hiragana_title' => 'そーどあーと・おんらいん',
                'Latin_alphabet_title' => 'so-doa-toonrain',
                'english_title' => 'Sword Art Online',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/oEu5O1GGObTSGkjGc0dE91Rsci5T0Eoy46AlXrJu.jpg',
                'first_broadcast_start_date' => '2012/07/08',
                'second_broadcast_start_date' => '2014/07/05',
                'third_broadcast_start_date' => '2018/10/07',
                'fourth_broadcast_start_date' => null,
                'first_movie' => 'SAO オーディナル・スケール',
                'second_movie' => 'SAO プログレッシブ 星なき夜のアリア',
                'third_movie' => 'SAO プログレッシブ 冥き夕闇のスケルツォ',
                'fourth_movie' => null,
                'synopsis' => "西暦2022年、世界初のフルダイブ型VRゲーム『ソードアート・オンライン（SAO）』。\n
                ついに正式リリースされ、約1万人のプレイヤーで賑わっていた。\n
                そんな中、突如ゲームからログアウトボタンが消失していることに気付く。\n
                開発者である『茅場晶彦』の手により『SAO』は、アインクラッドの最上層階到達というSAOのクリア達成までログアウト不可、\n
                ゲームオーバーが現実世界の死という恐ろしいデスゲームへと変貌してしまう。\n
                多くのプレイヤーはこの事実に恐れ、絶望する中、\n
                『キリト』は恐れながらも、この世界で最強ソロプレイヤーとして生き抜くために抗い続ける。",
                'original_id' => 2
            ],
            [
                'title' => '鬼滅の刃',
                'Hiragana_title' => 'きめつのやいば',
                'Latin_alphabet_title' => 'kimetunoyaiba',
                'english_title' => 'Demon Slayer',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/bNyvvcT6FT0o8Du1lzz20c4VozqSHQUMwP6D3opB.jpg',
                'first_broadcast_start_date' => '2019/04/06',
                'second_broadcast_start_date' => '2021/12/05',
                'third_broadcast_start_date' => '2023/04/09',
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 鬼滅の刃 無限列車編',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "日本の大正時代、竈門家は炭焼きの一家であった。\n
                父亡き後、長男の『竈門 炭治郎』は家族を支える大黒柱のような存在だった。\n
                しかしある日、『炭治郎』が街から帰ると、人を喰らう生き物『鬼』によって家族は惨殺されていた。\n
                唯一生き残った『妹』も『鬼』へ変えられてしまう。豹変した『妹』に戸惑う『炭治郎』の前に現れたのは、1人の『鬼殺隊』の剣士。\n
                その出会いをきっかけに『炭治郎』は『妹』を人間へ戻すべく、『鬼殺隊』としての第一歩を踏み出すのであった。",
                'original_id' => 1
            ],
            [
                'title' => 'この素晴らしい世界に祝福を！',
                'Hiragana_title' => 'このすばらしいせかいにしゅくふくを！',
                'Latin_alphabet_title' => 'konosubarasiisekainisyukuhukuwo!',
                'english_title' => 'Blessing on This Wonderful World!',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/0u2S4uwLeaovC77lIqGfztWIVgPUp9LcTflCZhdI.jpg',
                'first_broadcast_start_date' => '2016/01/14',
                'second_broadcast_start_date' => '2017/01/12',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => 'この素晴らしい世界に祝福を！紅伝説',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "田舎暮らしの引きこもり自宅警備員『佐藤和真（カズマ）』。\n
                目を覚ますと、『水の女神』と称する美しい一人の『少女』がいた。\n
                とある理由により『カズマ』は命を落としてしまったらしい。\n
                『カズマ』は死亡時、失禁していたことを告げられ、『少女』に馬鹿にされてしまう。\n
                しかし『カズマ』には魔王討伐のために異世界に転生すると言う機会が与えられた。\n
                そして『カズマ』が望むものをひとつだけ、転生時に持っていくことができると言う。\n
                そこで『カズマ』は、散々自分のことを罵倒した報復として、『少女』を持っていくものに指定し、\n
                なんと『少女』も強制的に転生させてしまった！\n
                爆笑不可避の波乱万丈の冒険が始まるのであった。",
                'original_id' => 2
            ],
            [
                'title' => '暗殺教室',
                'Hiragana_title' => 'あんさつきょうしつ',
                'Latin_alphabet_title' => 'ansatukyousitu',
                'english_title' => 'Assassination Classroom',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/75i03xb2Kmr7WrTmf6WD2tFTk2r2HIbpO1f6CTmi.jpg',
                'first_broadcast_start_date' => '2015/01/10',
                'second_broadcast_start_date' => '2016/01/08',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "日本でも屈指のエリート校、椚ヶ丘中学校。\n
                その中には3年E組、通称『エンドのE組』は落ちこぼれの集まるクラスだった。\n
                そんなある日、月の7割が蒸発し、三日月になってしまう。\n
                月を蒸発させた犯人『謎の生命体』が突如E組に現れる。\n
                『来年3月に地球も破壊します。その日まで、3年E組の担任教師になりましょう。』と生徒たちの前で宣言した。\n
                政府はE組の生徒達に極秘任務『暗殺』を言い渡した。\n
                しかし、『謎の生命体』の最高速度はマッハ20！\n
                勉強と暗殺を通して、底辺から頂点へ成り上がる『暗殺教室』が幕を開ける。",
                'original_id' => 1
            ],
            [
                'title' => '転生したらスライムだった件',
                'Hiragana_title' => 'てんせいしたらすらいむだったけん',
                'Latin_alphabet_title' => 'tenseisitarasuraimudattaken',
                'english_title' => 'That Time I Got Reincarnated as a Slime',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/EdwZtdJEaDDgSPRKOVzrokgqfXsghYzfAujGoFvy.jpg',
                'first_broadcast_start_date' => '2018/10/02',
                'second_broadcast_start_date' => '2021/01/12',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 転生したらスライムだった件 紅蓮の絆編',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "大手ゼネコンに勤務しているサラリーマン『三上 悟』は、通り魔に刺され、37歳という若さで死亡してしまう。\n
                意識を取り戻すと、自分の姿がスライムになっていると自覚した『三上 悟』。\n
                その身に宿したスキル『大賢者』に助けられながら、『暴風竜』と出会い仲良くなった『三上 悟』。\n
                互いに名前を付け合い『リムル＝テンペスト』の名を授かるのであった。\n
                スライムの特性を生かし様々なスキルを身に着ける『リムル＝テンペスト』。\n
                そのスキルを活かし、争うことしか知らなかった魔物達を携え、1から人間と魔物の架け橋となる国を作って行く。\n
                人生ならぬ『スライム生』を突き進んで行く。",
                'original_id' => 2
            ],
            [
                'title' => '陰の実力者になりたくて！',
                'Hiragana_title' => 'かげのじつりょくしゃになりたくて！',
                'Latin_alphabet_title' => 'kagenojituryokusyaninaritakute!',
                'english_title' => 'The Eminence in Shadow!',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/XezoyT71h3XgWJSnHFringtoWdXclk5ePKV2xEYf.jpg',
                'first_broadcast_start_date' => '2022/10/05',
                'second_broadcast_start_date' => '2023/10/04',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "『少年』は物心がついた時から物語の英雄やラスボスでもなく、陰ながら介入し実力を見せていく存在… \n
                つまり『陰の実力者』に憧れていた。\n
                日常では『モブキャラ』を演じ、裏では空手、ボクシングなど強くなるために必要なものを全力で身に着け、己を高める修行に身を置く日々であった。\n
                そんなある日、度重なる修行のせいなのか、視界がぼやけ、二つの光が『少年』に…\n
                表では『モブキャラ』、裏では『陰の実力者』として、圧倒的な力の差を見せ活躍してゆく。",
                'original_id' => 2
            ],
            [
                'title' => '約束のネバーランド',
                'Hiragana_title' => 'やくそくのねばーらんど',
                'Latin_alphabet_title' => 'yakusokunoneba-rando',
                'english_title' => 'The Promised Neverland',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/gAbNaOqk6FJdsuiaSaLkmZhbD5NjB28g2A0ajvOx.jpg',
                'first_broadcast_start_date' => '2019/01/11',
                'second_broadcast_start_date' => '2021/01/08',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "『ママ』と呼ばれるシスターと共に暮らす小さな孤児院『グレイス＝フィールドハウス(GFハウス)』。\n
                その孤児たちは、教育として定期的な学力試験が行われ、天才的頭脳を有した子供たち。\n
                そんな孤児たちは、6歳～12歳までの間に里親に引き取られるべく『GFハウス』を出ることになっていた。\n
                とある日、『コニー』という少女の里親が決まった。『GFハウス』から出立することになり、忘れ物に気付いた最年長『エマ』は、\n
                最年長『ノーマン』と共に、普段は近付くことが禁止されている『外へ繋がる門』へ二人は向かう。\n
                そこで2人が目にしたものとは…",
                'original_id' => 1
            ],
            [
                'title' => 'Dr.STONE --ドクターストーン--',
                'Hiragana_title' => 'どくたーすとーん',
                'Latin_alphabet_title' => 'dokuta-suto-nn',
                'english_title' => 'Doctor Stone',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/hghM0FrebmoNjmZvi75VvvprWTRZ6291qBTMIOBA.jpg',
                'first_broadcast_start_date' => '2019/07/05',
                'second_broadcast_start_date' => '2021/01/14',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "同級生に告白をすると声高に叫ぶ男『大木大樹』。科学部の友人『石神千空』からあっさりとした激励を受け、想い人に告白をする。\n
                しかしその瞬間、目の前に学校を覆いこむほどの発光体が迫ってきたのだった。\n
                人類は、なす術なく光に飲み込まれてしまい、その発光体を体に浴びた地球上の全人類が石化してしまう。\n
                その出来事から気の遠くなるほどの長い年月を経て、『石神千空』、『大木大樹』は奇跡の復活を果たす。\n
                『石神千空』は、科学力を駆使し、ゼロから文明を作り直して、全人類を救うことを誓うのであった。",
                'original_id' => 1
            ],
            [
                'title' => 'からかい上手の高木さん',
                'Hiragana_title' => 'からかいじょうずのたかぎさん',
                'Latin_alphabet_title' => 'karakaijouzunotakagisan',
                'english_title' => 'Teasing Master Takagi-San',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/1CW6FgqmnAjPVSIQYpFiYwU1gVabEjaJhbQKh7Ez.jpg',
                'first_broadcast_start_date' => '2018/01/08',
                'second_broadcast_start_date' => '2019/07/07',
                'third_broadcast_start_date' => '2022/01/08',
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版 からかい上手の高木さん',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "とある地方都市の中学校。ごく普通の中学1年生の男の子『西片』には、ある大きな悩みがあった。\n
                それは、隣の席の女の子『高木さん』がいつもいつも自分をからかってくる。\n
                からかい返そうと日々奮闘。あの手この手で反撃するが、常に彼女が一枚上手。\n
                思わせぶり、小悪魔的な言葉で彼は翻弄されるばかり。\n
                そんな2人の全力からかい青春バトル！今日のからかい勝負の行方は…？",
                'original_id' => 1
            ],
            [
                'title' => '無職転生 ～異世界行ったら本気だす～',
                'Hiragana_title' => 'むしょくてんせい ～いせかいいったらほんきだす～',
                'Latin_alphabet_title' => 'musyokutensei ~isekaiittarahonkidasu~',
                'english_title' => 'Mushoku Tensei ～Jobless Reincarnation～',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/cyM42qsjhEJiEEUUq8Nl1qRD2VwXlUddrvpp0azb.jpg',
                'first_broadcast_start_date' => '2021/01/11',
                'second_broadcast_start_date' => '2023/07/03',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "34歳無職のニートは無一文で家を追い出され、自分の人生が完全に詰んでいたと気付く。\n
                己を後悔していた矢先、彼の目の前にはトラックが…\n
                気が付いたその世界では、剣と魔法がひしめく異世界！？\n
                赤ん坊として生まれ変わった彼は、『今度こそ本気で生きて行く……！』と後悔しない人生を送ると決意する。\n
                前世の知能を活かし、魔術の才能を開花させる彼の新たな人生が動き始める。",
                'original_id' => 2
            ],
            [
                'title' => 'コードギアス 反逆のルルーシュ',
                'Hiragana_title' => 'こーどぎあす はんぎゃくのるるーしゅ',
                'Latin_alphabet_title' => 'ko-dogiasu hangyakunoruru-syu',
                'english_title' => 'CODE GEASS Lelouch of the Rebellion',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/UxCs6mNjgrepVqqQI2USaGt2RKzfike9A3fd9lAx.jpg',
                'first_broadcast_start_date' => '2006/10/06',
                'second_broadcast_start_date' => '2008/04/06',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '劇場版コードギアス 復活のルルーシュ',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "皇暦2010年8月10日、『神聖ブリタニア帝国』は日本と対立し宣戦布告。日本は戦いに破れ、占領されてしまう。\n
                日本は『エリア11』と呼称され、日本人は『イレヴン』と蔑まれ、ブリタニアの皇族によって支配されていた。\n
                7年後、『エリア11』に住むブリタニア人の少年『ルルーシュ』は、ある日『謎の少女』と出会い、『ギアス』と呼ばれる力を授かる。\n
                『ギアス』の力を利用し、『ブリタニアを壊滅させる』と、彼は『反逆』を決意するのであった。",
                'original_id' => 3
            ],
            [
                'title' => 'チェンソーマン',
                'Hiragana_title' => 'ちぇんそーまん',
                'Latin_alphabet_title' => 'tyenso-mann',
                'english_title' => 'Chainsaw Man',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/tWUJ6imkff5ReUIvzK8g9sLNtnbYaUC8Z2nkTABb.jpg',
                'first_broadcast_start_date' => '2022/10/12',
                'second_broadcast_start_date' => null,
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "死んだ父親の借金を背負わされ、貧乏な生活を強いられていた少年『デンジ』。\n
                『チェンソーの悪魔』で相棒である『ポチタ』とともに『デビルハンター』として働いていた。\n
                仕事を斡旋しているヤクザは非常に狡猾で、いくら働いても借金は全く減へらないまま、ヤクザの裏切りに会い、無残にも…\n
                しかし、相棒の『ポチタ』と契約で、人間でありながら頭と腕にチェンソーを一体化した悪魔『チェンソーマン』に変身したのであった！\n
                その後、とある女性と出会った『デンジ』は、彼女に導かれ、『公安デビルハンター』として再び悪魔との戦いに身を投じていく。",
                'original_id' => 1
            ],
            [
                'title' => 'Re:ゼロから始める異世界生活',
                'Hiragana_title' => 'り:ぜろからはじめるいせかいせいかつ',
                'Latin_alphabet_title' => 'ri:zerokarahajimeruisekaiseikatu',
                'english_title' => 'Re:Zero -Starting Life in Another World-',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/C6x2WZlpMaD9Vvu3Le0guHt8YW6yMIm1wCB6xFVT.jpg',
                'first_broadcast_start_date' => '2016/04/04',
                'second_broadcast_start_date' => '2020/07/08',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => 'Re:ゼロから始める異世界生活 Memory Snow',
                'second_movie' => 'Re:ゼロから始める異世界生活 氷結の絆',
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "ごく普通の高校生『ナツキ・スバル』。ある日、『スバル』がコンビニで立ち読みした帰り道、\n
                ふと気が付くと、目の前に広がるのは獣人・亜人などが存在する異世界に立っていた。\n
                すると『サテラ』と名乗る『少女』に出会う。『少女』はある人物を探していたところらしい。\n
                『少女』についていく『スバル』。しかしある盗品蔵で、2人とも何者かに殺されてしまう…\n
                殺されたはずの『スバル』は、目を覚ますとついさっきまでいた最初の場所に立っていた。\n
                何が起こったのかわからないまま『スバル』は、『異世界生活』を『ゼロから』始めるのであった。",
                'original_id' => 2
            ],
            [
                'title' => '五等分の花嫁',
                'Hiragana_title' => 'ごとうぶんのはなよめ',
                'Latin_alphabet_title' => 'gotoubunnohanayome',
                'english_title' => 'The Quintessential Quintuplets',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/KnKfnZRdaBBD4h81nCKJhBAydNYo9rmt3zVR1Z0U.jpg',
                'first_broadcast_start_date' => '2019/01/11',
                'second_broadcast_start_date' => '2021/01/08',
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '映画 五等分の花嫁',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "成績優秀な高校生『上杉 風太郎』。しかし、家は借金を抱えており、極貧生活を送っていた。\n
                ある日、彼に家庭教師のアルバイトの話が舞い込んでくる。\n
                アルバイトの内容は、同級生の五つ子姉妹全員に勉強を教え、高校卒業させるというものであった。\n
                しかし、五つ子姉妹は問題児ばかり。進学すら危ぶまれるほどの低い学力に、高圧的な態度と社交性の低さ。\n
                そんな五つ子を相手に、『風太郎』は四苦八苦しながらも勉強を教えて行くのであった。",
                'original_id' => 1
            ],
            [
                'title' => 'ノーゲーム・ノーライフ',
                'Hiragana_title' => 'のーげーむ・のーらいふ',
                'Latin_alphabet_title' => 'no-ge-mu・no-raihu',
                'english_title' => 'NO GAME NO LIFE',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/ZoocQDxb4V3Rz1geNdsL5vsT6eRdbmFI35F2xozN.jpg',
                'first_broadcast_start_date' => '2014/04/09',
                'second_broadcast_start_date' => null,
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => 'ノーゲーム・ノーライフ ゼロ',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "『チートを使っても勝てない』とネット上での都市伝説になるほどに天才的なゲームスキルを持つ天才ゲーマー『　』(くうはく)。\n
                その正体はニートで引きこもりの兄妹『空』と『白』の2人だった。\n
                2人は世界をクソゲーと思っており、引きこもってゲームをする日々。\n
                そんなある日神を名乗る少年により2人は『ディスボード』という世界に召喚される。\n
                そこは神により戦争が禁じられ、全てがゲームで決まる世界だった。\n
                そう、国境線や国の領土でさえも…",
                'original_id' => 2
            ],
            [
                'title' => '魔法少女まどか☆マギカ',
                'Hiragana_title' => 'まほうしょうじょまどかまぎか',
                'Latin_alphabet_title' => 'mahousyoujomadokamagika',
                'english_title' => 'Puella Magi Madoka Magica',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/cR4xBBaec0OdIQ3cBfm1pZYiQ4nb9NSxq0tWpEud.jpg',
                'first_broadcast_start_date' => '2011/01/07',
                'second_broadcast_start_date' => null,
                'third_broadcast_start_date' => null,
                'fourth_broadcast_start_date' => null,
                'first_movie' => '魔法少女まどか☆マギカ［新編］叛逆の物語',
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "見滝原中学校に通う、普通の中学二年生『鹿目まどか』。彼女は何気ない日常を過ごしていた。\n
                ある日、不思議な夢を見た。破壊された市街地で傷つきながら戦う『少女』を目撃。\n
                そして白い動物のような生き物から『僕と契約して、魔法少女になってよ』と告げられる夢。\n
                次の日『まどか』が学校へ行くと、夢の中で見た『少女』が同じクラスの転校生として現れた。\n
                『少女』は『魔法少女になってはならない』と警告し、去って行った。\n
                魔法少女とはいったい何なのだろうか？と疑問を抱きながら『まどか』は『少女』と行動を共にするのであった。",
                'original_id' => 3
            ],
            [   
                'title' => 'ようこそ実力至上主義の教室へ',
                'Hiragana_title' => 'ようこそじつりょくしじょうしゅぎのきょうしつへ',
                'Latin_alphabet_title' => 'youkosojituryokusijousyuginokyousituhe',
                'english_title' => 'Classroom Of The Elite',
                'image' => 'https://animeimage.s3.ap-northeast-1.amazonaws.com/images/r85yt2M30W6C2TcWHrna7qSHcSWAqydY03oA1YNk.jpg',
                'first_broadcast_start_date' => '2017/07/12',
                'second_broadcast_start_date' => '2022/07/04',
                'third_broadcast_start_date' => '2024/01/03',
                'fourth_broadcast_start_date' => null,
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "『綾小路清隆(あやのこうじきよたか)』は、平凡かつ影の薄い普通の男子高校生。\n
                しかし、彼が入学した高校は、『高度育成高等学校』。\n
                両親に連絡を取るのも許可が必要という厳しいルールがあるが、\n
                毎月10万円分のポイントが使用可能、髪型・私物の持ち込みが自由、\n
                希望する就職・進学先に100％応えることが約束された全寮制の名門校だ。\n
                しかしこの学校では、全てにおいて優位でなければならない。\n
                クラス同士の抗争を実力でのし上がり、クラス間の激しい頭脳戦や心理戦が繰り広げられる中、\n
                皆は『綾小路』の本当の実力に気付き始めるのであった。",
                'original_id' => 2
            ],
            [
                'title' => '東京喰種',
                'Hiragana_title' => 'とうきょうぐーる',
                'Latin_alphabet_title' => 'toukyougu-ru',
                'english_title' => 'Tokyo Ghoul',
                'image' => null,
                'first_broadcast_start_date' => '2014/07/11',
                'second_broadcast_start_date' => '2015/01/16',
                'third_broadcast_start_date' => '2018/04/03',
                'fourth_broadcast_start_date' => '2018/10/04',
                'first_movie' => null,
                'second_movie' => null,
                'third_movie' => null,
                'fourth_movie' => null,
                'synopsis' => "多くの人が行き交う都市、東京。現代日本と変わらない世界だが、大きく違うところがあった。\n
                『喰種（グール）』という、人ならざる亜人種が存在していた。彼らの主食は『人間』。\n
                平凡な大学生『金木研（カネキ）』はある日、趣味である読書を通じ、ある『女性』と知り合う。\n
                『女性』に好意を寄せていた『カネキ』だが、『女性』の本来の姿は…\n
                しかしその後『女性』と共に鉄骨の落下事故に巻き込まれる。\n
                一命をとりとめるが、瀕死の重傷を負ったことで臓器を移植される。\n
                目が覚めた『カネキ』は、人間に対して食欲をそそられていた…",
                'original_id' => 1
            ]
            // [
            //     'title' => '',
            //     'Hiragana_title' => '',
            //     'Latin_alphabet_title' => '',
            //     'english_title' => '',
            //     'image' => null,
            //     'first_broadcast_start_date' => '',
            //     'second_broadcast_start_date' => null,
            //     'third_broadcast_start_date' => null,
            //     'fourth_broadcast_start_date' => null,
            //     'first_movie' => null,
            //     'second_movie' => null,
            //     'third_movie' => null,
            //     'fourth_movie' => null,
            //     'synopsis' => "",
            //     'original_id' => 2
            // ]
        ]);
    }
}