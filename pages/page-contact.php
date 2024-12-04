<?php  /* Template Name: お問い合わせ */ ?>
<?php get_header(); ?>
<main class="js-headTrigger">
    <section class=" form">
        <div class="container1160">
            <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'Contact', 'lead' => 'お問い合わせ')); ?>
            <p class="form__lead">下記のフォームに必要事項をご入力の上、送信してください。<br>
                折返しご連絡致します。</p>
            <div class="form__box">
                <?php echo do_shortcode('[contact-form-7 id="06cef45" title="お問い合わせ"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
</body>

</html>