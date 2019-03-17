<?php
    function bootstrap_customize_register($wp_customize){

        //heading section
        $wp_customize->add_section('heading_section', array(
            'title' => __('Heading Section', 'wp-blog'),
            'description' => __('Heading section options'),
            'priority'  => 120
        ));

        $wp_customize->add_setting('enable_heading', array(
            'default'   => true,
            'transport' => 'refresh'
        ));

        $wp_customize->add_control('enable_heading',array(
            'label' => __('Enable Heading', 'wp-blog'),
            'section' => 'heading_section',
            'type'  => 'checkbox',
            'priority'  => 1
        ));
    }

    add_action('customize_register', 'bootstrap_customize_register');