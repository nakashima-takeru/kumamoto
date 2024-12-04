<?php  /* Template Name: 熊本ワイナリー */ ?>
<?php
$wineryTop = [
    'topImg' => 'img-kumamoto_winery_top.jpg',
    'topImgAlt' => '熊本ワイナリー',
    'topLogo' => 'logo-kumamoto_winery.jpg',
    'topLogoAlt' => '熊本ワイナリーロゴ',
];

$wineryInfo = [
    'wineryName' => '熊本ワイナリー',
    'wineryAddress' => '熊本県熊本市北区和泉町',
    'wineryText1' => '熊本市街地に近い1999年開業の「準アーバンワイナリー」です。<br>山鹿市、玉名市、熊本市、宇城市など熊本県産ブドウを中心にワインを醸造しています。8㎘～10㎘のステンレスタンクを中心に醸造していまして、ワインの製造能力は約20万本です。貯蔵庫では約300本ほどの樽でワインを熟成しています。<br><br>また、併設の直売ショップでは専属スタッフによる、ワインに関する詳しい説明も行っております。ギフトやプレゼントの対応、全国発送も承っております。',
    'wineryText2' => '※グラスワインの試飲販売につきまして<br>熊本ワイナリー…試飲販売は現在行っておりません。<br>菊鹿ワイナリー…常時グラスワインを販売しております。<br><br>皆様のお越しを心よりお待ち申し上げます。',
    'img1' => 'kumamoto-1.jpg',
    'imgAlt1' => '熊本ワイナリー',
    'img2' => 'kumamoto-2.jpg',
    'imgAlt2' => '熊本ワイナリー',
    'img3' => 'kumamoto-3.jpg',
    'imgAlt3' => '熊本ワイナリー',
    'img4' => 'kumamoto-4.jpg',
    'imgAlt4' => '熊本ワイナリー',
    'img5' => 'kumamoto-5.jpg',
    'imgAlt5' => '熊本ワイナリー',
];

$wineryCalender = [
    'wineryCalenderTitle' => '熊本ワイナリー',
];
?>

<?php get_header(); ?>

<main class="kumamotoWinery">

    <?php echo get_template_part('/includes/winery/part-winery-top', false, $wineryTop); ?>

    <?php echo get_template_part('/includes/winery/part-winery-info', false, $wineryInfo); ?>

    <?php echo get_template_part('/includes/winery/part-winery-calender', false, $wineryCalender); ?>

    <section class="wineryAccess js-headTrigger">
        <div class="container1080">
            <hgroup class="wineryAccess__group">
                <h3 class="wineryAccess__title">Access</h3>
                <p class="wineryAccess__text">アクセス</p>
            </hgroup>
            <p class="wineryAccess__name">熊本ワイナリー</p>
            <p class="wineryAccess__address">熊本県熊本市北区和泉町字三ッ塚168-17 西里醸造所</p>
            <p class="wineryAccess__tel">tel.096-275-2277</p>
            <dl class="wineryAccess__wrap">
                <dt class="wineryAccess__contents">
                    〈営業時間〉
                </dt>
                <dd class="wineryAccess__hours">
                    平　日　10：00～12：00、13：00～17：00<br class="for-sp">（土日祝を除く）<br>
                    土日祝　10：00～17：00<br class="for-sp"> ※平日12：00～13：00は【昼休業】
                </dd>
            </dl>
            <dl class="wineryAccess__wrap">
                <dt class="wineryAccess__contents">
                    〈定休日〉　
                </dt>
                <dd class="wineryAccess__hours">
                    水曜日
                </dd>
            </dl>
            <div class="wineryAccess__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2738.2865259590976!2d130.69245220355813!3d32.85030049102437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3540f6e831930f29%3A0x42a1ff1fe23cd0ce!2z54aK5pys44Ov44Kk44OK44Oq44O8!5e0!3m2!1sja!2sjp!4v1721121952058!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <dl class="wineryAccess__means mt-45">
                <dt class="wineryAccess__means--title">
                    自動車でお越しの方
                    <span class="dotted-line"></span>
                </dt>
                <dd class="wineryAccess__means--root">
                    熊本市中心部より15~20分。九州縦貫自動車道 植木ICより20分。
                </dd>
            </dl>
            <dl class="wineryAccess__means mt-30">
                <dt class="wineryAccess__means--title">
                    JRでお越しの方
                    <span class="dotted-line"></span>
                </dt>
                <dd class="wineryAccess__means--root">
                    JR鹿児島本線 西里駅下車 徒歩約20分。
                </dd>
            </dl>
            <dl class="wineryAccess__means mt-30">
                <dt class="wineryAccess__means--title">
                    JRでお越しの方
                    <span class="dotted-line"></span>
                </dt>
                <dd class="wineryAccess__means--root">
                    フードパル熊本バス停より熊本ワインまでは徒歩5〜6分。
                </dd>
            </dl>
            <div class="wineryAccess__bas">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/img-bas.jpg" alt="バスの時間" class="wineryAccess__bas--img">
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>