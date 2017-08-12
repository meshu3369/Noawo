<?php


if (!function_exists('twentysixteen_setup')) :

    function twentysixteen_setup()
    {

        load_theme_textdomain('twentysixteen');


        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for custom logo.
         *
         *  @since Twenty Sixteen 1.2
         */
        add_theme_support('custom-logo', array(
            'height' => 240,
            'width' => 240,
            'flex-height' => true,
        ));

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 9999);
        add_image_size( 'freebies-size', 250, 150 );
        add_image_size( 'big-size', 700, 250);
        add_image_size( 'index-size', 350, 180,true);
        add_image_size( 'start-size', 400,250,true);


        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ));

        /*
         * This theme styles the visual editor to resemble the theme style,
         * specifically font, colors, icons, and column width.
         */
        //add_editor_style(array('css/editor-style.css', twentysixteen_fonts_url()));

        // Indicate widget sidebars can use selective refresh in the Customizer.
        add_theme_support('customize-selective-refresh-widgets');




    }
endif; // twentysixteen_setup
add_action('after_setup_theme', 'twentysixteen_setup');

function twentysixteen_content_width()
{
    $GLOBALS['content_width'] = apply_filters('twentysixteen_content_width', 840);
}

add_action('after_setup_theme', 'twentysixteen_content_width', 0);





function twentysixteen_javascript_detection()
{
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action('wp_head', 'twentysixteen_javascript_detection', 0);




function blog_scripts()
{
    wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css', array());
    wp_enqueue_style('carousel');

    wp_register_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array());
    wp_enqueue_style('owl-theme');

    wp_register_style('owl-transitions', get_template_directory_uri() . '/css/owl.transitions.css', array());
    wp_enqueue_style('owl-transitions');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array());
    wp_enqueue_style('animate');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array());
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css', array());
    wp_enqueue_style('bootstrap-theme');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array());
    wp_enqueue_style('font-awesome');

    wp_register_style('bootsnav', get_template_directory_uri() . '/css/bootsnav.css', array());
    wp_enqueue_style('bootsnav');

    wp_register_style('bootsnav-animate', get_template_directory_uri() . '/css/bootsnav-animate.css', array());
    wp_enqueue_style('bootsnav-animate');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array());
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array());
    wp_enqueue_style('responsive');


    wp_enqueue_script('jquery');




    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.js', array());
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.js', array());
    wp_enqueue_script('bootsnav', get_template_directory_uri() . '/js/bootsnav.js', array());
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array());
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array());
    wp_enqueue_script('scrollup', get_template_directory_uri() . '/js/jquery.scrollUp.js', array());
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array());
    wp_enqueue_script('modernizer', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array());


}

add_action('wp_enqueue_scripts', 'blog_scripts');

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes($classes)
{
    // Adds a class of custom-background-image to sites with a custom background image.
    if (get_background_image()) {
        $classes[] = 'custom-background-image';
    }

    // Adds a class of group-blog to sites with more than 1 published author.
    if (is_multi_author()) {
        $classes[] = 'group-blog';
    }

    // Adds a class of no-sidebar to sites without active sidebar.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    return $classes;
}

add_filter('body_class', 'twentysixteen_body_classes');


function blog_menu(){
    /*============================================
   Register menu navigation
   =============================================*/
    register_nav_menus(
        array(
            'main_menu' => __('Main Menu'),
            'bottom_menu' => __('Footer Menu'),
        )
    );

}


function blog_custom_post(){
     $args = array(
         'label' => 'Freebies',
         'labels' => array(
             'name' => 'Freebies Post',
             'singular_name' => 'Freebies'
         ),
         'public' => true,
         'has_archive' => true,
         'query_var' => true,
         'supports' => array('title','editor','author','thumbnail','custom-fields','comments'),
     );

     register_post_type( 'freebies', $args );


    $argss = array(
        'label' => 'FAQ',
        'labels' => array(
            'name' => 'FAQ',
            'singular_name' => 'FAQ item'
        ),
        'public' => true,
        'has_archive' => true,
        'query_var' => true,
        'supports' => array('title','editor','thumbnail','custom-fields'),
    );

    register_post_type( 'faq', $argss );


    $argsss = array(
        'label' => 'Block of Start page',
        'labels' => array(
            'name' => 'Block of start page',
            'singular_name' => 'Block of start page'
        ),
        'public' => true,
        'has_archive' => true,
        'query_var' => true,
        'supports' => array('title','editor','thumbnail','custom-fields'),
    );

    register_post_type( 'start_here', $argsss );

}

add_action('init','blog_menu');
add_action('init','blog_custom_post');


function read_more($limit){
    $post_content = explode(" ",get_the_content());
    $less_content = array_slice($post_content,0,$limit);
    echo implode(" ",$less_content);
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="my_btn"';
}


add_action( 'widgets_init', 'blog_sidebar' );
function blog_sidebar() {
    register_sidebar( array(
        'name' => __( 'Freebies Sidebar', 'blog-text-domain' ),
        'id' => 'freebies_sidebar',
        'description' => __( 'Widgets in this area will be shown on Freebies Page only.', 'blog-text-domain' ),
        'before_widget' => '<div class="freebies_widget">',
        'after_widget'  => '</div>'
    ));


    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'blog-text-domain' ),
        'id' => 'tricks-sidebar',
        'description' => __( 'Widgets in this area will be shown on Tricks Page and others.', 'blog-text-domain' ),
        'before_widget' => '<div class="adv trend_post">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

}




require_once ('inc/option-tree.php');
require_once ('inc/theme-options.php');
require_once ('inc/meta-boxes.php');

add_filter( 'ot_show_pages', '__return_false' );