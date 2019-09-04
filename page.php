<?php
/*
*Template Name: with rigth Sidebar
*/

get_header();
?>
<?php get_template_part('shared/banner','main') ?>
<main class="container pt-5 animated slow fadeIn">
    <div class="row">
        <article class="col-md-9">
        <h4><?php echo get_the_title() ?></h4>
        <hr/>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();

                    $args = array (
                        'before'            => '<div class="page-links-XXX"><span class="page-link-text">' . __( 'More pages: ', '' ) . '</span>',
                        'after'             => '</div>',
                        'link_before'       => '<span class="page-link">',
                        'link_after'        => '</span>',
                        'next_or_number'    => 'next',
                        'separator'         => ' | ',
                        'nextpagelink'      => __( 'Next &raquo', 'aw-plus-awesome-blog' ),
                        'previouspagelink'  => __( '&laquo Previous', 'aw-plus-awesome-blog' ),
                    );
                     
                    wp_link_pages( $args );
                endwhile;
            endif;
            ?>
        </article>
        <aside class="col-md-3">
            <?php dynamic_sidebar('sidebar-rigth'); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>
</body>

</html>