<?php
function reobiz_scripts() {
	//register styles
	global $reobiz_option;
	wp_enqueue_style( 'remixicon', get_template_directory_uri() .'/assets/fonts/remixicon.css');
	wp_enqueue_style( 'reobiz-plugins', get_template_directory_uri() .'/assets/css/plugins.css');
	wp_enqueue_style( 'reobizicon', get_template_directory_uri() .'/assets/css/reobizicon.css');	
	wp_enqueue_style( 'reobiz-style-default', get_template_directory_uri() .'/assets/css/default.css' );
	wp_enqueue_style( 'reobiz-style-custom', get_template_directory_uri() .'/assets/css/custom.css' );
	wp_enqueue_style( 'reobiz-style-responsive', get_template_directory_uri() .'/assets/css/responsive.css' );
	wp_enqueue_style( 'reobiz-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'reobiz-plugin', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery','imagesloaded'), '20151215', true );	
	
	wp_enqueue_script('reobiz-classie', get_template_directory_uri() . '/assets/js/classie.js', array('jquery'), '201513434', true);	
	wp_enqueue_script( 'theia-sticky-sidebar', get_template_directory_uri() . '/assets/js/theia-sticky-sidebar.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'time-circle', get_template_directory_uri() . '/assets/js/time-circle.js', array('jquery'), '20151215', true );
	
	// Mouse Pointer Scripts
	$rs_mouse_pointer = "";
	$rs_mouse_pointer = get_post_meta(get_queried_object_id(), 'mouse-pointer', true);
	
	if($rs_mouse_pointer != 'hide'){
		if(!empty($reobiz_option['show_pointer']) || ($rs_mouse_pointer == 'show') ){
			wp_enqueue_script( 'pointer', get_template_directory_uri() . '/assets/js/pointer.js', array('jquery'), '20151215', true );
		} 
	}

	$onepages_select = get_post_meta(get_the_ID(), 'onepages_select', true ) ?? '';
	if ( is_page_template( 'page-single.php' ) || !empty($onepages_select) ) {
		wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), '20151215', true );
	}
	wp_enqueue_script('reobiz-fixed-menu', get_template_directory_uri() . '/assets/js/fixed-menu.js', array('jquery'), '201513434', true);
	wp_enqueue_script('reobiz-mobilemenu', get_template_directory_uri() . '/assets/js/mobilemenu.js', array('jquery'), '201513434', true);
	wp_enqueue_script('reobiz-mobilemenu_single', get_template_directory_uri() . '/assets/js/mobilemenu_single.js', array('jquery'), '201513434', true);
	wp_enqueue_script('reobiz-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '201513434', true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reobiz_scripts' );
	
add_action( 'wp_enqueue_scripts', 'reobiz_rtl_scripts', 1500 );
if ( !function_exists( 'reobiz_rtl_scripts' ) ) {
	function reobiz_rtl_scripts() {	
		// RTL
		if ( is_rtl() ) {
			wp_enqueue_style( 'reobiz-rtl', get_template_directory_uri() . '/assets/css/rtl.css', array(), 1.0 );
		}		
		
	}
}

add_action( 'admin_enqueue_scripts', 'reobiz_load_admin_styles' );
function reobiz_load_admin_styles($screen) {
	wp_enqueue_style( 'reobiz-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', true, '1.0.0' );
	wp_enqueue_script( 'reobiz-admin-script', get_template_directory_uri() . '/assets/js/admin-script.js', array('jquery'), '20151215', true );
} 