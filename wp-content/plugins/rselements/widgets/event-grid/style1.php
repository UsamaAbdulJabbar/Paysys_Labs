<?php //******************//
global $ecenter_option; 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$settings = $this->get_settings_for_display(); 
$cat = $settings['cat'];
 if(empty($cat)){
	$best_wp = new wp_Query(array(
		'post_type'           => 'events',
		'posts_per_page'      => $settings['course_per'],
		'meta_key'       => 'ev_start_date',
		'orderby'        => 'meta_value',
		'ignore_sticky_posts' => 1,
		'offset'              => $settings['offset']
	));	  
}   
else{
	$best_wp = new wp_Query(array(
			'post_type'        => 'events',
			'posts_per_page'      => $settings['course_per'],
			'meta_key'       => 'ev_start_date',
			'orderby'        => 'meta_value',
			'ignore_sticky_posts' => 1,
			'offset'              => $settings['offset'],
			'tax_query' => array(
			array(
				'taxonomy' => 'event-category',
				'field'    => 'slug', //can be set to ID
				'terms'    =>  $cat//if field is ID you can reference by cat/term number
			),
		)
	));	  
}

		 	
while($best_wp->have_posts()): $best_wp->the_post();							
$start_date       = get_post_meta( get_the_ID(), 'ev_start_date', true);
$ev_start_time = get_post_meta( get_the_ID(), 'ev_start_time', true);
$ev_end_time   = get_post_meta( get_the_ID(), 'ev_end_time', true);
$ev_location       = get_post_meta( get_the_ID(), 'ev_location', true);
$ev_book_btn   = get_post_meta( get_the_ID(), 'ev_book_btn', true);
$ev_location = ($ev_location) ? $ev_location : '';
$ev_start_time = ($ev_start_time) ? $ev_start_time : '' ;
$ev_end_time = ($ev_end_time) ? $ev_end_time : '' ;
$new_sDate = date_create_from_format('d/m/Y', $start_date);  
$formatted_date = date_format($new_sDate, 'd m, y');


if(!empty($settings['event_des'])){
    $limit = $settings['event_des'];
}
else{
    $limit = 20;
}

?>	


<div class="event-item col-lg-<?php echo $settings['event_col']; ?> col-md-6">
	<div class="events-inner-item">
		<?php if(!empty($settings['show_thum'])) { ?>
			<div class="thumbnail-img">
				<a href="<?php the_permalink();?>"> <?php the_post_thumbnail($settings['thumbnail_size']);?></a>				
			</div>
		<?php } ?>
	    <div class="content-part">
    		<?php if(!empty($settings['show_meta'])) { ?>				    
    	        <div class="rs__date">
    	        	<?php echo esc_attr($start_date);?>  
    	        </div>				    
    		<?php } ?>
    		<?php if(!empty($ev_start_time)|| !empty($ev_end_time) || !empty($ev_location)){ ?>
	    		<ul class="rs___meta">
	    			<?php if(!empty($ev_start_time)|| !empty($ev_end_time)){ ?>
		    			<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM13 12V7H11V14H17V12H13Z" fill="#1273eb"></path></svg> <?php echo esc_html($ev_start_time); ?> <?php echo esc_html__('-', 'ecenter') ?> <?php echo esc_html($ev_end_time); ?></li>
		    		<?php } ?>
	    			<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z" fill="#1273eb"></path></svg> <?php echo esc_html($ev_location); ?></li>
	    		</ul>
	    	<?php } ?>
	        <h4 class="event-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
	        <?php if(!empty($settings['show_btn'])) { ?>
		        <?php if($settings['show_btn'] == 'yes') { ?>
		            <div class="btn-part">
		            	<?php if (!empty($ev_book_btn)) { ?>
		            		<a class="join-btn" href="<?php echo esc_url($ev_book_btn); ?>">
		            	<?php } else { ?>
		                <a class="join-btn" href="<?php the_permalink(); ?>">
		                <?php } ?>
		                    <?php echo esc_html($settings['event_btn_text']);?> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z" fill="#1273eb"></path></svg>
		                </a>
		            </div>
		        <?php } ?>
		    <?php } ?>
	    </div>
	</div>
</div>
<?php
endwhile;
wp_reset_query();  