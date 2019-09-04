<?php
/*
*Template Name: Full with - Not Sidebar
*/

get_header();
?>
<!-- banner -->
<!--banner-->
<main class="container pt-5 animated slow fadeIn">
    <div class="row">
        <section class="col-md-12">
            <hr>

            <head class="page-notfound-head">
                <h1>Page not found 404</h1>
            </head>
            <div class="page-nofound-body">
                <h3>It look like nothing was found at this location. Please try one of the link below or a search</h3>
                <?php get_search_form(); ?>
                <?php the_widget('WP_Widget_Recent_posts'); ?>
                <div class="widget">

                </div>
        </section>
        <section class="col-md-6">
            <div class="widget">
                <h4>Most use category</h4>
                <ul>
                    <?php
                    wp_list_categories(array(
                        'orderby' => 'count',
                        'order'   =>  'DESC',
                        'show_count' => 1,
                        'title_li'  => '',
                        'number'    => 6
                    ));
                    ?>
                </ul>
            </div>
        </section>
        <section class="col-md-6">
            <div class="widget">
                <h4>Check Archive</h4>
                <ul>
                    <?php
                    wp_get_archives(array('type' => 'daily', 'limit' => 10, 'show_post_count' => 'true'));
                    ?>
                </ul>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
</body>

</html>