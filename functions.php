<?php
//============================================================
// アイキャッチ画像
//============================================================
add_theme_support('post-thumbnails');

//============================================================
// メディアライブラリでサイズ違いで自動生成させない
//============================================================
function not_create_image($sizes)
{
    $sizes = array();
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'not_create_image');

//============================================================
// メディアライブラリでscaledが付く縮小画像を生成しない
//============================================================
add_filter('big_image_size_threshold', '__return_false');

//============================================================
// Google Map 埋め込み
//============================================================
function google_maps_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'src' => '',
        'width' => '100%',
        'height' => '450',
    ), $atts);

    return '<iframe src="' . esc_url($atts['src']) . '" width="' . esc_attr($atts['width']) . '" height="' . esc_attr($atts['height']) . '" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
}
add_shortcode('google_maps', 'google_maps_shortcode');

//============================================================
// contact form <p>タグ削除
//============================================================

// add_filter('wpcf7_autop_or_not', '__return_false');


//============================================================
// 「投稿」の表記変更
//============================================================
function Change_menulabel()
{
    global $menu;
    global $submenu;
    $name = '投稿';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name . '一覧';
    $submenu['edit.php'][10][0] = '新規' . $name . 'を追加';
}

function Change_objectlabel()
{
    global $wp_post_types;
    $name = '投稿';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = '新規' . $name . 'を追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'が見つかりませんでした';
}

add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

//============================================================
// カスタム投稿
//============================================================
function add_custom_post_type()
{
    register_post_type(
        'news',
        array(
            'label' => 'ニュース',
            'public'        => true,
            'has_archive'   => true,
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-edit',
            'show_in_rest'  => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            )
        )
    );

    register_taxonomy(
        'news-category',
        'news',
        array(
            'label' => 'ニュースカテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
        )
    );

    register_post_type(
        'online_shop',
        array(
            'label' => 'おすすめ商品',
            'public'        => true,
            'has_archive'   => true,
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-edit',
            'show_in_rest'  => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            )
        )
    );

    register_post_type(
        'special',
        array(
            'label' => '特集',
            'public'        => true,
            'has_archive'   => true,
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-edit',
            'show_in_rest'  => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            )
        )
    );


    register_taxonomy(
        'special-category',
        'special',
        array(
            'label' => '特集カテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'add_custom_post_type');

/*=======================================
  Modifiy posts per page
=======================================*/

function modify_main_query_posts_per_page($query)
{
    if (is_post_type_archive('news')) {
        $query->set('posts_per_page', 9);
    } elseif (is_post_type_archive('special')) {
        $query->set('posts_per_page', 15);
    }
}
add_action('pre_get_posts', 'modify_main_query_posts_per_page');

/*========================================
  Get Date Range
========================================*/

function get_posts_date_range($post_type)
{
    $oldest_args = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'order' => 'ASC',
        'ordeby' => 'date',
    );
    $oldest_post = get_posts($oldest_args);
    $years_list = array();
    $oldest_date = strtotime($oldest_post[0]->post_date);
    $oldest_year = intval(date('Y', $oldest_date));
    $current_year = intval(date('Y'));
    while ($current_year >= $oldest_year) {
        $years_list[] = $current_year;
        $current_year--;
    }
    $current_month = intval(date('m'));
    $data = [
        'year_list' => $years_list,
        'current_month' => $current_month
    ];
    return $data;
}
