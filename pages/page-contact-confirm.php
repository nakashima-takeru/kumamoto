<?php  /* Template Name: お問い合わせ（確認画面） */ ?>
<?php get_header(); ?>
<main class="js-headTrigger">
    <section class="form formConfirm">
        <div class="container1160">
            <?php echo get_template_part('./includes/titles/part-page-subtitle', false, array('title' => 'Contact', 'lead' => 'お問い合わせ')); ?>
            <p class="form__lead">お問い合わせ内容確認</p>
            <div class="form__box">
                <?php echo do_shortcode('[contact-form-7 id="679f1c5" title="お問い合わせ（確認画面）"]'); ?>
            </div>
        </div>
    </section>
</main>

<script>
    var selectElement = document.getElementById("contact-select");

    var contactGroup = document.querySelector('.contact__group.contact');
    var interviewGroup = document.querySelector('.contact__group.interview');
    var recruitGroup = document.querySelector('.contact__group.recruit');

    if (contactGroup) contactGroup.style.display = 'none';
    if (interviewGroup) interviewGroup.style.display = 'none';
    if (recruitGroup) recruitGroup.style.display = 'none';

    selectElement.addEventListener('change', function() {
        if (contactGroup) contactGroup.style.display = 'none';
        if (interviewGroup) interviewGroup.style.display = 'none';
        if (recruitGroup) recruitGroup.style.display = 'none';

        switch (selectElement.value) {
            case "お問い合わせ":
                if (contactGroup) contactGroup.style.display = 'block';
                break;
            case "取材のお申込み":
                if (interviewGroup) interviewGroup.style.display = 'block';
                break;
            case "求人募集":
                if (recruitGroup) recruitGroup.style.display = 'block';
                break;
            default:
                break;
        }
    });
</script>


<?php get_footer(); ?>