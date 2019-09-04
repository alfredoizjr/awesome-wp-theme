<?php

add_action('wp_head', 'save_theme_colors');

function save_theme_colors()
{
    ?>

    <style type="text/css">
        header p,
        b,
        main p,
        b {
            color: <?php echo get_theme_mod('main_text_color'); ?> !important;
        }

        main a,
        aside a,
        header a {
            color: <?php echo get_theme_mod('link_color_theme') ?> !important;
        }

        aside a:hover,
        main a:hover,
        header a:hover {
            filter: brightness(80%);
        }

        a h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: <?php echo get_theme_mod('link_color_theme') ?> !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: <?php echo get_theme_mod('link_color_theme') ?> !important;
        }

        input[type=submit] {
            background-color: <?php echo get_theme_mod('link_color_theme') ?> !important;
            border: 1px solid <?php echo get_theme_mod('link_color_theme') ?> !important;
            color: #fff !important;
        }

        input[type=submit]:hover {
            filter: brightness(80%) !important;
        }


        .aw-pagination a {
            background: <?php echo get_theme_mod('link_color_theme') ?> !important;
            ;
            color: #fff !important;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid <?php echo get_theme_mod('link_color_theme') ?> !important;
            ;
        }

        #rigth_menu_theme .sub-menu li:before {
            content: "-";
            color: <?php echo get_theme_mod('link_color_theme') ?> !important;
        }

        html,
        body {
            background-color: <?php echo get_theme_mod('background_color_theme') ?> !important;
        }

        .sub-menu li a {
            color: <?php echo get_theme_mod('submenu_link_color_theme') ?> !important;
        }

        #rigth_menu_theme .sub-menu li:before {
            content: "-";
            display: block;
            color: <?php echo get_theme_mod('submenu_link_color_theme') ?> !important;
        }

        i {
            border: solid <?php echo get_theme_mod('submenu_link_color_theme') ?> !important;
            border-width: 0 2px 2px 0 !important;
        }

        header nav#menu_container ul li .sub-menu {
            border: 1px solid rgba(0, 0, 0, 0.19) !important;
            background: <?php echo get_theme_mod('submenu_block_color_theme') ?> !important;
        }

        article.aw-card div.aw-card-footer a.aw-card-link {
            background-color: <?php echo get_theme_mod('link_color_theme') ?> !important;
            border: 1px solid <?php echo get_theme_mod('link_color_theme') ?> !important;
            color: #fff !important;
        }
    </style>

<?php
}


/* Custo API */

add_action('customize_register', 'initiate_customizer_theme');

function initiate_customizer_theme($wp_customize)
{

    /*=============section =================*/
    $wp_customize->remove_section('colors');
    // $wp_customize->remove_section('header_image');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('custom_css');

    $wp_customize->add_section('company', array(
        'title'     => __('Company Info', 'aw-plus-awesome-blog'),
        'priority'  => 10
    ));

    //color theme
    $wp_customize->add_section('color_theme', array(
        'title'     => __('Color of the Theme', 'aw-plus-awesome-blog'),
        'priority'  => 11
    ));


    /* ========= Settings ===============*/
    $wp_customize->add_setting('company_name', array(
        'default'   => 'Your Company',
        'sanitize_callback' => 'znt_scape_html_tags',
        'transport' => 'refresh'
    ));

    // color theme
    $wp_customize->add_setting('main_text_color', array(
        'default'   => '#444',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh'
    ));

    $wp_customize->add_setting('background_color_theme', array(
        'default'   => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh'
    ));

    $wp_customize->add_setting('link_color_theme', array(
        'default'   => '#444',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh'
    ));

    $wp_customize->add_setting('submenu_link_color_theme', array(
        'default'   => '#17a2b8',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh'
    ));

    $wp_customize->add_setting('submenu_block_color_theme', array(
        'default'   => '#444',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh'
    ));

    $wp_customize->add_setting('avatar_feacture_image', array(
        'default'   => get_template_directory_uri() . '/assets/img/avatar.jpg',
        'sanitize_callback'   => 'sanitize_file_name',
        'transport'           => 'refresh'
    ));

    /* ========= Controls ===============*/
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_textbox', array(
        'label'     => __('Company Name', 'aw-plus-awesome-blog'),
        'section'   => 'company',
        'settings'  => 'company_name'
    )));

    // color theme
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_text_color_control', array(
        'label'     => __('Text main color', 'aw-plus-awesome-blog'),
        'section'   => 'color_theme',
        'settings'  => 'main_text_color'
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_theme_color_control', array(
        'label'     => __('Background color', 'aw-plus-awesome-blog'),
        'section'   => 'color_theme',
        'settings'  => 'background_color_theme'
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_theme_color_control', array(
        'label'     => __('Links color', 'aw-plus-awesome-blog'),
        'section'   => 'color_theme',
        'settings'  => 'link_color_theme'
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'submenu_link_theme_color_control', array(
        'label'     => __('Links submenu color', 'aw-plus-awesome-blog'),
        'section'   => 'color_theme',
        'settings'  => 'submenu_link_color_theme'
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'submenu_block_theme_color_control', array(
        'label'     => __('Submenu block color', 'aw-plus-awesome-blog'),
        'section'   => 'color_theme',
        'settings'  => 'submenu_block_color_theme'
    )));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'avatar_image_control', array(
        'label' => __('Featured Avatar image', 'aw-plus-awesome-blog'),
        'section' => 'company',
        'settings' => 'avatar_feacture_image',
        'mime_type' => 'image',
        'width'   => 170,
        'height'  => 170
    )));

    /* ================================
    sanitaze function
===================================*/

    function znt_scape_html_tags($value)
    {
        return strip_tags($value);
    }
}
