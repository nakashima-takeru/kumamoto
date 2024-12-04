<?php get_header(); ?>
<?php
$date_data = get_posts_date_range('news');
$paged = get_query_var('paged') ? get_query_var('paged') : 1;


$category_query = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : false;
$date_query = isset($_GET['post_date']) ? sanitize_text_field($_GET['post_date']) : false;
if ($category_query) {
    $args = array(
        'post_type' => 'news',
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'date',
        'paged' => $paged,
        'tax_query' => array(
            array(
                'taxonomy' => 'news-category',
                'field'    => 'slug',
                'terms'    => $category_query,
            ),
        ),
    );
} elseif ($date_query) {
    $date_parts = explode("-", $date_query);
    $args = array(
        'post_type' => 'news',
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'date',
        'paged' => $paged,
        'date_query' => array(
            array(
                'year' => $date_parts[0],
                'month' => $date_parts[1]
            ),
        ),
    );
} else {
    $args = array(
        'post_type' => 'news',
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'date',
        'paged' => $paged,
    );
}


$the_query = new WP_Query($args);

$all_categories = get_terms(array(
    'taxonomy' => 'news-category',
    'hide_empty' => true,
));
?>

<main class="news js-headTrigger">
    <section class="newsList">
        <div class="container1160">
            <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'News', 'lead' => '新着情報')); ?>
            <div class="newsList__area">
                <div class="newsList__post">
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <a class="newsList__item" href="<?php the_permalink(); ?>">
                                <div class="newsList__img">
                                    <?php echo get_the_post_thumbnail(); ?>
                                </div>
                                <dl class="newsList__post">
                                    <dt class="newsList__title"><?php echo get_the_title(); ?></dt>
                                    <dd class="newsList__text">
                                        <?php
                                        $text = get_the_excerpt();
                                        echo wp_trim_words($text, 60);
                                        ?>
                                    </dd>
                                </dl>
                            </a>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>投稿がありません</p>
                    <?php endif; ?>

                </div>
                <div class="newsList__cat">
                    <p class="newsList__cat--title">お知らせ</p>
                    <ul class="newsList__catNav">
                        <?php if (!empty($all_categories)) : ?>
                            <?php foreach ($all_categories as $category) : ?>
                                <li><a href="<?php echo home_url('/news/?category=' . $category->slug); ?>"><?php echo $category->name; ?></a></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    <p class="newsList__cat--title">アーカイブ</p>
                    <ul class="newsList__catNav">
                        <?php $x = 0; ?>
                        <?php foreach ($date_data['year_list'] as $year) : ?>
                            <?php if ($x == 0) : ?>
                                <?php $x++; ?>
                                <?php $month = $date_data['current_month']; ?>
                                <?php while ($month > 0) : ?>
                                    <li><a href="<?php echo home_url('/news/?post_date=' . $year . '-' . $month); ?>"><?php echo $year; ?>年<?php echo $month; ?>月</a></li>
                                    <?php $month--; ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php $month = 12; ?>
                                <?php while ($month > 0) : ?>
                                    <li><a href=""><?php echo $year; ?>年<?php echo $month; ?>月</a></li>
                                    <?php $month--; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
            <div>
                <?php
                //wp_pagenaviの記述
                if (function_exists('wp_pagenavi')) :
                    wp_pagenavi(array('query' => $the_query));
                endif;
                wp_reset_postdata();
                ?>
            </div>
    </section>

</main>


<?php get_footer(); ?>
</body>

</html>