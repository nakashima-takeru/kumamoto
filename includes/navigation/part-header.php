<?php
$sheet_name = 'part-header';
$sheet_path = get_template_directory_uri() . '/assets/css/components/part-header.css';
wp_enqueue_style($sheet_name, $sheet_path);
$navbar_top = [
    [
        "link" => "/news",
        "text" => "新着情報",
    ],
    [
        "link" => "/about/#award",
        "text" => "受賞歴",
    ],
    // [
    //     "link" => "/special",
    //     "text" => "SPECIAL特集",
    // ],
];
$navbar_bottom = [
    [
        "link" => "/kikuka-winery",
        "text" => "菊鹿ワイナリー",
    ],
    [
        "link" => "/kumamoto-winery",
        "text" => "熊本ワイナリー",
    ],
    [
        "link" => "/recruit",
        "text" => "採用情報",
    ],
    [
        "link" => "/contact",
        "text" => "お問い合わせ",
    ],
];
?>

<header class="header" id="pageHeader">
    <span class="blurBackground"></span>
    <nav class="navbar">
        <a class="navbar__logo" href="<?php echo home_url("/"); ?>">
            <img id="js-navLogo" data-default-icon="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-header_logo.svg" data-alt-icon="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-header_logo_black.svg" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-header_logo.svg" />
        </a>
        <div class="navbar__main">
            <ul class="navbar__list navbar__list--top">
                <li class="navbar__item"><a href="<?php echo home_url(''); ?>" class="navbar__link">TOP</a></li>
                <li class="navbar__item for-megamenu js-modalBtn"><a class="navbar__link">熊本ワインファームについて</a></li>
                <?php foreach ($navbar_top as $navitem) : ?>
                    <li class="navbar__item">
                        <a class="navbar__link" href="<?php echo home_url($navitem['link']); ?>"><?php echo $navitem['text']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="navbar__list navbar__list--bottom">
                <?php foreach ($navbar_bottom as $navitem) : ?>
                    <li class="navbar__item">
                        <a class="navbar__link" href="<?php echo home_url($navitem['link']); ?>"><?php echo $navitem['text']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="navbar__hamburger js-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <div class="navdrawer" id="js-navdrawer">
        <nav class="navdrawer__nav">
            <a class="js-navdrawerLink" href="<?php echo home_url(""); ?>">TOP</a>
            <a class="js-navdrawerLink" href="<?php echo home_url("about"); ?>">熊本ワインファームについて</a>
            <a class="js-navdrawerLink" href="<?php echo home_url("news"); ?>">新着情報</a>
            <a class="js-navdrawerLink" href="<?php echo home_url("about"); ?>/#award">受賞歴</a>
            <?php /*
            <a class="js-navdrawerLink" href="<?php echo home_url("special"); ?>">SPECIAL特集</a>
            */ ?>
            <a class="js-navdrawerLink" href="<?php echo home_url("recruit"); ?>">採用情報</a>
            <a class="js-navdrawerLink" href="<?php echo home_url("contact"); ?>">お問い合わせ</a>
        </nav>
    </div>
</header>

<div class="megamenu js-modal">
    <div class="megamenu__inner">
        <p class="megamenu__title"><span><a href="<?php echo home_url("about"); ?>">熊本ワインファームについて</a></span></p>
        <div class="megamenuNav">
            <div class="megamenuNav__box">
                <ul class="megamenuNav__list">
                    <li><a href="<?php echo home_url("about"); ?>/#history">創業経緯</a></li>
                    <li><a href="<?php echo home_url("about"); ?>/#viticulture">ブドウ栽培</a></li>
                    <li><a href="<?php echo home_url("about"); ?>/#brewing">ワイン醸造</a></li>
                    <li><a href="<?php echo home_url("about"); ?>/#award">受賞歴</a></li>
                </ul>
            </div>

        </div>
        <div class="megamenuClose">
            <p class="megamenuClose__word"><span class="js-modalCloseBtn">閉じる</span></p>
        </div>
    </div>
</div>