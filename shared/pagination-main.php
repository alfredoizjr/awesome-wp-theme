<?php if (is_singular()) : ?>
    <hr>
    <div class="col-md-12 p-4">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-left aw-single-pagination">
                <?php next_post_link('<i class="far fa-arrow-alt-circle-left" style="border:none !important"></i> %link') ?>
            </div>
            <div class="col-md-6 col-sm-6 text-right aw-single-pagination">
                <?php previous_post_link(' %link <i class="far fa-arrow-alt-circle-right" style="border:none !important"></i>') ?>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="col-md-12 p-2">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-left aw-pagination">
                <?php previous_posts_link('<i class="far fa-arrow-alt-circle-left" style="border:none !important"></i> Newer post') ?>
            </div>
            <div class="col-md-6 col-sm-6 text-right aw-pagination">
                <?php next_posts_link('Older posts <i class="far fa-arrow-alt-circle-right" style="border:none !important"></i>', 0) ?>
            </div>
        </div>
    </div>
<?php endif; ?>