<?php
$sheet_name = 'part-mosaic-tile';
$sheet_path = get_template_directory_uri() . '/assets/css/components/part-mosaic-tile.css';
wp_enqueue_style($sheet_name, $sheet_path);
$block_class = isset($args['custom_class']) ? 'mosaic__tile ' . $args['custom_class'] : 'mosaic__tile';
$parm_link = $args['link'];
$video_name = $args['video_name'];
$title = $args['title'];
$lead = $args['lead'];
?>
<a class="<?php echo $block_class; ?>" href="<?php echo $parm_link; ?>">
    <video class="mosaic__media" autoplay muted loop playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/top/<?php echo $video_name; ?>" type="video/mp4" />
    </video>
    <span class="mosaic__filter"></span>
    <div class="mosaic__title">
        <p class="mosaic__title--large"><?php echo $title; ?></p>
        <p class="mosaic__title--small"><?php echo $lead; ?><span></span></p>
    </div>
</a>