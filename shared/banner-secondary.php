<?php if (is_search()) : ?>
    <section id="single-banner" class="fluid-container animated slow fadeIn">
        <article>
            <h2><?php echo 'Search Result for: ' . get_search_query(); ?></h2>
        </article>
    </section>
<?php elseif (is_category()) : ?>
    <section id="single-banner" class="fluid-container">
        <article>
            <h2>Category: <?php echo  single_cat_title(); ?></h2>
            <?php the_archive_description('<div class="taxonomy-decription">','</div>') ?>
        </article>
    </section>
 <?php elseif(is_archive()): ?>
 <section id="single-banner" class="fluid-container">
        <article>
            archive
            <?php the_archive_title('<h2>','</h2>'); ?>
            <?php the_archive_description('<div class="taxonomy-decription">','</div>') ?>
        </article>
    </section>
<?php else : ?>
    <section id="single-banner" class="fluid-container">
        <article>
            <h2><?php echo get_the_title() ?></h2>
        </article>
    </section>
<?php endif; ?>