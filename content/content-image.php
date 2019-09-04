<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="aw-card">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php echo get_permalink() ?>">
                <div class="aw-card-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
                </div>
            </a>
        <?php endif; ?>
        <div class="aw-title-card">
            <a href="<?php echo get_the_permalink() ?>">
                <h2><?php the_title(); ?></h2>
            </a>
            <div class="metatag">
                <?php if (has_category()) : ?>
                    <i class="fas fa-folder-open" style="border: none !important;"></i><?php the_category(', '); ?>
                <?php endif; ?>
                <?php if (has_tag()) : ?>
                    <i class="fas fa-tags" style="border: none !important;"></i><?php the_tags('', ', '); ?>
                <?php endif; ?>
                <i class="far fa-calendar-alt" style="border: none !important;"></i> <?php echo get_the_date(); ?>
            </div>
        </div>
        <div class="aw-body-card">
            <?php the_excerpt(); ?>
        </div>
        <div class="aw-card-footer">
            <hr>
            <div class="text-left aw-footer-left">
                <i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?>
            </div>
            <div class="text-right aw-footer-rigth">
                <a href="<?php echo get_the_permalink(); ?>" class="aw-card-link">Read More</a>
            </div>
        </div>
    </article>
</div>