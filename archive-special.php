<?php get_header(); ?>

<main class="js-headTrigger">

    <section class="specialList">
        <div class="container1160">
            <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'Special', 'lead' => '特集')); ?>
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'special',
                'post_status' => 'publish',
                'order' => 'DESC',
                'orderby' => 'date',
                'paged' => $paged
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : ?>
                <div class="specialList__group">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <a class="specialList__item" href="<?php the_permalink(); ?>">
                            <div class="specialList__img">
                                <?php echo get_the_post_thumbnail(); ?>
                            </div>
                            <p class="specialList__title">
                                <?php
                                $title = get_the_title();
                                echo wp_trim_words($title, 28);
                                ?>
                            </p>
                        </a>
                    <?php endwhile; ?>
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

</main>


<?php get_footer(); ?>
</body>

</html>