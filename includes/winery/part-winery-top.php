<?php
$sheet_name = 'page-winery-top';
$sheet_path = get_template_directory_uri() . '/assets/css/components/part-winery-top.css';
wp_enqueue_style($sheet_name, $sheet_path);

$topImg = $args['topImg'];
$topImgAlt = $args['topImgAlt'];
$topLogo = $args['topLogo'];
$topLogoAlt = $args['topLogoAlt'];
?>

<section class="wineryTopImg">
    <div class="wineryTopImg__box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/<?php echo $topImg; ?>" alt="<?php echo $topImgAlt; ?>" class="wineryTopimg__kv">
        <div class="wineryLogo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winery/<?php echo $topLogo; ?>" alt="<?php echo $topLogoAlt; ?>" class="wineryLogo__mark">
        </div>
    </div>
</section>