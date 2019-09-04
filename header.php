<?php wp_head(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body <?php body_class(); ?>>
    <header class="container animated slow fadeIn">
    <div class="brand">
        <h2><?php bloginfo('name'); ?></h2>
    </div>
    <div class="mobile-menu">
    <i class="fas fa-bars"></i>
    </div>
        <?php
        /* menu header*/
        if (has_nav_menu('header_menu')) :
            $menus_args = array(
                'theme_location'  => 'header_menu',
                'menu_id'         => 'header_menu_theme',
                'menu_class'      => 'all_menu',
                'fallback_cb'     => false,
                'container'       => 'nav',
                'container_id'    => 'menu_container',
                'container_class' => 'nav_menu',
                'depth'           => 2,
            );

            wp_nav_menu($menus_args);
        endif;
        ?>
    </header>
    <?php get_template_part('shared/mobile','menu') ?>