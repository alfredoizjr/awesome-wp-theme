<!-- banner -->
<div id="main-banner" class="fluid-container animated slow fadeIn" style="background-image: url(<?php header_image(); ?>)">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8"></div>
    </div>
    <div class="aw-avatar">
        <?php if (get_theme_mod('avatar_feacture_image')) : ?>
            <img src="<?php echo wp_get_attachment_url( get_theme_mod('avatar_feacture_image'));?>" alt="">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/avatar.jpg' ?>" alt="">
        <?php endif; ?>
    </div>
</div>
<!--banner-->