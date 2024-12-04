<?php  /* Template Name: トップページ */ ?>
<?php get_header(); ?>
<?php

$onlineShopList = [
    ['link' => 'https://kumamotowineonline.co.jp/SHOP/10427.html', 'img' => 'img_0004_kamonone_spa_delaware.jpg', 'name' => '【ワイナリー限定商品】<br>醸音デラウェアスパークリング2023', 'text' => '¥2,750(税込)'],
    ['link' => 'https://kumamotowineonline.co.jp/SHOP/10556.html', 'img' => 'img_0005_kamonone_campbellearly.jpg', 'name' => '【ワイナリー限定商品】<br>醸音キャンベル2023', 'text' => '¥2,420(税込)'],
    ['link' => 'https://kumamotowineonline.co.jp/SHOP/10506.html', 'img' => 'img_0002_kamonone_niagara.jpg', 'name' => '【ワイナリー限定商品】<br>醸音ナイアガラ2023', 'text' => '¥2,420(税込)'],
    ['link' => 'https://kumamotowineonline.co.jp/SHOP/10479.html', 'img' => 'img_0000_kamonone_muscatbaileya.jpg', 'name' => '【ワイナリー限定商品】<br>醸音マスカット・ベーリーA2023', 'text' => '¥2,475(税込)'],
    ['link' => 'https://kumamotowineonline.co.jp/SHOP/10426.html', 'img' => 'img_0001_kamonone_delaware.jpg', 'name' => '【ワイナリー限定商品】<br>醸音デラウェア2023', 'text' => '¥2,475(税込)'],
];
?>
<main>
    <section class="mv">
        <div class="backdrop" id="pageBackdrop"></div>
        <div class="mv__modal" id="js-movieModal">
            <div class="mv__modalInner">
                <button class="mv__modalClose"><span></span><span></span></button>
                <iframe src="https://kumamotowinefarm.co.jp/wp-content/uploads/2024/07/full_video.mp4" width="640" height="360" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="mvTitleArea" <?php /* id="js-mainvisMouseTrackerSection" */ ?>>
            <?php /* <div class="mousetracker hide" id="js-mainvisMouseTracker">
                <span class="mousetracker__border"></span>
                <span class="mousetracker__playIcon"></span>
                <p class="mousetracker__text">Play Movie</p>
            </div>
            <span class="mvVideoFilter"></span> */ ?>
            <video class="mvVideo" autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/top/video-history.mp4" type="video/mp4" />
            </video>
            <h1 class="mvTitle is-hidden js-mvTitle">
                <span class="mvTitle__text">
                    時が<ruby>煌<rt>きら</rt></ruby>めく<br class="for-sp">「わたしたち」のワイン。
                </span>
            </h1>
            <p class="mvScroll">scroll<span></span></p>
        </div>
        <div class="mvTextArea js-mvTextArea">
            <p>1999年、熊本におけるワイン文化の新章がはじまりました。</p>
            <p>熊本で生まれたワインは、<br>
                熊本テロワールとして、日本ワインの一つとして、世界に並ぶようになりました。</p>
            <p>ワインとともに、私たちが伝えたいのは、くまもとの豊かな風土。</p>
            <p>これから100年・200年<span class="mvTextArea--line">――</span><br>
                熊本のワイン文化を未来につなぐため、<br>
                一期一会を大切に、育み、創造し続けます。 </p>
            <p>その瞬間を煌めかせる、熊本らしいワインが<br>大切な一杯となり、五感に刻まれる一杯を目指して。</p>
            <p><span class="mvTextArea--line">――</span> みなさんにとっての「わたしたち」のワインになるために</p>
            <!-- <div class="mvTextArea__sign">
                <p>熊本ワインファーム株式会社<br>代表取締役社長</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/icon-sign.svg" />
            </div> -->
        </div>
    </section>
    <section class="section about js-headTrigger js-mainStart">
        <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'About', 'lead' => '熊本ワインファームのワイナリー')); ?>
        <div class="aboutDisplay">
            <div class="aboutMap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img-map.png" />
            </div>
            <ul class="aboutDisplay__list">
                <li class="aboutDisplay__item aboutDisplay__item--second">
                    <a href="<?php echo home_url("kikuka-winery"); ?>">
                        <div class="aboutDisplay__itemTop">
                            <img class="aboutDisplay__itemImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img-about2.jpg" />
                            <div class="aboutDisplay__logoContainer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-kikuka_black.svg" />
                                <p><span>菊鹿ワイナリー</span>/ 熊本県山鹿市菊鹿町</p>
                            </div>
                        </div>
                        <div class="aboutDisplay__itemBottom">
                            <p class="pageText">ブドウ産地である菊鹿町で2018年に開業したワイナリー。<br>
                                面積5.2ヘクタールの敷地では、「自社農園」「醸造所」「ワインショップ」「カフェ・ショップ」の運営をしています。ワインショップではゆっくりワインを飲んでいただきながら、オリジナル商品やワイングッズのショッピングが可能です。またカフェ・ショップではピザを中心に旬の山鹿の食材を楽しんでいただけます。</p>
                            <p class="moreLink">more view<span class="chevron"></span></p>
                        </div>
                    </a>
                </li>
                <li class="aboutDisplay__item">
                    <a href="<?php echo home_url("/kumamoto-winery"); ?>">
                        <div class="aboutDisplay__itemTop">
                            <img class="aboutDisplay__itemImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img-about1.jpg" />
                            <div class="aboutDisplay__logoContainer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-logo_black.svg" />
                                <p><span>熊本ワイナリー</span>/ 熊本県熊本市北区和泉町</p>
                            </div>
                        </div>
                        <div class="aboutDisplay__itemBottom">
                            <p class="pageText">熊本城から車で15分の立地で、熊本市街地にも近い1999年開業の「準アーバンワイナリー」。<br>熊本県産ブドウ、日本産ブドウでワインを醸造しています。ワインの製造能力は約20万本です。併設の直売ショップではワインを中心としたギフトやプレゼントの対応も可能です。</p>
                            <p class="moreLink">more view<span class="chevron"></span></p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="mosaic">
        <nav class="mosaic__nav">
            <?php echo get_template_part('./includes/blocks/part-mosaic-video-tile', false, array('title' => 'History', 'link' => 'about/#history', 'lead' => '創業経緯', 'video_name' => 'video-history.mp4')); ?>
            <div class="mosaic__nav--sub">
                <?php echo get_template_part('./includes/blocks/part-mosaic-image-tile', false, array('title' => 'Viticulture', 'link' => 'about/#viticulture', 'lead' => 'ブドウ栽培', 'image_path' => 'top/img-tile1.jpg')); ?>
                <?php echo get_template_part('./includes/blocks/part-mosaic-image-tile', false, array('title' => 'Wine Making', 'link' => 'about/#brewing', 'lead' => 'ワイン醸造', 'image_path' => 'top/img-tile2.jpg')); ?>
                <?php echo get_template_part('./includes/blocks/part-mosaic-image-tile', false, array('title' => 'Award', 'link' => 'about/#award', 'lead' => '受賞歴', 'image_path' => 'top/img-tile3.jpg')); ?>
            </div>
        </nav>
    </section>
    <section class="section onlineShop js-headTrigger">
        <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'Onlineshop', 'lead' => 'おすすめ商品')); ?>
        <!-- <div class="swiper onlineShopSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img-dummy.jpg" />
                    <?php endif; ?>
                </div>
            </div>
            <a class="moreLink" href=" <?php echo home_url("#"); ?>">more view</a>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div> -->
        <div class="onlineShop__container">
            <ul class="onlineShopList">
                <?php foreach ($onlineShopList as $content) : ?>
                    <li class="onlineShopList__item">
                        <a href="<?php echo $content['link']; ?>" target="_blank">
                            <div class="onlineShopList__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/<?php echo $content['img']; ?>" alt="">
                            </div>
                            <div class="onlineShopList__content">
                                <h3 class="onlineShopList__name"><?php echo $content['name']; ?></h3>
                                <p class="onlineShopList__text"><?php echo $content['text']; ?></p>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a class="moreLink" href="https://kumamotowineonline.co.jp/" target="_blank">more view<span></span></a>
        </div>
    </section>

    <?php /*
    <?php $args = array(
        'post_type' => 'special',
        'post_status' => 'publish',
        'posts_per_page' => 5,
        'order' => 'ASC',
        'orderby' => 'date',
    );
    $special_query = new WP_Query($args);
    ?>
    <section class="section special js-headTrigger">
        <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'Special', 'lead' => '特集')); ?>
        <?php if ($special_query->have_posts()) : ?>
            <ul class="special__list">
                <?php while ($special_query->have_posts()) : $special_query->the_post(); ?>
                    <?php $card_text = get_field('special_card_text'); ?>
                    <li class="special__item">
                        <a href="<?php echo the_permalink(); ?>">
                            <div class="special__image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img-dummy.jpg" />
                                <?php endif; ?>
                            </div>
                            <p class="special__text"><span></span><?php echo $card_text; ?></p>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <a class="moreLink" href="<?php echo home_url("/special"); ?>"><span></span>more view</a>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </section>
    */ ?>
    <?php $args = array(
        'post_type' => 'news',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'orderby' => 'date',
    );
    $news_query = new WP_Query($args);
    ?>
    <section class="section news js-headTrigger">
        <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'News', 'lead' => '新着情報')); ?>
        <?php if ($news_query->have_posts()) : ?>
            <ul class="news__list">
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <?php
                    $all_terms = get_the_terms($post->ID, 'news-category');
                    $post_catgeory = count($all_terms) > 0 ? $all_terms[0]->name : false;
                    $all_text_content = get_the_content();
                    $text_content = wp_trim_words($all_text_content, 90);
                    ?>
                    <li class="news__item">
                        <a href="<?php echo the_permalink(); ?>">
                            <div class="news__image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img-dummy.jpg" />
                                <?php endif; ?>
                            </div>
                            <div class="news__textarea">
                                <div class="news__topTextarea">
                                    <p class="news__date"><?php echo get_the_date('Y.n.j'); ?></p>
                                    <?php if ($post_catgeory) : ?>
                                        <p class="news__category"><?php echo $post_catgeory; ?></p>
                                    <?php endif; ?>
                                </div>
                                <p class="news__title"><?php echo get_the_title(); ?></p>
                                <p class="news__content"><?php echo $text_content; ?></p>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <a class="moreLink" href=" <?php echo home_url("/news"); ?>"><span></span>more view</a>
        <?php endif; ?>
    </section>
    <section class="section sns js-headTrigger">
        <p class="sns__text">新商品・イベントなど、最新情報はこちらから</p>
        <div class="sns__bnts">
            <a href="https://www.instagram.com/kumamotowinefarm/" target="_blank" class="sns__btn--link">
                <div class="sns__btn">
                    <img class="insta--gradation" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon__Instagram--gradation.png" />
                    <div>熊本ワインファーム<br />公式Instagram</div>
                </div>
            </a>
            <a href="https://www.facebook.com/kumamotowine1999/" target="_blank" class="sns__btn--link">
                <div class="sns__btn">
                    <img class="facebook--blue" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon__facebook--Blue.png" />
                    <div>熊本ワインファーム<br />公式Facebook</div>
                </div>
            </a>

        </div>

    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/carousel.js?<?php echo date("Ymd-Hi"); ?>"></script>
</body>

</html>