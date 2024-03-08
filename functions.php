<?php

add_theme_support('post-thumbnails');

add_action('init', function () {
    register_post_type('employee', [
        'label' => 'スタッフ',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-groups',
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']
    ]);
});

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'all-news';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
