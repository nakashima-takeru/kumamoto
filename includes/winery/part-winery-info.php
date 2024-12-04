<?php
$sheet_name = 'part-winery-info';
$sheet_path = get_template_directory_uri() . '/assets/css/components/part-winery-info.css';
wp_enqueue_style($sheet_name, $sheet_path);

$wineryName = $args['wineryName'];
$wineryAddress = $args['wineryAddress'];
$wineryText = [
    $args['wineryText1'],
    $args['wineryText2'],
];
$img1 = $args['img1'];
$imgAlt1 = $args['imgAlt1'];
$img2 = $args['img2'];
$imgAlt2 = $args['imgAlt2'];
$img3 = $args['img3'];
$imgAlt3 = $args['imgAlt3'];
$img4 = $args['img4'];
$imgAlt4 = $args['imgAlt4'];
$img5 = $args['img5'];
$imgAlt5 = $args['imgAlt5'];
?>
<section class=" wineryInfo js-headTrigger">
    <div class="container1560">
        <div class="wineryBox">
            <div class="wineryLeft">
                <hgroup>
                    <h2 class="wineryName"><?php echo $wineryName; ?><span class="wineryAddress">&nbsp;/&nbsp;<?php echo $wineryAddress; ?></span></h2>
                </hgroup>
                <?php foreach ($wineryText as $text) : ?>
                    <p class="wineryInfo__text">
                        <?php echo $text; ?>
                    </p>
                <?php endforeach; ?>
                <!-- <p class="wineryInfo__sns">新商品・イベントなど、<br class="for-sp">最新情報はこちらから</p>
                <ul class="wineryInfo__sns--box">
                    <li class="wineryInfo__sns--list">
                        <a href="" class="wineryInfo__sns--link">
                            <div class="wineryInfo__sns--icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/icon-facebook.svg" alt="facebookアイコン" class="wineryInfo__sns--facebook">
                            </div>
                            <p class="wineryInfo__sns--text">熊本ワインファーム<br>公式Facebook</p>
                        </a>
                    </li>
                    <li class="wineryInfo__sns--list">
                        <a href="" class="wineryInfo__sns--link">
                            <div class="wineryInfo__sns--icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/icon-insta.svg" alt="instaアイコン" class="wineryInfo__sns--insta">
                            </div>
                            <p class="wineryInfo__sns--text">熊本ワインファーム<br>公式Instagram</p>
                        </a>
                    </li>
                </ul> -->

            </div>
            <div class="wineryRight">
                <ul class="wineryInfo__imgBox first__wrap">
                    <li class="wineryInfo__imgList">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/<?php echo $img1; ?>" alt="<?php echo $imgAlt1; ?>" class="wineryInfo__img">
                    </li>
                    <li class="wineryInfo__imgList">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/<?php echo $img2; ?>" alt="<?php echo $imgAlt2; ?>" class="wineryInfo__img">
                    </li>
                </ul>
                <ul class="wineryInfo__imgBox second__wrap">
                    <li class="wineryInfo__imgList">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/<?php echo $img3; ?>" alt="<?php echo $imgAlt3; ?>" class="wineryInfo__img">
                    </li>
                    <li class="wineryInfo__imgList">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/<?php echo $img4; ?>" alt="<?php echo $imgAlt4; ?>" class="wineryInfo__img">
                    </li>
                </ul>
                <div class="wineryInfo__imgLast">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/<?php echo $img5; ?>" alt="<?php echo $imgAlt5; ?>" class="wineryInfo__img--last">
                </div>
            </div>
        </div>
        <?php if (is_page('kikuka-winery')) : ?>
            <div class="wineryBox__under">
                <p class="wineryInfo__text">
                    カフェ・ショップ「AIRA RIDGE(アイラリッジ)」では、山鹿産の四季折々の特産物を使った商品のほか、焼きたてのピザやソフトドリンク、ジェラートなどのデザートをご用意しております。<br><br>
                    どなたにも自信をもっておすすめできる地域の美味しいもの、贅沢なものを集めました。テイクアウトもできます。<br>ぜひ大自然に溢れる菊鹿ワイナリーで、思う存分ご堪能ください。
                </p>
                <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/a4_menu.pdf" class="banner__menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/banner_menu.png" class="wineryInfo__img--last">
                </a>
                <a href="https://yamaga-tanbou.jp/" class="yamagashiNavi">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/banner-yamagashi.svg" alt="山鹿探訪ナビ" class="yamagashiNavi--banner">
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>