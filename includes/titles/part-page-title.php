<?php
$sheet_name = 'page-title';
$sheet_path = get_template_directory_uri() . '/assets/css/components/page-title.css';
wp_enqueue_style($sheet_name, $sheet_path);

$title = $args['title'];
$lead = $args['lead'];
?>
<hgroup class="title__container">
    <h1><?php echo $title; ?></h1>
    <p><?php echo $lead; ?></p>
</hgroup>