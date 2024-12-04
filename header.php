<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Meta Content -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <meta property="og:image" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="<?php echo esc_url(home_url('/')); ?>">
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    <link rel="shortcut icon" href="https://kumamotowinefarm.co.jp/wp-content/uploads/2024/11/favicon.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Noto+Sans+JP:wght@100..900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Shippori+Mincho:wght@400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- CSS Relations -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css?<?php echo date("Ymd-Hi"); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/variables.css?<?php echo date("Ymd-Hi"); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css?<?php echo date("Ymd-Hi"); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?<?php echo date("Ymd-Hi"); ?>">
    <!-- Page CSS Files -->
    <?php if (is_home()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-home.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_page('kumamoto-winery') || is_page('kikuka-winery')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-winery.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_page('about')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-about.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_page('recruit')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-recruit.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_post_type_archive('news')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-news.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_post_type_archive('special')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-special.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_page('contact') || is_page('contact-confirm') || is_page('contact-thanks')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-contact.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_page('about')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-about.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_singular('news') && is_single()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-single-news.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_singular('special') && is_single()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-single-special.css?<?php echo date("Ymd-Hi"); ?>">
    <?php elseif (is_page('privacy-policy') || is_page('claim-policy')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page-privacy-policy.css?<?php echo date("Ymd-Hi"); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body>
    <?php echo get_template_part('./includes/navigation/part-header'); ?>