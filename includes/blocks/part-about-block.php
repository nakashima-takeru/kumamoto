<?php
$sheet_name = 'part-about-block';
$sheet_path = get_template_directory_uri() . '/assets/css/components/part-about-block.css';
wp_enqueue_style($sheet_name, $sheet_path);
$title = $args['title'];
$lead = $args['lead'];
?>
<div>
    <div>
        <hgroup>
            <h3>title</h3>
            <p>lead</p>
        </hgroup>
        <p>contents</p>
    </div>
    <div>
    </div>
</div>