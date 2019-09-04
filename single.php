<?php
get_header();
?>
<?php get_template_part('shared/banner', 'secondary') ?>
<main class="container pt-5 animated slow fadeIn">
    <div class="row">
        <article class="col-md-9">
            <div class="row">
                <i class="far fa-calendar-alt" style="border: none !important;"></i> <small><?php echo  get_the_date(); ?></small>
                <hr />
                <section class="col-md-12 p-2">
                    <div class="row">
                        <div class="col-md text-left">
                            <b> <i class="fas fa-folder-open" style="border: none !important;"></i> </b><?php the_category(','); ?>
                            <?php the_tags('<b> <i class="fas fa-tags" style="border: none !important;"></i> </b> ', ' | '); ?>
                        </div>
                        <div class="col-md text-right">
                            <i class="fas fa-edit" style="border: none !important;"></i> <?php edit_post_link(); ?>
                        </div>
                    </div>
                </section>
                <section class="col-md-12">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </section>
                <section class="col-md-12 pt-3">
                    <?php
                    if (comments_open()) {
                        comments_template();
                    } else {
                        echo _e('comments are close');
                    }
                    ?>
                </section>
                <div class="col-md-12 pt-3">
                    <?php get_template_part('shared/pagination', 'main') ?>
                </div>
            </div>
        </article>
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