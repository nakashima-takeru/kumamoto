<?php
$sheet_name = 'part-mosaic-tile';
$sheet_path = get_template_directory_uri() . '/assets/css/components/part-mosaic-tile.css';
wp_enqueue_style($sheet_name, $sheet_path);
$block_class = isset($args['custom_class']) ? 'mosaic__tile ' . $args['custom_class'] : 'mosaic__tile';
$parm_link = $args['link'];
$image_path = $args['image_path'];
$title = $args['title'];
$lead = $args['lead'];
?>
<a class="<?php echo $block_class; ?>" href="<?php echo $parm_link; ?>">
    <img class="mosaic__media" src=" <?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $image_path; ?>" />
    <span class="mosaic__filter"></span>
    <div class="mosaic__title">
        <p class="mosaic__title--large"><?php echo $title; ?></p>
        <p class="mosaic__title--small"><?php echo $lead; ?><span></span></p>
    </div>
</a>