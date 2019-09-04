<?php

if (!isset($content_width)) $content_width = 900;

/* Theme support only for admins*/
if (current_user_can('manage_options')) {
    add_theme_support('post-thumbnails'); // feactured image
    add_theme_support('custom-header'); //custom header
    add_theme_support('custom-background'); // color background
    add_theme_support('post-formats', array('aside', 'gallery', 'video', 'image'));
    add_theme_support('automatic-feed-links');
    //depricate add_theme_support('menus');
} else {
    add_theme_support('post-formats', array('aside'));
}

add_theme_support('title-tag');

/* Menu register locations*/
register_nav_menus(
    array(
        'header_menu'   => __('Header Menu'),
        'footer_menu'   => __('Footer Menu'),
        'right_sidebar'  => __('Rigth Sidebar Menu'),
        'header_submenu' => __('Header Submenu'),
    )
);


/*  ==============================
    Theme support functions
================================ */
add_theme_support('html5,', array('search-form', 'comment-form', 'gallery', 'comment-list', 'caption'));
add_theme_support('custom-header');
add_theme_support('post-formats', array('aside', 'image', 'video'));

/*  ==============================
    Theme Style and script
================================ */
function awesomeblog_script()
{
    wp_enqueue_style('bs_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"');
    wp_enqueue_style('fontawesome_free', get_template_directory_uri() . '/assets/fontawesome/css/all.css', array(), '4.0', 'all');
    wp_enqueue_style('style_animation',  get_template_directory_uri() . '/assets/animation/animate.min.css', array(), '0.0', 'all');
    wp_enqueue_style('style_animation_pakage',  get_template_directory_uri() . '/assets/animation/fadeIn.css', array(), '0.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('submenu_script', get_template_directory_uri() . '/js/submenu.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('mobilemenu_script', get_template_directory_uri() . '/js/mobilemenu.js', array('jquery'), '1.0.0', true);
    if (is_singular()) wp_enqueue_script('comment-reply');
};

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more($more)
{
    return ' .... ';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

add_action('wp_enqueue_scripts', 'awesomeblog_script');

/*  ==============================
    Customize Api theme color
================================ */
require_once(__DIR__ . "/customize/api-custom-color.php");
/*  ==============================
    Customize Api theme footer
================================ */
require_once(__DIR__ . "/customize/api-custom-footer.php");

/* Custom function */

function the_current_date()
{
    $this_date = date('Y');
    return $this_date;
}

/*  ==============================
    widget Function
================================ */


function awesome_blog_widget_setup()
{
    register_sidebar(array(
        'name'          => __('Sidebar rigth'),
        'id'            => 'sidebar-rigth',
        'class'         => 'sidebar-custom',
        'description'   => 'Standar Sidebar appear at the rigth side',
        'before_widget' => '<section id="%1$s" class="widget col-md-12 %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name'          => 'Sidebar left',
        'id'            => 'sidebar-left',
        'class'         => 'sidebar-custom',
        'description'   => 'Standar Sidebar appear at the left side',
        'before_widget' => '<section id="%1$s" class="widget col-md-12 %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name'          => 'Footer One',
        'id'            => 'footer-one',
        'class'         => 'sidebar-custom',
        'description'   => 'Standar Sidebar appear at the very left of the footer',
        'before_widget' => '<section id="%1$s" class="widget col-md-12 %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ));
    register_sidebar(array(
        'name'          => 'Footer Two',
        'id'            => 'footer-two',
        'class'         => 'sidebar-custom',
        'description'   => 'Standar Sidebar appear at the midle of the footer',
        'before_widget' => '<section id="%1$s" class="widget col-md-12 %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ));
}

add_action('widgets_init', 'awesome_blog_widget_setup');

/*  ==============================
    Head Function
================================ */

function aw_remove_version()
{
    return '';
}

add_filter('the_generator', 'aw_remove_version');

function aw_comments($comment, $args, $depth)
{
    $GLOBAL['comment'] = $comment;
    ?>
    <li <?php comment_class() ?> id="li-comment-<?php comment_ID(); ?>">
        <div id="comment-<?php comment_ID(); ?>">
            <div class="comment-author vcard">
                <?php echo get_avatar($comment, $size = '48', $default = '<path_to_url>'); ?>
                <?php printf(__('<cite class=""fn>%s</cite><span class="says">says:</span>'),null); ?>
            </div>
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e('Your comment is pedding to aprroved') ?></em>
                <br />>
            <?php endif; ?>
            <div class="comment-meta commentmetadata">
                <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                    <?php printf(__('%1$s a %2$s'), get_comment_date(), get_comment_time()); ?>
                </a>
                <?php edit_comment_link(__('(EDIT)'),' ',''); ?>
            </div>
            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge($args, array('depth' => $depth,'max_depth'=>$args['max_depth']))) ?>
            </div>
        </div>
    </li>
<?php
}
