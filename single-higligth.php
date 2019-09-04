<?php
get_header();
?>
<?php get_template_part('shared/banner','secondary') ?>
<main class="container pt-5 animated slow fadeIn">
    <div class="row">
        <article class="col-md-9">
            <?php
            /* loop wp post */
            echo '<i class="far fa-calendar-alt" style="border: none !important;"></i> <small>' . get_the_date() . '</small>';
            echo '<hr/>';
            /* this section is for category */
            echo '<section class="p-2">';
            echo '<b>Categories: </b> ';
            the_category(',');
            echo '</br>';
            the_tags('<b> Tags </b> ', ' | ');
            edit_post_link();
            echo '</section>';
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            <?php get_template_part('shared/pagination','main') ?>
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