<?php

function custom_first_slider(){
  register_post_type ('first_slider',
    array(
      'labels' => array(
        'name' => ('First Slider'),
        'singular_name' => ('First Slider'),
        'add_new' => ('Add New First Slider'),
        'add_new_item' => ('Add New First Slider'),
        'edit_item' => ('Edit First Slider'),
        'new_item' => ('New First Slider'),
        'view_item' => ('View First Slider'),
        'not_found' => ('Sorry, we cound\'n find the First Slider you are looking for.'),
      ),
      'menu_icon' => 'dashicons-format-gallery',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'menu_position' => 5, 
      'has_archive' => true,
      'hierarchial' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'rewrite' => array('slag' => 'first_slider'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_first_slider');

function custom_second_slider(){
  register_post_type ('second_slider',
    array(
      'labels' => array(
        'name' => ('Second Slider'),
        'singular_name' => ('Second Slider'),
        'add_new' => ('Add New Second Slider'),
        'add_new_item' => ('Add New Second Slider'),
        'edit_item' => ('Edit Second Slider'),
        'new_item' => ('New Second Slider'),
        'view_item' => ('View Second Slider'),
        'not_found' => ('Sorry, we cound\'n find the Second Slider you are looking for.'),
      ),
      'menu_icon' => 'dashicons-format-gallery',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'menu_position' => 5, 
      'has_archive' => true,
      'hierarchial' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'rewrite' => array('slag' => 'second_slider'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_second_slider');

function custom_service(){
  register_post_type ('service',
    array(
      'labels' => array(
        'name' => ('Services'),
        'singular_name' => ('Service'),
        'add_new' => ('Add New Service'),
        'add_new_item' => ('Add New Service'),
        'edit_item' => ('Edit Service'),
        'new_item' => ('New Service'),
        'view_item' => ('View Service'),
        'not_found' => ('Sorry, we cound\'n find the service you are looking for.'),
      ),
      'menu_icon' => 'dashicons-networking',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'menu_position' => 5, 
      'has_archive' => true,
      'hierarchial' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'rewrite' => array('slag' => 'service'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_service');