<?php
get_header();
?>
<?php get_template_part('shared/banner','secondary') ?>
<main class="container pt-5 animated slow fadeIn">
    <div class="row">
        <article class="col-md-9">
            <?php
            // loop
            while (have_posts()) : the_post();
                ?>
                <a href="<?php the_permalink() ?>" title="Permalink to <?php the_title_attribute(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
                <small><?php the_time('F jS, Y') ?></small>
                <section>
                    <?php the_content(); ?>
                </section>
                <section>
                    <p><?php comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments Closed'); ?></p>
                </section>
                <hr>
            <?php endwhile; ?>
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