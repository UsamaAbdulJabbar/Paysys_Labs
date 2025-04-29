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
$ev_location      = get_post_meta( get_the_ID(), 'ev_location', true);

$ev_location      = ($ev_location) ? $ev_location : '';

$new_sDate = date_create_from_format('d/m/Y', $start_date);  
$formatted_date = date_format($new_sDate, 'd m, Y');

if(!empty($settings['event_des'])){
    $limit = $settings['event_des'];
}
else{
    $limit = 20;
}
?>	

<div class="event-item col-lg-<?php echo $settings['event_col']; ?> col-md-6 style2-custom">
	<div class="events-inner-item style__2">
		<?php if(!empty($settings['show_thum'])) { ?>
			<div class="thumbnail-img">
				<a href="<?php the_permalink();?>"> <?php the_post_thumbnail($settings['thumbnail_size']);?></a>
			</div>
		<?php } ?>
	    <div class="content-part">	
	    <?php if(!empty($settings['show_meta']) || !empty($settings['add_event'])) { ?>    	
	    	<ul>
	    		<?php if(!empty($settings['show_meta'])) { ?>	
	    			<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"  fill="#1273eb"></path></svg> <?php echo esc_attr($start_date);?></li>
	    		<?php } ?>
	    		<?php if(!empty($settings['add_event'])) { ?>	
		    		<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z" fill="#1273eb"></path></svg> <?php echo wp_kses_post($ev_location); ?></li>
		    	<?php } ?>
	    	</ul>
	    <?php } ?>
	    	<svg height="4" viewBox="0 0 288 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="rs__line_ev">
	    	<path d="M286.131 1.36962C285.403 1.2525 284.761 1.09935 283.919 1.02728C277.884 0.567816 271.763 0.252501 265.514 0.243492C262.632 0.243492 259.75 0.180429 256.911 0.117366C252.003 0.0092575 247.067 -0.0267785 242.202 0.0272755C220.929 0.252501 199.642 0.414663 178.37 0.775023C154.443 1.17142 130.46 1.41466 106.462 1.43268C96.4467 1.44169 86.4168 1.5498 76.4011 1.46872C66.9562 1.39664 57.4969 1.63989 48.0377 1.37863C44.9274 1.28854 41.7601 1.24349 38.607 1.22547C33.7847 1.19845 28.9909 1.01827 24.1542 1.10836C23.4123 1.11737 22.6562 1.13538 21.9285 1.10836C16.8636 1.00025 11.7845 0.865113 6.73384 1.12637C4.56521 1.24349 2.26818 1.29755 0.670237 1.8471C-0.342742 2.19845 -0.242871 2.4507 1.21239 2.60385C2.8674 2.77502 4.57948 2.92818 6.32009 2.99124C12.4122 3.21646 18.5614 3.07232 24.6679 3.10836C30.1322 3.14439 35.6109 3.23448 41.0895 3.17142C43.358 3.14439 45.7121 3.19845 48.0234 3.26151C52.2608 3.38764 56.4982 3.48674 60.7642 3.45971C61.3206 3.45971 61.8913 3.43268 62.4192 3.45971C67.641 3.80205 72.9627 3.60385 78.2274 3.69394C82.2793 3.76601 86.374 3.91016 90.4544 3.77502C90.8111 3.76601 91.2106 3.77502 91.5673 3.80205C94.3922 4.00926 97.3028 3.91016 100.142 3.94619C106.42 4.03628 112.726 3.90115 119.018 3.91016C126.879 3.92818 134.769 4.02728 142.644 3.87412C144.856 3.82908 147.081 3.83809 149.293 3.82908C153.245 3.80205 157.197 3.89214 161.163 3.83809C174.988 3.6489 188.856 3.65791 202.653 3.26151C207.503 3.11737 212.397 3.22547 217.277 3.23448C223.868 3.2525 230.488 3.18944 237.08 3.08133C250.063 2.86511 263.075 2.8561 276.058 2.63989C278.754 2.61286 281.451 2.58583 284.133 2.5498C284.69 2.5498 285.332 2.5498 285.76 2.45971C286.587 2.30656 287.928 2.22547 287.985 1.90115C288.028 1.63088 286.944 1.46872 286.131 1.34259V1.36962Z"/>
	    	</svg>

	        <h4 class="event-title"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 7, '' ); ?></a></h4>
	        <?php if(($settings['event_content_show_hide'] == 'yes') ){ ?>
	            <p class="txt"><?php echo wp_trim_words( get_the_content(), $limit, '...' ); ?></p>
	        <?php } ?>
	        <?php if(!empty($settings['show_btn'])) { ?>
		        <?php if($settings['show_btn'] == 'yes') { ?>
		            <div class="btn-part">
		            	<?php if (!empty($ev_book_btn)) { ?>
		            		<a class="join-btn" href="<?php echo esc_url($ev_book_btn); ?>">
		            	<?php } else { ?>
		                <a class="join-btn" href="<?php the_permalink(); ?>">
		                <?php } ?>
		                    <?php echo esc_html($settings['event_btn_text']);?> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z" fill="#1273eb"></path></svg></i>
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