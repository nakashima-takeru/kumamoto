<?php  /* Template Name: 菊鹿ワイナリー */ ?>
<?php
$wineryTop = [
    'topImg' => 'img-kikuga_winery_top.jpg',
    'topImgAlt' => '菊鹿ワイナリー',
    'topLogo' => 'logo-kikuka_winery.jpg',
    'topLogoAlt' => '菊鹿ワイナリーロゴ',
];

$wineryInfo = [
    'wineryName' => '菊鹿ワイナリー',
    'wineryAddress' => '熊本県山鹿市菊鹿町',
    'wineryText1' => '主要銘柄「菊鹿」のブドウ産地である菊鹿町で2018年に開業したワイナリーです。<br>菊鹿ワイナリーでは「自社農園」「契約栽培：菊鹿町葡萄生産振興会」「山鹿市産」のブドウで醸造しています。品種別に小仕込みを行うため、醗酵ステンレスタンクや搾汁機はコンパクトな設備を設置しています。<br>葡萄栽培から瓶詰めまで、気候風土を活かしながら一貫したワインづくりに取り組んでいます。',
    'wineryText2' => 'また、ワインを中心にオリジナル商品やワイングッズ、美食をセレクトしたワインショップを併設しています。スタッフ選りすぐりの熊本県・国内・海外産の食品など豊富に取り揃えており、専属スタッフによるワインに関する詳しいご説明も行っております。テイスティングスペースを設けておりますので、ワイナリー限定ワイン含む全ての銘柄の飲み比べができます(有料)。',
    'img1' => 'img-kikuka1.jpg',
    'imgAlt1' => '菊鹿ワイナリー',
    'img2' => 'img-kikuka2.jpg',
    'imgAlt2' => '菊鹿ワイナリー',
    'img3' => 'img-kikuka3.jpg',
    'imgAlt3' => '菊鹿ワイナリー',
    'img4' => 'img-kikuka4.jpg',
    'imgAlt4' => '菊鹿ワイナリー',
    'img5' => 'img-kikuka5.jpg',
    'imgAlt5' => '菊鹿ワイナリー',
];

$wineryCalender = [
    'wineryCalenderTitle' => '菊鹿ワイナリー',
];
?>

<?php get_header(); ?>

<main class="kikukaWinery">

    <?php echo get_template_part('/includes/winery/part-winery-top', false, $wineryTop); ?>

    <?php echo get_template_part('/includes/winery/part-winery-info', false, $wineryInfo); ?>

    <?php
    $sheet_name = 'part-calender';
    $sheet_path = get_template_directory_uri() . '/assets/css/components/part-winery-calender.css';
    wp_enqueue_style($sheet_name, $sheet_path);

    $wineryCalenderTitle = $args['wineryCalenderTitle'];
    ?>

    <section class="wineryCalender js-headTrigger">
        <div class="container1160">
            <hgroup class="wineryCalender__group">
                <h3 class="wineryCalender__title"><?php echo $wineryCalenderTitle; ?>営業日カレンダー</h3>
            </hgroup>
            <div class="wineryCalender__date">
                <?php /* iframeのカレンダーがはいります。*/ ?>
                <iframe src="https://calendar.google.com/calendar/embed?src=449bf4ff056c9b53c69a27d267d4d134a8a6bd8dca7d2e04fde35fa41c27fe79%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </section>

    <section class="wineryAccess js-headTrigger">
        <div class="container1080">
            <hgroup class="wineryAccess__group">
                <h3 class="wineryAccess__title">Access</h3>
                <p class="wineryAccess__text">アクセス</p>
            </hgroup>

            <p class="wineryAccess__name">菊鹿ワイナリー</p>
            <div class="wineryAccess__place--wrap">
                <p class="wineryAccess__place">熊本ワインファーム株式会社 菊鹿醸造所</p>
                <p class="wineryAccess__address kikuka__address">熊本県山鹿市菊鹿町相良559-2</p>
                <p class="wineryAccess__tel">tel.0968-41-8585</p>
            </div>
            <div class="wineryAccess__place--wrap mt-50">
                <p class="wineryAccess__place">AIRA RIDGE アイラリッジ</p>
                <p class="wineryAccess__address kikuka__address">熊本県山鹿市菊鹿町相良526</p>
                <p class="wineryAccess__tel">tel.0968-41-8166</p>
                <dl class="wineryAccess__wrap">
            </div>
            <dl class="wineryAccess__wrap kikuka__width">
                <dt class="wineryAccess__contents">
                    〈営業時間〉
                </dt>
                <dd class="wineryAccess__hours">
                    平　日　10：00～17：00
                </dd>
            </dl>
            <dl class="wineryAccess__wrap kikuka__width">
                <dt class="wineryAccess__contents">
                    〈定休日〉　
                </dt>
                <dd class="wineryAccess__hours">
                    火曜日
                </dd>
            </dl>
            <div class="wineryAccess__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2364.393336821891!2d130.76506197345103!3d33.06286050468476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541035b67850421%3A0x7178739ee77fd296!2z6I-K6bm_44Ov44Kk44OK44Oq44O8!5e0!3m2!1sja!2sjp!4v1721126061215!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <dl class="wineryAccess__means mt-45">
                <dt class="wineryAccess__means--title">
                    自動車でお越しの方
                    <span class="dotted-line"></span>
                </dt>
                <dd class="wineryAccess__means--root">
                    熊本市中心部より車で約1時間。熊本空港から車で約1時間。<br>九州縦貫自動車道 植木ICより約30分。
                </dd>
            </dl>
            <dl class="wineryAccess__means mt-30">
                <dt class="wineryAccess__means--title">
                    JRでお越しの方
                    <span class="dotted-line"></span>
                </dt>
                <dd class="wineryAccess__means--root">
                    九州新幹線 新玉名駅下車、車で約30分。
                </dd>
            </dl>
        </div>
    </section>

    <section class="wineryTaxi js-headTrigger">
        <div class="container1080">
            <!-- <hgroup>
                <h3 class="wineryTaxi__title">便利なタクシーのご案内</h3>
                <p class="wineryTaxi__name">株式会社タクルー（TaKuRoo）山鹿営業所</p>
            </hgroup>
            <div class="for-pc">
                <div class="wineryTaxi__box">
                    <ul class="wineryTaxi__box--name is-wi72">
                        <li class="wineryTaxi__box--list">〇〇〇</li>
                        <li class="wineryTaxi__box--list">〇〇〇</li>
                        <li class="wineryTaxi__box--list">〇〇〇</li>
                    </ul>
                    <ul class="wineryTaxi__box--text is-wi260">
                        <li class="wineryTaxi__box--list">ダミーテキストダミーテキスト</li>
                        <li class="wineryTaxi__box--list">ダミーテキストダミーテキスト</li>
                        <li class="wineryTaxi__box--list">ダミーテキストダミーテキスト</li>
                    </ul>
                    <p class="wineryTaxi__box--sentence">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、</p>
                </div>
            </div>
            <div class="for-sp">
                <div class="wineryTaxi__box">
                    <div class="winerTaxiSp__box">
                        <ul class="wineryTaxi__box--name is-wi72">
                            <li class="wineryTaxi__box--list">〇〇〇</li>
                            <li class="wineryTaxi__box--list">〇〇〇</li>
                            <li class="wineryTaxi__box--list">〇〇〇</li>
                        </ul>
                        <ul class="wineryTaxi__box--text is-wi260">
                            <li class="wineryTaxi__box--list">ダミーテキストダミーテキスト</li>
                            <li class="wineryTaxi__box--list">ダミーテキストダミーテキスト</li>
                            <li class="wineryTaxi__box--list">ダミーテキストダミーテキスト</li>
                        </ul>
                    </div>
                    <p class="wineryTaxi__box--sentence">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、</p>
                </div>
            </div> -->
            <div class="wineryTaxi__price">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/taxi.pdf" target="_black" class="buttonTaxi">便利なタクシーのご案内</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>