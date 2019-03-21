<?php
    function bootstrap_customize_register($wp_customize){

        // Inlcude the Alpha Color Picker control file.
        require_once( dirname( __FILE__ ) . '/alpha-color-picker/alpha-color-picker.php' );

        ///////////////////////////////////////////////
        //* General Settings *//

        //General Settings section
        $wp_customize->add_section('gs_section', array(
            'title' => __('General Settings', 'wp-blog'),
            'description' => __('General settings for our theme'),
            'priority'  => 110
        ));

        // enable font for the front page
        $wp_customize->add_setting('enable_font', array(
            'default'   => true,
            'transport' => 'refresh'
        ));

        $wp_customize->add_control('enable_font',array(
            'label' => __('Enable Lato Font Family', 'wp-blog'),
            'section' => 'gs_section',
            'type'  => 'checkbox',
            'priority'  => 1
        ));

        // Main theme color
        $wp_customize->add_setting('main_color', array(
            'default'       => '#007bff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'main_color_control', array(
            'label'     => __('Main Theme Color', 'wp-blog'),
            'section'   => 'gs_section',
            'settings'  => 'main_color',
            'priority'  => 2
        )));

        // Blog Featured Post background color
        $wp_customize->add_setting('blog_fp_bg_color', array(
            'default'       => '#343a40',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'blog_fp_bg_color_control', array(
            'label'     => __('Blog Featured Post Background Color', 'wp-blog'),
            'section'   => 'gs_section',
            'settings'  => 'blog_fp_bg_color',
            'priority'  => 3
        )));

        // Blog Featured Post Font color
        $wp_customize->add_setting('blog_fp_font_color', array(
            'default'       => '#ffffff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'blog_fp_font_color_control', array(
            'label'     => __('Blog Featured Post Font Color', 'wp-blog'),
            'section'   => 'gs_section',
            'settings'  => 'blog_fp_font_color',
            'priority'  => 4
        )));

        /////////////////////////////////////////////////
        //* Heading Section *//
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
            'default' => 'fa-desktop',
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

        // feature 2 icon
        $wp_customize->add_setting( 'f2_icon', array(
            'default' => 'fa-facebook',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'f2_icon', array(
            'label' => __('Feature 2 Icon', 'textdomain'),
            'description' => __('Choose an icon for feature 2', 'textdomain'),
            'iconset' => 'fa',
            'section' => 'features_section',
            'priority' => 5,
            'settings' => 'f2_icon'
        )));

        // feature 2 title text
        $wp_customize->add_setting('f2_text', array(
            'default'   => __('Bootstrap 4 Ready', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('f2_text_control', array(
            'label' => __('Feature 2 Title', 'wp-blog'),
            'section' => 'features_section',
            'settings'  => 'f2_text',
            'priority'  => 6
        ));

        // feature 2 description text
        $wp_customize->add_setting('f2_desc', array(
            'default'   => __('Featuring the latest build of the new Bootstrap 4 framework!', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('f2_desc_control', array(
            'label' => __('Feature 2 Description', 'wp-blog'),
            'section' => 'features_section',
            'settings'  => 'f2_desc',
            'priority'  => 7
        ));

        // feature 3 icon
        $wp_customize->add_setting( 'f3_icon', array(
            'default' => 'fa-desktop',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'f3_icon', array(
            'label' => __('Feature 3 Icon', 'textdomain'),
            'description' => __('Choose an icon for feature 3', 'textdomain'),
            'iconset' => 'fa',
            'section' => 'features_section',
            'priority' => 8,
            'settings' => 'f3_icon'
        )));

        // feature 3 title text
        $wp_customize->add_setting('f3_text', array(
            'default'   => __('Easy to Use', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('f3_text_control', array(
            'label' => __('Feature 3 Title', 'wp-blog'),
            'section' => 'features_section',
            'settings'  => 'f3_text',
            'priority'  => 9
        ));

        // feature 3 description text
        $wp_customize->add_setting('f3_desc', array(
            'default'   => __('Ready to use with your own content, or customize the source files!', 'wp-blog'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('f3_desc_control', array(
            'label' => __('Feature 3 Description', 'wp-blog'),
            'section' => 'features_section',
            'settings'  => 'f3_desc',
            'priority'  => 10
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
            'priority'  => 11
        )));

        // Features section font color
        $wp_customize->add_setting('features_font_color', array(
            'default'       => '#212529',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'features_font_color_control', array(
            'label'     => __('Features Section Font Color', 'wp-blog'),
            'section'   => 'features_section',
            'settings'  => 'features_font_color',
            'priority'  => 12
        )));

        // Add or remove features button (!!TRICKY!!)
        $wp_customize->add_setting('features_btn_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'features_btn_enable', array(
            'label'      => __( 'Add Button', 'wp-blog' ),
            'section'    => 'features_section',
            'type'       => 'checkbox',
            'priority'   => 13
        ) );

        // Features button text
        $wp_customize->add_setting('features_button_text_settings', array(
            'default'   => _x('See More', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('features_button_text_control', array(
            'label'     => __('Button Text', 'wp-blog'),
            'section'   => 'features_section',
            'settings'  => 'features_button_text_settings',
            'priority'  => 14
        ));

        // features button link
        $wp_customize->add_setting('features_button_link_settings', array(
            'default'   => _x('http://yaser-alazm.com', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('features_button_link_control', array(
            'label'     => __('Button Link Address', 'wp-blog'),
            'section'   => 'features_section',
            'settings'  => 'features_button_link_settings',
            'priority'  => 15
        ));

        /////////////////////**************///////////////////////

        // Showcase section
        $wp_customize->add_section('showcase_section',array(
            'title' => __('Showcase Section','wp-blog'),
            'description'   =>  __('Options for the showcase section'),
            'priority'      => 150
        ));

        // Enable or Disable showcase section
        $wp_customize->add_setting('enable_showcase', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'enable_showcase', array(
            'label'      => __( 'Enable Showcase Section', 'wp-blog' ),
            'section'    => 'showcase_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );

        // showcase1 title text
        $wp_customize->add_setting('showcase1_title_settings', array(
            'default'   => _x('Fully Responsive Design', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase1_title_control', array(
            'label'     => __('Showcase 1 Title', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase1_title_settings',
            'priority'  => 2
        ));


        // showcase1 description text
        $wp_customize->add_setting('showcase1_description_settings', array(
            'default'   => _x('When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether its a phone, tablet, or desktop the page will behave responsively!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase1_description_control', array(
            'label'     => __('showcase1 Description', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase1_description_settings',
            'priority'  => 3
        ));

        // Showcase1 image
        $wp_customize->add_setting('showcase1_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/bg-showcase-1.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase1_image_control', array(
            'label'     => __('Showcase 1 Image', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase1_image_settings',
            'priority'  => 4
        )));

        // Enable or Disable showcase 2
        $wp_customize->add_setting('showcase2_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'showcase2_enable', array(
            'label'      => __( 'Enable Showcase 2', 'wp-blog' ),
            'section'    => 'showcase_section',
            'type'       => 'checkbox',
            'priority'   => 5
        ) );

        // showcase2 title text
        $wp_customize->add_setting('showcase2_title_settings', array(
            'default'   => _x('Updated For Bootstrap 4', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase2_title_control', array(
            'label'     => __('Showcase 2 Title', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase2_title_settings',
            'priority'  => 6
        ));


        // showcase2 description text
        $wp_customize->add_setting('showcase2_description_settings', array(
            'default'   => _x('Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase2_description_control', array(
            'label'     => __('Showcase 2 Description', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase2_description_settings',
            'priority'  => 7
        ));

        // Showcase2 image
        $wp_customize->add_setting('showcase2_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/bg-showcase-2.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase2_image_control', array(
            'label'     => __('Showcase 2 Image', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase2_image_settings',
            'priority'  => 8
        )));

        // Enable or Disable showcase 3
        $wp_customize->add_setting('showcase3_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'showcase3_enable', array(
            'label'      => __( 'Enable Showcase 3', 'wp-blog' ),
            'section'    => 'showcase_section',
            'type'       => 'checkbox',
            'priority'   => 9
        ) );

        // showcase3 title text
        $wp_customize->add_setting('showcase3_title_settings', array(
            'default'   => _x('Easy to Use & Customize', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase3_title_control', array(
            'label'     => __('Showcase 3 Title', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase3_title_settings',
            'priority'  => 10
        ));


        // showcase3 description text
        $wp_customize->add_setting('showcase3_description_settings', array(
            'default'   => _x('Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase3_description_control', array(
            'label'     => __('Showcase 3 Description', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase3_description_settings',
            'priority'  => 11
        ));

        // Showcase3 image
        $wp_customize->add_setting('showcase3_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/bg-showcase-3.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase3_image_control', array(
            'label'     => __('Showcase 3 Image', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase3_image_settings',
            'priority'  => 12
        )));

        // Showcase section background color
        $wp_customize->add_setting('showcase_bg_color', array(
            'default'       => '#ffffff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'showcase_bg_color_control', array(
            'label'     => __('Showcase Section Background Color', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase_bg_color',
            'priority'  => 13
        )));

        // Showcase section font color
        $wp_customize->add_setting('showcase_font_color', array(
            'default'       => '#000000',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'showcase_font_color_control', array(
            'label'     => __('Showcase Section Font Color', 'wp-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase_font_color',
            'priority'  => 14
        )));

        /////////////////////**************///////////////////////

        //* Testimonials Section *//
        $wp_customize->add_section('testimonials_section',array(
            'title' => __('Testimonials Section','wp-blog'),
            'description'   =>  __('Options for the testimonials section'),
            'priority'      => 150
        ));

        // Enable or Disable testimonials section (!!TRICKY!!)
        $wp_customize->add_setting('enable_testimonials', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'enable_testimonials', array(
            'label'      => __( 'Enable Testimonials Section', 'wp-blog' ),
            'section'    => 'testimonials_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );

        // Testimonials Section title text
        $wp_customize->add_setting('testimonials_title_settings', array(
            'default'   => _x('What people are saying...', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials_title_control', array(
            'label'     => __('Testimonials Section Title', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials_title_settings',
            'priority'  => 2
        ));

        // testimonials1 title text
        $wp_customize->add_setting('testimonials1_title_settings', array(
            'default'   => _x('Margaret E.', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials1_title_control', array(
            'label'     => __('Testimonial 1 Name', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials1_title_settings',
            'priority'  => 3
        ));


        // testimonials1 description text
        $wp_customize->add_setting('testimonials1_description_settings', array(
            'default'   => _x('This is fantastic! Thanks so much guys!', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials1_description_control', array(
            'label'     => __('Testimonials 1 Review','wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials1_description_settings',
            'priority'  => 4
        ));

        // testimonials1 image
        $wp_customize->add_setting('testimonials1_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/testimonials-1.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials1_image_control', array(
            'label'     => __('Testimonial 1 Image (For the best experience, choose an image with equal dimensions)', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials1_image_settings',
            'priority'  => 5
        )));

        // testimonials2 title text
        $wp_customize->add_setting('testimonials2_title_settings', array(
            'default'   => _x('Fred S.', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials2_title_control', array(
            'label'     => __('Testimonials 2 Name', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials2_title_settings',
            'priority'  => 6
        ));


        // testimonials2 description text
        $wp_customize->add_setting('testimonials2_description_settings', array(
            'default'   => _x('Bootstrap is amazing. I\'ve been using it to create lots of super nice landing pages', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials2_description_control', array(
            'label'     => __('Testimonial 2 Review', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials2_description_settings',
            'priority'  => 7
        ));

        // testimonials2 image
        $wp_customize->add_setting('testimonials2_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/testimonials-2.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials2_image_control', array(
            'label'     => __('Testimonial 2 Image (For the best experience, choose an image with equal dimensions)', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials2_image_settings',
            'priority'  => 8
        )));

        // testimonials3 title text
        $wp_customize->add_setting('testimonials3_title_settings', array(
            'default'   => _x('Sarah W.', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials3_title_control', array(
            'label'     => __('Testimonial 3 Name', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials3_title_settings',
            'priority'  => 9
        ));


        // testimonials3 description text
        $wp_customize->add_setting('testimonials3_description_settings', array(
            'default'   => _x('Thanks so much for making these free resources available to us!', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials3_description_control', array(
            'label'     => __('Testimonial 3 Review', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials3_description_settings',
            'priority'  => 10
        ));

        // testimonials3 image
        $wp_customize->add_setting('testimonials3_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/testimonials-3.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials3_image_control', array(
            'label'     => __('Testimonial 3 Image (For the best experience, choose an image with equal dimensions)', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials3_image_settings',
            'priority'  => 11
        )));

        // testimonials section background color
        $wp_customize->add_setting('testimonials_bg_color', array(
            'default'       => '#f8f9fa',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'testimonials_bg_color_control', array(
            'label'     => __('Testimonials Section Background Color', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials_bg_color',
            'priority'  => 12
        )));

        // testimonials section font color
        $wp_customize->add_setting('testimonials_font_color', array(
            'default'       => '#000000',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'testimonials_font_color_control', array(
            'label'     => __('Testimonials Section Font Color', 'wp-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials_font_color',
            'priority'  => 13
        )));

        /////////////////////**************///////////////////////

        // Call To Action section
        $wp_customize->add_section('calltoaction_section',array(
            'title' => __('Call To Action Section','wp-blog'),
            'description'   =>  __('Options for Call To Action section'),
            'priority'      => 160
        ));

        // Enable or Disable calltoaction section (!!TRICKY!!)
        $wp_customize->add_setting('enable_calltoaction', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'enable_calltoaction', array(
            'label'      => __( 'Enable Call To Action Section', 'wp-blog' ),
            'section'    => 'calltoaction_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );


        // Call To Action section title text
        $wp_customize->add_setting('calltoaction_title', array(
            'default'   => _x('Ready to get started? Contact us now!', 'wp-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('calltoaction_title_control', array(
            'label'     => __('Section Title', 'wp-blog'),
            'section'   => 'calltoaction_section',
            'settings'  => 'calltoaction_title',
            'priority'  => 2
        ));

        // Call to action background color
        $wp_customize->add_setting('calltoaction_bg_color', array(
            'default'       => '#343a40',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'calltoaction_bg_color_control', array(
            'label'     => __('Call To Action Background Color', 'wp-blog'),
            'section'   => 'calltoaction_section',
            'settings'  => 'calltoaction_bg_color',
            'priority'  => 3
        )));

        // Call To Action section font color
        $wp_customize->add_setting('calltoaction_font_color', array(
            'default'       => '#ffffff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'calltoaction_font_color_control', array(
            'label'     => __('Call To Action Section Font Color', 'wp-blog'),
            'section'   => 'calltoaction_section',
            'settings'  => 'calltoaction_font_color',
            'priority'  => 4
        )));

        // Enable or Disable social menu (!!TRICKY!!)
        $wp_customize->add_setting('social_menu_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'social_menu_enable', array(
            'label'      => __( 'Enable Social Menu', 'wp-blog' ),
            'section'    => 'calltoaction_section',
            'type'       => 'checkbox',
            'priority'   => 5
        ) );

        // Call To Action social menu color
        $wp_customize->add_setting('social_menu_color', array(
            'default'       => '#ffffff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'social_menu_color_control', array(
            'label'     => __('Call To Action Social Menu Color', 'wp-blog'),
            'section'   => 'calltoaction_section',
            'settings'  => 'social_menu_color',
            'priority'  => 6
        )));

        /////////////////////**************///////////////////////

        //* Footer section *//
        $wp_customize->add_section('footer_section',array(
            'title' => __('Footer Section','bootstrap-blog'),
            'description'   =>  __('Options for Footer section'),
            'priority'      => 170
        ));

        // Enable or Disable footer section (!!TRICKY!!)
        $wp_customize->add_setting('enable_footer', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'enable_footer', array(
            'label'      => __( 'Enable Footer Section', 'wp-bootstrap' ),
            'section'    => 'footer_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );

        // Footer section text
        $wp_customize->add_setting('footer_text', array(
            'default'   => _x('Theme Developed By <span class="text-success"><a href="http://yaser-alazm.com" target="_blank">Yaser AlAzm</a></span></p>
            <p>The basic template is from <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            All Rights reserved &copy; 2019', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('footer_text_control', array(
            'label'     => __('Footer Text', 'bootstrap-blog'),
            'section'   => 'footer_section',
            'settings'  => 'footer_text',
            'priority'  => 2
        ));

        // Footer background color
        $wp_customize->add_setting('footer_bg_color', array(
            'default'       => '#f9f9f9',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'footer_bg_color_control', array(
            'label'     => __('Footer Background Color', 'bootstrap-blog'),
            'section'   => 'footer_section',
            'settings'  => 'footer_bg_color',
            'priority'  => 3
        )));

        // Footer section font color
        $wp_customize->add_setting('footer_font_color', array(
            'default'       => '#999999',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'footer_font_color_control', array(
            'label'     => __('Footer Section Font Color', 'bootstrap-blog'),
            'section'   => 'footer_section',
            'settings'  => 'footer_font_color',
            'priority'  => 4
        )));
    }

    add_action('customize_register', 'bootstrap_customize_register');

    function bootstrap_css_customizer(){ ?>
    <?php if(is_front_page() && true === get_theme_mod('enable_font')): ?>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <style>
            body {
                font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
                }

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
                font-weight: 700;
                }
        </style>
    <?php endif; ?>
        <style>

            /* General Rules */
            .fa, .blog-header .social-menu .menu-item a,.blog-header .social-menu .menu-item a:hover {
                color: <?php echo get_theme_mod('main_color', '#007bff'); ?> !important
            }
            .btn,.navbar .menu-item:hover {
                background-color:<?php echo get_theme_mod('main_color'); ?> !important;
                border-color: <?php echo get_theme_mod('main_color'); ?> !important;
            }
            /* Blog */
            .cat-featured {
                background-color: <?php echo get_theme_mod('blog_fp_bg_color', '#343a40'); ?> !important
            }
            .cat-featured, .cat-featured a {
                color: <?php echo get_theme_mod('blog_fp_font_color', '#ffffff'); ?> !important
            }

            /* Header section */
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
            .features-icons h3,.features-icons p{
                color: <?php echo get_theme_mod('features_font_color','#212529') ?> !important
            }

            /* Showcase section */
            .showcase{
                background-color: <?php echo get_theme_mod('showcase_bg_color', '#ffffff') ?> !important
            }
            .showcase h2, .showcase p{
                color: <?php echo get_theme_mod('showcase_font_color', '#000000') ?> !important
            }

            /* Testimonials Section */
            .testimonials{
                background-color: <?php echo get_theme_mod('testimonials_bg_color','#f8f9fa'); ?> !important
            }
            .testimonials h5, .testimonials p {
                color: <?php echo get_theme_mod('testimonials_font_color', '#000000') ?> !important
            }

            /* Call To Action */
            .call-to-action{
                background-color: <?php echo get_theme_mod('calltoaction_bg_color','#343a40') ?> !important
            }

            .call-to-action h2, .call-to-action p.lead{
                color: <?php echo get_theme_mod('calltoaction_font_color','#ffffff') ?>
            }

            .call-to-action .menu-item a,
            .call-to-action .menu-item:before{
                color: <?php echo get_theme_mod('social_menu_color', '#ffffff'); ?> !important
            }

            /* Footer Section */
            .blog-footer{
                background-color: <?php echo get_theme_mod('footer_bg_color','#f9f9f9'); ?> !important
            }

            .blog-footer{
                color: <?php echo get_theme_mod('footer_font_color','#999999'); ?> !important
            }
        </style>

    <?php }

    add_action('wp_head', 'bootstrap_css_customizer');