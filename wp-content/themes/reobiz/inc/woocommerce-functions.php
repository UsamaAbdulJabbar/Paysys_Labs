<?php
/**
 * @author  rs-theme
 * @version 1.0
 */
/* All Functions for woocommerce
-----------------------------------------*/
/*-------------------------------------
#. Theme supports for WooCommerce
---------------------------------------*/

function reobiz_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-slider' );
	remove_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
}
add_action( 'after_setup_theme', 'reobiz_add_woocommerce_support' );


function reobiz_wc_shop_thumb_area(){
	get_template_part( 'template-parts/wo-templates/content', 'shop-thumb' );
}

/* Shop hide default page title */
function reobiz_wc_hide_page_title(){
	return false;
}

function reobiz_wc_loop_product_title(){
	echo '<h2 class="woocommerce-loop-product__title"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
}


function reobiz_wc_loop_shop_per_page(){
	global $reobiz_option;
	$layout = !empty($reobiz_option['wc_num_product']) ? $reobiz_option['wc_num_product'] : 9;
	return $layout;
}
add_action( 'loop_shop_per_page', 'reobiz_wc_loop_shop_per_page' );


// Change number or products per row 

if (!function_exists('reobiz_loop_columns')) {
	function reobiz_loop_columns() {
		global $reobiz_option;		
		$layout_col = !empty($reobiz_option['wc_num_product_per_row']) ? $reobiz_option['wc_num_product_per_row'] : 3;
		return $layout_col;
	}
}
add_filter('loop_shop_columns', 'reobiz_loop_columns');

//Count number work with ajax
function reobiz_header_cart_count( $fragments ) {
	global $woocommerce;
	ob_start();?>
	<em class="rsw-count"><?php echo WC()->cart->get_cart_contents_count();?></em>
	<?php
	$fragments['em.rsw-count'] = ob_get_clean();
	return $fragments;
}


function reobiz_wc_add_to_cart_icon(){
	global $product;
	$quantity = 1;
	$class = implode( ' ', array_filter( array(
		'glyph-icon reobizicon-shopping-bag',
		'product_type_' . $product->get_type(),
		$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
		$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
		) ) );

	echo sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s"></a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		esc_attr( $product->get_id() ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $class ) ? $class : 'glyph-icon reobizicon-shopping-bag' )
	);
}

//Change related item products quantity

add_filter( 'woocommerce_output_related_products_args', 'reobiz_related_products_args' );
  function reobiz_related_products_args( $args ) {


  	global $reobiz_option;
	$args['posts_per_page'] = !empty($reobiz_option['related_product_per_page']) ? $reobiz_option['related_product_per_page'] : 3; // 3 related products
	$args['columns'] = 3; // arranged in 3 columns
	return $args;



}

/*All hoocks for woocommerce*
-------------------------------------------*/

/* Header cart count number */
add_filter( 'woocommerce_add_to_cart_fragments', 'reobiz_header_cart_count' );
 
/* Breadcrumb */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

/* Shop loop */
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
;
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

add_action( 'woocommerce_before_shop_loop_item_title', 'reobiz_wc_shop_thumb_area', 11 );
add_filter( 'woocommerce_show_page_title', 'reobiz_wc_hide_page_title' );
add_action( 'woocommerce_shop_loop_item_title', 'reobiz_wc_loop_product_title', 10 );
?>