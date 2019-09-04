<?php if (has_post_thumbnail()) : ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo get_permalink() ?>">
                        <img class="rounded img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>">
                    </a>
                </div>
                <div class="col-md-9">
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
                    <?php the_excerpt(); ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="aw-card-link">Read More</a>
                </div>
            </div>
            <hr>
        </article>
    <?php else : ?>
        <article class="col-md-12">
            <div class="row">
                <div class="col-md-12">
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
                    <?php the_excerpt(); ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="aw-card-link">Read More</a>
                </div>
            </div>
            <hr>
        </article>
    </div>
<?php endif; ?>