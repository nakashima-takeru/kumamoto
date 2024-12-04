<?php
$sheet_name = 'part-page-subtitle';
$sheet_path = get_template_directory_uri() . '/assets/css/components/part-page-subtitle.css';
wp_enqueue_style($sheet_name, $sheet_path);

$title = $args['title'];
$lead = $args['lead'];
$title_class = isset($args['custom_class']) ? 'subtitle__container' . $args['custom_class'] : 'subtitle__container ';
?>
<hgroup class="<?php echo $title_class; ?>">
    <h2><?php echo $title; ?></h2>
    <p><?php echo $lead; ?></p>
</hgroup>