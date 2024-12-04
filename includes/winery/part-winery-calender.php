<?php
$sheet_name = 'part-calender';
$sheet_path = get_template_directory_uri() . '/assets/css/components/part-winery-calender.css';
wp_enqueue_style($sheet_name, $sheet_path);

$wineryCalenderTitle = $args['wineryCalenderTitle'];
?>

<section class="wineryCalender js-headTrigger">
    <div class="container1160">
        <hgroup class="wineryCalender__group">
            <h3 class="wineryCalender__title"><?php echo $wineryCalenderTitle; ?>営業日カレンダー</h3>
        </hgroup>
        <div class="wineryCalender__date">
            <?php /* iframeのカレンダーがはいります。*/ ?>
			<iframe src="https://calendar.google.com/calendar/embed?src=a6b06e79fd8bcc6a55f26cff5510c52998f8ce5640af13e2c450f2fd94a2e5e6%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
</section>