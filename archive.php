<?php
get_header();
?>
<?php get_template_part('shared/banner', 'secondary') ?>
<main class="container pt-5 animated slow fadeIn">
    <div class="row">
        <div class="col-md-9">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <?php get_template_part('content/content', 'archive'); ?>
            <?php
                endwhile;
            else :
                _e('<p class="text-center">Nothing was found please try a different criteria</p>');
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