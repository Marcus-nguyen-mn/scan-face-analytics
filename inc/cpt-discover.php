<?php
function post_type_discover(){
    $label = array(
        'name' => __('Khám phá'),
        'singular_name' => __('Khám phá'),

    );
    $args = array(
        'labels' => $label,
        'description' => 'Khám phá',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ),
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-editor-kitchensink',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('kham-pha', $args);
}
add_action('init', 'post_type_discover');