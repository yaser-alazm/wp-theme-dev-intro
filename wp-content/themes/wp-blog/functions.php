<?php

    function bootstrap_theme_setup(){
        add_theme_support('post-thumbnails');

        // add a new image size
        add_image_size('cat_thumb', 400, 400, true);

        register_nav_menus(array(
            'primary'   => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme','bootstrap_theme_setup');

    // register widgets
    function bootstrap_widgets_init($id){
        register_sidebar(array(
            'name'  => 'About',
            'id'    => 'about',
            'before_widget' => '<div class="p-4 mb-3 bg-light rounded">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="font-italic">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'  => 'Archives',
            'id'    => 'archives',
            'before_widget' => '<div class="p-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="font-italic">',
            'after_title'   => '</h4>'
        ));
    }

    add_action('widgets_init', 'bootstrap_widgets_init');

    // navwalker menu setup
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    // add customizer
    require get_template_directory() . '/inc/customizer.php';