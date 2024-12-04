<?php get_header(); ?>

<main class="single-news js-headTrigger">
    <section class="mainVisual">
        <div class="container">
            <div class="mainVisual__post">
                <?php $catList = get_the_terms($post->ID, 'news-category'); ?>
                <?php $cat = array_shift($catList); ?>
                <div class="container900">
                    <p class="mainVisual__post--detail">
                        <span class="mainVisual__post--cat"><?php echo $cat->name; ?></span>
                        &nbsp;|&nbsp;
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
                    <?php if (get_previous_post()) : ?>
                        <?php previous_post_link('%link', '<span class="is-leftArrow">前へ</span>' . '%title'); ?>
                    <?php endif; ?>
                </div>

                <div class="singlePageNav__inner is-next">
                    <?php if (get_next_post()) : ?>
                        <?php next_post_link('%link', '<span class="is-rightArrow">次へ</span>' . '%title'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>


    </section>
</main>

<?php get_footer(); ?>