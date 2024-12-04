<?php get_header(); ?>


<section class="newsList">
    <div class="container1160">
        <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'News', 'lead' => '新着情報')); ?>
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged,
        );

        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : ?>
            <div class="newsList__group">
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
            </div>
            <div class="">
                <?php
                $terms = get_terms('news-category');
                foreach ($terms as $term) {
                    echo '<li class="newsSidebar__item"><a class="newsSidebar__link" href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                }
                ?>
            </div>
        <?php else : ?>
            <p>投稿がありません</p>
        <?php endif; ?>
        <?php
        //wp_pagenaviの記述
        if (function_exists('wp_pagenavi')) :
            wp_pagenavi(array('query' => $the_query));
        endif;
        wp_reset_postdata();
        ?>
    </div>
</section>


<?php get_footer(); ?>
</body>

</html>