<?php
/*
*Template Name: Full with - Not Sidebar
*/

get_header();
?>
<!-- banner -->
<?php get_template_part('shared/banner','main') ?>
<!--banner-->
<main class="container pt-5 animated slow fadeIn">
    <div class="row">
        <article class="col-md-9">
            <h4><?php echo get_the_title(); ?></h4>
            <hr/>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </article>
    </div>
</main>
<?php get_footer(); ?>
</body>

</html>