<?php
$sheet_name = 'part-footer';
$sheet_path = get_template_directory_uri() . '/assets/css/components/part-footer.css';
wp_enqueue_style($sheet_name, $sheet_path);
$language = $args['language'];
?>

<div class="banner" id="js-bannerAnimate">
    <div class="banner__online">
        <span class="banner__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-cart.svg" alt="">
        </span>
        <p class="banner__text"><a href="https://kumamotowineonline.co.jp/" target="_blank">ONLINE SHOP</a></p>

        <hr>

        <div class="banner__sns">
            <a href="https://www.instagram.com/kumamotowinefarm/" target="_blank" class="banner__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-instagram.png" alt=""></a>
            <a href="https://www.facebook.com/kumamotowine1999/" target="_blank" class="banner__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-facebook.png" alt=""></a>
        </div>
    </div>
</div>
<!-- -->

<footer class="footer">
    <div class="footer__container">
        <p class="footer__title">熊本ワインファーム株式会社</p>
        <div class="footerTop">
            <div class="footerTopLeft">
                <div class="footer__icons">
                    <a href="https://www.instagram.com/kumamotowinefarm/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-instagram.png" /></a>
                    <a href="https://www.facebook.com/kumamotowine1999/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-facebook.png" /></a>
                </div>
                <p class="footer__text">熊本市北区和泉町字三ツ塚168-17</p>
                <div class="footer__numbers">
                    <p class="footer__text">tel.096-275-2277</p>
                    <p class="footer__text">fax.096-275-2228</p>
                </div>
                <ul class="footer__text--box">
                    <li class="footer__text"><a href="<?php echo home_url("claim-policy"); ?>">クレームポリシー</a></li>
                    <li class="footer__text"><a href="<?php echo home_url("privacy-policy"); ?>">プライバシーポリシー</a></li>
                </ul>
                <!-- <p class="footer__text"></p>
                <p class="footer__text"></p> -->
            </div>
            <div class="footerTopRight">
                <p class="footer__text">20歳未満の者の飲酒は、法律で禁止されています。</p>
                <p class="footer__text">
                    酒類販売管理者：氏名 永田 雄一郎<br>
                    酒類販売管理研修受講年月日：令和5年2月9日<br>
                    次回研修の受講期限：令和8年2月8日<br>
                    研修実施団体名：熊本小売酒販組合
                </p>
            </div>
        </div>
        <?php /*
        <div class="footer__language">
            <a <?php if ($language == 'jp') : ?>class="active" <?php endif; ?> href="<?php echo home_url(""); ?>">日本語</a>
            <a <?php if ($language == 'en') : ?>class="active" <?php endif; ?> href="<?php echo home_url("#"); ?>">English</a>
        </div>
		*/ ?>
        <p class="copywrite">All content© KUMAMOTO WINE FARM CO., LTD. All rights reserved.</p>
    </div>
</footer>