<?php
/*
*Template Name: with left Sidebar
*/

get_header();
?>
<!-- banner -->
<div id="main-banner" class="fluid-container" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bg.jpg' ?>)">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8"></div>
    </div>
    <div class="aw-avatar">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/avatar.jpg' ?>" alt="">
    </div>
</div>
<!--banner-->
<main class="container pt-5 animated slow fadeIn">
    <div class="row">
        <aside class="col-md-3">
            <?php if (is_active_sidebar('sidebar-left')) : ?>
                <?php dynamic_sidebar('sidebar-left'); ?>
            <?php else : ?>
            <p>Left Widget is inactive add some content to active it</p>
            <?php endif; ?>
        </aside>
        <article class="col-md-9">
            <?php
            echo '<h4>' . get_the_title() . '</h4>';
            /* loop wp post */
            echo '<hr/>';
            /* this section is for category */
            echo '<section class="p-2">';
            echo '</section>';
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