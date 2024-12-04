<?php  /* Template Name: about */ ?>
<?php get_header(); ?>

<?php
$aboutTitle = [
    'title' => 'About',
    'lead' => '熊本ワインファームについて',
];

$aboutLink = [
    ['id' => 'history', 'title' => 'History', 'name' => '創業経緯'],
    ['id' => 'viticulture', 'title' => 'Viticulture', 'name' => 'ブドウ栽培'],
    // ['id' => 'viticulture', 'title' => 'Viticulture', 'name' => 'ブドウ栽培'],
    ['id' => 'brewing', 'title' => 'Wine Making', 'name' => 'ワイン醸造'],
    ['id' => 'award', 'title' => 'Award', 'name' => '受賞歴'],
];
?>
<main class="about js-headTrigger">
    <?php echo get_template_part('/includes/titles/part-page-subtitle', false, $aboutTitle); ?>

    <section class="aboutLink">
        <div class="container1080">
            <div class="aboutLink__box">
                <?php foreach ($aboutLink as $link) : ?>
                    <hgroup class="abouLink__group">
                        <a href="#<?php echo $link['id']; ?>" class="aboutLink__link">
                            <h2 class="aboutLink__title"><?php echo $link['title']; ?></h2>
                            <p class="aboutLink__name"><?php echo $link['name']; ?></p>
                        </a>
                    </hgroup>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <div class="aboutContainer container1080">
        <div class="aboutHistory">
            <?php
            $section = [
                [
                    'class' => 'history',
                    'title' => 'History',
                    'name' => '創業経緯',
                    'text' => '1999年創業。同年に契約栽培である「菊鹿町葡萄生産振興会」を設立し、ワイン用ブドウ品種「シャルドネ」「カベルネ・ソーヴィニヨン」を植栽しました。栽培未経験の契約生産者３軒でスタートし、二人三脚で一丸となって取り組んできました。地域ではブドウが栽培された実績もなく、当時は大変な苦労がありました。<br/>
                    <br/>植栽から４年目の充実したブドウが収穫できた年に、当時国内では初の試みである「ナイトハーベスト」、夜間の収穫を行いました。ナイトハーベスト収穫の目的は、温暖な地域で「ブドウを如何に傷めず畑から運び出すか」がポイントとなります。そのため気温が下がる時間帯の収穫が望ましく、相乗効果ではブドウの香気成分が最大限に高まるタイミングでもあります。<br/>
                    翌年は「菊鹿ナイトハーベスト シャルドネ２００３」が国内ワインコンクールで金賞を受賞したことで、想像していた産地テロワールに確信を持てワイン産地としてブドウの栽培面積を拡大してきました。<br/>
                    <br/>現在は自らも自社農園を運営し、「菊鹿町葡萄生産振興会」の生産者とともに、精力的に生産技術と品質の向上に励んでいます。',
                    'url1' => 'img-dummy1.jpg',
                    'url2' => 'img-dummy2.jpg',
                    'url3' => 'img-dummy3.jpg',
                    'url4' => 'img-dummy3.jpg'
                ],

                [
                    'class' => 'viticulture',
                    'title' => 'Viticulture',
                    'name' => 'ブドウ栽培',
                    'text' => 'ブドウ栽培地である山鹿市菊鹿町は熊本県北端に位置しています。菊鹿町は福岡県、大分県と隣接しており、八方ヶ岳、三国山、国見山など標高一千メートル級の山々に囲まれた中山間地域です。<br>
                    契約栽培である「菊鹿町葡萄生産振興会」に栽培してもらうブドウ畑は面積約7.5ヘクタールあり、町内約30か所に分布しています。標高は100～200ｍです。<br>
                    年間日照量は2,000時間を超え、さらにブドウの生育成熟期間（5月～9月）の日照量では約1,100時間となりブドウ栽培においては良い環境と言えます。<br><br>
                    一方、降水量は年間1,700～2,000㎜を超える環境となりますが、すべてのブドウ畑では雨よけ施設でブドウを病害から守る栽培方法を導入しています。雨よけ施設の相乗メリットは農薬散布の頻度が抑えられ、減農薬で栽培が可能なことです。また山鹿市は約80か所の湧水があります。ブドウ産地である菊鹿町は水温14℃台（他の地域は16～19℃台）であり地温を下げてくれ、寒暖の差にも影響していると思われます。菊鹿町が高品質な葡萄が収穫される地域であることも納得です。<br><br>
                    菊鹿町の土壌は淡色黒ぼく土、褐色低地土、褐色森林土、低地水田土、灰色低地土などで構成されており、ブドウ栽培区画を選定しています。<br>
                    栽培管理では適切な剪定による栽培性の向上や、開花期から早めの徐葉を行い果実の衛生状態や生育をコントロールしています。 このようなキャノピーマネージメントと気候（マイクロクライメート）、土壌の特徴が相まって、菊鹿テロワールが形成されています。<br>
                    丹精こめて育てられたブドウの収穫は生産者が全て手作業で、1房1房選別しながら丁寧に収穫を行っています。<br>
                    私たちの最終的な目的は健全なワインを造るための「健全果」の収穫です。',
                    'url1' => 'img-dummy1.jpg',
                    'url2' => 'img-dummy2.jpg',
                    'url3' => 'img-dummy3.jpg',
                    'url4' => 'img-dummy3.jpg'
                ],

                [
                    'class' => 'brewing',
                    'title' => 'Wine Making',
                    'name' => 'ワイン醸造',
                    'text' => '地域特性（区画ごとの気象条件、地質、土壌、ブドウ品種とその熟度など）により大きく味わいが変わります。 製造工程では、ブドウの圧搾加減や、醗酵温度でも仕上がりが左右されます。他に酵母の選抜などにより、ワインの方向性を促しています。 樽を使う場合には木材産地も重要な要因となります。凝縮された果実感や洗練された本来ブドウが持つポテンシャルを最高の状態に導くため、造り手はあれやこれやと妄想しながら取り組んでいます。<br><br>是非、ワイナリーに足を運んでいただき、造り手の話を聞いてください。',
                    'url1' => 'img-dummy1.jpg',
                    'url2' => 'img-dummy2.jpg',
                    'url3' => 'img-dummy3.jpg',
                    'url4' => 'img-dummy3.jpg'
                ],
            ];

            $first_section = $section[0];
            $second_section = $section[1];
            $third_section = $section[2];
            ?>

            <? /*
            <?php foreach ($section as $content) : ?>
                <section id="<?php echo $content['class']; ?>" class="<?php echo $content['class']; ?>">
                    <div class="aboutSection__container">
                        <div class="aboutSection__wrap">
                            <div class="aboutSection__left">
                                <hgroup class="aboutSection__group">
                                    <h2 class="aboutLink__title"><?php echo $content['title']; ?></h2>
                                    <p class="aboutLink__name"><?php echo $content['name']; ?></p>
                                </hgroup>
                                <p class="aboutSection__sentence"><?php echo $content['text']; ?></p>
                            </div>
                            <div class="aboutSection__right">
                                <div class="aboutSection__imgBox">
                                    <div class="aboutSection__img--inner">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/<?php echo $content['url1']; ?>" alt="" class="aboutSection__img">
                                    </div>
                                    <div class="aboutSection__img--inner">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/<?php echo $content['url2']; ?>" alt="" class="aboutSection__img">
                                    </div>
                                </div>
                                <div class="aboutSection__imgBox">
                                    <div class="aboutSection__img--inner">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/<?php echo $content['url3']; ?>" alt="" class="aboutSection__img">
                                    </div>
                                    <div class="aboutSection__img--inner">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/<?php echo $content['url4']; ?>" alt="" class="aboutSection__img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
            */ ?>

            <section id="<?php echo $first_section['class']; ?>" class="<?php echo $first_section['class']; ?>">
                <div class="aboutSection__container">
                    <div class="aboutSection__wrap">
                        <div class="aboutSection__left">
                            <hgroup class="aboutSection__group">
                                <h2 class="aboutLink__title"><?php echo $first_section['title']; ?></h2>
                                <p class="aboutLink__name"><?php echo $first_section['name']; ?></p>
                            </hgroup>
                            <p class="aboutSection__sentence"><?php echo $first_section['text']; ?></p>
                        </div>
                        <div class="aboutSection__image">
                            <div class="aboutImage__item aboutImage__1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_1.png" alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_2.png" alt="" />
                            </div>
                            <div class="aboutImage__item aboutImage__2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_3.png" alt="" />
                            </div>
                            <div class="aboutImage__item aboutImage__3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_4.png" alt="" />
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="<?php echo $second_section['class']; ?>" class="<?php echo $second_section['class']; ?>">
                <div class="aboutSection__container">
                    <div class="aboutSection__wrap">
                        <div class="aboutSection__left">
                            <hgroup class="aboutSection__group">
                                <h2 class="aboutLink__title"><?php echo $second_section['title']; ?></h2>
                                <p class="aboutLink__name"><?php echo $second_section['name']; ?></p>
                            </hgroup>
                            <p class="aboutSection__sentence"><?php echo $second_section['text']; ?></p>
                        </div>
                        <div class="aboutSection__image">
                            <div class="aboutImage__item aboutImage__4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_5.png" alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_6.png" alt="" />
                            </div>
                            <div class="aboutImage__item aboutImage__5">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_7.png" alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_8.png" alt="" />
                            </div>
                            <div class="aboutImage__item aboutImage__6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_9.png" alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_10.png" alt="" />
                            </div>
                            <div class="aboutImage__item aboutImage__7">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_11.png" alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_12.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="<?php echo $third_section['class']; ?>" class="<?php echo $third_section['class']; ?>">
                <div class="aboutSection__container">
                    <div class="aboutSection__wrap">
                        <div class="aboutSection__left">
                            <hgroup class="aboutSection__group">
                                <h2 class="aboutLink__title"><?php echo $third_section['title']; ?></h2>
                                <p class="aboutLink__name"><?php echo $third_section['name']; ?></p>
                            </hgroup>
                            <p class="aboutSection__sentence"><?php echo $third_section['text']; ?></p>
                        </div>
                        <div class="aboutSection__image">
                            <div class="aboutImage__item aboutImage__8">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_13.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="aboutImage for-pc">
            <div class="aboutImage__item aboutImage__1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_1.png" alt="" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_2.png" alt="" />
            </div>
            <div class="aboutImage__item aboutImage__2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_3.png" alt="" />
            </div>
            <div class="aboutImage__item aboutImage__3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_4.png" alt="" />
            </div>
            <div class="aboutImage__item aboutImage__4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_5.png" alt="" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_6.png" alt="" />
            </div>
            <div class="aboutImage__item aboutImage__5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_7.png" alt="" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_8.png" alt="" />
            </div>
            <div class="aboutImage__item aboutImage__6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_9.png" alt="" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_10.png" alt="" />
            </div>
            <div class="aboutImage__item aboutImage__7">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_11.png" alt="" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_12.png" alt="" />
            </div>
            <div class="aboutImage__item aboutImage__8">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/img-about_13.png" alt="" />
            </div>
        </div>
    </div>




    <!-- Award -->
    <?php
    $awardContent = [
        ['url' => 'img-award1.png', 'name' => '菊鹿シャルドネ樽熟成<br>2020', 'year' => '2023', 'contest' => 'シャルドネ・デュ・モンド<br>2023', 'award' => 'ゴールドメダル', 'category' => 'カテゴリー：白・辛口', 'class' => '区　　　分：-'],

        ['url' => 'img-award2.png', 'name' => '菊鹿シャルドネ', 'year' => '2023', 'contest' => 'シャルドネ・デュ・モンド<br>2023', 'award' => 'シルバーメダル', 'category' => 'カテゴリー：白・辛口', 'class' => '区　　　分：-'],

        ['url' => 'img-award3.png', 'name' => '菊鹿シャルドネ樽熟成<br>2019', 'year' => '2022', 'contest' => '日本ワインコンクール2022', 'award' => '金賞・部門最高賞', 'category' => 'カテゴリー：白・辛口', 'class' => '区　　　分：欧州系品種'],
    ];

    $awardThead = [
        ['tr' => '受賞年'],
        ['tr' => 'ワイン名'],
        ['tr' => 'コンクール名'],
        ['tr' => 'カテゴリー'],
        ['tr' => '区分'],
        ['tr' => '賞'],
    ];

    $awardTbody = [
        ['tr1' => '2023', 'tr2' => '菊鹿シャルドネ樽熟成2020', 'tr3' => 'シャルドネ・デュ・モンド2023', 'tr4' => '白・辛口', 'tr5' => '-', 'tr6' => 'ゴールドメダル'],

        ['tr1' => '2023', 'tr2' => '菊鹿シャルドネ', 'tr3' => 'シャルドネ・デュ・モンド2023', 'tr4' => '白・辛口', 'tr5' => '-', 'tr6' => 'シルバーメダル'],

        ['tr1' => '2022', 'tr2' => '菊鹿シャルドネ樽熟成2019', 'tr3' => '日本ワインコンクール2022', 'tr4' => '白・辛口', 'tr5' => '欧州系品種', 'tr6' => '金賞・部門最高賞'],

        ['tr1' => '2022', 'tr2' => 'ナイアガラ', 'tr3' => '第9回サクラアワード2022', 'tr4' => '甘口・白', 'tr5' => 'スティルワイン白', 'tr6' => 'ゴールドメダル'],

        ['tr1' => '2022', 'tr2' => '菊鹿シャルドネ', 'tr3' => '日本ワインコンクール2022', 'tr4' => '白・辛口', 'tr5' => '欧州系品種', 'tr6' => '銅賞'],

        ['tr1' => '2022', 'tr2' => '菊鹿ナイトハーベスト五郎丸2020', 'tr3' => '日本ワインコンクール2022', 'tr4' => '白・辛口', 'tr5' => '欧州系品種', 'tr6' => '銅賞'],

        ['tr1' => '2022', 'tr2' => 'キャンベルアーリー', 'tr3' => '第9回サクラアワード2022', 'tr4' => '甘口・赤', 'tr5' => 'スティルワイン赤', 'tr6' => 'シルバーメダル'],

        ['tr1' => '2022', 'tr2' => '菊鹿シャルドネ', 'tr3' => 'シャルドネ・デュ・モンド2022', 'tr4' => '白・辛口', 'tr5' => '-', 'tr6' => 'ブロンズメダル'],

        ['tr1' => '2021', 'tr2' => 'デラウェア', 'tr3' => '第8回サクラアワード2021', 'tr4' => '白・辛口', 'tr5' => '-', 'tr6' => 'シルバーメダル'],

        ['tr1' => '2020', 'tr2' => '菊鹿シャルドネ樽熟成2017', 'tr3' => 'シャルドネ・デュ・モンド2020', 'tr4' => '白・辛口', 'tr5' => '-', 'tr6' => 'シルバーメダル'],

        ['tr1' => '2019', 'tr2' => 'マスカットベーリーA', 'tr3' => '日本で飲もう最高のワイン2019', 'tr4' => '赤・辛口', 'tr5' => '専門家部門', 'tr6' => 'シルバー賞'],

        ['tr1' => '2019', 'tr2' => 'デラウェア', 'tr3' => '日本で飲もう最高のワイン2019', 'tr4' => '白・辛口', 'tr5' => '専門家部門', 'tr6' => 'ゴールド賞'],

        ['tr1' => '2019', 'tr2' => 'デラウェア', 'tr3' => '日本で飲もう最高のワイン2019', 'tr4' => '甘口・赤', 'tr5' => '愛好家部門', 'tr6' => 'シルバー賞'],

        ['tr1' => '2019', 'tr2' => 'キャンベルアーリー', 'tr3' => '日本で飲もう最高のワイン2019', 'tr4' => '甘口・赤', 'tr5' => '愛好家部門', 'tr6' => 'ゴールド賞'],

        ['tr1' => '2019', 'tr2' => 'キャンベルアーリー', 'tr3' => '日本で飲もう最高のワイン2019', 'tr4' => '甘口・赤', 'tr5' => '専門家部門', 'tr6' => 'シルバー賞'],

        ['tr1' => '2019', 'tr2' => 'ナイアガラ', 'tr3' => '日本で飲もう最高のワイン2019', 'tr4' => '甘口・白', 'tr5' => '愛好家部門', 'tr6' => 'ゴールド賞'],

        ['tr1' => '2019', 'tr2' => 'ナイアガラ', 'tr3' => '日本で飲もう最高のワイン2019', 'tr4' => '甘口・白', 'tr5' => '専門家部門', 'tr6' => 'シルバー賞'],
    ];
    ?>

    <section id="award" class="award">
        <div class="container1080">
            <hgroup class="award__group">
                <h2 class="aboutLink__title">Award</h2>
                <p class="aboutLink__name">受賞歴</p>
            </hgroup>
            <div class="awardContentBox">
                <?php foreach ($awardContent as $content) : ?>
                    <div class="awardContent__wrap">
                        <div class="awardContent">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/<?php echo $content['url']; ?>" alt="" class="awardContent__img">
                        </div>
                        <div class="awardContent__box">
                            <p class="awardContent__name"><?php echo $content['name']; ?></p>
                            <div class="awardContent__inner">
                                <p class="awardContent__year"><?php echo $content['year']; ?>年</p>
                                <p class="awardContent__contest"><?php echo $content['contest']; ?></p>
                                <p class="awardContent__award"><?php echo $content['award']; ?></p>
                                <p class="awardContent__category"><?php echo $content['category']; ?></p>
                                <p class="awardContent__class"><?php echo $content['class']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="award__table">
            <table class="award__table--wrap">
                <thead class="award__thead">
                    <tr class="award__tr">
                        <?php foreach ($awardThead as $thead) : ?>
                            <th class="award__th"><?php echo $thead['tr']; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody class="award__tbody">
                    <?php foreach ($awardTbody as $tbody) : ?>
                        <tr class="award__tr">
                            <td class="award__td"><?php echo $tbody['tr1']; ?>年</td>
                            <td class="award__td"><?php echo $tbody['tr2']; ?></td>
                            <td class="award__td"><?php echo $tbody['tr3']; ?></td>
                            <td class="award__td"><?php echo $tbody['tr4']; ?></td>
                            <td class="award__td"><?php echo $tbody['tr5']; ?></td>
                            <td class="award__td"><?php echo $tbody['tr6']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php get_footer(); ?>