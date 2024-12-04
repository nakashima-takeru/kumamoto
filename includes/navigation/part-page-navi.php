    <?php
    $sheet_name = 'part-page-navi';
    $sheet_path = get_template_directory_uri() . '/assets/css/components/part-page-navi.css';
    ?>
    <div>
        <?php
        wp_enqueue_style($sheet_name, $sheet_path);
        if (function_exists('wp_pagenavi')) :
            wp_pagenavi(array('query' => $the_query));
        endif;
        wp_reset_postdata();
        ?>
    </div>