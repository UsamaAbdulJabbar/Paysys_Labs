<?php
/**
 * @author  rs-theme
 * @since   1.0
 * @version 1.0 
 */

if ( ! function_exists( 'reobiz_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */ 

function reobiz_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on reobiz, use a find and replace
	 * to change 'reobiz' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'reobiz', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );	
	
	function reobiz_change_excerpt( $text )
	{
		$pos = strrpos( $text, '[');
		if ($pos === false)
		{
			return $text;
		}
		
		return rtrim (substr($text, 0, $pos) ) . '...';
	}
	add_filter('get_the_excerpt', 'reobiz_change_excerpt');


	// Limit Excerpt Length by number of Words
	function reobiz_custom_excerpt( $limit ) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
		} else {
		$excerpt = implode(" ",$excerpt);
		}
		$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
		return $excerpt;
		}
		function content($limit) {
		$content = explode(' ', get_the_content(), $limit);
		if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
		} else {
		$content = implode(" ",$content);
		}
		$content = preg_replace('/[.+]/','', $content);
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		return $content;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary Menu', 'reobiz' ),	
		'menu-2' => esc_html__( 'Single Menu', 'reobiz' ),
		'menu-3' => esc_html__( 'Mobile Menu', 'reobiz' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'reobiz_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	//add support posts format
	add_theme_support( 'post-formats', array( 
		'aside', 
		'gallery',
		'audio',
		'video',
		'image',
		'quote',
		'link',
	) );

add_theme_support( 'align-wide' );	
}
endif;
add_action( 'after_setup_theme', 'reobiz_setup' );

/**
*Custom Image Size
*/

add_image_size( 'reobiz_portfolio-slider', 520, 640, true );
add_image_size( 'reobiz_portfolio-full-slider', 1400, 650, true );
add_image_size( 'reobiz_blog-slider', 365, 243, true );
add_image_size( 'reobiz_blog_long_height', 365, 480, true );
add_image_size( 'reobiz_latest_blog_small', 255, 157, true );
add_image_size( 'reobiz_latest_blog_medium', 340, 270, true );
add_image_size( 'reobiz_image_slider_big',  860, 450, true );
add_image_size( 'reobiz_blog-footer', 80, 68, true );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reobiz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'reobiz_content_width', 640 );
}
add_action( 'after_setup_theme', 'reobiz_content_width', 0 );


/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 *  Enqueue scripts and styles.
 */
require_once get_template_directory() . '/inc/template-scripts.php';



/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require_once get_template_directory() . '/inc/template-functions.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require_once get_template_directory() . '/inc/template-sidebar.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Custom Style
 */

$licenseKey = get_option("ReobizWordPressTheme_lic_Key","");
if (class_exists( 'ReduxFramework') && !empty($licenseKey)){
	require_once get_template_directory() . '/framework/custom.php';
	require_once get_template_directory() . '/libs/theme-option/config.php';
}


require_once get_template_directory() . '/inc/woocommerce-functions.php';



if (is_admin() && isset($_GET['activated'])){
	wp_redirect(admin_url("themes.php?page=reobiz"));
}
if (is_admin()) {	
	require_once get_template_directory() . '/framework/ini/theme-base.php';	
}



//----------------------------------------------------------------------
// Remove Redux Framework NewsFlash
//----------------------------------------------------------------------
if ( ! class_exists( 'reduxNewsflash' ) ):
    class reduxNewsflash {
        public function __construct( $parent, $params ) {}
    }
endif;

function reobiz_remove_demo_mode_link() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'reobiz_remove_demo_mode_link');


/**
 * Add Class Body Tag *********************
 */

if ( ! function_exists( 'rs_page_id_custom_function' ) ) {
	function rs_page_id_custom_function() {
	    $page_id = get_the_ID();
	    $onepages_select = get_post_meta($page_id, 'onepages_select', true) ?? '';
	    if(!empty($onepages_select)){
		    function rs_body_classes($classes) {		    	
		    	if ( ! is_page_template( 'page-single.php' ) ) {
			        $classes[] = 'page-template-page-single';
			        $classes[] = 'page-template-page-single-php';
			    }
		        return $classes;
		    }
		    add_filter('body_class', 'rs_body_classes');
		}
	    return $page_id;
	}
	add_action('wp', 'rs_page_id_custom_function');
}





/**
 * Registers an editor stylesheet for the theme.
 */
function reobiz_theme_add_editor_styles() {
    add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'admin_init', 'reobiz_theme_add_editor_styles' );



//remove revolution slid metabox

function reobiz_remove_revolution_slider_meta_boxes() {	
	
	remove_meta_box( 'mymetabox_revslider_0', 'teams', 'normal' );
	remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
	remove_meta_box( 'mymetabox_revslider_0', 'post', 'normal' );
	remove_meta_box( 'mymetabox_revslider_0', 'rsclient', 'normal' );
	remove_meta_box( 'mymetabox_revslider_0', 'gallery', 'normal' );
}

add_action( 'do_meta_boxes', 'reobiz_remove_revolution_slider_meta_boxes' );	


function reobiz_menu_add_description_to_menu($item_output, $item, $depth, $args) {

   if (strlen($item->description) > 0 ) {
      // append description after link
      $item_output .= sprintf('<span class="description">%s</span>', esc_html($item->description));   
     
   }   
   return $item_output;
}
add_filter('walker_nav_menu_start_el', 'reobiz_menu_add_description_to_menu', 10, 4);

//------------------------------------------------------------------------
//Organize Comments form field
//-----------------------------------------------------------------------
function reobiz_wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'reobiz_wpb_move_comment_field_to_bottom' );	

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});