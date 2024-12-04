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
            <div class="recruit__wrap">
                <div class="recruit__content">
                    <p class="recruit__content--title">職種①<span class="recruit__job">製造職（栽培・醸造）</span></p>
                </div>
                <p class="info__form">【雇用形態① 正社員】</p>
                <div class="recruit__info">
                    <table class="recruit__table">
                        <tbody class="recruit__table">
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    業務内容 </td>
                                <td class="recruit__td">
                                    自社農園の管理、醸造の作業に携わっていただきます。未経験の方OK</td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    勤務地 </td>
                                <td class="recruit__td">
                                    菊鹿ワイナリー / 熊本県山鹿市菊鹿町相良559-2<br>
                                    熊本ワイナリー / 熊本県熊本市北区和泉町三ッ塚168-17</td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    給与 </td>
                                <td class="recruit__td">
                                    170,000円～＋諸手当<br>
                                    ※前職・経験・能力などを考慮し決定致します<br>
                                    ※試用期間3ヶ月あり（同条件） </td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    勤務時間 </td>
                                <td class="recruit__td">
                                    8:30～17:30（休憩1時間）<br>
                                    土日休み（月9日程度）収穫・仕込み時期は異なります<br>
                                    ※年間休日107日、年末年始休暇、有給休暇あり</td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    資格 </td>
                                <td class="recruit__td">
                                    ・普通自動車免許<br>
                                    ・25歳以下（長期勤務によるキャリア形成をはかるため、例外事由3号のイ）</td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    福利厚生 </td>
                                <td class="recruit__td">
                                    車通勤OK（無料駐車場完備）、通勤手当、社保完備、昇給年1回、賞与年2回、退職金制度あり</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="info__form">【雇用形態② パート】</p>
                <div class="recruit__info">
                    <table class="recruit__table">
                        <tbody class="recruit__table">
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    業務内容 </td>
                                <td class="recruit__td">
                                    自社農園管理の補助 ※収穫時など繁忙期の募集となります</td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    勤務地 </td>
                                <td class="recruit__td">
                                    菊鹿ワイナリー / 熊本県山鹿市菊鹿町相良559-2 </td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    給与 </td>
                                <td class="recruit__td">
                                    時給950円～ </td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    勤務時間 </td>
                                <td class="recruit__td">
                                    10:00～17:00の間で応相談 </td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    福利厚生 </td>
                                <td class="recruit__td">
                                    車通勤OK（無料駐車場完備）、通勤手当、社保完備 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="recruit__img--wrap">
                    <div class="recruit__img--box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/img-state3.jpg" alt="" class="recruit__img">
                    </div>
                    <div class="recruit__img--box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/img-state4.jpg" alt="" class="recruit__img">
                    </div>
                </div>
            </div>
            <?php /* <div class="recruit__wrap">
                <div class="recruit__content">
                    <p class="recruit__content--title">職種②<span class="recruit__job">ワイナリー販売業務全般</span></p>
                    <p class="info__form">【雇用形態 パート】※正社員登用あり</p>
                </div>
                <div class="recruit__info">
                    <table class="recruit__table">
                        <tbody class="recruit__table">
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    業務内容 </td>
                                <td class="recruit__td">
                                    ワイナリー全体の施設で、接客や販売、簡単な調理などに携わっていただきます。<br>20代～40代が活躍中です。ワインや料理がお好きな方歓迎。<ul class="recruit__table--item">
                                        <li class="recruit__table---list">・ワインや商品の販売</li>
                                        <li class="recruit__table---list">・グラスワインの提供</li>
                                        <li class="recruit__table---list">・ピザやパスタなどの簡単な調理</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    勤務地 </td>
                                <td class="recruit__td">
                                    菊鹿ワイナリー / 熊本県山鹿市菊鹿町相良559-2 </td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    給与 </td>
                                <td class="recruit__td">
                                    時給950円～ </td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    勤務時間 </td>
                                <td class="recruit__td">
                                    8:30～17:30　応相談 </td>
                            </tr>
                            <tr class="recruit__tr">
                                <td class="recruit__td">
                                    福利厚生 </td>
                                <td class="recruit__td">
                                    車通勤OK（無料駐車場完備）、通勤手当、社保完備 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="recruit__img--wrap">
                    <div class="recruit__img--box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/img-state1.jpg" alt="" class="recruit__img">
                    </div>
                    <div class="recruit__img--box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/img-state2.jpg" alt="" class="recruit__img">
                    </div>
                </div>
            </div> */ ?>
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