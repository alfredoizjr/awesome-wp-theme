<?php
/*
*Template Name: Higligth  template rigth sidebar
*/

get_header();
?>
<!-- banner -->
<?php get_template_part('shared/banner', 'main') ?>
<!--banner-->
<main class="container pt-5 animated slow fadeIn">
    <div class="row">
        <article class="col-md-9">
            <h4><?php echo get_the_title(); ?></h4>
            <hr />
            <?php
            $args = array('post_type'=> 'higligth','post_per_page' => 5);
            $loop = new Wp_Query($args);
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    get_template_part('content/content');
                endwhile;
            else:
                echo __e('Any item was found at this section')   ; 
            endif;
            wp_reset_postdata();
            ?>
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