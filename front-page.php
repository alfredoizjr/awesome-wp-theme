<?php
get_header();

$default = get_template_directory_uri() . '/assets/img/bg.jpg';

?>
<?php get_template_part('shared/banner', 'main') ?>
<main class="container animated slow fadeIn">
    <div class="row">
        <div class="col-md-9">
            <?php
            $args = array(
                'type'           => 'post',
                'posts_per_page' => 1
            );
            $lastpost = new WP_Query($args);
            if ($lastpost->have_posts()) :
                while ($lastpost->have_posts()) : $lastpost->the_post();
                    ?>
                    <?php get_template_part('content/content', get_post_format()); ?>
            <?php
                endwhile;
            else :
                _e('Sorry, no posts matched your criteria.', 'aw-plus-awesome-blog');
            endif;
            wp_reset_postdata();
            ?>
            <div class="row">
                <?php
                $args = array(
                    'type'           => 'post',
                    'posts_per_page' => 2,
                    'offset'         => 1
                );
                $lastpost = new WP_Query($args);
                if ($lastpost->have_posts()) :
                    while ($lastpost->have_posts()) : $lastpost->the_post();
                        ?>
                        <div class="col-md-6 col-sm-12">
                            <?php get_template_part('content/content', get_post_format()); ?>
                        </div>
                <?php
                    endwhile;
                else :
                    _e('Sorry, no posts matched your criteria.', 'aw-plus-awesome-blog');
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <aside class="col-md-3">
            <?php if (is_active_sidebar('sidebar-rigth')) : ?>
                <?php dynamic_sidebar('sidebar-rigth'); ?>
            <?php else : ?>
                <p>Rigth Widget is inactive add some content to active it</p>
            <?php endif; ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>
</body>

</html>