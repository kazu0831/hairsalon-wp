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

function my_script()
{
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js', "", "1.0.1", true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'my_script');

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'all-news';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
