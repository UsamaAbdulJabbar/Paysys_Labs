<?php
/**
 * WooCommerce - Quick View Modal
 *
 * @package PA
 */

?>
<div id="premium-woo-quick-view-<?php echo esc_attr( $widget_id ); ?>" class="premium-woo-quick-view-<?php echo esc_attr( $widget_id ); ?>">
	<div class="premium-woo-quick-view-back">
		<div class="premium-woo-quick-view-loader"></div>
	</div>
	<div id="premium-woo-quick-view-modal">
		<div class="premium-woo-content-main-wrapper"><?php /*Don't remove this html comment*/ ?><!--
		--><div class="premium-woo-content-main">
				<div class="premium-woo-lightbox-content">

					<a href="#" class="premium-woo-quick-view-close fa fa-window-close"></a>

					<div id="premium-woo-quick-view-content" class="woocommerce single-product"></div>
				</div>
			</div>
		</div>
	</div>
</div>
