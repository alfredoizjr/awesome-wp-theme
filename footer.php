<?php wp_footer(); ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md pt-2 text-left">
                <?php if (is_active_sidebar('footer-one')) : ?>
                    <?php dynamic_sidebar('footer-one'); ?>
                <?php else : ?>
                    <h2>Widget two</h2>
                    <p>Footer one widget is inactive add some content to active it</p>
                <?php endif; ?>
            </div>
            <div class="col-md pt-2 text-left">
                <?php if (is_active_sidebar('footer-two')) : ?>
                    <?php dynamic_sidebar('footer-two'); ?>
                <?php else : ?>
                    <h2>Widget one</h2>
                    <p>Footer one widget is inactive add some content to active it</p>
                <?php endif; ?>
            </div>
            <div class="col-md pt-2 text-left">
                <section>
                    <h2 class="pt-2">Map</h2>
                    <?php
                    /* menu header*/
                    if (has_nav_menu('footer_menu')) :
                        $menus_args = array(
                            'theme_location'  => 'footer_menu',
                            'menu_id'         => 'footer_menu_theme',
                            'menu_class'      => 'all_menu',
                            'fallback_cb'     => false,
                            'container'       => 'nav',
                            'container_id'    => 'menu_container',
                            'container_class' => 'nav_menu',
                            'depth'           => 1
                        );
                        wp_nav_menu($menus_args);
                    endif;
                    ?>
                </section>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>&copy;<?php echo the_current_date();
                    echo ' ', (!get_theme_mod('company_name')) ? 'Company Name' : get_theme_mod('company_name'); ?></p>
    </div>
</footer>