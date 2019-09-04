<?php
/* Custo API Footer */

add_action('wp_head', 'save_changes_footer');

function save_changes_footer()
{
    ?>
    <style type="text/css">
        footer {
            background-color: <?php echo get_theme_mod('footer_color_settings') ?>;
        }

        footer p,
        b,
        li {
            color: <?php echo get_theme_mod('footer_text_color_settings') ?>;
        }

        footer nav#menu_container ul li a {
            color: <?php echo get_theme_mod('footer_links_color_settings') ?> !important;
        }
        footer nav#menu_container ul li a:hover {
            filter: brightness(80%);
        }
    </style>
<?php
}

add_action('customize_register', 'initiate_customizer_theme_footer');

function initiate_customizer_theme_footer($wp_customize)
{
    /*=============section =================*/
    $wp_customize->add_section('footer_theme_section', array(
        'title'     => __('Footer', 'aw-plus-awesome-blog'),
        'priority'  => 12
    ));
    /*=============settings=================*/
    $wp_customize->add_setting('footer_color_settings', array(
        'default'   => '#999',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh'
    ));
    $wp_customize->add_setting('footer_text_color_settings', array(
        'default'   => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh'
    ));
    $wp_customize->add_setting('footer_links_color_settings', array(
        'default'   => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh'
    ));
    /*=============control=================*/
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_footer_color_control', array(
        'label'     => __('Background color', 'aw-plus-awesome-blog'),
        'section'   => 'footer_theme_section',
        'settings'  => 'footer_color_settings'
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_text_color_footer_control', array(
        'label'     => __('Text color', 'aw-plus-awesome-blog'),
        'section'   => 'footer_theme_section',
        'settings'  => 'footer_text_color_settings'
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_links_color_footer_control', array(
        'label'     => __('Links color', 'aw-plus-awesome-blog'),
        'section'   => 'footer_theme_section',
        'settings'  => 'footer_links_color_settings'
    )));
}
