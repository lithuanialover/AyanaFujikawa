<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'farmer' => 'AAA農園',
            'product' => '山の芋',
            'img' => 'img/yamanoimo.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => 'ヤマノイモは、ヤマノイモ科ヤマノイモ属のつる性多年草。または、この植物の芋として発達した担根体のこと。ジネンジョウ（自然生）、ジネンジョ（自然薯）、ヤマイモ（山芋）ともよばれ、とろろは粘性が非常に高い。また、ヤマノイモ属の食用種の総称ヤム（yam）をヤマノイモ、ヤマイモと訳すことがある。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'BBB農園',
            'product' => '大黒本しめじ',
            'img' => 'img/okuroshimeji.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '「香り松茸、味しめじ」のしめじとは本しめじのことで、京丹波大黒本しめじは、このしめじです。丹波地方で栽培され、一年を通じて購入することができます。大黒さんのようなユニークな姿が名前の由来です。
            焼き物、煮物、揚げ物等様々な調理方法でお楽しみいただけます。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'CCC農園',
            'product' => '加茂茄子',
            'img' => 'img/kamonasu.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '「一富士、二鷹、三茄子」といわれるように、茄子は昔から縁起の良いものとされてきました。なすの女王ともいえる風格と味わいを持つ京の逸品です。ガクの下が真っ白で、ずっしりと重いことも京の賀茂なすの特徴です。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'DDD農園',
            'product' => '辛味大根',
            'img' => 'img/karami.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '辛味大根と呼ばれているものは普通の大根より小ぶりで辛味が強く、水分が少ない大根の総称です。一言で辛味大根と言っても、親田辛味大根やねずみ大根など古くから栽培されてきたものや赤いもの、緑色のものなど様々です。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'EEE農園',
            'product' => '海老芋',
            'img' => 'img/ebiimo.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => 'えびいもは、里芋の一種で、品種ではなく栽培方法の違いにより作り出されるものです。 肉質が緻密で煮込んでも形が崩れないのが特徴のえびいもは、数ある伝統野菜の中でも最高のうま味を持つものの一つと言えます。棒だらと一緒に煮た「いもぼう」は、京都の料理店の名前だけでなく、古くから京都の代表的なおばんざいとして、各家庭で親しまれてきた京の逸品です。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'FFF農園',
            'product' => '万願寺とうがらし',
            'img' => 'img/manganji.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '万願寺とうがらし（まんがんじとうがらし）とは、京都府舞鶴市が発祥の京野菜。地元では「万願寺」「万願寺甘唐」とも呼ばれている。収穫・出荷時期は5月上旬から9月中旬。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'GGG農園',
            'product' => '聖護院大根',
            'img' => 'img/shogoin.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '大きく丸い聖護院だいこんは、元は長大根だったとか。 苦みがなくほんのり甘味さえある聖護院だいこんは、長時間炊いても煮崩れせず、とろけるような味わいになるのが特徴です。 千本今出川から少し西に行ったところにある千本釈迦堂では、12月半ば、毎年中風除けを祈願しての大根焚が行われます。アツアツのとろけるような聖護院だいこんの味わいは、１年も２年も寿命を延ばしてくれるようだと、毎年長い行列が絶えません。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'HHH農園',
            'product' => '金時人参',
            'img' => 'img/kintoki.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '金時にんじんの紅は、リコペンを多く含み、最近特にガンを予防する効果が高いことが評価されています。金時人参は芽が出にくく、厚めに種をまいて間引くのが栽培の特徴ですが、その間引き菜も「にんじん葉」として流通し、多くのファンを集めています。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'III農園',
            'product' => '京水菜',
            'img' => 'img/mizuna.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '京都のみず菜は千筋京みず菜ともいわれ、葉柄が繊細で細く白く、葉の緑とのコントラストが実に美しい野菜です。 軟らかく、かつシャキシャキとした歯ざわりの「京みず菜」は、鍋ものはもちろん、サラダ感覚で周年味わえる現在の京野菜の代表選手となっています。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'JJJ農園',
            'product' => '鹿ヶ谷かぼちゃ',
            'img' => 'img/okuroshimeji.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => ' 江戸時代、津軽から持ち帰られた菊かぼちゃが栽培されるうち、突然変異で今の形になったという鹿ヶ谷かぼちゃ。鹿ヶ谷かぼちゃには、成人病予防に効果のあるリノレン酸が多く、科学分析までしなくても、先人たちは何もかもお見通しだったようです。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'KKK農園',
            'product' => '菜の花',
            'img' => 'img/nanohana.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '菜の花の「菜」とは食用の意味であり、菜の花とは食用の花の意味である。コマツナ、ハクサイ、チンゲンサイなどは葉を若どりして食べるもので、そのまま育てて薹（とう）立ちさせると、黄色い花が咲いて花蕾を食べることができる。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'LLL農園',
            'product' => '畑菜',
            'img' => 'img/hatakena.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '「畑菜」はアブラナ科・アブラナ属で、採油向けに古くから栽培されて在来種が食用に改良され、春先の若菜として食べられるようになりました。 京都の伝統野菜で他の地域では作られていません。 1月から2月が収穫最盛期です。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'MMM農園',
            'product' => '壬生菜',
            'img' => 'img/mibuna.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '1800年代にみず菜の自然交雑で出来たといわれる壬生菜は、現在の中京区・壬生寺付近で多く作られていました。ビタミンCや食物繊維が豊富なことも「京壬生菜」の特徴です。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'NNN農園',
            'product' => 'くわい',
            'img' => 'img/kuwai.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => 'かつて、くわいの産地は、京都市南区の東寺の周辺だったそうで、この辺りは標高も低く、昔から井戸を掘ればすぐ水が湧きだすような低湿地であったため、くわい作りに適していたといいます。現代は京都市などでわずかに栽培が続けられているのが現状です。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'OOO農園',
            'product' => '堀川ごぼう',
            'img' => 'img/horikawa.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '京の伝統野菜にはユニ－クなものが多くありますが、堀川ごぼうはその最たるものの一つといえます。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'PPP農園',
            'product' => '堀川ごぼう',
            'img' => 'img/horikawa.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '京の伝統野菜にはユニ－クなものが多くありますが、堀川ごぼうはその最たるものの一つといえます。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'QQQ農園',
            'product' => '京たけのこ',
            'img' => 'img/takenoko.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => 'えぐみがなく、軟らかく甘味がある日本一の誉れ高い京たけのこは、並々ならぬ栽培農家のたけのこ畑管理から生まれます。施肥、土入れ、親竹の間伐など、すべて農家の手作業で行われるのです。 桜のつぼみが脹らみだす頃、いまも京都西山一帯は「朝堀りたけのこ」ののぼりでにぎわいます。'
        ];
        Product::create($param);
        $param = [
            'farmer' => 'RRR農園',
            'product' => '九条ネギ',
            'img' => 'img/kujonegi.jpg',
            'volume' => '500',
            'price' => '500',
            'comments' => '葉の内部のぬめりが、ネギ本来の甘味と軟らかさの秘密である九条ねぎ。白葱と違って、緑の葉にはカロテンやビタミンBを多く含みます。九条ねぎをふんだんに入れた温かい味噌汁は、風邪の妙薬ともいわれてきました。鍋物、すきやき、ぬたや和え物など様々な料理で食べていただきたい京野菜です。'
        ];

    }
}
