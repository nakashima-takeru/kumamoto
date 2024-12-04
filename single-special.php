<?php get_header(); ?>

<main class="single-special js-headTrigger">
    <section class="mainVisual">
        <div class="container">
            <div class="mainVisual__post">
                <?php $catList = get_the_terms($post->ID, 'special-category'); ?>
                <?php if ($catList) : ?>
                    <?php $cat = array_shift($catList)->name; ?>
                <?php endif; ?>
                <div class="container900">
                    <p class="mainVisual__post--detail">
                        <span class="mainVisual__post--cat"><?php echo $cat; ?></span>
                        |
                        <span class="mainVisual__post--date"><?php echo get_the_date(); ?></span>
                    </p>
                    <p class="mainVisual__post--title"><?php echo get_the_title(); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="postContentArea">
        <div class="container900">
            <div class="postContent">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="singlePageNav">

                <div class="singlePageNav__inner is-prev">
                    <?php $prev_post = get_previous_post(); ?>
                    <?php if (!empty($prev_post)) : ?>
                        <?php previous_post_link('&laquo; %link', '前へ<br>%title'); ?>
                    <?php endif; ?>
                </div>

                <div class="singlePageNav__inner is-next">
                    <?php $next_post = get_next_post(); ?>
                    <?php if (!empty($next_post)) : ?>
                        <?php next_post_link('%link &raquo;', '次へ<br>%title'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>


    </section>
</main>

<?php get_footer(); ?>