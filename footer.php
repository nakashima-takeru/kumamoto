<?php $language = "jp"; ?>
<?php echo get_template_part("./includes/navigation/part-footer", false, array('language' => $language)); ?>
<!-- GSAP & Animation JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/CSSRulePlugin.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/anime.js?<?php echo date("Ymd-Hi"); ?>"></script>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php wp_footer(); ?>