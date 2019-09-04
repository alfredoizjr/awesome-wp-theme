<div id="mobile-menu-fade">
    <div class="wrap-mobile-menu">
        <div class="mobile-menu-container">
            <?php
            if (has_nav_menu('header_menu')) :
                $menus_args = array(
                    'theme_location'  => 'header_menu',
                    'menu_id'         => 'mobile_menu_theme',
                    'menu_class'      => 'all_menu',
                    'fallback_cb'     => false,
                    'container'       => 'nav',
                    'container_id'    => 'menu_container',
                    'container_class' => 'nav_menu',
                    'depth'           => 1,
                );

                wp_nav_menu($menus_args);
            endif;
            ?>
        </div>
    </div>
</div>