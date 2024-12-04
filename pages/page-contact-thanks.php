<?php  /* Template Name: お問い合わせ（完了画面） */ ?>
<?php get_header(); ?>
<main class="js-headTrigger">
    <section class="form">
        <div class="container1160">
            <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'Contact', 'lead' => 'お問い合わせ')); ?>
            <p class="form__lead is-thanks">お問い合わせいただき、ありがとうございました。<br>
                確認の為、ご入力いただいたメールアドレスに自動返信メールをお送りしました。<br>
                後日、担当者よりご連絡いたしますので、しばらくお待ちください。</p>
        </div>
    </section>
</main>


<?php get_footer(); ?>