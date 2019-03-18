<?php
    function bootstrap_customize_register($wp_customize){

        // Inlcude the Alpha Color Picker control file.
        require_once( dirname( __FILE__ ) . '/alpha-color-picker/alpha-color-picker.php' );

        //heading section
        $wp_customize->add_section('heading_section', array(
            'title' => __('Heading Section', 'wp-blog'),
            'description' => __('Heading section options'),
            'priority'  => 120
        ));

        // enable heading section
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

        // heading background
        $wp_customize->add_setting('heading_bg', array(
            'default'   => get_template_directory_uri() . '/img/bg-masthead.jpg',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'heading_bg_control', array(
            'label' => __('Heading Bachground Image', 'wp-blog'),
            'section'   => 'heading_section',
            'settings'  => 'heading_bg',
            'priority'  => 2
        )));

        // heading title text
        $wp_customize->add_setting('heading_text', array(
            'default'   => __('Heading Title', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('heading_text_control', array(
            'label' => __('Heading Title', 'wp-blog'),
            'section' => 'heading_section',
            'settings'  => 'heading_text',
            'priority'  => 3
        ));

        // heading description text
        $wp_customize->add_setting('heading_desc', array(
            'default'   => __('This is a description fot the heading section, This is a description fot the heading section, This is a description fot the heading section, This is a description fot the heading section', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('heading_desc_control', array(
            'label' => __('Heading Description', 'wp-blog'),
            'section' => 'heading_section',
            'settings'  => 'heading_desc',
            'priority'  => 4
        ));

        // heading BG color
        $wp_customize->add_setting('heading_bg_color', array(
            'default'   => 'rgba(33, 37, 41, 0.38)',
            'type'  => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport' => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize,'heading_bg_color_control', array(
            'label' => __('Heading Background Color', 'wp-blog'),
            'section'   => 'heading_section',
            'settings'  => 'heading_bg_color',
            'priority'  => 5
        )));

        // enable heading button
        $wp_customize->add_setting('enable_button', array(
            'default'   => true,
            'transport' => 'refresh'
        ));

        $wp_customize->add_control('enable_button',array(
            'label' => __('Enable Button', 'wp-blog'),
            'section' => 'heading_section',
            'type'  => 'checkbox',
            'priority'  => 6
        ));

        // heading button text
        $wp_customize->add_setting('button_text', array(
            'default'   => __('Button Title', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('button_text_control', array(
            'label' => __('Button Title', 'wp-blog'),
            'section' => 'heading_section',
            'settings'  => 'button_text',
            'priority'  => 7
        ));

        // heading button link
        $wp_customize->add_setting('button_link', array(
            'default'   => __('http://yaser-alazm.com', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('button_link_control', array(
            'label' => __('Button Link', 'wp-blog'),
            'section' => 'heading_section',
            'settings'  => 'button_link',
            'priority'  => 8
        ));

        ////////////////////////////////////////////////////

        //features section
        $wp_customize->add_section('features_section', array(
            'title' => __('Features Section', 'wp-blog'),
            'description' => __('Features section options'),
            'priority'  => 130
        ));

        // enable features section
        $wp_customize->add_setting('enable_features', array(
            'default'   => true,
            'transport' => 'refresh'
        ));

        $wp_customize->add_control('enable_features',array(
            'label' => __('Enable Features', 'wp-blog'),
            'section' => 'features_section',
            'type'  => 'checkbox',
            'priority'  => 1
        ));

        // feature 1 icon
        $wp_customize->add_setting( 'f1_icon', array(
            'default' => 'fa-facebook',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'f1_icon', array(
            'label' => __('Feature 1 Icon', 'textdomain'),
            'description' => __('Choose an icon for feature 1', 'textdomain'),
            'iconset' => 'fa',
            'section' => 'features_section',
            'priority' => 2,
            'settings' => 'f1_icon'
        )));

        // feature 1 title text
        $wp_customize->add_setting('f1_text', array(
            'default'   => __('Feature 1 Title', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('f1_text_control', array(
            'label' => __('Feature 1 Title', 'wp-blog'),
            'section' => 'features_section',
            'settings'  => 'f1_text',
            'priority'  => 3
        ));

        // feature 1 description text
        $wp_customize->add_setting('f1_desc', array(
            'default'   => __('This is a description fot the heading section, This is a description fot the heading section', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('f1_desc_control', array(
            'label' => __('Feature 1 Description', 'wp-blog'),
            'section' => 'features_section',
            'settings'  => 'f1_desc',
            'priority'  => 4
        ));

        // features section bg color
        $wp_customize->add_setting('features_bg_color', array(
            'default'   => '#f8f9fa',
            'type'  => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport' => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize,'features_bg_color_control', array(
            'label' => __('Features Background Color', 'wp-blog'),
            'section'   => 'features_section',
            'settings'  => 'features_bg_color',
            'priority'  => 5
        )));
    }

    add_action('customize_register', 'bootstrap_customize_register');

    function bootstrap_css_customizer(){ ?>

        <style>
            header.masthead {
                background: url(<?php echo get_theme_mod('heading_bg', get_template_directory_uri(). '/img/bg-masthead.jpg'); ?>) !important
            }

            header.masthead .overlay{
                background-color: <?php echo get_theme_mod('heading_bg_color', 'rgba(33, 37, 41, 0.38)') ?> !important
            }

            /*Features section*/
            .features-icons{
                background-color: <?php echo get_theme_mod('features_bg_color','#f8f9fa') ?> !important
            }
        </style>

    <?php }

    add_action('wp_head', 'bootstrap_css_customizer');