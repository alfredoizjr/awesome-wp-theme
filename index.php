<?php
get_header();

$default = get_template_directory_uri() . '/assets/img/bg.jpg';

?>
<?php get_template_part('shared/banner', 'main') ?>
<main class="container animated slow fadeIn">
    <div class="row">
        <div class="col-md-9">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <?php get_template_part('content/content', get_post_format()); ?>
                <?php
                    endwhile;
                    ?>
                <?php get_template_part('shared/pagination','main') ?>
            <?php
            else :
                _e('Sorry, no posts matched your criteria.', 'aw-plus-awesome-blog');
            endif;
            ?>
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