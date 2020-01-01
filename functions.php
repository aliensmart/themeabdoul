<?php
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status',
    'video', 'audio', 'chat']);
    add_theme_support('custom-background');
    add_theme_support('custom-Header');
    add_theme_support('custom-logo');
    add_theme_support('custom-feed-links');
    add_theme_support('html5');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('starter-content');
//Add css

    function themeabdoul_enqueue_styles(){

        wp_enqueue_style('main-css', get_stylesheet_directory_uri().'/style.css', [], time(), 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'themeabdoul_enqueue_styles');


    //Register Menu Locations
    register_nav_menus(
        [
            // 'main-menu' => 'Main menu'
            'main-menu' => esc_html__('Main menu', 'themeabdoul'),
            // "footer-menu" => esc_html__("Footer menu", "themeAbdoul")
        ]);


    //main sidebare Setup
    function themeabdoul_widgets_init(){
        register_sidebar( [
            'name'          => esc_html__('Main Sidebar', 'themeabdoul'),
            'id'            => 'main-sidebar',
            'description'   => esc_html( 'Add Widgets for the main sidebar here', 'themeabdoul' ),
            'before_widget' => '<section class="widgets">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '<h2>',
        ] );
    }
    add_action('widgets_init', 'themeabdoul_widgets_init')





















?>