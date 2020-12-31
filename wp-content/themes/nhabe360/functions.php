<?php

require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/custom-post-type.php';
foreach (glob(get_template_directory() . '/inc/helper/*.php') as $filename) {
    require $filename;
}

add_filter('use_block_editor_for_post', '__return_false');

add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
    load_theme_textdomain('blankslate', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'blankslate')));
}

add_action('wp_enqueue_scripts', 'blankslate_load_scripts');
function blankslate_load_scripts()
{
    wp_enqueue_style('blankslate-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
}


add_filter('document_title_separator', 'blankslate_document_title_separator');
function blankslate_document_title_separator($sep)
{
    $sep = '|';
    return $sep;
}
add_filter('the_title', 'blankslate_title');
function blankslate_title($title)
{
    if ($title == '') {
        return '...';
    } else {
        return $title;
    }
}
add_filter('the_content_more_link', 'blankslate_read_more_link');
function blankslate_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">...</a>';
    }
}

add_filter('excerpt_more', 'blankslate_excerpt_read_more_link');
function blankslate_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">...</a>';
    }
}

add_filter('intermediate_image_sizes_advanced', 'blankslate_image_insert_override');
function blankslate_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    return $sizes;
}

add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar Widget Area', 'blankslate'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('wp_head', 'blankslate_pingback_header');
function blankslate_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
function blankslate_custom_pings($comment)
{
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter('get_comments_number', 'blankslate_comment_count', 0);
function blankslate_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments = get_comments('status=approve&post_id=' . $id);
        $comments_by_type = separate_comments($get_comments);
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}



//insert stylesheet all site
if (!function_exists('add_stylesheet')) :
    function add_stylesheet($echo = true)
    {
        $css_result = '';
        $css_result .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">' . PHP_EOL;
        $css_result .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">' . PHP_EOL;
        $css_result .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">' . PHP_EOL;
        $css_result .= '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/css/main.css?v=' . rand() . '">' . PHP_EOL;
        $css_result .=  '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>' . PHP_EOL;
        if ($echo) {
            echo $css_result;
        } else {
            return $css_result;
        }
    }
endif;
//insert javascript file all site
if (!function_exists('add_javascript')) :
    function add_javascript($echo = true)
    {
        $js_result = '';
        $js_result .= '<script type="text/javascript" src ="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>' . PHP_EOL;
        $js_result .= '<script type="text/javascript" src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>' . PHP_EOL;
        $js_result .= '<script type="text/javascript" src ="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>' . PHP_EOL;
        $js_result .= '<script type="text/javascript" src ="' . get_template_directory_uri() . '/assets/js/min/scripts.js?v=' . rand() . '"></script>' . PHP_EOL;
        if ($echo)
            echo $js_result;
        else
            return $js_result;
    }
endif;

/* remove css for all plugin */
function remove_all_theme_styles()
{
    global $wp_styles;
    $wp_styles->queue = array();
}
if (!current_user_can('administrator')) {
    add_action('wp_print_styles', 'remove_all_theme_styles', 100);
    add_filter('show_admin_bar', '__return_false');
}
/* remove default jquery */
function remove_default_jquery()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', '');
}
add_action('init', 'remove_default_jquery');

add_action('init', 'setting_my_first_cookie');
function setting_my_first_cookie()
{
    unset($_POST['testcookie']);
}

/* remove all meta not used */
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version*/
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
# Remove WordPress' canonical links
remove_action('wp_head', 'rel_canonical');
add_filter('xmlrpc_enabled', '__return_false');
// Remove Canonical Link Added By Yoast WordPress SEO Plugin
function at_remove_dup_canonical_link()
{
    return false;
}
add_filter('wpseo_canonical', 'at_remove_dup_canonical_link');
