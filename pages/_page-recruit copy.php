<?php  /* Template Name: 採用情報 */ ?>
<?php
$recruitTitle = [
    'title' => 'Recruit',
    'lead' => '採用情報',
];
?>
<?php get_header(); ?>

<main class="recruit js-headTrigger">
    <?php echo get_template_part('/includes/titles/part-page-subtitle', false, $recruitTitle); ?>

    <section class="recruitTop">
        <div class="container1160">
            <hgroup>
                <h2 class="recruitTitle">世界に通じるワインを一緒につくりませんか？</h2>
            </hgroup>
            <div class="recruitTop__img--box">
                <div class="recruitTop__img--inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/img-top1.jpg" alt="" class="recruitTop__img">
                </div>
                <div class="recruitTop__img--inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/img-top2.jpg" alt="" class="recruitTop__img">
                </div>
            </div>
            <div class="recruitTop__text--box">
                <p class="recruitTop__text">ともに働いてくださる方を募集します！</p>
                <p class="recruitTop__text">熊本ワインファームは、ブドウ栽培からワイン醸造、そしてワイン販売に至るまで一貫した事業を行う酒類メーカーです。地元で活躍したい方、UIターンの方歓迎します。</p>
            </div>
        </div>
    </section>
    <?php
    $recruitInfo = [
        ['number' => '①', 'job' => '製造職（栽培・醸造）', 'form' => '【雇用形態① パート】'],
        ['number' => '②', 'job' => 'ワイナリー販売業務全般', 'form' => '【雇用形態 パート】※正社員登用あり'],
    ];

    $recruitContent = [
        [
            ['title' => '業務内容', 'content' => '自社農園管理の補助'],
            ['title' => '勤務地', 'content' => '菊鹿ワイナリー / 熊本県山鹿市菊鹿町相良559-2'],
            ['title' => '給与', 'content' => '時給950円～'],
            ['title' => '勤務時間', 'content' => '10:00～17:00の間で応相談'],
            ['title' => '福利厚生', 'content' => '車通勤OK（無料駐車場完備）、通勤手当、社保完備'],
        ],
        [
            ['title' => '業務内容', 'content' => 'ワイナリー全体の施設で、接客や販売、簡単な調理などに携わっていただきます。<br>20代～40代が活躍中です。ワインや料理がお好きな方歓迎。<ul class="recruit__table--item"><li class="recruit__table---list">・ワインや商品の販売</li><li class="recruit__table---list">・グラスワインの提供</li><li class="recruit__table---list">・ピザやパスタなどの簡単な調理</li></ul>'],
            ['title' => '勤務地', 'content' => '菊鹿ワイナリー / 熊本県山鹿市菊鹿町相良559-2'],
            ['title' => '給与', 'content' => '時給950円～'],
            ['title' => '勤務時間', 'content' => '8:30～17:30　応相談'],
            ['title' => '福利厚生', 'content' => '車通勤OK（無料駐車場完備）、通勤手当、社保完備'],
        ],

    ];

    $recruitImg = [
        [
            ['url' => 'img-state3.jpg'],
            ['url' => 'img-state4.jpg'],
        ],
        [
            ['url' => 'img-state1.jpg'],
            ['url' => 'img-state2.jpg'],
        ]
    ];


    $recruitOther = [
        ['title' => '研修制度', 'text' => '資格取得補助、先進地視察、テイスティングセミナー、醸造セミナー'],

        ['title' => 'やりがい', 'text' => 'ワイン造りは、生活の豊かさをお手伝いすることができたり、沢山の方を笑顔にできる、とてもやりがいのある仕事です。'],

        ['title' => '将来の展望', 'text' => 'ワインは「農産物」です。農業であるブドウ作りから、ワイン造りを通して地域振興に取り組み、ワインメーカーとして「楽しんでいただく」「喜んでいただく」存在に成長していきたいと考えます。'],

        ['title' => '問い合わせ', 'text' => '①お電話でのお問合せ<br>
            <a href="tel:096-275-2277" class="contact__tel">096-275-2277</a>（受付時間　平日10:00～17:00） 担当：竹内<br><br>
            ②下記のお問い合わせフォームより種別「求人募集」をお選びいただき、<br>
            　必要事項をご入力の上送信してください。'],
    ];
    ?>
    <section class="recruitment">
        <div class="recruitment__box">
            <h3 class="recruit__title">募集要項</h3>
            <?php foreach ($recruitInfo as $index => $info) : ?>
                <div class="recruit__wrap">
                    <div class="recruit__content">
                        <p class="recruit__content--title">職種<?php echo $info['number']; ?><span class="recruit__job"><?php echo $info['job']; ?></span></p>
                        <p class="info__form"><?php echo $info['form']; ?></p>
                    </div>
                    <div class="recruit__info">
                        <table class="recruit__table">
                            <tbody class="recruit__table">
                                <?php foreach ($recruitContent[$index] as $content) : ?>
                                    <tr class="recruit__tr">
                                        <td class="recruit__td">
                                            <?php echo $content['title']; ?>
                                        </td>
                                        <td class="recruit__td">
                                            <?php echo $content['content']; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="recruit__img--wrap">
                        <?php foreach ($recruitImg[$index] as $img) : ?>
                            <div class="recruit__img--box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/<?php echo $img['url']; ?>" alt="" class="recruit__img">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="recruitOther">
                <?php foreach ($recruitOther as $other) : ?>
                    <h3 class="recruit__title"><?php echo $other['title']; ?></h3>
                    <p class="recruit__other--content"><?php echo $other['text']; ?></p>
                <?php endforeach; ?>
                <a href="<?php echo home_url('contact/'); ?>" class="recruit__contact">
                    お問い合わせフォームはこちら
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>