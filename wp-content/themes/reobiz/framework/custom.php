<?php
/*
dynamic css file. please don't edit it. it's update automatically when settins changed
*/
add_action('wp_head', 'reobiz_custom_colors', 160);
function reobiz_custom_colors() { 
global $reobiz_option;	
/***styling options
------------------*/
	if(!empty($reobiz_option['body_bg_color']))
	{
	$body_bg         = $reobiz_option['body_bg_color'];
	$body_color       = $reobiz_option['body_text_color'];	
	$site_color       = $reobiz_option['primary_color'];
	$secondary_color  = $reobiz_option['secondary_color'];
	$link_color       = $reobiz_option['link_text_color'];	
	$link_hover_color = $reobiz_option['link_hover_text_color'];	
	$footer_bgcolor   = $reobiz_option['footer_bg_color'];

	if(!empty($reobiz_option['menu_text_color'])){		
		$menu_text_color         = $reobiz_option['menu_text_color'];
	}
	if(!empty($reobiz_option['menu_text_hover_color'])){		
		$menu_text_hover_color   = $reobiz_option['menu_text_hover_color'];
	}
	if(!empty($reobiz_option['menu_text_active_color'])){		
		$menu_active_color       = $reobiz_option['menu_text_active_color'];
	}
	
	if(!empty($reobiz_option['menu_text_hover_bg'])){		
		$menu_text_hover_bg      = $reobiz_option['menu_text_hover_bg'];
	}
	if(!empty($reobiz_option['menu_text_active_bg'])){		
		$menu_text_active_bg     = $reobiz_option['menu_text_active_bg'];
	}
	
	if(!empty($reobiz_option['drop_text_color'])){		
		$dropdown_text_color     = $reobiz_option['drop_text_color'];
	}
	
	if(!empty($reobiz_option['drop_text_hover_color'])){		
		$drop_text_hover_color   = $reobiz_option['drop_text_hover_color'];
	}			
	
	if(!empty($reobiz_option['drop_text_hoverbg_color'])){		
		$drop_text_hoverbg_color = $reobiz_option['drop_text_hoverbg_color'];
	}
	
	if(!empty($reobiz_option['drop_down_bg_color'])){		
		$drop_down_bg_color = $reobiz_option['drop_down_bg_color'];
	}	
	
	$rs_top_style = get_post_meta(get_the_ID(), 'topbar-color', true);
    if($rs_top_style =='toplight' || $rs_top_style==''){
		$toolbar_bg    = $reobiz_option['toolbar_bg_color'];
		$toolbar_text  = $reobiz_option['toolbar_text_color'];
		$toolbar_link  = $reobiz_option['toolbar_link_color'];
		$toolbar_hover = $reobiz_option['toolbar_link_hover_color'];
	} else{
		$toolbar_bg    = $reobiz_option['toolbar_bg_color2'];
		$toolbar_text  = $reobiz_option['toolbar_text_color2'];
		$toolbar_link  = $reobiz_option['toolbar_link_color2'];
		$toolbar_hover = $reobiz_option['toolbar_link_hover_color2'];
    }

	//Typography Extract for Body Default
	
	if(!empty($reobiz_option['opt-typography-body']['color'])){
		$body_typography_color = $reobiz_option['opt-typography-body']['color'];
	}
	if(!empty($reobiz_option['opt-typography-body']['line-height'])){
		$body_typography_lineheight = $reobiz_option['opt-typography-body']['line-height'];
	}	
	if(!empty($reobiz_option['opt-typography-body']['font-family'])){	
		$body_typography_font      = $reobiz_option['opt-typography-body']['font-family'];
	}
	if(!empty($reobiz_option['opt-typography-body']['font-size'])){	
		$body_typography_font_size = $reobiz_option['opt-typography-body']['font-size'];
	}	
	if(!empty($reobiz_option['opt-typography-body']['font-weight'])){	
		$body_typography_font_weight = $reobiz_option['opt-typography-body']['font-weight'];
	}

	//Typography Extract for Body Update
	
	if(!empty($reobiz_option['opt-typography-body-update']['color'])){
		$body_update_typography_color = $reobiz_option['opt-typography-body-update']['color'];
	}
	if(!empty($reobiz_option['opt-typography-body-update']['line-height'])){
		$body_update_typography_lineheight = $reobiz_option['opt-typography-body-update']['line-height'];
	}	
	if(!empty($reobiz_option['opt-typography-body-update']['font-family'])){	
		$body_update_typography_font = $reobiz_option['opt-typography-body-update']['font-family'];
	}
	if(!empty($reobiz_option['opt-typography-body-update']['font-size'])){	
		$body_update_typography_font_size = $reobiz_option['opt-typography-body-update']['font-size'];
	}	
	if(!empty($reobiz_option['opt-typography-body-update']['font-weight'])){	
		$body_update_typography_font_weight = $reobiz_option['opt-typography-body-update']['font-weight'];
	}

	//typography extract for menu
	$menu_typography_color       = $reobiz_option['opt-typography-menu']['color'];	
	$menu_typography_weight      = $reobiz_option['opt-typography-menu']['font-weight'];	
	$menu_typography_font_family = $reobiz_option['opt-typography-menu']['font-family'];
	$menu_typography_font_fsize  = $reobiz_option['opt-typography-menu']['font-size'];
		
	if(!empty($reobiz_option['opt-typography-menu']['line-height']))
	{
		$menu_typography_line_height = $reobiz_option['opt-typography-menu']['line-height'];
	}
	
	//typography extract for heading
	
	$h1_typography_color=$reobiz_option['opt-typography-h1']['color'];		
	if(!empty($reobiz_option['opt-typography-h1']['font-weight']))
	{
		$h1_typography_weight=$reobiz_option['opt-typography-h1']['font-weight'];
	}
		
	$h1_typography_font_family=$reobiz_option['opt-typography-h1']['font-family'];
	$h1_typography_font_fsize=$reobiz_option['opt-typography-h1']['font-size'];	
	if(!empty($reobiz_option['opt-typography-h1']['line-height']))
	{
		$h1_typography_line_height=$reobiz_option['opt-typography-h1']['line-height'];
	}
	
	$h2_typography_color=$reobiz_option['opt-typography-h2']['color'];	

	$h2_typography_font_fsize=$reobiz_option['opt-typography-h2']['font-size'];	
	if(!empty($reobiz_option['opt-typography-h2']['font-weight']))
	{
		$h2_typography_font_weight=$reobiz_option['opt-typography-h2']['font-weight'];
	}	
	$h2_typography_font_family=$reobiz_option['opt-typography-h2']['font-family'];
	$h2_typography_font_fsize=$reobiz_option['opt-typography-h2']['font-size'];	
	if(!empty($reobiz_option['opt-typography-h2']['line-height']))
	{
		$h2_typography_line_height=$reobiz_option['opt-typography-h2']['line-height'];
	}
	
	$h3_typography_color=$reobiz_option['opt-typography-h3']['color'];	
	if(!empty($reobiz_option['opt-typography-h3']['font-weight']))
	{
		$h3_typography_font_weightt=$reobiz_option['opt-typography-h3']['font-weight'];
	}	
	$h3_typography_font_family = $reobiz_option['opt-typography-h3']['font-family'];
	$h3_typography_font_fsize  = $reobiz_option['opt-typography-h3']['font-size'];	
	if(!empty($reobiz_option['opt-typography-h3']['line-height']))
	{
		$h3_typography_line_height = $reobiz_option['opt-typography-h3']['line-height'];
	}

	$h4_typography_color = $reobiz_option['opt-typography-h4']['color'];	
	if(!empty($reobiz_option['opt-typography-h4']['font-weight']))
	{
		$h4_typography_font_weight = $reobiz_option['opt-typography-h4']['font-weight'];
	}	
	$h4_typography_font_family = $reobiz_option['opt-typography-h4']['font-family'];
	$h4_typography_font_fsize  = $reobiz_option['opt-typography-h4']['font-size'];	
	if(!empty($reobiz_option['opt-typography-h4']['line-height']))
	{
		$h4_typography_line_height = $reobiz_option['opt-typography-h4']['line-height'];
	}
	
	$h5_typography_color = $reobiz_option['opt-typography-h5']['color'];	
	if(!empty($reobiz_option['opt-typography-h5']['font-weight']))
	{
		$h5_typography_font_weight = $reobiz_option['opt-typography-h5']['font-weight'];
	}	
	$h5_typography_font_family = $reobiz_option['opt-typography-h5']['font-family'];
	$h5_typography_font_fsize  = $reobiz_option['opt-typography-h5']['font-size'];	
	if(!empty($reobiz_option['opt-typography-h5']['line-height']))
	{
		$h5_typography_line_height = $reobiz_option['opt-typography-h5']['line-height'];
	}
	
	$h6_typography_color = $reobiz_option['opt-typography-6']['color'];	
	if(!empty($reobiz_option['opt-typography-6']['font-weight']))
	{
		$h6_typography_font_weight = $reobiz_option['opt-typography-6']['font-weight'];
	}
	$h6_typography_font_family = $reobiz_option['opt-typography-6']['font-family'];
	$h6_typography_font_fsize  = $reobiz_option['opt-typography-6']['font-size'];	
	if(!empty($reobiz_option['opt-typography-6']['line-height']))
	{
		$h6_typography_line_height = $reobiz_option['opt-typography-6']['line-height'];
	}
	
?>

<!-- Typography -->
<?php if(!empty($body_color)){
	global $reobiz_option;
	$hex = $site_color;
	list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
	$site_color_rgb = "$r, $g, $b";


	$hex2 = $secondary_color;
	list($r, $g, $b) = sscanf($hex2, "#%02x%02x%02x");
	$second_color_rgb = "$r, $g, $b";
?>

<style>
	<?php if(!empty($reobiz_option['copyright_bg']))
		{
			$copyright_bg = $reobiz_option['copyright_bg'];
		?>
		.footer-bottom{
			background:<?php echo esc_attr($copyright_bg); ?> !important;
		}
	<?php } ?>
	
	body{
		background:<?php echo esc_attr($body_bg); ?>;
		color:<?php echo esc_attr($body_color); ?>;
	}

	body{
		<?php if(!empty($body_update_typography_font)){ ?>	
		font-family: <?php echo esc_attr($body_update_typography_font);?> !important; 
		<?php } else { ?> 
		font-family: <?php echo esc_attr($body_typography_font);?>;  
		<?php } ?> 
		<?php if(!empty($body_update_typography_font_size)){ ?>	
		
		<?php } else { ?> 
		font-size: <?php echo esc_attr($body_typography_font_size);?>; 
		<?php } ?>

		<?php if(!empty($body_update_typography_font_weight)){ ?>	
		font-weight: <?php echo esc_attr($body_update_typography_font_weight);?> !important; 
		<?php } else { ?> 
		font-weight: <?php echo esc_attr($body_typography_font_weight);?>; 
		<?php } ?> 

		<?php if(!empty($body_update_typography_color)){ ?>	
		color: <?php echo esc_attr($body_update_typography_color);?> !important; 
		<?php } else { 
		if(!empty($reobiz_option['opt-typography-body']['color'])){ ?>
		color: <?php echo esc_attr($body_typography_color);?>; 
		<?php } } ?>    
	}

	@media only screen and (min-width: 1025px) {
		body{ 
			<?php if(!empty($body_update_typography_font_size)){ ?>	
			font-size: <?php echo esc_attr($body_update_typography_font_size);?> !important; 
			<?php } else { ?> 
			<?php } ?>    
		}
	}


	<?php if(!empty($reobiz_option['team_single_bg_color']))
		{
			$team_single_bg_color = $reobiz_option['team_single_bg_color'];
		?>
		body.single-teams{
			background:<?php echo esc_attr($team_single_bg_color); ?>;
		}
	<?php } ?>


	#cl-testimonial.testimonial-dark .testimonial-slide.slider1 .testimonial-item .testimonial-content{
		background: rgba(<?php echo esc_attr($second_color_rgb); ?>, 0.8) !important;
	}
	

	<?php if(!empty($reobiz_option['opt-typography-h1-update']['color']) || !empty($reobiz_option['opt-typography-h1-update']['font-family']) || !empty($reobiz_option['opt-typography-h1-update']['font-size']) || !empty($reobiz_option['opt-typography-h1-update']['font-weight']) || !empty($reobiz_option['opt-typography-h1-update']['line-height'])){ ?>
		h1{
			<?php if(!empty($reobiz_option['opt-typography-h1-update']['color'])){ ?>
				color:<?php echo esc_attr($reobiz_option['opt-typography-h1-update']['color']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-h1-update']['font-family'])){ ?>
			font-family:<?php echo esc_attr($reobiz_option['opt-typography-h1-update']['font-family']);?> !important;
			<?php } ?>	
			<?php if(!empty($reobiz_option['opt-typography-h1-update']['font-weight'])){ ?>
			font-weight:<?php echo esc_attr($reobiz_option['opt-typography-h1-update']['font-weight']);?> !important;
			<?php } ?>			
		}
		@media only screen and (min-width: 1025px) {
			h1{
				<?php if(!empty($reobiz_option['opt-typography-h1-update']['font-size'])){ ?>
				font-size:<?php echo esc_attr($reobiz_option['opt-typography-h1-update']['font-size']);?> !important;
				<?php } ?>					
				<?php if(!empty($reobiz_option['opt-typography-h1-update']['line-height'])){ ?>
					line-height:<?php echo esc_attr($reobiz_option['opt-typography-h1-update']['line-height']);?> !important;
				<?php } ?>
			}
		}
	<?php } else { ?>
		h1{
			color:<?php echo esc_attr($h1_typography_color);?>;
			font-family:<?php echo esc_attr($h1_typography_font_family);?>;
			font-size:<?php echo esc_attr($h1_typography_font_fsize);?>;
			<?php if(!empty($h1_typography_weight)){ ?>
			font-weight:<?php echo esc_attr($h1_typography_weight);?>;
			<?php } ?>		
			<?php if(!empty($h1_typography_line_height)){ ?>
				line-height:<?php echo esc_attr($h1_typography_line_height);?>;
			<?php } ?>
		}
	<?php } ?>		



	<?php if(!empty($reobiz_option['opt-typography-h2-update']['color']) || !empty($reobiz_option['opt-typography-h2-update']['font-family']) || !empty($reobiz_option['opt-typography-h2-update']['font-size']) || !empty($reobiz_option['opt-typography-h2-update']['font-weight']) || !empty($reobiz_option['opt-typography-h2-update']['line-height'])){ ?>
		
			h2{
				<?php if(!empty($reobiz_option['opt-typography-h2-update']['color'])){ ?>
					color:<?php echo esc_attr($reobiz_option['opt-typography-h2-update']['color']);?> !important;
				<?php } ?>
				<?php if(!empty($reobiz_option['opt-typography-h2-update']['font-family'])){ ?>
				font-family:<?php echo esc_attr($reobiz_option['opt-typography-h2-update']['font-family']);?> !important;
				<?php } ?>
				<?php if(!empty($reobiz_option['opt-typography-h2-update']['font-weight'])){ ?>
				font-weight:<?php echo esc_attr($reobiz_option['opt-typography-h2-update']['font-weight']);?> !important;
				<?php } ?>
			}
			
		@media only screen and (min-width: 1025px) {
			h2:not(.widget-title){
				<?php if(!empty($reobiz_option['opt-typography-h2-update']['font-size'])){ ?>
				font-size:<?php echo esc_attr($reobiz_option['opt-typography-h2-update']['font-size']);?> !important;
				<?php } ?>
			}

			h2{					
				<?php if(!empty($reobiz_option['opt-typography-h2-update']['line-height'])){ ?>
					line-height:<?php echo esc_attr($reobiz_option['opt-typography-h2-update']['line-height']);?> !important;
				<?php } ?>
			}
		}
	<?php } else { ?>
		h2{
			color:<?php echo esc_attr($h2_typography_color);?>; 
			font-family:<?php echo esc_attr($h2_typography_font_family);?>;
			font-size:<?php echo esc_attr($h2_typography_font_fsize);?>;
			<?php if(!empty($h2_typography_font_weight)){ ?>
			font-weight:<?php echo esc_attr($h2_typography_font_weight);?>;
			<?php } ?>		
			<?php if(!empty($h2_typography_line_height)){ ?>
				line-height:<?php echo esc_attr($h2_typography_line_height);?> ;
			<?php } ?>
		}
	<?php } ?>	


	<?php if(!empty($reobiz_option['opt-typography-body-sidebar-update']['color']) || !empty($reobiz_option['opt-typography-body-sidebar-update']['font-family']) || !empty($reobiz_option['opt-typography-body-sidebar-update']['font-size']) || !empty($reobiz_option['opt-typography-body-sidebar-update']['font-weight']) || !empty($reobiz_option['opt-typography-body-sidebar-update']['line-height'])){ ?>

		.bs-sidebar h2.widget-title{
			<?php if(!empty($reobiz_option['opt-typography-body-sidebar-update']['color'])){ ?>
				color:<?php echo esc_attr($reobiz_option['opt-typography-body-sidebar-update']['color']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-body-sidebar-update']['font-family'])){ ?>
			font-family:<?php echo esc_attr($reobiz_option['opt-typography-body-sidebar-update']['font-family']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-body-sidebar-update']['font-weight'])){ ?>
			font-weight:<?php echo esc_attr($reobiz_option['opt-typography-body-sidebar-update']['font-weight']);?> !important;
			<?php } ?>			
		}

		@media only screen and (min-width: 1025px) {
			.bs-sidebar h2.widget-title{					
				<?php if(!empty($reobiz_option['opt-typography-body-sidebar-update']['line-height'])){ ?>
					line-height:<?php echo esc_attr($reobiz_option['opt-typography-body-sidebar-update']['line-height']);?> !important;
				<?php } ?>
				<?php if(!empty($reobiz_option['opt-typography-body-sidebar-update']['font-size'])){ ?>
				font-size:<?php echo esc_attr($reobiz_option['opt-typography-body-sidebar-update']['font-size']);?> !important;
				<?php } ?>
			}
		}
	<?php } ?>
	


	<?php if(!empty($reobiz_option['opt-typography-h3-update']['color']) || !empty($reobiz_option['opt-typography-h3-update']['font-family']) || !empty($reobiz_option['opt-typography-h3-update']['font-size']) || !empty($reobiz_option['opt-typography-h3-update']['font-weight']) || !empty($reobiz_option['opt-typography-h3-update']['line-height'])){ ?>
		h3{
			<?php if(!empty($reobiz_option['opt-typography-h3-update']['color'])){ ?>
				color:<?php echo esc_attr($reobiz_option['opt-typography-h3-update']['color']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-h3-update']['font-family'])){ ?>
			font-family:<?php echo esc_attr($reobiz_option['opt-typography-h3-update']['font-family']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-h3-update']['font-weight'])){ ?>
			font-weight:<?php echo esc_attr($reobiz_option['opt-typography-h3-update']['font-weight']);?> !important;
			<?php } ?>
		}
		@media only screen and (min-width: 1025px) {
			h3{
				<?php if(!empty($reobiz_option['opt-typography-h3-update']['font-size'])){ ?>
				font-size:<?php echo esc_attr($reobiz_option['opt-typography-h3-update']['font-size']);?> !important;
				<?php } ?>						
				<?php if(!empty($reobiz_option['opt-typography-h3-update']['line-height'])){ ?>
					line-height:<?php echo esc_attr($reobiz_option['opt-typography-h3-update']['line-height']);?> !important;
				<?php } ?>
			}
		}
	<?php } else { ?>
		h3{
			color:<?php echo esc_attr($h3_typography_color);?> ;
			font-family:<?php echo esc_attr($h3_typography_font_family);?>;
			font-size:<?php echo esc_attr($h3_typography_font_fsize);?>;
			<?php if(!empty($h3_typography_font_weight)){ ?>
			font-weight:<?php echo esc_attr($h3_typography_font_weight);?>;
			<?php } ?>		
			<?php if(!empty($h3_typography_line_height)){ ?>
				line-height:<?php echo esc_attr($h3_typography_line_height);?>;
			<?php } ?>
		}
	<?php } ?>	


	<?php if(!empty($reobiz_option['opt-typography-h4-update']['color']) || !empty($reobiz_option['opt-typography-h4-update']['font-family']) || !empty($reobiz_option['opt-typography-h4-update']['font-size']) || !empty($reobiz_option['opt-typography-h4-update']['font-weight']) || !empty($reobiz_option['opt-typography-h4-update']['line-height'])){ ?>
		h4{
			<?php if(!empty($reobiz_option['opt-typography-h4-update']['color'])){ ?>
				color:<?php echo esc_attr($reobiz_option['opt-typography-h4-update']['color']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-h4-update']['font-family'])){ ?>
			font-family:<?php echo esc_attr($reobiz_option['opt-typography-h4-update']['font-family']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-h4-update']['font-weight'])){ ?>
			font-weight:<?php echo esc_attr($reobiz_option['opt-typography-h4-update']['font-weight']);?> !important;
			<?php } ?>
		}
		@media only screen and (min-width: 1025px) {
			h4{
				<?php if(!empty($reobiz_option['opt-typography-h4-update']['font-size'])){ ?>
				font-size:<?php echo esc_attr($reobiz_option['opt-typography-h4-update']['font-size']);?> !important;
				<?php } ?>						
				<?php if(!empty($reobiz_option['opt-typography-h4-update']['line-height'])){ ?>
					line-height:<?php echo esc_attr($reobiz_option['opt-typography-h4-update']['line-height']);?> !important;
				<?php } ?>
			}
		}
	<?php } else { ?>
		h4{
			color:<?php echo esc_attr($h4_typography_color);?>;
			font-family:<?php echo esc_attr($h4_typography_font_family);?>;
			font-size:<?php echo esc_attr($h4_typography_font_fsize);?>;
			<?php if(!empty($h4_typography_font_weight)){ ?>
			font-weight:<?php echo esc_attr($h4_typography_font_weight);?>;
			<?php } ?>		
			<?php if(!empty($h4_typography_line_height)){ ?>
				line-height:<?php echo esc_attr($h4_typography_line_height);?>;
			<?php } ?>
			
		}
	<?php } ?>		
	



	<?php if(!empty($reobiz_option['opt-typography-h5-update']['color']) || !empty($reobiz_option['opt-typography-h5-update']['font-family']) || !empty($reobiz_option['opt-typography-h5-update']['font-size']) || !empty($reobiz_option['opt-typography-h5-update']['font-weight']) || !empty($reobiz_option['opt-typography-h5-update']['line-height'])){ ?>
		h5{
			<?php if(!empty($reobiz_option['opt-typography-h5-update']['color'])){ ?>
				color:<?php echo esc_attr($reobiz_option['opt-typography-h5-update']['color']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-h5-update']['font-family'])){ ?>
			font-family:<?php echo esc_attr($reobiz_option['opt-typography-h5-update']['font-family']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-h5-update']['font-weight'])){ ?>
			font-weight:<?php echo esc_attr($reobiz_option['opt-typography-h5-update']['font-weight']);?> !important;
			<?php } ?>
		}
		@media only screen and (min-width: 1025px) {
			h5{
				<?php if(!empty($reobiz_option['opt-typography-h5-update']['font-size'])){ ?>
				font-size:<?php echo esc_attr($reobiz_option['opt-typography-h5-update']['font-size']);?> !important;
				<?php } ?>						
				<?php if(!empty($reobiz_option['opt-typography-h5-update']['line-height'])){ ?>
					line-height:<?php echo esc_attr($reobiz_option['opt-typography-h5-update']['line-height']);?> !important;
				<?php } ?>
			}
		}
	<?php } else { ?>
		h5{
			color:<?php echo esc_attr($h5_typography_color);?>;
			font-family:<?php echo esc_attr($h5_typography_font_family);?>;
			font-size:<?php echo esc_attr($h5_typography_font_fsize);?>;
			<?php if(!empty($h5_typography_font_weight)){ ?>
			font-weight:<?php echo esc_attr($h5_typography_font_weight);?>;
			<?php } ?>		
			<?php if(!empty($h5_typography_line_height)){ ?>
				line-height:<?php echo esc_attr($h5_typography_line_height);?>;
			<?php } ?>
		}
	<?php } ?>



	<?php if(!empty($reobiz_option['opt-typography-6-update']['color']) || !empty($reobiz_option['opt-typography-6-update']['font-family']) || !empty($reobiz_option['opt-typography-6-update']['font-size']) || !empty($reobiz_option['opt-typography-6-update']['font-weight']) || !empty($reobiz_option['opt-typography-6-update']['line-height'])){ ?>
		h6{
			<?php if(!empty($reobiz_option['opt-typography-6-update']['color'])){ ?>
				color:<?php echo esc_attr($reobiz_option['opt-typography-6-update']['color']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-6-update']['font-family'])){ ?>
			font-family:<?php echo esc_attr($reobiz_option['opt-typography-6-update']['font-family']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-6-update']['font-weight'])){ ?>
			font-weight:<?php echo esc_attr($reobiz_option['opt-typography-6-update']['font-weight']);?> !important;
			<?php } ?>
		}

		@media only screen and (min-width: 1025px) {
			h6{
				<?php if(!empty($reobiz_option['opt-typography-6-update']['font-size'])){ ?>
				font-size:<?php echo esc_attr($reobiz_option['opt-typography-6-update']['font-size']);?> !important;
				<?php } ?>						
				<?php if(!empty($reobiz_option['opt-typography-6-update']['line-height'])){ ?>
					line-height:<?php echo esc_attr($reobiz_option['opt-typography-6-update']['line-height']);?> !important;
				<?php } ?>
			}
		}
	<?php } else { ?>
		h6{
			color:<?php echo esc_attr($h6_typography_color);?> ;
			font-family:<?php echo esc_attr($h6_typography_font_family);?>;
			font-size:<?php echo esc_attr($h6_typography_font_fsize);?>;
			<?php if(!empty($h6_typography_font_weight)){ ?>
			font-weight:<?php echo esc_attr($h6_typography_font_weight);?>;
			<?php } ?>		
			<?php if(!empty($h6_typography_line_height)){ ?>
				line-height:<?php echo esc_attr($h6_typography_line_height);?>;
			<?php } ?>
		}
	<?php } ?>	


	<?php if(!empty($reobiz_option['opt-typography-menu-update']['font-family']) || !empty($reobiz_option['opt-typography-menu-update']['font-size']) || !empty($reobiz_option['opt-typography-menu-update']['font-weight']) || !empty($reobiz_option['opt-typography-menu-update']['line-height'])){ ?>
		.menu-area .navbar ul li > a,
		.sidenav .widget_nav_menu ul li a{			
			<?php if(!empty($reobiz_option['opt-typography-menu-update']['font-family'])){ ?>
			font-family:<?php echo esc_attr($reobiz_option['opt-typography-menu-update']['font-family']);?> !important;
			<?php } ?>
			<?php if(!empty($reobiz_option['opt-typography-menu-update']['font-weight'])){ ?>
			font-weight:<?php echo esc_attr($reobiz_option['opt-typography-menu-update']['font-weight']);?> !important;
			<?php } ?>	
		}
		@media only screen and (min-width: 1025px) {
			.menu-area .navbar ul li > a,
			.sidenav .widget_nav_menu ul li a{			
				<?php if(!empty($reobiz_option['opt-typography-menu-update']['font-size'])){ ?>
				font-size:<?php echo esc_attr($reobiz_option['opt-typography-menu-update']['font-size']);?> !important;
				<?php } ?>					
				<?php if(!empty($reobiz_option['opt-typography-menu-update']['line-height'])){ ?>
					line-height:<?php echo esc_attr($reobiz_option['opt-typography-menu-update']['line-height']);?> !important;
				<?php } ?>
			}
		}
	<?php } else { ?>
	.menu-area .navbar ul li > a,
	.sidenav .widget_nav_menu ul li a{
		font-weight:<?php echo esc_attr($menu_typography_weight); ?>;
		font-family:<?php echo esc_attr($menu_typography_font_family); ?>;
		font-size:<?php echo esc_attr($menu_typography_font_fsize); ?>;
	}
	<?php } ?>	

	#rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li,
	#rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li a, 
	#rs-header .toolbar-area .toolbar-contact ul li a,
	#rs-header .toolbar-area .toolbar-contact ul li, #rs-header .toolbar-area{
		color:<?php echo esc_attr($toolbar_text); ?>;
	}


	<?php
		if(!empty($reobiz_option['transparent_toolbar_text_color'])){?>
			#rs-header.header-transparent .toolbar-area .toolbar-contact ul.rs-contact-info li,
			#rs-header.header-transparent .toolbar-area .toolbar-contact ul.rs-contact-info li i,
			#rs-header.header-transparent .toolbar-area .toolbar-contact ul.rs-contact-info li a,
			#rs-header.header-style-4 .btn_quote .toolbar-sl-share ul li a
			{
				color: <?php echo esc_attr($reobiz_option['transparent_toolbar_text_color']);?>
			}
		<?php } 
	?>

	<?php
		if(!empty($reobiz_option['transparent_toolbar_link_hover_color'])){?>
			#rs-header.header-transparent .toolbar-area .toolbar-contact ul.rs-contact-info li:hover a,
			#rs-header.header-style-4 .btn_quote .toolbar-sl-share ul li a:hover{
			color: <?php echo esc_attr($reobiz_option['transparent_toolbar_link_hover_color']);?>
		}
		<?php } 
	?>	

	.rs-breadcrumbs .page-title{
		font-size: <?php echo esc_attr($reobiz_option['breadcrumb_title']); ?>
	}

	#rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li a,
	#rs-header .toolbar-area .toolbar-contact ul li a,
	#rs-header .toolbar-area .toolbar-contact ul li i,
	#rs-header .toolbar-area .toolbar-sl-share ul li a i{
		color:<?php echo esc_attr($toolbar_link); ?>;
	}

	#rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li a:hover,
	#rs-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons:hover,
	#rs-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons:before,
	#rs-header .toolbar-area .toolbar-contact ul li a:hover, 
	#rs-header .toolbar-area .toolbar-sl-share ul li a i:hover{
		color:<?php echo esc_attr($toolbar_hover); ?>;
	}
	#rs-header .toolbar-area{
		background:<?php echo esc_attr($toolbar_bg); ?>;
	}

	.mobile-menu-container div ul > li.current_page_parent > a,
	#rs-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor a, 
	#rs-header.header-transparent .menu-area .navbar ul li.current_page_item a,
	.menu-area .navbar ul.menu > li.current_page_item > a,
	.menu-area .navbar ul li.current-menu-ancestor a, .menu-area .navbar ul li.current_page_item a
	{
		color: <?php echo esc_attr( $menu_active_color ); ?>;
	}
	
	.menu-area .navbar ul > li.menu-item-has-children.hover-minimize > a:after{
		background: <?php echo esc_attr( $menu_active_color ); ?> !important;
	}	

	.menu-area .navbar ul > li.menu-item-has-children.hover-minimize:hover > a:after{
		background: <?php echo esc_attr( $menu_text_hover_color ); ?> !important;
	}

	.menu-area .navbar ul li:hover a:before{
		color: <?php echo esc_attr( $menu_active_color ); ?>;
	}

	.menu-area .navbar ul li:hover > a,	
	.mobile-menu-container div ul li a:hover,	
	#rs-header.header-style5 .header-inner.menu-sticky.sticky .menu-area .navbar ul li:hover > a,
	#rs-header.header-style-4 .menu-area .menu li:hover > a,
	#rs-header.header-style-3.header-style-2 .sticky-wrapper .menu-area .navbar ul li:hover > a
	{
		color: <?php echo esc_attr( $menu_text_hover_color ); ?>;
	}

	.menu-area .navbar ul li a,
	#rs-header .menu-responsive .sidebarmenu-search .sticky_search
	{
		color: <?php echo esc_attr( $menu_text_color ); ?>; 
	}

	#rs-header.header-transparent .menu-area.dark .navbar ul.menu > li.current_page_item > a::before, 
	#rs-header.header-transparent .menu-area.dark .navbar ul.menu > li.current_page_item > a::after, 
	#rs-header.header-transparent .menu-area.dark .navbar ul.menu > li > a::before,
	#rs-header.header-transparent .menu-area.dark .navbar ul.menu > li > a::after,
	#rs-header.header-transparent .menu-area.dark .navbar ul.menu > li > a,	
	#rs-header.header-transparent .menu-area.dark .menu-responsive .sidebarmenu-search .sticky_search .fa
	{
		color: <?php echo esc_attr( $menu_text_color ); ?> !important;
	}

	
	#rs-header.header-transparent .menu-area.dark ul.offcanvas-icon .nav-link-container .nav-menu-link div{
		background: <?php echo esc_attr( $menu_text_color ); ?> !important;
	}


	<?php if(!empty($reobiz_option['transparent_menu_text_color'])) : ?>
		#rs-header.header-transparent .menu-area .navbar ul li a, 
		#rs-header.header-transparent .menu-responsive .sidebarmenu-search .sticky_search,
		#rs-header.header-transparent .menu-responsive .sidebarmenu-search .sticky_search .fa,
		#rs-header.header-transparent .menu-area.dark .navbar ul > li > a,
		#rs-header.header-transparent .menu-area .navbar ul li:hover > a{
			color:<?php echo esc_attr($reobiz_option['transparent_menu_text_color']); ?> 
	}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['transparent_menu_text_color'])) : ?>
		#rs-header.header-style5 .header-inner .menu-area .navbar ul > li > a,
		#rs-header.header-style5 .menu-responsive .sidebarmenu-search .sticky_search{
			color:<?php echo esc_attr($reobiz_option['transparent_menu_text_color']); ?> 
		}
	<?php endif; ?>




	<?php if(!empty($reobiz_option['transparent_menu_hover_color'])) : ?>
		#rs-header.header-style5 .header-inner .menu-area .navbar ul li:hover > a{
			color:<?php echo esc_attr($reobiz_option['transparent_menu_hover_color']); ?> 
		}
	<?php endif; ?>




	<?php if(!empty($reobiz_option['transparent_menu_hover_color'])) : ?>
		#rs-header.header-style5 .header-inner .menu-area .navbar ul > li.menu-item-has-children.hover-minimize:hover > a:after{
			background:<?php echo esc_attr($reobiz_option['transparent_menu_hover_color']); ?> !important;  
		}
	<?php endif; ?>



	<?php if(!empty($reobiz_option['transparent_menu_active_color'])) : ?>
		#rs-header.header-style5 .header-inner .menu-area .navbar ul > li.menu-item-has-children.hover-minimize > a:after{
			background:<?php echo esc_attr($reobiz_option['transparent_menu_active_color']); ?> !important; 
		}
	<?php endif; ?>

	

	<?php if(!empty($reobiz_option['transparent_menu_active_color'])) : ?>
	#rs-header.header-style5 .menu-area .navbar ul > li.current-menu-ancestor > a, 
	#rs-header.header-style5 .header-inner .menu-area .navbar ul > li.current-menu-ancestor > a,
	#rs-header.header-style5 .header-inner.menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a{
			color:<?php echo esc_attr($reobiz_option['transparent_menu_active_color']); ?> !important; 
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['transparent_menu_text_color'])) : ?> 
		.header-style-4 .menu-cart-area span.icon-num, 
		.header-style5 .menu-cart-area span.icon-num
		{
			background: <?php echo esc_attr($reobiz_option['transparent_menu_text_color']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['menu_area_bg_color'])) : ?>
		#rs-header.header-style5 .header-inner .menu-area, 
		#rs-header.header-style-3.header-style-2 .sticky-wrapper .header-inner .box-layout{
		background:<?php echo esc_attr($reobiz_option['menu_area_bg_color']); ?> 
	}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['quote_bg_colros'])) : ?>
		#rs-header .btn_quote a{
			background:<?php echo esc_attr($reobiz_option['quote_bg_colros']); ?>;
			border-color:<?php echo esc_attr($reobiz_option['quote_bg_colros']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['quote_txt_colros'])) : ?>
		#rs-header .btn_quote a{
			color:<?php echo esc_attr($reobiz_option['quote_txt_colros']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['quote_hover__bg_colros'])) : ?>
		#rs-header .btn_quote a:hover,
		#rs-header .btn_quote a:after{
			background:<?php echo esc_attr($reobiz_option['quote_hover__bg_colros']); ?>;
			border-color:<?php echo esc_attr($reobiz_option['quote_hover__bg_colros']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['quote_hover_txt__colros'])) : ?>
		#rs-header .btn_quote a:hover{
			color:<?php echo esc_attr($reobiz_option['quote_hover_txt__colros']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['quote_stk_bg_colros'])) : ?>
		#rs-header .header-inner.sticky .btn_quote a{
			background:<?php echo esc_attr($reobiz_option['quote_stk_bg_colros']); ?>;
			border-color:<?php echo esc_attr($reobiz_option['quote_stk_bg_colros']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['quote_stk_txt_colros'])) : ?>
		#rs-header .header-inner.sticky .btn_quote a{
			color:<?php echo esc_attr($reobiz_option['quote_stk_txt_colros']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['quote_hover_sticky_bg_colros'])) : ?>
		#rs-header .header-inner.sticky .btn_quote a:hover{
			background:<?php echo esc_attr($reobiz_option['quote_hover_sticky_bg_colros']); ?>;
			border-color:<?php echo esc_attr($reobiz_option['quote_hover_sticky_bg_colros']); ?>;
		}
	<?php endif; ?>
	<?php if(!empty($reobiz_option['quote_hover_txt_sticky_colros'])) : ?>
		#rs-header .header-inner.sticky .btn_quote a:hover{
			color:<?php echo esc_attr($reobiz_option['quote_hover_txt_sticky_colros']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['transparent_menu_text_color'])) : ?>
		#rs-header.header-transparent .menu-area.dark ul.offcanvas-icon .nav-link-container .nav-menu-link div{
			background:<?php echo esc_attr($reobiz_option['transparent_menu_text_color']); ?> 
		}
	<?php endif; ?>

	

	<?php if(!empty($reobiz_option['offcanvas_bg_color'])) : ?>
		ul.offcanvas-icon .nav-link-container a{
			background:<?php echo esc_attr($reobiz_option['offcanvas_bg_color']); ?> 
		}
	<?php endif; ?>	

	<?php if(!empty($reobiz_option['offcanvas_bg_hover'])) : ?>
		ul.offcanvas-icon .nav-link-container a:hover{
			background:<?php echo esc_attr($reobiz_option['offcanvas_bg_hover']); ?> 
		}
	<?php endif; ?>	

	<?php if(!empty($reobiz_option['offcanvas_text_color'])) : ?>
		.nav-link-container .nav-menu-link div.dot1,
		.nav-link-container .nav-menu-link div.dot3,
		.nav-link-container .nav-menu-link div.dot5,
		.nav-link-container .nav-menu-link div.dot7,
		.nav-link-container .nav-menu-link div.dot9,
		#rs-header.header-transparent ul.offcanvas-icon .nav-link-container .nav-menu-link div, 
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div,
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div,
		#rs-header.header-transparent ul.offcanvas-icon .nav-link-container .nav-menu-link div, 
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div{
			background:<?php echo esc_attr($reobiz_option['offcanvas_text_color']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcanvas_text_color_sticky'])) : ?>
		.header-inner.sticky .nav-link-container .nav-menu-link div.dot1,
		.header-inner.sticky .nav-link-container .nav-menu-link div.dot3,
		.header-inner.sticky .nav-link-container .nav-menu-link div.dot5,
		.header-inner.sticky .nav-link-container .nav-menu-link div.dot7,
		.header-inner.sticky .nav-link-container .nav-menu-link div.dot9,
		#rs-header.header-transparent .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div, 
		#rs-header.header-style5 .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div,
		#rs-header.header-style5 .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div,
		#rs-header.header-transparent .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div, 
		#rs-header.header-style5 .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div{
			background:<?php echo esc_attr($reobiz_option['offcanvas_text_color_sticky']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcanvas_dots_secondary_color'])) : ?>
		.nav-link-container .nav-menu-link span.dot2,
		.nav-link-container .nav-menu-link span.dot4,
		.nav-link-container .nav-menu-link span.dot6,
		.nav-link-container .nav-menu-link span.dot8,
		.nav-link-container .nav-menu-link span.dot10,
		#rs-header.header-transparent ul.offcanvas-icon .nav-link-container .nav-menu-link span, 
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link span,
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link span,
		#rs-header.header-transparent ul.offcanvas-icon .nav-link-container .nav-menu-link span, 
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link span{
			background:<?php echo esc_attr($reobiz_option['offcanvas_dots_secondary_color']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcanvas_dots_secondary_color_sticky'])) : ?>
		.header-inner.sticky .nav-link-container .nav-menu-link span.dot2,
		.header-inner.sticky .nav-link-container .nav-menu-link span.dot4,
		.header-inner.sticky .nav-link-container .nav-menu-link span.dot6,
		.header-inner.sticky .nav-link-container .nav-menu-link span.dot8,
		.header-inner.sticky .nav-link-container .nav-menu-link span.dot10,
		#rs-header.header-transparent .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link span, 
		#rs-header.header-style5 .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link span,
		#rs-header.header-style5 .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link span,
		#rs-header.header-transparent .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link span, 
		#rs-header.header-style5 .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link span{
			background:<?php echo esc_attr($reobiz_option['offcanvas_dots_secondary_color_sticky']); ?> !important;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['offcanvas_close_dots_primary_color'])) : ?>
		.nav-link-container .nav-menu-link.off-open div.dot1,
		.nav-link-container .nav-menu-link.off-open div.dot3,
		.nav-link-container .nav-menu-link.off-open div.dot5,
		.nav-link-container .nav-menu-link.off-open div.dot7,
		.nav-link-container .nav-menu-link.off-open div.dot9,
		#rs-header.header-transparent ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div, 
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div,
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div,
		#rs-header.header-transparent ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div, 
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div{
			background:<?php echo esc_attr($reobiz_option['offcanvas_close_dots_primary_color']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcanvas_dots_close_secondary_color'])) : ?>
		.nav-link-container .nav-menu-link.off-open div.dot2,
		.nav-link-container .nav-menu-link.off-open div.dot4,
		.nav-link-container .nav-menu-link.off-open div.dot6,
		.nav-link-container .nav-menu-link.off-open div.dot8,
		.nav-link-container .nav-menu-link.off-open div.dot10,
		#rs-header.header-transparent ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div, 
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div,
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div,
		#rs-header.header-transparent ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div, 
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link.off-open div{
			background:<?php echo esc_attr($reobiz_option['offcanvas_dots_close_secondary_color']); ?> !important;
		}
	<?php endif; ?>



	<?php if(!empty($reobiz_option['transparent_menu_hover_color'])) : ?>
		#rs-header.header-transparent .menu-area .navbar ul > li > a:hover,
		#rs-header.header-transparent .menu-area .navbar ul li:hover > a,
		#rs-header.header-transparent .menu-area.dark .navbar ul > li:hover > a,
		#rs-header.header-style-4 .header-inner .menu-area .navbar ul li:hover a,
		#rs-header.header-style-4 .menu-area .navbar ul li:hover a:before{
			color:<?php echo esc_attr($reobiz_option['transparent_menu_hover_color']); ?> 
		}
	<?php endif; ?>




	<?php if(!empty($reobiz_option['transparent_menu_active_color'])) : ?>
		#rs-header.header-transparent .menu-area .navbar ul > li.current_page_item > a,
		#rs-header.header-style-4 .menu-area .menu > li.current-menu-ancestor > a,
		#rs-header.header-transparent .menu-area .navbar ul > li.current-menu-ancestor > a,
		#rs-header.header-style-4 .menu-area .menu > li.current_page_item > a{
			color:<?php echo esc_attr($reobiz_option['transparent_menu_active_color']); ?> !important; 
		}
	<?php endif; ?>

	#rs-header.header-transparent .menu-area .navbar ul.menu > li.current_page_item > a::before,
	#rs-header.header-transparent .menu-area .navbar ul.menu > li.current_page_item > a::after, 
	#rs-header.header-transparent .menu-area .navbar ul.menu > li > a::after{
		color:<?php echo esc_attr($reobiz_option['transparent_menu_active_color']); ?> !important; 
	}

	<?php if(!empty($reobiz_option['transparent_menu_text_color'])) : ?>		
		#rs-header.header-transparent ul.offcanvas-icon .nav-link-container .nav-menu-link div,
		#rs-header.header-style5 .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div{
			background:<?php echo esc_attr($reobiz_option['transparent_menu_text_color']); ?> 
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['drop_text_color'])) : ?>
		.menu-area .navbar ul li .sub-menu li a,
		#rs-header .menu-area .navbar ul li.mega ul li a,
		.menu-area .navbar ul > li ul.sub-menu > li.menu-item-has-children > a:before,
		#rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor > a,
		#rs-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a{
			color:<?php echo esc_attr($reobiz_option['drop_text_color']); ?> !important;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['drop_text_hover_color'])) : ?>
		.menu-area .navbar ul li ul.sub-menu li.current_page_item > a,
		.menu-area .navbar ul li .sub-menu li a:hover,
		#rs-header.header-style5 .menu-area .navbar ul > li.current_page_item ul > a,
		#rs-header .menu-area .navbar ul li.mega ul > li > a:hover,
		.menu-area .navbar ul li ul.sub-menu li:hover > a,
		.menu-area .navbar ul > li ul.sub-menu > li.menu-item-has-children:hover > a:before,
		body .header-style1 .menu-area .navbar ul li ul.sub-menu li:hover > a,
		body #rs-header .menu-area .navbar ul li.mega ul.sub-menu li a:hover,
		#rs-header.header-style5 .header-inner .menu-area .navbar ul li .sub-menu > li:hover > a,
		#rs-header.header-transparent .menu-area .navbar ul li .sub-menu li:hover > a,
		#rs-header .menu-area .navbar ul li.mega ul li a:hover,
		#rs-header.header-style-4 .menu-area .menu .sub-menu li:hover > a,
		#rs-header.header-style3 .menu-area .navbar ul li .sub-menu li:hover > a,
		#rs-header .menu-area .navbar ul li.mega ul > li.current-menu-item > a,
		.menu-sticky.sticky .menu-area .navbar ul li ul li a:hover,
		#rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor > a, #rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current_page_item > a,
		#rs-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a:hover {
			color:<?php echo esc_attr($reobiz_option['drop_text_hover_color']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['drop_text_hover_color'])) : ?>
		.menu-area .navbar ul > li ul.sub-menu > li.menu-item-has-children.hover-minimize:hover > a:after{
			background:<?php echo esc_attr($reobiz_option['drop_text_hover_color']); ?> !important;
		}
	<?php endif; ?>

	

	<?php if(!empty($reobiz_option['drop_down_bg_color'])) : ?>
		.menu-area .navbar ul li .sub-menu{
			background:<?php echo esc_attr($reobiz_option['drop_down_bg_color']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['toolbar_text_size'])) : ?>
		#rs-header .toolbar-area .toolbar-contact ul li,
		#rs-header .toolbar-area a,
		#rs-header .toolbar-area .toolbar-contact ul li i:before{
			font-size:<?php echo esc_attr($reobiz_option['toolbar_text_size']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['menu_text_trasform'])) : ?>
		.menu-area .navbar ul > li > a,
		#rs-header .menu-area .navbar ul > li.mega > ul > li > a{
			text-transform:uppercase;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['menu_text_trasform2'])) : ?>
		.menu-area .navbar ul.sub-menu  li  a{
			text-transform:uppercase !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['copyright_bg_border'])) : ?>
		.footer-bottom .container{
			border-color:<?php echo esc_attr($reobiz_option['copyright_bg_border']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['copyright_text_color'])) : ?>
		.footer-bottom .copyright p{
			color:<?php echo esc_attr($reobiz_option['copyright_text_color']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['footer_text_size'])) : ?>
		.rs-footer, .rs-footer h3, .rs-footer a, 
		.rs-footer .fa-ul li a, 
		.rs-footer .widget.widget_nav_menu ul li a{
			font-size:<?php echo esc_attr($reobiz_option['footer_text_size']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['footer_h3_size'])) : ?>
		.rs-footer h3, .rs-footer .footer-top h3.footer-title{
			font-size:<?php echo esc_attr($reobiz_option['footer_h3_size']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['footer_link_size'])) : ?>
		.rs-footer a{
			font-size:<?php echo esc_attr($reobiz_option['footer_link_size']); ?>;
		}
	<?php endif; ?>	

	<?php if(!empty($reobiz_option['footer_text_color'])) : ?>
		.rs-footer, .rs-footer .footer-top h3.footer-title, .rs-footer a, .rs-footer .fa-ul li a,
		.rs-footer .widget.widget_nav_menu ul li a,
		.rs-footer .footer-top input[type="email"]::placeholder
		{
			color:<?php echo esc_attr($reobiz_option['footer_text_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['newsletter_placeholder_text_color'])) : ?>
		body .rs-newsletter-section-wrap .mc4wp-form-fields input[type="email"]::placeholder{
			color:<?php echo esc_attr($reobiz_option['newsletter_placeholder_text_color']); ?>;
			opacity: .6;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['footer_title_color'])) : ?>
		.rs-footer .footer-top h3.footer-title
		{
			color:<?php echo esc_attr($reobiz_option['footer_title_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['footer_link_color'])) : ?>
		.rs-footer a:hover, .rs-footer .widget.widget_nav_menu ul li a:hover,
		.rs-footer .fa-ul li a:hover,
		.rs-footer .widget.widget_pages ul li a:hover, .rs-footer .widget.widget_recent_comments ul li:hover, .rs-footer .widget.widget_archive ul li a:hover, .rs-footer .widget.widget_categories ul li a:hover,
		.rs-footer .widget a:hover{
			color:<?php echo esc_attr($reobiz_option['footer_link_color']); ?>;
		}
	<?php endif; ?>

	

	<?php if(!empty($reobiz_option['foot_social_color'])) : ?>	
		ul.footer_social > li > a{
			color:<?php echo esc_attr($reobiz_option['foot_social_color']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['foot_social_hover'])) : ?>	
		ul.footer_social > li > a:hover{
			color:<?php echo esc_attr($reobiz_option['foot_social_hover']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['footer_input_bg_color'])) : ?>
		.footer-subscribe input[type=submit],
		.footer-btn-wrap .footer-btn,
		ul.footer_social li
		{
			background:<?php echo esc_attr($reobiz_option['footer_input_bg_color']); ?>
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['footer_input_hover_color'])) : ?>
		.footer-btn-wrap .footer-btn:hover,.footer-subscribe input[type=submit]:hover{
			background:<?php echo esc_attr($reobiz_option['footer_input_hover_color']); ?>;
		}
	<?php endif; ?>
	
	<?php if(!empty($reobiz_option['footer_input_border_color'])) : ?>
		.rs-footer .footer-top .mc4wp-form-fields input[type="email"]{
			border-color:<?php echo esc_attr($reobiz_option['footer_input_border_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['footer_input_text_color'])) : ?>
		.rs-footer .footer-top .mc4wp-form-fields input[type="submit"],
		.rs-footer .footer-top .mc4wp-form-fields i{
			color:<?php echo esc_attr($reobiz_option['footer_input_text_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['copyright_borders'])) : ?>
		.rs-footer .footer-bottom .container, 
		.rs-footer .footer-bottom .container-fluid, 
		.footer-subscribe .subscribe-bg{
			border-color:<?php echo esc_attr($reobiz_option['copyright_borders']); ?> 
		}
	<?php endif; ?>


	.rs-heading .title-inner .sub-text,
	.rs-services-default .services-wrap .services-item .services-icon i,	
	.rs-blog .blog-item .blog-slidermeta span.category a:hover,
	.btm-cate li a:hover,	
	.ps-navigation ul a:hover span,	
	.rs-portfolio-style5 .portfolio-item .portfolio-content a,
	.rs-services1.services-left.border_style .services-wrap .services-item .services-icon i:hover,
	.rs-services1.services-right .services-wrap .services-item .services-icon i:hover,
	.rs-galleys .galley-img .zoom-icon:hover,
	#about-history-tabs ul.tabs-list_content li:before,
	#rs-header.header-style-3 .header-inner .logo-section .toolbar-contact-style4 ul li i,
	#sidebar-services .widget.widget_nav_menu ul li.current-menu-item a,
	#sidebar-services .widget.widget_nav_menu ul li a:hover,
	.single-teams .team-inner ul li i,
	#rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor > a, 
	#rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current_page_item > a,
	rs-heading .title-inner .title,
	.team-grid-style1 .team-item .team-content1 h3.team-name a, 
	.rs-team-grid.team-style5 .team-item .normal-text .person-name a,
	.rs-team-grid.team-style4 .team-wrapper .team_desc .name a,
	.rs-team-grid.team-style4 .team-wrapper .team_desc .name .designation,	
	.contact-page1 .form-button .submit-btn i:before,	
	.woocommerce nav.woocommerce-pagination ul li span.current, 
	.woocommerce nav.woocommerce-pagination ul li a:hover,
	.single-teams .ps-informations h2.single-title,
	.single-teams .ps-informations ul li.phone a:hover, .single-teams .ps-informations ul li.email a:hover,
	.single-teams .siderbar-title,
	.single-teams .team-detail-wrap-btm.team-inner .appointment-btn a,
	body #whychoose ul.vc_tta-tabs-list li a i,
	ul.check-icon li:before,
	.rs-project-section .project-item .project-content .title a:hover,
	.subscribe-text i, .subscribe-text .title, .subscribe-text span a:hover,
	.timeline-icon,
	.rs-features-list-content li i,
	.service-carousels .services-sliders3 span.num,
	.service-readons:before,
	.rs-event-grid .events-inner-item .content-part .event-title a:hover,
	.rs_event__sidebar .rs_sidebar .rs__price strong,
	.services-sliders4:hover .services-desc h4.services-title a,	
	.rs-footer.footerlight .footer_social li a .fa,
	.rs-event-grid .events-inner-item .content-part .btn-part a,
	.single-teams .ps-informations h4.single-title,
	.rsaddon-unique-slider .blog-content .blog-footer .blog-meta i
	
	{
		color:<?php echo esc_attr($secondary_color); ?>;
	}

	.rs-event-grid .events-inner-item .content-part .rs___meta li svg path,
	.rs-event-grid .events-inner-item .content-part .btn-part a svg path,
	ul.rs__event__meta_style li .rs__event_sp_img svg path,
	.rs_event__sidebar .rs_sidebar .rs__time svg path{
		fill:<?php echo esc_attr($secondary_color); ?>;
	}
	.portfolio-slider-data .slick-next, 
	.portfolio-slider-data .slick-prev,
	.ps-navigation ul a:hover span,
	ul.chevron-right-icon li:before,
	.sidenav .fa-ul li i,
	.rs-portfolio.style2 .portfolio-slider .portfolio-item .portfolio-content h3.p-title a:hover,
	.rs-breadcrumbs .breadcrumbs-inner .cate-single .post-categories a:hover,
	.woocommerce-message::before, .woocommerce-info::before,
	.pagination-area .nav-links span.current,
	.rs-sl-social-icons a:hover,
	.rs-portfolio.vertical-slider.style4 .portfolio-slider .portfolio-item:hover .p-title a{
		color:<?php echo esc_attr($secondary_color); ?> !important;
	}

	
	.transparent-btn:hover,
	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial:after,
	.rs-portfolio-style2 .portfolio-item .portfolio-img .read_more:hover,
	.service-carousel .owl-dots .owl-dot.active,
	.service-carousel .owl-dots .owl-dot,
	.bs-sidebar.dynamic-sidebar .service-singles .menu li a:hover,
	.bs-sidebar.dynamic-sidebar .service-singles .menu li.current-menu-item a,
	.rs-footer.footerlight .footer-top .mc4wp-form-fields input[type="email"],
	.bs-sidebar .tagcloud a:hover,
	.rs-event-grid .events-inner-item .content-part .btn-part a:hover,
	.rs-blog-details .bs-info.tags a:hover,
	.single-teams .team-skill .rs-progress
	{
		border-color:<?php echo esc_attr($secondary_color); ?> !important;
	}

	body #whychoose ul.vc_tta-tabs-list li:hover:after, body #whychoose ul.vc_tta-tabs-list li.vc_active:after{
		border-top-color:<?php echo esc_attr($site_color); ?> !important;
	}
	
	.owl-carousel .owl-nav [class*="owl-"],
	html input[type="button"]:hover, input[type="reset"]:hover,
	.rs-video-2 .popup-videos:before,
	.sidenav .widget-title:before,
	.rs-team-grid.team-style5 .team-item .team-content,
	.rs-team-grid.team-style4 .team-wrapper .team_desc::before,
	.rs-team .team-item .team-social .social-icon,
	.rs-services-style4:hover .services-icon i,
	.team-grid-style1 .team-item .social-icons1 a:hover i,
	.loader__bar,
	blockquote:before,
	.rs-blog-grid .blog-img a.float-cat,
	#sidebar-services .download-btn ul li,
	.transparent-btn:hover,
	.rs-portfolio-style2 .portfolio-item .portfolio-img .read_more:hover,
	.rs-video-2 .popup-videos,
	.rs-blog-details .blog-item.style2 .category a, .rs-blog .blog-item.style2 .category a, .blog .blog-item.style2 .category a,
	.rs-blog-details .blog-item.style1 .category a, .rs-blog .blog-item.style1 .category a, .blog .blog-item.style1 .category a,	
	.icon-button a,
	.team-grid-style1 .team-item .image-wrap .social-icons1, .team-slider-style1 .team-item .image-wrap .social-icons1,
	.rs-heading.style8 .title-inner:after,
	.rs-heading.style8 .description:after,
	#slider-form-area .form-area input[type="submit"],
	.services-style-5 .services-item:hover .services-title,
	#sidebar-services .rs-heading .title-inner h3:before,	
	#rs-contact .contact-address .address-item .address-icon::before,
	.team-slider-style4 .team-carousel .team-item:hover,
	#rs-header.header-transparent .btn_quote a:hover,
	body .whychoose ul.vc_tta-tabs-list li.vc_active:before,
	body .whychoose ul.vc_tta-tabs-list li:hover:before,
	.bs-sidebar .tagcloud a:hover,
	.rs-heading.style2:after,
	.rs-blog-details .bs-info.tags a:hover,
	.mfp-close-btn-in .mfp-close,
	.top-services-dark .rs-services .services-style-7.services-left .services-wrap .services-item,
	.single-teams .team-inner h3:before,
	.single-teams .team-detail-wrap-btm.team-inner,
	::selection,
	.rs-heading.style2 .title:after,
	body #whychoose ul.vc_tta-tabs-list li:hover:before, body #whychoose ul.vc_tta-tabs-list li.vc_active:before,
	.readon:hover,
	.rs-blog-details #reply-title:before,
	.rs-cta .style2 .title-wrap .exp-title:after,
	.rs-project-section .project-item .project-content .p-icon,
	.proces-item.active:after, .proces-item:hover:after,
	.subscribe-text .mc4wp-form input[type="submit"],
	.rs-footer #wp-calendar th,
	body.wpb-js-composer .vc_tta.vc_general .vc_tta-panel.vc_active .vc_tta-panel-title a,
	body.wpb-js-composer .vc_tta.vc_general .vc_tta-panel .vc_tta-panel-title:hover a,
	.service-carousel.services-dark .services-sliders2 .services-desc:before, 
	.service-carousels.services-dark .services-sliders2 .services-desc:before,
	.rs-services .services-style-9 .services-wrap:after,
	.close-search,
	.nav-link-container .nav-menu-link div,
	.portfolio-slider-data .slick-dots li.slick-active, 
	.portfolio-slider-data .slick-dots li:hover,
	.rs-portfolio.vertical-slider.style4 .portfolio-slider .portfolio-item .p-title a:before,
	.rs-team-grid.team-style4 .team-wrapper:hover .team_desc,
	.single-portfolios .ps-informations h3,
	.rs-heading.style6 .title-inner .sub-text:after,
	.bs-sidebar.dynamic-sidebar .service-singles .menu li.current-menu-item a,
	.bs-sidebar.dynamic-sidebar .service-singles .menu li a:hover,
	.single-teams .team-skill .rs-progress .progress-bar,
	.woocommerce div.product .woocommerce-tabs ul.tabs li:hover,
	.woocommerce span.onsale,
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
	.bs-sidebar .widget-title:after,
	.rs-event-grid .events-inner-item .content-part .rs__date,
	.menu-wrap-off .inner-offcan .nav-link-container .close-button span,
	.sidenav .offcanvas_social li a i,	
	.rs-event-grid .events-inner-item .content-part .btn-part a:hover,
	.rs_event__sidebar .rs_sidebar .book__btn,
	.rs-addon-slider .slick-dots li button, .rs-addon-slider .slick-dots li.slick-active button,
	.rs-addon-slider .slick-dots li button:hover
	{
		background:<?php echo esc_attr($secondary_color); ?>;
	}
	.woocommerce span.onsale{
		background:<?php echo esc_attr($secondary_color); ?> !important;
	}
	
	.portfolio-slider-data .slick-dots li{
		background:<?php echo esc_attr($site_color); ?>;
	}
	
	.rs-blog .blog-item .blog-meta .blog-date i, .full-blog-content .author i,
	.full-blog-content .btm-cate .tag-line i,
	.full-blog-content .blog-title a:hover,
	.bs-sidebar .recent-post-widget .post-desc span i,
	.single-post .single-posts-meta li span i,
	.single-posts-meta .tag-line i,
	.single-post .single-posts-meta .fa-comments-o:before{
		color:<?php echo esc_attr($secondary_color); ?> !important;
	}
	#cl-testimonial .testimonial-slide7 .single-testimonial:after, #cl-testimonial .testimonial-slide7 .single-testimonial:before{
		border-right-color: <?php echo esc_attr($secondary_color); ?>;
		border-right: 30px solid <?php echo esc_attr($secondary_color); ?>;
	}
	#cl-testimonial .testimonial-slide7 .single-testimonial{
		border-left-color: <?php echo esc_attr($secondary_color); ?>;
	}
	.team-slider-style1 .team-item .team-content1 h3.team-name a:hover,
	.rs-service-grid .service-item .service-content .service-button .readon.rs_button:hover:before,
	.rs-heading.style6 .title-inner .sub-text,
	.rs-heading.style7 .title-inner .sub-text,
	.rs-portfolio-style1 .portfolio-item .portfolio-content .pt-icon-plus:before,
	.team-grid-style1 .team-item .team-content1 h3.team-name a, 
	.service-readons:hover,
	.service-readons:before:hover
	{
		color:<?php echo esc_attr($secondary_color); ?> !important;
	}	

	.rs-services-style3 .bg-img a,
	.rs-services-style3 .bg-img a:hover,
	.comment-respond .form-submit #submit, .wp-block-file .wp-block-file__button
	{
		background:<?php echo esc_attr($secondary_color); ?>;
		border-color: <?php echo esc_attr($secondary_color); ?>;
	}
	.rs-service-grid .service-item .service-content .service-button .readon.rs_button:hover{
		border-color: <?php echo esc_attr($secondary_color); ?>;;
		color: <?php echo esc_attr($secondary_color); ?>;
	}

	.woocommerce div.product p.price ins, .woocommerce div.product span.price ins,
	.woocommerce div.product p.price, .woocommerce div.product span.price, 
	.cd-timeline__content .short-info h2, .cd-timeline__content .short-info h3{
		color: <?php echo esc_attr($secondary_color); ?>!important;
	}

	.team-grid-style3 .team-img .team-img-sec:before,
	#loading,	
	#sidebar-services .bs-search button:hover, 
	.team-slider-style3 .team-img .team-img-sec:before,
	.rs-blog-details .blog-item.style2 .category a:hover, 
	.rs-blog .blog-item.style2 .category a:hover, 
	.blog .blog-item.style2 .category a:hover,
	.icon-button a:hover,
	.rs-blog-details .blog-item.style1 .category a:hover, 
	.rs-blog .blog-item.style1 .category a:hover, 
	.blog .blog-item.style1 .category a:hover,
	.skew-style-slider .revslider-initialised::before,
	.top-services-dark .rs-services .services-style-7.services-left .services-wrap .services-item:hover,
	.icon-button a:hover,
	.fullwidth-services-box .services-style-2:hover,
	#rs-header.header-style-4 .logo-section:before,
	.post-meta-dates,
	 .woocommerce ul.products li.product .price ins,
	#scrollUp i,
	.cd-timeline__img.cd-timeline__img--picture,
	.rs-portfolio-style4 .portfolio-item .portfolio-img:before,
	.rs-portfolio-style3 .portfolio-item .portfolio-img:before,
	.rs-skill-bar .skillbar .skillbar-bar
	{
		background: <?php echo esc_attr($secondary_color); ?>;
	}

	html input[type="button"], input[type="reset"], input[type="submit"]{
		background: <?php echo esc_attr($secondary_color); ?>;
	}


	.round-shape:before{
		border-top-color: <?php echo esc_attr($site_color); ?>;
		border-left-color: <?php echo esc_attr($site_color); ?>;
	}
	.round-shape:after{
		border-bottom-color: <?php echo esc_attr($site_color); ?>;
		border-right-color: <?php echo esc_attr($site_color); ?>;
	}

	#sidebar-services .download-btn,
	.rs-video-2 .overly-border,
	.single-teams .ps-informations ul li.social-icon i,
	.woocommerce-error, .woocommerce-info, .woocommerce-message{
		border-color:<?php echo esc_attr($secondary_color); ?> !important;
	}

	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial:before,	
	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial:after{
		border-right-color: <?php echo esc_attr($site_color); ?> !important;
		border-top-color: transparent !important;
	}

	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial{
		border-left-color:<?php echo esc_attr($site_color); ?> !important;
	}
	.portfolio-filter button:hover, 
	.portfolio-filter button.active,
	.team-grid-style1 .team-item .team-content1 h3.team-name a:hover,
	#cl-testimonial .testimonial-slide7 .right-content i,
	.testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial .cl-author-info li:first-child,
	.rs-blog-details .bs-img .blog-date span.date, .rs-blog .bs-img .blog-date span.date, .blog .bs-img .blog-date span.date, .rs-blog-details .blog-img .blog-date span.date, .rs-blog .blog-img .blog-date span.date, .blog .blog-img .blog-date span.date,	
	.rs-portfolio-style5 .portfolio-item .portfolio-content a:hover,
	#cl-testimonial.cl-testimonial9 .single-testimonial .cl-author-info li,
	#cl-testimonial.cl-testimonial9 .single-testimonial .image-testimonial p i,
	.rs-services1.services-left.border_style .services-wrap .services-item .services-icon i,
	.rs-services1.services-right .services-wrap .services-item .services-icon i,
	#rs-skills .vc_progress_bar h2,
	.rs-portfolio.style2 .portfolio-slider .portfolio-item .portfolio-img .portfolio-content .categories a:hover,
	.woocommerce ul.products li.product .price,
	.woocommerce ul.products li.product .price ins,
	#rs-services-slider .menu-carousel .heading-block h4 a:hover,
	.rs-team-grid.team-style5 .team-item .normal-text .person-name a:hover,
	body .vc_tta-container .tab-style-left .vc_tta-panel-body h3,
	ul.stylelisting li:before, body .vc_tta-container .tab-style-left .vc_tta-tabs-container .vc_tta-tabs-list li a i,
	.service-readons:hover, .service-readons:hover:before,
	.single-teams .designation-info,
	ul.unorder-list li:before,
	.rs-footer .widget.widget_nav_menu ul li a:before, 
	.rs-footer .widget.widget_nav_menu ul ul.sub-menu li a::before, 
	.rs-footer .widget.widget_pages ul ul.sub-menu li a::before, 
	.rs-footer .widget.widget_recent_comments ul ul.sub-menu li a::before, 
	.rs-footer .widget.widget_archive ul ul.sub-menu li a::before, 
	.rs-footer .widget.widget_categories ul ul.sub-menu li a::before, 
	.rs-footer .widget.widget_pages ul li a:before, 
	.rs-footer .widget.widget_archive ul li a:before, 
	.rs-footer .widget.widget_categories ul li a:before
	{
		color: <?php echo esc_attr($secondary_color); ?>;
	}
	.rs-team-grid.team-style4 .team-wrapper .team_desc:before,
	.rs-team-grid.team-style5 .team-item .normal-text .team-text:before,
	.rs-services3 .slick-arrow,
	.single-teams .ps-image .ps-informations,
	.slidervideo .slider-videos,
	.slidervideo .slider-videos:before,
	.service-readon,
	.service-carousel .owl-dots .owl-dot.active,	
	.rs-blog-details .bs-img .categories .category-name a, .rs-blog .bs-img .categories .category-name a, .blog .bs-img .categories .category-name a, .rs-blog-details .blog-img .categories .category-name a, .rs-blog .blog-img .categories .category-name a, .blog .blog-img .categories .category-name a{
		background: <?php echo esc_attr($secondary_color); ?>;
	}

	.rs-blog-details .bs-img .blog-date:before, .rs-blog .bs-img .blog-date:before, .blog .bs-img .blog-date:before, .rs-blog-details .blog-img .blog-date:before, .rs-blog .blog-img .blog-date:before, .blog .blog-img .blog-date:before{		
		border-bottom: 0 solid;
    	border-bottom-color: <?php echo esc_attr($secondary_color); ?>;
    	border-top: 80px solid transparent;
    	border-right-color: <?php echo esc_attr($secondary_color); ?>;
    }

    .border-image.small-border .vc_single_image-wrapper:before{
	    border-bottom: 250px solid <?php echo esc_attr($secondary_color); ?>;
	}

	.border-image.small-border .vc_single_image-wrapper:after{
		border-top: 250px solid <?php echo esc_attr($secondary_color); ?>;
	}

	.border-image .vc_single_image-wrapper:before,
	.team-grid-style3 .team-img:before, .team-slider-style3 .team-img:before{
		border-bottom-color: <?php echo esc_attr($secondary_color); ?>;   			
	}

	.border-image .vc_single_image-wrapper:after,
	.team-grid-style3 .team-img:after, .team-slider-style3 .team-img:after{
		border-top-color: <?php echo esc_attr($secondary_color); ?>;   	
	}

	.woocommerce-info,
	.timeline-alter .divider:after,
	body.single-services blockquote,
	#rs-header.header-style-3 .header-inner .box-layout,	
	.rs-porfolio-details.project-gallery .file-list-image .p-zoom:hover
	{
		border-color: <?php echo esc_attr($secondary_color); ?>;  
	}
	
	.slidervideo .slider-videos i,
	.list-style li::before,
	.slidervideo .slider-videos i:before,
	#team-list-style .team-name a,
	.rs-blog .blog-item .blog-button a:hover, a{
		color: <?php echo esc_attr($link_color); ?>;
	}

	.rs-blog .blog-meta .blog-title a:hover
	.about-award a:hover,
	#team-list-style .team-name a:hover,
	#team-list-style .team-social i:hover,
	#team-list-style .social-info .phone a:hover,
	.woocommerce ul.products li .woocommerce-loop-product__title a:hover,
	#rs-contact .contact-address .address-item .address-text a:hover,
	.bs-sidebar .recent-post-widget .post-desc a:hover,
	.rs-blog .blog-meta .blog-title a:hover,
	.rs-blog .blog-item .blog-meta .categories a:hover,
	.bs-sidebar ul a:hover,a:hover{
		color: <?php echo esc_attr($link_hover_color); ?>;
	}

	.about-award a:hover{
		border-color: <?php echo esc_attr($link_hover_color); ?>;
	}

	
	.rs-blog-details .bs-img .categories .category-name a:hover, .rs-blog .bs-img .categories .category-name a:hover, .blog .bs-img .categories .category-name a:hover, .rs-blog-details .blog-img .categories .category-name a:hover, .rs-blog .blog-img .categories .category-name a:hover, .blog .blog-img .categories .category-name a:hover,
	#rs-header.header-style-4 .logo-section .times-sec{
		background: <?php echo esc_attr($secondary_color); ?>;
	}

	.readon,
	.rs-heading.style3 .description:after,
	.team-grid-style1 .team-item .social-icons1 a i, .team-slider-style1 .team-item .social-icons1 a i,
	.owl-carousel .owl-nav [class*="owl-"]:hover,
	button, html input[type="button"], input[type="reset"],
	.rs-service-grid .service-item .service-img:before,
	.rs-service-grid .service-item .service-img:after,
	#rs-contact .contact-address .address-item .address-icon::after,
	.rs-services1.services-left.border_style .services-wrap .services-item .services-icon i:hover,
	.rs-services1.services-right .services-wrap .services-item .services-icon i:hover,
	.rs-service-grid .service-item .service-content::before,
	.rs-services-style4 .services-item .services-icon i,
	#rs-services-slider .img_wrap:before,
	#rs-services-slider .img_wrap:after,
	.rs-galleys .galley-img:before,
	.woocommerce ul.products li a.fa, 
	.woocommerce ul.products li .glyph-icon,
	.woocommerce-MyAccount-navigation ul li:hover,
	.woocommerce-MyAccount-navigation ul li.is-active,
	.rs-galleys .galley-img .zoom-icon,
	.team-grid-style2 .team-item-wrap .team-img .team-img-sec::before,
	#about-history-tabs .vc_tta-tabs-container ul.vc_tta-tabs-list .vc_tta-tab .vc_active a, #about-history-tabs .vc_tta-tabs-container ul.vc_tta-tabs-list .vc_tta-tab.vc_active a,
	.services-style-5 .services-item .icon_bg,
	#cl-testimonial.cl-testimonial10 .slick-arrow,
	.contact-sec .contact:before, .contact-sec .contact:after,
	.contact-sec .contact2:before,
	.team-grid-style2 .team-item-wrap .team-img .team-img-sec:before,
	.rs-porfolio-details.project-gallery .file-list-image:hover .p-zoom:hover,	
	.team-slider-style2 .team-item-wrap .team-img .team-img-sec:before,
	.rs-team-grid.team-style5 .team-item .normal-text .social-icons a i:hover
	{
		background: <?php echo esc_attr($secondary_color); ?>;
	}

	#rs-header.header-style-4 .logo-section .times-sec:after{
		border-bottom-color: <?php echo esc_attr($secondary_color); ?>;
	}
	
	.footer-bottom .container-fluid{
		border-color:<?php echo esc_attr($secondary_color); ?>;
	}

	#about-history-tabs .vc_tta-tabs-container ul.vc_tta-tabs-list .vc_tta-tab a:hover,	
	body .vc_tta-container .tab-style-left .vc_tta-tabs-container .vc_tta-tabs-list li.vc_active a
	{
		background: <?php echo esc_attr($secondary_color); ?> !important;
	}

	.full-video .rs-services1.services-left .services-wrap .services-item .services-icon i,
	#cl-testimonial.cl-testimonial9 .single-testimonial .testimonial-image img,
	.rs-services1.services-left.border_style .services-wrap .services-item .services-icon i,
	.rs-services1.services-right .services-wrap .services-item .services-icon i,
	#cl-testimonial.cl-testimonial10 .slick-arrow,
	.team-grid-style2 .team-item-wrap .team-img img, .team-slider-style2 .team-item-wrap .team-img img,
	.contact-sec .wpcf7-form .wpcf7-text, .contact-sec .wpcf7-form .wpcf7-textarea{
		border-color: <?php echo esc_attr($secondary_color); ?> !important;
	}

	<?php 
		if(!empty($reobiz_option['link_hover_text_color'])){
			?>
			#rs-services-slider .item-thumb .owl-dot.service_icon_style.active .tile-content a, 
			#rs-services-slider .item-thumb .owl-dot.service_icon_style:hover .tile-content a,
			.team-grid-style2 .appointment-bottom-area .app_details:hover a, .team-slider-style2 .appointment-bottom-area .app_details:hover a{
				color: <?php echo esc_attr($reobiz_option['link_hover_text_color']); ?> !important;	
			}
		<?php
		}
	?>
	


	<?php 
		if(!empty($reobiz_option['onepage_menu_text_active_color'])){
			?>
			body #rs-header .menu-area .navbar ul li a.rs-active-section{
				color: <?php echo esc_attr($reobiz_option['onepage_menu_text_active_color']); ?> !important;	
			}
		<?php
		} else { ?>
			#rs-header.header-style5 .stuck.sticky .menu-area .navbar ul > li.active a,
			#rs-header .menu-area .navbar ul > li.active a{
				color:<?php echo esc_attr($secondary_color); ?> !important;
			}
		<?php }	?>


	<?php 
		if(!empty($reobiz_option['stikcy_menu_text_color'])){
			?>
			#rs-header.header-style-4 .header-inner.sticky .nav-link-container .nav-menu-link div{
				background: <?php echo esc_attr($reobiz_option['stikcy_menu_text_color']); ?>;	
			}
		<?php
		}
	?>


	<?php 
		if(!empty($reobiz_option['stikcy_menu_text_color'])){
			?>
			#rs-header.header-style5 .menu-sticky.sticky .sticky_search i:before,
			#rs-header .menu-sticky.sticky .menu-area .navbar ul li a,
			#rs-header.header-style-4 .header-inner.sticky .sidebarmenu-search i,
			#rs-header.header-style-4 .header-inner.sticky .btn_quote .toolbar-sl-share ul li a{
				color: <?php echo esc_attr($reobiz_option['stikcy_menu_text_color']); ?>;
			}
		<?php
		}
	?>	

	<?php 
		if(!empty($reobiz_option['stikcy_menu_text_active_color'])){
			?>
			 #rs-header.header-transparent .menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a,
			#rs-header .menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a,
			#rs-header .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a,
			#rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current-menu-item page_item a,
			#rs-header.header-style-4 .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a,
			#rs-header.header-style-4 .menu-sticky.sticky .menu-area .menu > li.current-menu-ancestor > a{
				color: <?php echo esc_attr($reobiz_option['stikcy_menu_text_active_color']); ?> !important;	
			}
		<?php
		}
	?>

	<?php if(!empty($reobiz_option['sticky_drop_down_bg_color'])) : ?>
		.menu-sticky.sticky .menu-area .navbar ul li .sub-menu{
			background:<?php echo esc_attr($reobiz_option['sticky_drop_down_bg_color']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['sticky_menu_text_hover_color'])) : ?>
		#rs-header.header-style-4 .header-inner.sticky .nav-link-container .nav-menu-link:hover div{
			background:<?php echo esc_attr($reobiz_option['sticky_menu_text_hover_color']); ?>;
		}
	<?php endif; ?>

	<?php 
		if(!empty($reobiz_option['sticky_menu_text_hover_color'])){
			?>
			#rs-header.header-style5 .menu-sticky.sticky .sticky_search:hover i:before,
			#rs-header .menu-sticky.sticky .menu-area .navbar ul > li:hover > a,
			#rs-header.header-style-4 .header-inner.sticky .btn_quote .toolbar-sl-share ul > li a:hover,
			#rs-header.header-style-4 .header-inner.sticky .sidebarmenu-search i:hover,			
			#rs-header .menu-sticky.sticky .menu-area .navbar ul li ul.submenu > li.current-menu-ancestor > a{
				color: <?php echo esc_attr($reobiz_option['sticky_menu_text_hover_color']); ?> !important;	
			}
		<?php
		}
	?>

	<?php
		if(!empty($reobiz_option['toolbar_link_color'])){?>
			#rs-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons{
			color: <?php echo esc_attr($reobiz_option['toolbar_link_color']);?>
		}
		<?php } 
	?>	

	<?php 
		if(!empty($reobiz_option['stikcy_drop_text_color'])){
			?>
			#rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li a{
				color: <?php echo esc_attr($reobiz_option['stikcy_drop_text_color']); ?> !important;	
			}
		<?php
		}
	?>

	<?php 
		if(!empty($reobiz_option['sticky_drop_text_hover_color'])){
			?>
			#rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li a:hover,
			#rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current-menu-item page_item a,
			#rs-header .menu-sticky.sticky .menu-area .navbar ul  li .sub-menu li.current_page_item > a
			{
				color: <?php echo esc_attr($reobiz_option['sticky_drop_text_hover_color']); ?> !important;	
			}
		<?php
		}
	?>	

	<?php 
		if(!empty($reobiz_option['footer_bg_color'])){?>
		.rs-footer{
			background: <?php echo esc_attr($reobiz_option['footer_bg_color']); ?>;
			background-size: cover;
		}
		<?php
	}
?>
	


	<?php if(!empty($reobiz_option['foot_top_border_color'])) : ?>
		#rs-footer .footer-top{
			border-color:<?php echo esc_attr($reobiz_option['foot_top_border_color']); ?>;		
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['btn_bg_color'])) : ?>
		.woocommerce button.button.alt,
		.comment-respond .form-submit #submit,
		.wp-block-file .wp-block-file__button{
			border-color:<?php echo esc_attr($reobiz_option['btn_bg_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['btn_bg_hover'])) : ?>
		.comment-respond .form-submit #submit:hover{
			background:<?php echo esc_attr($reobiz_option['btn_bg_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['btn_bg_hover'])) : ?>
		.woocommerce button.button.alt:hover,
		.woocommerce button.button:hover{
			background:<?php echo esc_attr($reobiz_option['btn_bg_hover']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['toolbar_bg_skew_color'])) : ?>		
		#rs-header.header-style7 .toolbar-area:after{
			background:<?php echo esc_attr($reobiz_option['toolbar_bg_skew_color']); ?>;			
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['btn_bg_hover_border'])) : ?>
		.woocommerce #respond input#submit.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce .wc-forward:hover, .woocommerce a.button.alt:hover, .woocommerce a.button:hover, .woocommerce button.button.alt:hover, .woocommerce button.button:hover, .woocommerce input.button.alt:hover, .woocommerce input.button:hover,
		.comment-respond .form-submit #submit:hover{
			border-color:<?php echo esc_attr($reobiz_option['btn_bg_hover_border']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['btn_text_color'])) : ?>
		.submit-btn .wpcf7-submit,
		.comment-respond .form-submit #submit{
			color:<?php echo esc_attr($reobiz_option['btn_text_color']); ?>;			
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['btn_bg_color'])) : ?>
		.woocommerce button.button,
		.woocommerce button.button.alt,  
		.woocommerce ul.products li a.button,
		.woocommerce .wc-forward,
		.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce .wc-forward, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
		.woocommerce a.button, 
		.menu-sticky.sticky .quote-button,
		#rs-header.header-style-3 .btn_quote .quote-button,
		.wp-block-file .wp-block-file__button,
		.wp-block-button__link,
		.comments-area .comment-list li.comment .reply a{
			background:<?php echo esc_attr($reobiz_option['btn_bg_color']); ?>;
		}
	<?php endif; ?>	

	<?php if(!empty($reobiz_option['btn_text_color'])) : ?>
		.readon,
		.woocommerce button.button,
		.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce .wc-forward, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
		.woocommerce a.button,
		.woocommerce .wc-forward,
		.woocommerce button.button.alt,   
		.woocommerce ul.products li a.button,
		.menu-sticky.sticky .quote-button:hover,
		#rs-header.header-style-3 .btn_quote .quote-button{
			color:<?php echo esc_attr($reobiz_option['btn_text_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['btn_txt_hover_color'])) : ?>
		.comment-respond .form-submit #submit:hover,
		.submit-btn .wpcf7-submit:hover{
			color:<?php echo esc_attr($reobiz_option['btn_txt_hover_color']); ?> !important;
		}
	<?php endif; ?>



	<?php if(!empty($reobiz_option['btn_bg_hover_color'])) : ?>
		.comments-area .comment-list li.comment .reply a:hover,
		.woocommerce a.button:hover,
		.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, 
		.woocommerce .wc-forward:hover, .woocommerce button.button:hover, 
		.woocommerce input.button, .woocommerce #respond input#submit.alt:hover, 
		.woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, 
		.woocommerce button.button.alt:hover, 
		.woocommerce button.button:hover,
		.woocommerce ul.products li:hover a.button,
		 .menu-sticky.sticky .quote-button:hover,
		 #rs-header.header-transparent .btn_quote a:hover,
		 #rs-header.header-style-3 .btn_quote .quote-button:hover,
		 .readon:before,
		 .submit-btn:before,
		 .submit-btn:hover,
		 .woocommerce #respond input#submit:before, .woocommerce a.button:before, 
		 .woocommerce .wc-forward:before, .woocommerce button.button:before, 
		 .woocommerce input.button:before, .woocommerce #respond input#submit.alt:before, 
		 .woocommerce a.button.alt:before, .woocommerce button.button.alt:before, .woocommerce input.button.alt:before{
			background:<?php echo esc_attr($reobiz_option['btn_bg_hover_color']); ?>;
			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['container_size'])) : ?>
		@media only screen and (min-width: 1300px) {
			.container,
			.footer-bottom .container{
				max-width:<?php echo esc_attr($reobiz_option['container_size']); ?>;
			}
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['container_size'])) : ?>
		@media only screen and (min-width: 1300px) {
			.elementor-section.elementor-section-boxed > .elementor-container{
				max-width:<?php echo esc_attr($reobiz_option['container_size']); ?> !important;
			}
		}
	<?php endif; ?>



	<?php if(!empty($reobiz_option['logo-height-mobile'])) : ?>
		@media only screen and (max-width: 991px) {
			#rs-header .logo-area a img{
				max-height:<?php echo esc_attr($reobiz_option['logo-height-mobile']); ?> !important;
			}
		}
	<?php endif; ?>

	

	<?php if(!empty($reobiz_option['menu_item_gap'])) : ?>
		.menu-area .navbar ul li{
			padding-left:<?php echo esc_attr($reobiz_option['menu_item_gap']); ?>;
			padding-right:<?php echo esc_attr($reobiz_option['menu_item_gap']); ?>;
		}
	<?php endif; ?>		

	<?php if(!empty($reobiz_option['footer-bottom-gap'])) : ?>
		footer#rs-footer .footer-top{
			padding-bottom:<?php echo esc_attr($reobiz_option['footer-bottom-gap']); ?>;
		}
	<?php endif; ?>	

	<?php if(!empty($reobiz_option['footer-top-gap'])) : ?>
		footer#rs-footer{
			padding-top:<?php echo esc_attr($reobiz_option['footer-top-gap']); ?>;
		}
	<?php endif; ?>	

	<?php if(!empty($reobiz_option['menu_item_gap_sticky'])) : ?>
		#rs-header .menu-sticky.sticky .menu-area .navbar ul li{
			padding-left:<?php echo esc_attr($reobiz_option['menu_item_gap_sticky']); ?> !important;
			padding-right:<?php echo esc_attr($reobiz_option['menu_item_gap_sticky']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['menu_item_gap2'])) : ?>
		#rs-header .menu-sticky.sticky .menu-area .navbar ul > li,
		#rs-header .menu-sticky.sticky .menu-cart-area,
		#rs-header .menu-sticky.sticky .menu-responsive .sidebarmenu-search .sticky_search{
			padding-top:<?php echo esc_attr($reobiz_option['menu_item_gap2']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['menu_item_gap3'])) : ?>
		#rs-header .menu-sticky.sticky .menu-area .navbar ul > li,
		#rs-header .menu-sticky.sticky .menu-cart-area,
		#rs-header .menu-sticky.sticky .menu-responsive .sidebarmenu-search .sticky_search{
			padding-bottom:<?php echo esc_attr($reobiz_option['menu_item_gap3']); ?>;
		}
	<?php endif; ?>



	<?php if(!empty($reobiz_option['menu_item_gap2_sticky'])) : ?>
		.menu-area .navbar ul > li,
		.menu-cart-area,
		#rs-header .menu-responsive .sidebarmenu-search .sticky_search{
			padding-top:<?php echo esc_attr($reobiz_option['menu_item_gap2_sticky']); ?> !important;
		}
		body #rs-header .menu-area .navbar ul li ul.sub-menu li{
		    padding-bottom: 0 !important;
		    padding-top: 0 !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['menu_item_gap3_sticky'])) : ?>
		.menu-area .navbar ul > li,
		.menu-cart-area,
		#rs-header .menu-responsive .sidebarmenu-search .sticky_search{
			padding-bottom:<?php echo esc_attr($reobiz_option['menu_item_gap3_sticky']); ?> !important;
		}
		body #rs-header .menu-area .navbar ul li ul.sub-menu li{
		    padding-bottom: 0 !important;
		    padding-top: 0 !important;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['breadcrumb__title_text_color'])) : ?>
		body.blog .rs-breadcrumbs .page-title, .rs-breadcrumbs ul li *, 
		body.single-post .rs-breadcrumbs .page-title, .rs-breadcrumbs ul li *, 
		body.blog .rs-breadcrumbs ul li.trail-begin a::before, 
		body.single-post .rs-breadcrumbs ul li.trail-begin a::before, 
		body.blog .rs-breadcrumbs ul li, 
		body.single-post .rs-breadcrumbs ul li, 
		body.blog .rs-breadcrumbs .breadcrumbs-title .current-item, 
		body.single-post .rs-breadcrumbs .breadcrumbs-title .current-item, 
		body.blog .rs-breadcrumbs .breadcrumbs-title span a span,
		body.single-post .rs-breadcrumbs .breadcrumbs-title span a span
		{
			color:<?php echo esc_attr($reobiz_option['breadcrumb__title_text_color']); ?> !important;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['breadcrumb__title_text_color'])) : ?>
		body.blog .rs-breadcrumbs .breadcrumbs-title span a::after, 
		body.single-post .rs-breadcrumbs .breadcrumbs-title span a::after, 
		body.blog .rs-breadcrumbs .breadcrumbs-title span a::before,
		body.single-post .rs-breadcrumbs .breadcrumbs-title span a::before
		{
			background:<?php echo esc_attr($reobiz_option['breadcrumb__title_text_color']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['banner__top__gap'])) : ?>
		body.blog .rs-breadcrumbs .breadcrumbs-inner,
		body.single-post .rs-breadcrumbs .breadcrumbs-inner,
		body.single-post #rs-header.header-style-3 .rs-breadcrumbs .breadcrumbs-inner,
		body.blog #rs-header.header-style-3 .rs-breadcrumbs .breadcrumbs-inner{
			padding-top:<?php echo esc_attr($reobiz_option['banner__top__gap']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['banner__btm__gap'])) : ?>
		body.blog .rs-breadcrumbs .breadcrumbs-inner,
		body.single-post .rs-breadcrumbs .breadcrumbs-inner,
		body.single-post #rs-header.header-style-3 .rs-breadcrumbs .breadcrumbs-inner,
		body.blog #rs-header.header-style-3 .rs-breadcrumbs .breadcrumbs-inner{
			padding-bottom:<?php echo esc_attr($reobiz_option['banner__btm__gap']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['dropdown_menu_item_gap'])) : ?>
		.menu-area .navbar ul li ul.sub-menu li a{
			padding-left:<?php echo esc_attr($reobiz_option['dropdown_menu_item_gap']); ?>;
			padding-right:<?php echo esc_attr($reobiz_option['dropdown_menu_item_gap']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['dropdown_menu_item_gap2'])) : ?>
		.menu-area .navbar ul li ul.sub-menu{
			padding-top:<?php echo esc_attr($reobiz_option['dropdown_menu_item_gap2']); ?>;
			padding-bottom:<?php echo esc_attr($reobiz_option['dropdown_menu_item_gap2']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['dropdown_menu_item_separate'])) : ?>
		.menu-area .navbar ul li ul.sub-menu li a{
			padding-top:<?php echo esc_attr($reobiz_option['dropdown_menu_item_separate']); ?>;
			padding-bottom:<?php echo esc_attr($reobiz_option['dropdown_menu_item_separate']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['meaga_menu_item_gap'])) : ?>
		#rs-header .menu-area .navbar ul > li.mega > ul{
			padding-left:<?php echo esc_attr($reobiz_option['meaga_menu_item_gap']); ?>;
			padding-right:<?php echo esc_attr($reobiz_option['meaga_menu_item_gap']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['mega_menu_item_gap2'])) : ?>
		#rs-header .menu-area .navbar ul > li.mega > ul{
			padding-top:<?php echo esc_attr($reobiz_option['mega_menu_item_gap2']); ?>;
			padding-bottom:<?php echo esc_attr($reobiz_option['mega_menu_item_gap2']); ?>;
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['mega_menu_item_separate'])) : ?>
		#rs-header .menu-area .navbar ul li.mega ul.sub-menu li a{
			padding-top:<?php echo esc_attr($reobiz_option['mega_menu_item_separate']); ?>;
			padding-bottom:<?php echo esc_attr($reobiz_option['mega_menu_item_separate']); ?>;
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['breadcrumb_bg_color'])) : ?>
		.rs-breadcrumbs{
			background:<?php echo esc_attr($reobiz_option['breadcrumb_bg_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['breadcrumb_seperator_color'])) : ?>
		.rs-breadcrumbs .breadcrumbs-title span a:after, .rs-breadcrumbs .breadcrumbs-title span a:before{
			background:<?php echo esc_attr($reobiz_option['breadcrumb_seperator_color']); ?>;			
		}
	<?php endif; ?>
	
	<?php if(!empty($reobiz_option['offcan_bgs_color'])) : ?>
		.menu-wrap-off
		{
			background:<?php echo esc_attr($reobiz_option['offcan_bgs_color']); ?> !important;			
		}
	<?php endif; ?>	


	<?php if(!empty($reobiz_option['offcanvas_line_color'])) : ?>
		#rs-header .nav-link-container .nav-menu-link div.dot-hum{
			background:<?php echo esc_attr($reobiz_option['offcanvas_line_color']); ?> !important;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcanvas_closede_color'])) : ?>
		.menu-wrap-off .inner-offcan .nav-link-container .close-button.styles2{
			color:<?php echo esc_attr($reobiz_option['offcanvas_closede_color']); ?> !important;			
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['offcanvas_close_color'])) : ?>
		.sidenav li.nav-link-container a span.dot1,
		.sidenav li.nav-link-container a span.dot3,
		.sidenav li.nav-link-container a span.dot5,
		.sidenav li.nav-link-container a span.dot7,
		.sidenav li.nav-link-container a span.dot9,
		.menu-wrap-off .inner-offcan .nav-link-container .close-button span.dot1,
		.menu-wrap-off .inner-offcan .nav-link-container .close-button span.dot3,
		.menu-wrap-off .inner-offcan .nav-link-container .close-button span.dot5,
		.menu-wrap-off .inner-offcan .nav-link-container .close-button span.dot7,
		.menu-wrap-off .inner-offcan .nav-link-container .close-button span.dot9
		{
			background:<?php echo esc_attr($reobiz_option['offcanvas_close_color']); ?> !important;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcanvas_close_hover_color'])) : ?>
		.sidenav li.nav-link-container:hover a.close-button span,
		.menu-wrap-off .inner-offcan .nav-link-container .close-button:hover span{
			background:<?php echo esc_attr($reobiz_option['offcanvas_close_hover_color']); ?> !important;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcan_bgs_color'])) : ?>
		.menu-wrap-off .off-nav-layer{
			background:<?php echo esc_attr($reobiz_option['offcan_bgs_color']); ?>;			
		}
	<?php endif; ?>


	<?php if(!empty($reobiz_option['offcan_txt_color'])) : ?>
		.sidenav p, .sidenav{
			color:<?php echo esc_attr($reobiz_option['offcan_txt_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcan_txt_color'])) : ?>
		body .sidenav .widget .widget-title{
			color:<?php echo esc_attr($reobiz_option['offcan_txt_color']); ?> !important;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcan_link_color'])) : ?>
		.sidenav .widget_nav_menu ul li a,
		.sidenav.offcanvas-icon .rs-offcanvas-right a,
		.sidenav .menu > li.menu-item-has-children:before,
		.sidenav a{
			color:<?php echo esc_attr($reobiz_option['offcan_link_color']); ?>;			
		}
	<?php endif; ?>
	

	<?php if(!empty($reobiz_option['offcan_link_social_color'])) : ?>
		ul.sidenav .menu > li.menu-item-has-children:before, 
		.sidenav .offcanvas_social li a i{
			color:<?php echo esc_attr($reobiz_option['offcan_link_social_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcan_border_color'])) : ?>
		.sidenav.offcanvas-icon .rs-offcanvas-right{
			border-color:<?php echo esc_attr($reobiz_option['offcan_border_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcan_link_hovers_color'])) : ?>
		.sidenav .widget_nav_menu ul li a:hover, 
		.sidenav a:hover{
			color:<?php echo esc_attr($reobiz_option['offcan_link_hovers_color']); ?>;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['offcan_link_bg_color'])) : ?>
		.sidenav .offcanvas_social li a i,
		ul.sidenav .menu > li.menu-item-has-children::before{
			background:<?php echo esc_attr($reobiz_option['offcan_link_bg_color']); ?>;			
		}
	<?php endif; ?>

	<?php 
	  	  		if(!empty($footer_icon_color)): ?>
		  	.rs-footer .fa-ul li i:before,
		  	.rs-footer .fa-ul li i,
		  	 .rs-footer .recent-post-widget .show-featured .post-desc i{			  	  		
	  	  			color:<?php echo esc_attr($footer_icon_color);?> !important;
		  	  	}
			<?php endif;?>


	<?php if(!empty($reobiz_option['breadcrumb_text_color'])) : ?>
		.rs-breadcrumbs .page-title,
		.rs-breadcrumbs ul li *,
		.rs-breadcrumbs ul li.trail-begin a:before,
		.rs-breadcrumbs ul li,
		.rs-breadcrumbs .breadcrumbs-title .current-item,
		.rs-breadcrumbs .breadcrumbs-title span a span{
			color:<?php echo esc_attr($reobiz_option['breadcrumb_text_color']); ?> !important;			
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['breadcrumb_top_gap']) && !empty($reobiz_option['breadcrumb_bottom_gap'])) : ?>
		.rs-breadcrumbs .breadcrumbs-inner,
		#rs-header.header-style-6 .rs-breadcrumbs .breadcrumbs-inner,
		#rs-header.header-style-3 .rs-breadcrumbs .breadcrumbs-inner{
			padding-top:<?php echo esc_attr($reobiz_option['breadcrumb_top_gap']); ?>;			
			padding-bottom:<?php echo esc_attr($reobiz_option['breadcrumb_bottom_gap']); ?>;			
	}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['breadcrumb_top_gap_mobile']) && !empty($reobiz_option['breadcrumb_bottom_gap_mobile'])) : ?>
		@media only screen and (max-width: 991px) {
			.rs-breadcrumbs .breadcrumbs-inner,
			#rs-header.header-style-6 .rs-breadcrumbs .breadcrumbs-inner,
				#rs-header.header-style-3 .rs-breadcrumbs .breadcrumbs-inner{
				padding-top:<?php echo esc_attr($reobiz_option['breadcrumb_top_gap_mobile']); ?>;			
				padding-bottom:<?php echo esc_attr($reobiz_option['breadcrumb_bottom_gap_mobile']); ?>;			
			}
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['blog_bg_color'])) : ?>
		body.single-post, body.blog, body.archive, body.single-services, body.single-mp-event{
			background:<?php echo esc_attr($reobiz_option['blog_bg_color']); ?>;					
		}
	<?php endif; ?>

		<?php if(!empty($reobiz_option['preloader_text_color'])) : ?>
		.spinner{
			background-color: <?php echo esc_attr($reobiz_option['preloader_text_color']); ?> !important; 
		}		
	<?php endif; ?>

	<?php if(!empty($reobiz_option['preloader_bg_color'])) : ?>
		#reobiz-load{
			background: <?php echo esc_attr($reobiz_option['preloader_bg_color']); ?> !important;  
		}
	<?php endif; ?>

	<?php if(!empty($reobiz_option['text_color'])) : ?>
		.page-error.coming-soon .countdown-inner .time_circles div,
		.page-error.coming-soon .content-area h3,
		.page-error.coming-soon .content-area h3 span,
		.page-error.coming-soon .follow-us-sbuscribe p,
		.page-error.coming-soon .follow-us-sbuscribe ul li a,
		.page-error.coming-soon .countdown-inner .time_circles div h4,
		.page-error.coming-soon .countdown-inner .time_circles div span{
			color: <?php echo esc_attr($reobiz_option['text_color']); ?>
		}
		.page-error.coming-soon .countdown-inner .time_circles div{
			border-color: <?php echo esc_attr($reobiz_option['circle_border_color']); ?>
		}

	<?php endif; ?>

	<?php if(!empty($reobiz_option['circle_primary_color'])) : ?>
		
		.page-error.coming-soon .countdown-inner .time_circles div{
			background:  <?php echo esc_attr($reobiz_option['circle_primary_color']);?>
		}		
		
	<?php endif; ?>	
	
	<?php if(!empty($reobiz_option['toolbar_ic_color'])) : ?>
		body #rs-header .toolbar-area .toolbar-contact ul li i{
			color:<?php echo esc_attr($reobiz_option['toolbar_ic_color']); ?> !important;
		}
	<?php endif; ?>
	
	<?php if(!empty($reobiz_option['toolbar_soci_ic_color'])) : ?>
		body #rs-header .toolbar-area .toolbar-sl-share ul li a i{
			color:<?php echo esc_attr($reobiz_option['toolbar_soci_ic_color']); ?> !important;
		}
	<?php endif; ?>

</style>

<?php
	}
	 if ( class_exists( 'WooCommerce' ) && is_shop() || class_exists( 'WooCommerce' ) && is_product_tag()  || class_exists( 'WooCommerce' ) && is_product_category()  ) {

			$reobiz_shop_id        = get_option( 'woocommerce_shop_page_id' );
			
			$padding_top           = get_post_meta($reobiz_shop_id, 'content_top', true);
			$padding_bottom        = get_post_meta($reobiz_shop_id, 'content_bottom', true);
			
			$padding_top_footer    = get_post_meta($reobiz_shop_id, 'content_top_footer', true);
			$padding_bottom_footer = get_post_meta($reobiz_shop_id, 'content_bottom_footer', true);

  		if($padding_top != '' || $padding_bottom != '' || $padding_top_footer != '' || $padding_bottom_footer != ''){
	  	?>
	  	  <style>
	  	  	.main-contain #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?> !important;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?> !important;
	  	  	}

	  	  	#rs-footer{
	  	  		<?php if(!empty($padding_top_footer)): ?>padding-top:<?php echo esc_attr($padding_top_footer); endif;?> !important;	  	  		
	  	  	}	  	  	
	  	  	#rs-footer .footer-top{	  	  		
	  	  		<?php if(!empty($padding_bottom_footer)): ?>padding-bottom:<?php echo esc_attr($padding_bottom_footer); endif;?> !important;
	  	  	}

	  	  </style>	
	  	  <?php
	 	}
	}
	elseif(is_home() && !is_front_page() || is_home() && is_front_page()){
		$padding_top    = get_post_meta(get_queried_object_id(), 'content_top', true);
		$padding_bottom = get_post_meta(get_queried_object_id(), 'content_bottom', true);

		$padding_top_footer    = get_post_meta(get_queried_object_id(), 'content_top_footer', true);
		$padding_bottom_footer = get_post_meta(get_queried_object_id(), 'content_bottom_footer', true);

  		if($padding_top != '' || $padding_bottom != '' || $padding_top_footer != '' || $padding_bottom_footer != ''){
	  	?>
	  	  <style>
	  	  	.main-contain #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?> !important;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?> !important;
	  	  	}

	  	  	#rs-footer{
	  	  		<?php if(!empty($padding_top_footer)): ?>padding-top:<?php echo esc_attr($padding_top_footer); endif;?> !important;	  	  		
	  	  	}	  	  	
	  	  	#rs-footer .footer-top{	  	  		
	  	  		<?php if(!empty($padding_bottom_footer)): ?>padding-bottom:<?php echo esc_attr($padding_bottom_footer); endif;?> !important;
	  	  	}

	  	  </style>	
	  	<?php
	  }
  }
  	else{
		$padding_top    = get_post_meta(get_the_ID(), 'content_top', true);
		$padding_bottom = get_post_meta(get_the_ID(), 'content_bottom', true);

		$padding_top_footer    = get_post_meta(get_the_ID(), 'content_top_footer', true);
		$padding_bottom_footer = get_post_meta(get_the_ID(), 'content_bottom_footer', true);

  		if($padding_top != '' || $padding_bottom != '' || $padding_top_footer != '' || $padding_bottom_footer != ''){
	  	?>
	  	  <style>
	  	  	.main-contain #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?> !important;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?> !important;
	  	  	}	  	  	

	  	  	#rs-footer{
	  	  		<?php if(!empty($padding_top_footer)): ?>padding-top:<?php echo esc_attr($padding_top_footer); endif;?> !important;	  	  		
	  	  	}	  	  	
	  	  	#rs-footer .footer-top{	  	  		
	  	  		<?php if(!empty($padding_bottom_footer)): ?>padding-bottom:<?php echo esc_attr($padding_bottom_footer); endif;?> !important;
	  	  	}
	  	  	
	  	  </style>	
	  	<?php
	  }
  	}



	$menu_texts_colors              = get_post_meta(get_the_ID(), 'menu-text-color', true);
	$menu_texts_hover_colors        = get_post_meta(get_the_ID(), 'menu-text-hover-color', true);
	$topbar_area_bg                 = get_post_meta(get_the_ID(), 'topbar-area-bg', true);
	$topbar_text_color              = get_post_meta(get_the_ID(), 'topbar-text-color', true);
	$topbar_link_hovercolors        = get_post_meta(get_the_ID(), 'topbar_link_hovercolor', true);
	$topbar_border_color            = get_post_meta(get_the_ID(), 'topbar-border-color', true);
	$search_icon_color              = get_post_meta(get_the_ID(), 'search_icon_color', true);
	$cart_icon_color                = get_post_meta(get_the_ID(), 'cart_icon_color', true);
	$footer_btn_text_colors         = get_post_meta(get_the_ID(), 'footer_btn_text_color', true);
	
	$menu_bg_sbg                    = get_post_meta(get_the_ID(), 'menu-type-bg', true);
	$menu_border_colors             = get_post_meta(get_the_ID(), 'menu_border_color', true);
	$menu_bg_dropdowncolors         = get_post_meta(get_the_ID(), 'menu_bg_dropdowncolor', true);
	$menu_text_dropdowncolors       = get_post_meta(get_the_ID(), 'menu_text_dropdowncolor', true);
	
	
	$menu_sticky_bgcolors           = get_post_meta(get_the_ID(), 'menu_sticky_bgcolor', true);
	$menu_sticky_txtcolors          = get_post_meta(get_the_ID(), 'menu_sticky_txtcolor', true);
	$menu_sticky_txt_hovercolors    = get_post_meta(get_the_ID(), 'menu_sticky_txt_hovercolor', true);
	
	
	
	$header_hamburger_colors           = get_post_meta(get_the_ID(), 'head_hamburger_color', true);
	$header_hamburger_colors2          = get_post_meta(get_the_ID(), 'head_hamburger_colors2', true);
	$footer_title_color                = get_post_meta(get_the_ID(), 'footer_title_color', true);
	$footer_links_colors               = get_post_meta(get_the_ID(), 'footer_link_colorss', true);
	$footer_arrows_color               = get_post_meta(get_the_ID(), 'footer_in_bg_color', true);
	$footer_top_border_color           = get_post_meta(get_the_ID(), 'footer_top_border_color', true);
	$sticky_hamburger_color            = get_post_meta(get_the_ID(), 'sticky_hamburgers_color', true);
	$sticky_hamburgers_secondary_color = get_post_meta(get_the_ID(), 'sticky_hamburgers_secondary_color', true);
	$copyright_border_color            = get_post_meta(get_the_ID(), 'copyright_border', true);
	$footer_primary_hover              = get_post_meta(get_the_ID(), 'footer_primary_hover_color', true);
	$footer_border_color               = get_post_meta(get_the_ID(), 'footer_border_color', true);
	$footer_all_is_colors              = get_post_meta(get_the_ID(), 'footer_all_icon_colors', true);
	$footer_socials_bg_colorss         = get_post_meta(get_the_ID(), 'footer_socials_bg_colors', true);
	$footer_socials_ic_colors          = get_post_meta(get_the_ID(), 'footer_socials_icon_colors', true);
	
	$footer_txt_colors                 = get_post_meta(get_the_ID(), 'footer_texts_color', true);
	$footer_in_icon_colors             = get_post_meta(get_the_ID(), 'footer_in_icon_color', true);
	$footer_btn_bg_colors              = get_post_meta(get_the_ID(), 'footer_btn_bg_color', true);
	$primary_colors                    = get_post_meta(get_the_ID(), 'primary-colors', true);
	
	$quote_button_bg_colors            = get_post_meta(get_the_ID(), 'quote_button_bg_color', true);
	$quote_button_colors               = get_post_meta(get_the_ID(), 'quote_button_color', true);
	$quote_button_bg_hover_colors      = get_post_meta(get_the_ID(), 'quote_button_bg_hover_color', true);
	$quote_button_hover_colors         = get_post_meta(get_the_ID(), 'quote_button_hover_color', true);
	$menu_text_hover_dropdowncolors    = get_post_meta(get_the_ID(), 'menu_text_hover_dropdowncolor', true);

	$quote_button_bg_colord            = get_post_meta(get_the_ID(), 'quote_button_bg_colord', true);
	$quote_button_colord               = get_post_meta(get_the_ID(), 'quote_button_colord', true);
	$quote_button_bg_hover_colord      = get_post_meta(get_the_ID(), 'quote_button_bg_hover_colord', true);
	$quote_button_hover_colord         = get_post_meta(get_the_ID(), 'quote_button_hover_colord', true);

	$menu_item_top    = get_post_meta(get_the_ID(), 'menu_item_top', true);
	$menu_item_bottom = get_post_meta(get_the_ID(), 'menu_item_bottom', true);

	if( empty($reobiz_option['enable_global'])) :

	
	?>

	  	<style>

	  		<?php 
	  		if(!empty($footer_links_colors)): ?>
	  			body .rs-footer a, 
	  			body .rs-footer .fa-ul li a, 
	  			body .rs-footer .widget.widget_nav_menu ul li a{
	  				color:<?php echo esc_attr($footer_links_colors);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  	  		if(!empty($footer_arrows_color)): ?>
		  	  	body .footer-subscribe input[type="submit"]{			  	  		
	  	  			background:<?php echo esc_attr($footer_arrows_color);?>;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($menu_border_colors)): ?>
		  	  	body #rs-header.header-style-3 .header-inner .box-layout{			  	  		
	  	  			border-color:<?php echo esc_attr($menu_border_colors);?>;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($menu_item_top)): ?>
		  	  	.menu-area .navbar ul > li{			  	  		
	  	  			padding-top:<?php echo esc_attr($menu_item_top);?>;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($menu_item_bottom)): ?>
		  	  	.menu-area .navbar ul > li{			  	  		
	  	  			padding-bottom:<?php echo esc_attr($menu_item_bottom);?>;
		  	  	}
			<?php endif;?>


	  		<?php 
	  	  		if(!empty($footer_in_icon_colors)): ?>
		  	  	body .footer-subscribe .paper-plane:before{			  	  		
	  	  			color:<?php echo esc_attr($footer_in_icon_colors);?>;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($footer_btn_bg_colors)): ?>
		  	  	body .footer-btn-wrap .footer-btn,
		  	  	body ul.footer_social li{			  	  		
	  	  			background:<?php echo esc_attr($footer_btn_bg_colors);?>;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($footer_btn_text_color)): ?>
		  	  	body .footer-btn-wrap .footer-btn,
		  	  	body .rs-footer .widget ul li .fa{			  	  		
	  	  			color:<?php echo esc_attr($footer_btn_text_color);?>;
		  	  	}
			<?php endif;?>			

	  		<?php 
	  	  		if(!empty($menu_bg_dropdowncolors)): ?>
		  	  	body .menu-area .navbar ul li ul.sub-menu{			  	  		
	  	  			background:<?php echo esc_attr($menu_bg_dropdowncolors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($primary_colors)): ?>
	  	  		.woocommerce a.button, .woocommerce .wc-forward,
	  	  		#rs-header.header-style7 .menu-cart-area:before,
	  	  		#rs-header.header-style7 .toolbar-area:after,	
		  	  	body #scrollUp i, body .spinner,
		  	  	.mfp-close-btn-in .mfp-close,
		  	  	#rs-header .sticky_form,
		  	  	.close-search,
		  	  	body .rs-addon-slider .slick-dots li button,
		  	  	.sidenav .offcanvas_social li a i{			  	  		
	  	  			background:<?php echo esc_attr($primary_colors);?> !important;
		  	  	}
			<?php endif;?>
	  		<?php 
	  	  		if(!empty($primary_colors)): ?>
	  	  		.rs-testimonial-dots-style2 .slick-arrow:hover:before,	
	  	  		#rs-header.header-style7 .toolbar-area .toolbar-contact ul li i,	
	  	  		.rs-portfolio-slider.slider-style-5 .rs-addon-slider .slick-arrow:hover:before,	
		  	  	body .rsaddon-unique-slider .blog-content .blog-footer .blog-meta i,		  	  	
		  	  	.rs-portfolio-style3 .portfolio-item .portfolio-content h4 a:hover,
		  	  	.sidenav .fa-ul li i::before		  	  	{			  	  		
	  	  			color:<?php echo esc_attr($primary_colors);?> !important;
		  	  	}
			<?php endif;?>
	  		<?php 
	  	  		if(!empty($primary_colors)): ?>
	  	  		.woocommerce a.button, .woocommerce .wc-forward{			  	  		
	  	  			border-color:<?php echo esc_attr($primary_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($menu_sticky_bgcolors)): ?>
		  	  	body #rs-header .menu-sticky.sticky .menu-area, 
		  	  	body #rs-header.header-style-3 .header-inner.sticky .box-layout,
		  	  	body #rs-header.header-style-3 .header-inner.sticky,
		  	  	body #rs-header.header-style-3.header-style-2 .sticky-wrapper .header-inner.sticky .box-layout{  		
	  	  			background:<?php echo esc_attr($menu_sticky_bgcolors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($menu_sticky_txtcolors)): ?>
	  	  		#rs-header.header-style-6 .header-inner.sticky .rs-contact-location .contact-inf .phone-line, #rs-header.header-style-6 .header-inner.sticky .rs-contact-location .contact-inf a,
	  	  		#rs-header.header-style-6 .header-inner.sticky .rs-contact-location i.phone-icon:before,	
		  	  	body #rs-header .menu-sticky.sticky .menu-area .navbar ul li a, 
		  	  	body #rs-header.header-style-4 .header-inner.sticky .menu-cart-area i, 
		  	  	body #rs-header.header-style5 .stuck.sticky .menu-area .navbar ul > li.active > a, 
		  	  	body #rs-header.header-style5 .stuck.sticky .menu-area .navbar ul > li:hover > a, 
		  	  	body #rs-header.header-style-4 .header-inner.sticky .sidebarmenu-search i,
		  	  	body #rs-header.header-style-4 .header-inner.sticky .btn_quote .toolbar-sl-share ul li a{
	  	  			color:<?php echo esc_attr($menu_sticky_txtcolors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($quote_button_bg_colord)): ?>
		  	  	body #rs-header .header-inner.sticky .btn_quote a{			  	  		
	  	  			background:<?php echo esc_attr($quote_button_bg_colord);?> !important;
	  	  			border-color:<?php echo esc_attr($quote_button_bg_colord);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($quote_button_colord)): ?>
		  	  	body #rs-header .header-inner.sticky .btn_quote a{			  	  		
	  	  			color:<?php echo esc_attr($quote_button_colord);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($quote_button_bg_hover_colord)): ?>
		  	  	body #rs-header .header-inner.sticky .btn_quote a:hover{			  	  		
	  	  			background:<?php echo esc_attr($quote_button_bg_hover_colord);?> !important;
	  	  			border-color:<?php echo esc_attr($quote_button_bg_hover_colord);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($quote_button_hover_colord)): ?>
		  	  	body #rs-header .header-inner.sticky .btn_quote a:hover{			  	  		
	  	  			color:<?php echo esc_attr($quote_button_hover_colord);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_all_is_colors)): ?>
		  	  	body .rs-footer .fa-ul li i:before,
		  	  	body .rs-footer .recent-post-widget .show-featured .post-desc i{			  	  		
	  	  			color:<?php echo esc_attr($footer_all_is_colors);?> !important;
		  	  	}
			<?php endif;?>




	  		<?php 
	  	  		if(!empty($menu_sticky_txt_hovercolors)): ?>
	  	  		#rs-header.header-style-6 .header-inner.sticky .rs-contact-location .contact-inf a:hover,
	  	  		#rs-header.header-transparent .menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a, #rs-header .menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a, #rs-header .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a, #rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current-menu-item page_item a, #rs-header.header-style-4 .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a, #rs-header.header-style-4 .menu-sticky.sticky .menu-area .menu > li.current-menu-ancestor > a,
	  	  		#rs-header.header-style5 .menu-area .navbar ul > li.current-menu-ancestor > a, #rs-header.header-style5 .header-inner .menu-area .navbar ul > li.current-menu-ancestor > a, #rs-header.header-style5 .header-inner.menu-sticky.sticky .menu-area .navbar ul > li.current-menu-ancestor > a,
	  	  		body #rs-header.header-style5 .stuck.sticky .menu-area .navbar ul > li.active > a, 
	  	  		body #rs-header.header-style5 .stuck.sticky .menu-area .navbar ul > li:hover > a, 
	  	  		#rs-header .menu-sticky.sticky .menu-area .navbar ul > li.current_page_item > a,
		  	  	#rs-header .menu-sticky.sticky .menu-area .navbar ul > li:hover > a, #rs-header.header-style-4 .header-inner.sticky .btn_quote .toolbar-sl-share ul > li a:hover, #rs-header.header-style-4 .header-inner.sticky .menu-cart-area i:hover, #rs-header.header-style-4 .header-inner.sticky .sidebarmenu-search i:hover, #rs-header .menu-sticky.sticky .menu-area .navbar ul li ul.submenu > li.current-menu-ancestor > a{
	  	  			color:<?php echo esc_attr($menu_sticky_txt_hovercolors);?> !important;
		  	  	}
			<?php endif;?>

			
			<?php 
	  	  		if(!empty($menu_sticky_txt_hovercolors)): ?>
		  	  	body #rs-header.header-style5 .header-inner.menu-sticky.stuck.sticky .navbar ul > li.menu-item-has-children.hover-minimize:hover > a:after,
		  	  	body #rs-header .header-inner.menu-sticky.stuck.sticky .navbar ul > li.menu-item-has-children.hover-minimize > a:after
		  	  	{			  	  		
	  	  			background:<?php echo esc_attr($menu_sticky_txt_hovercolors);?> !important;
		  	  	}
			<?php endif;?>


	  		<?php 
	  	  		if(!empty($menu_text_dropdowncolors)): ?>
		  	  	body .menu-area .navbar ul > li ul.sub-menu li > a,

		  	  	body #rs-header .menu-area .navbar ul li.mega ul li a, 
		  	  	body #rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor > a, 
		  	  	body #rs-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a,

		  	  	body #rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li a{
	  	  			color:<?php echo esc_attr($menu_text_dropdowncolors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($menu_text_hover_dropdowncolors)): ?>
	  	  		body #rs-header.header-style-4 .menu-area .navbar ul > li ul.sub-menu li.current_page_item a,
	  	  		body #rs-header .menu-area .navbar ul > li ul.sub-menu li.current_page_item a,
		  	  	body #rs-header.single-header.header-style5 .menu-area .navbar ul li ul.sub-menu li > a:hover,
		  	  	body #rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li a:hover,
		  	  	body #rs-header.header-style-4 .header-inner .menu-area .navbar ul > li:hover > a{
	  	  			color:<?php echo esc_attr($menu_text_hover_dropdowncolors);?> !important;
		  	  	}
			<?php endif;?>



	  		<?php 
	  	  		if(!empty($topbar_area_bg)): ?>
		  	  	body #rs-header .toolbar-area{			  	  		
	  	  			background:<?php echo esc_attr($topbar_area_bg);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($topbar_text_color)): ?>
		  	  	body #rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li a, 
		  	  	body #rs-header .toolbar-area .toolbar-contact ul li a, 
		  	  	body #rs-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons,
		  	  	body #rs-header.header-style5 .toolbar-area .opening,
		  	  	body #rs-header .toolbar-area .toolbar-contact ul li i, 
		  	  	body #rs-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons::before,
		  	  	body #rs-header .toolbar-area .toolbar-sl-share ul li a i{			  	  		
	  	  			color:<?php echo esc_attr($topbar_text_color);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($topbar_link_hovercolors)): ?>
		  	  	body #rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li a:hover, 
		  	  	body #rs-header .toolbar-area .toolbar-contact ul li a:hover, 
		  	  	body #rs-header .toolbar-area .toolbar-contact ul li i:hover, 
		  	  	body #rs-header .toolbar-area .toolbar-sl-share ul li a i:hover{			  	  		
	  	  			color:<?php echo esc_attr($topbar_link_hovercolors);?> !important;
		  	  	}
			<?php endif;?>


	  		<?php 
	  	  		if(!empty($topbar_border_color)): ?>
		  	  	body #rs-header .toolbar-area .toolbar-contact ul li,
		  	  	body #rs-header.header-style5 .toolbar-area,
		  	  	body #rs-header .toolbar-area .opening,
		  	  	body #rs-header.header-style5 .toolbar-area .opening{			  	  		
	  	  			border-color:<?php echo esc_attr($topbar_border_color);?> !important;
		  	  	}
			<?php endif;?>


	  		<?php 
	  	  		if(!empty($menu_texts_colors)): ?>
		  	  	body .menu-area .navbar ul > li > a,
		  	  	#rs-header.header-style-6 .rs-contact-location i.phone-icon:before,
		  	  	#rs-header.header-style-6 .rs-contact-location .contact-inf a, 
		  	  	#rs-header.header-style-6 .rs-contact-location .contact-inf .phone-line,
		  	  	body #rs-header.header-style-3 .rs-contact-location i.phone-icon::before,
		  	  	body #rs-header.header-style-3 .rs-contact-location .contact-inf a,
		  	  	body #rs-header .sticky_search i::before,
		  	  	body #rs-header.header-style5 .sticky_search i::before{			  	  		
	  	  			color:<?php echo esc_attr($menu_texts_colors);?> !important;
		  	  	}
			<?php endif;?>
			

	  		<?php 
	  	  		if(!empty($menu_texts_hover_colors)): ?>
		  	  	#rs-header.header-style-6 .rs-contact-location .contact-inf a:hover, 
		  	  	body .menu-area .navbar ul > li:hover > a,
		  	  	#rs-header.header-style5 .menu-area .navbar ul > li.current_page_item ul > a, 
		  	  	#rs-header .menu-area .navbar ul li.mega ul > li > a:hover, 
		  	  	.menu-area .navbar ul li ul.sub-menu li:hover > a, 
		  	  	body #rs-header.header-style5 .stuck.sticky .menu-area .navbar ul > li.active a, 
		  	  	body #rs-header .menu-area .navbar ul > li.active a,
		  	  	#rs-header .menu-area .navbar ul li.mega ul li a:hover, 
		  	  	body .menu-area .navbar ul > li.current-menu-ancestor > a,
		  	  	#rs-header.header-style5 .menu-area .navbar ul > li.current-menu-ancestor > a, #rs-header.header-style5 .header-inner .menu-area .navbar ul > li.current-menu-ancestor > a, 
		  	  	#rs-header .menu-area .navbar ul li.mega ul > li.current-menu-item > a,  
		  	  	#rs-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a:hover,
		  	  	body #rs-header.header-style-4 .menu-area .menu > li.current_page_item > a,
		  	  	body #rs-header.header-style-3 .rs-contact-location .contact-inf a:hover,
		  	  	body #rs-header .menu-area .menu > li.current_page_item > a
		  	  	{			  	  		
	  	  			color:<?php echo esc_attr($menu_texts_hover_colors);?> !important;
		  	  	}
			<?php endif;?>				

	  		<?php 
	  	  		if(!empty($menu_texts_hover_colors)): ?>
		  	  	body #rs-header.header-style5 .header-inner .menu-area .navbar ul > li.menu-item-has-children.hover-minimize:hover > a:after,
		  	  	body #rs-header .menu-area .navbar ul > li.menu-item-has-children.hover-minimize > a:after
		  	  	{			  	  		
	  	  			background:<?php echo esc_attr($menu_texts_hover_colors);?> !important;
		  	  	}
			<?php endif;?>			

	  		<?php 
	  	  		if(!empty($footer_socials_bg_colorss)): ?>
		  	  	body #rs-footer ul.footer_social li a
		  	  	{			  	  		
	  	  			background:<?php echo esc_attr($footer_socials_bg_colorss);?> !important;
		  	  	}
			<?php endif;?>	

	  		<?php 
	  	  		if(!empty($footer_socials_ic_colors)): ?>
		  	  	body #rs-footer ul.footer_social li a
		  	  	{			  	  		
	  	  			color:<?php echo esc_attr($footer_socials_ic_colors);?> !important;
		  	  	}
			<?php endif;?>			


	  		<?php 
	  	  		if(!empty($quote_button_bg_colors)): ?>
		  	  	body #rs-header .btn_quote a{			  	  		
	  	  			background:<?php echo esc_attr($quote_button_bg_colors);?> !important;
	  	  			border-color:<?php echo esc_attr($quote_button_bg_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($quote_button_colors)): ?>
		  	  	body #rs-header .btn_quote a{			  	  		
	  	  			color:<?php echo esc_attr($quote_button_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($quote_button_bg_hover_colors)): ?>
		  	  	body #rs-header .btn_quote a:hover{			  	  		
	  	  			background:<?php echo esc_attr($quote_button_bg_hover_colors);?> !important;
	  	  			border-color:<?php echo esc_attr($quote_button_bg_hover_colors);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($quote_button_hover_colors)): ?>
		  	  	body #rs-header .btn_quote a:hover{			  	  		
	  	  			color:<?php echo esc_attr($quote_button_hover_colors);?> !important;
		  	  	}
			<?php endif;?>
			
	  		<?php 
	  	  		if(!empty($search_icon_color)): ?>
		  	  	body #page #rs-header .sticky_search i:before{			  	  		
	  	  			color:<?php echo esc_attr($search_icon_color);?> !important;
		  	  	}
			<?php endif;?>

	  		<?php 
	  	  		if(!empty($cart_icon_color)): ?>
		  	  	.menu-cart-area i{			  	  		
	  	  			color:<?php echo esc_attr($cart_icon_color);?> !important;
		  	  	}
			<?php endif;?>


			<?php 
	  	  		if(!empty($header_hamburger_colors)): ?>

	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot2,
	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot4,
	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot6,
	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot8,
	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot10,

		  	  		body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot2,
		  	  		body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot4,
		  	  		body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot6,
		  	  		body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot8,
		  	  		body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot10,
	  	  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot2, 
	  	  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot4, 
	  	  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot6, 
	  	  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot8, 
	  	  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot10,
	  		  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot2,
	  		  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot4,
	  		  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot6,
	  		  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot8,
	  		  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot10,
	  		  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot2,
	  		  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot4,
	  		  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot6,
	  		  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot8,
	  		  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot10,
	  		  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot2,
	  		  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot4,
	  		  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot6,
	  		  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot8,
	  		  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot10{
	  	  				background:<?php echo esc_attr($header_hamburger_colors);?> !important;
		  	  		}
			<?php endif;?>

			<?php 
	  	  		if(!empty($header_hamburger_colors2)): ?>
	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot1,
	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot3,
	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot5,
	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot7,
	  	  			body.page-template-page-single .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot9,

	  	  			body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot1,
	  	  			body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot3,
	  	  			body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot5,
	  	  			body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot7,
	  	  			body .offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot9,
		  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot1, 
		  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot3, 
		  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot5, 
		  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot7, 
		  	  		body #rs-header.header-style5 .offcanvas-icon .nav-link-container .nav-menu-link div.dot9,
			  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot1,
			  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot3,
			  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot5,
			  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot7,
			  	  	body #rs-header .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot9,
			  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot1,
			  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot3,
			  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot5,
			  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot7,
			  	  	body .rs-header .offcanvas-icon .nav-link-container .nav-menu-link div.dot9,
			  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot1,
			  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot3,
			  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot5,
			  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot7,
			  	  	body #rs-header.header-style5 ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot9
			  	  	{
		  	  			background:<?php echo esc_attr($header_hamburger_colors2);?> !important;
			  	  	}
			<?php endif;?>




			<?php 
	  	  		if(!empty($sticky_hamburger_color)): ?>
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot2,
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot4,
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot6,
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot8,
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot10,

	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot2,
	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot4,
	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot6,
	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot8,
	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot10,
	  	  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot2, 
	  	  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot4, 
	  	  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot6, 
	  	  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot8, 
	  	  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot10,
	  		  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot2,
	  		  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot4,
	  		  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot6,
	  		  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot8,
	  		  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot10,
	  		  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot2,
	  		  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot4,
	  		  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot6,
	  		  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot8,
	  		  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot10,
	  		  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot2,
	  		  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot4,
	  		  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot6,
	  		  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot8,
	  		  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot10{
	  	  				background:<?php echo esc_attr($sticky_hamburger_color);?> !important;
		  	  		}
			<?php endif;?>

			<?php 
	  	  		if(!empty($sticky_hamburgers_secondary_color)): ?>
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot1,
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot3,
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot5,
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot7,
	  	  			body.page-template-page-single .header-inner.sticky .nav-link-container:not(.nav-inactive-menu-link-container):not(.active) .nav-menu-link div.dot9,

	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot1,
	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot3,
	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot5,
	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot7,
	  	  			body .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link:not(.off-open) div.dot9,
		  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot1, 
		  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot3, 
		  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot5, 
		  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot7, 
		  	  		body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot9,
			  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot1,
			  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot3,
			  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot5,
			  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot7,
			  	  	body #rs-header .header-inner.sticky .menu-responsive ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot9,
			  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot1,
			  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot3,
			  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot5,
			  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot7,
			  	  	body .rs-header .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot9,
			  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot1,
			  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot3,
			  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot5,
			  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot7,
			  	  	body #rs-header.header-style5 .header-inner.sticky ul.offcanvas-icon .nav-link-container .nav-menu-link div.dot9
			  	  	{
		  	  			background:<?php echo esc_attr($sticky_hamburgers_secondary_color);?> !important;
			  	  	}
			<?php endif;?>


			<?php 
	  	  		if(!empty($footer_title_color)): ?>
		  	  	body .rs-footer .footer-top h3.footer-title,
		  	  	body .footer-subscribe .newsletter-title
		  	  	{			  	  		
	  	  			color:<?php echo esc_attr($footer_title_color);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_border_color)): ?>
		  	  	body .rs-footer .footer-top .mc4wp-form-fields input[type="email"]{			  	  		
	  	  			border-color:<?php echo esc_attr($footer_border_color);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_top_border_color)): ?>
		  	  	body .footer-subscribe .subscribe-bg,
		  	  	body .footer-bottom .container
		  	  	{			  	  		
	  	  			border-color:<?php echo esc_attr($footer_top_border_color);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_border_color)): ?>
		  	  	body .footer-subscribe input[type="email"]{			  	  		
	  	  			border-color:<?php echo esc_attr($footer_border_color);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_txt_colors)): ?>
		  	  	body .rs-footer .footer-top, 
		  	  	body .footer-bottom .copyright p,
		  	  	body .rs-footer .footer-top .mc4wp-form-fields i,
		  	  	body .rs-footer .footer-top .mc4wp-form-fields input[type=email]::placeholder,
		  	  	body .rs-footer .footer-top .mc4wp-form-fields input[type=email],
		  	  	.footer-top ul.footer_social > li > a,
		  	  	.rs-footer .recent-post-widget .show-featured .post-desc a,
		  	  	.rs-footer .recent-post-widget .show-featured .post-desc span,
		  	  	body .rs-footer{			  	  		
	  	  			color:<?php echo esc_attr($footer_txt_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_btn_text_colors)): ?>
		  	  	body #rs-footer .footer-btn-wrap a.footer-btn{			  	  		
	  	  			color:<?php echo esc_attr($footer_btn_text_colors);?> !important;
		  	  	}
			<?php endif;?>

			<?php 
	  	  		if(!empty($footer_txt_colors)): ?>
		  	  	body .footer-subscribe input[type="email"]::-webkit-input-placeholder,
		  	  	body .footer-subscribe input[type="email"]{ /* Chrome/Opera/Safari */
		  	  		color:<?php echo esc_attr($footer_txt_colors);?> !important;
		  	  	}
		  	  	body .footer-subscribe input[type="email"]::-moz-placeholder,
		  	  	body .footer-subscribe input[type="email"]{ /* Firefox 19+ */
		  	  		color:<?php echo esc_attr($footer_txt_colors);?> !important;
		  	  	}
		  	  	body .footer-subscribe input[type="email"]:-ms-input-placeholder,
		  	  	body .footer-subscribe input[type="email"]{ /* IE 10+ */
		  	  		color:<?php echo esc_attr($footer_txt_colors);?> !important;
		  	  	}
		  	  	body .footer-subscribe input[type="email"]:-moz-placeholder,
		  	  	body .footer-subscribe input[type="email"]{ /* Firefox 18- */
		  	  	  	color:<?php echo esc_attr($footer_txt_colors);?> !important;
		  	  	}
			<?php endif;?>


			<?php 
	  	  		if(!empty($copyright_border_color)): ?>
	  	  		.rs-footer .footer-bottom .container, 
	  	  		.rs-footer .footer-bottom .container-fluid,	
		  	  	body .footer-bottom{			  	  		
	  	  			border-color:<?php echo esc_attr($copyright_border_color);?> !important;
		  	  	}
			<?php endif;?>

			

	  	  	<?php 
  	  		if(!empty($footer_primary_hover)): ?>
				.footer-top ul.footer_social > li > a:hover,
				.rs-blog .blog-meta .blog-title a:hover,
				.rs-footer.footerdark .footer-top .widget.widget_nav_menu ul li a:hover,
				.rs-footer a:hover,
				.rs-footer .widget a:hover,
				body .rs-footer .recent-post-widget .show-featured .post-desc a:hover,
				.rs-footer .fa-ul li a:hover,
				.rs-footer.footerdark .footer-bottom .copyright p a:hover,
				.rs-footer.footerdark .footer-top .fa-ul li a:hover,
				.rs-footer.footerdark .footer_social li a:hover .fa,
				ul.unorder-list li:before {					
		  	  		color:<?php echo esc_attr($footer_primary_hover);?> !important;
				}
			<?php endif; ?>	
			<?php 
				$output = '';
				if(isset($reobiz_option['custom-css'])){
			   		$output = $reobiz_option['custom-css'];
					echo esc_attr($output);
				}
			?> 	
		  	</style>
	<?php endif;
}
}