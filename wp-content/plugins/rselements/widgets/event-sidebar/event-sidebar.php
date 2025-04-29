<?php
/**
 * Elementor RS Button Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */

use Elementor\Group_Control_Css_Filter;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;
use Elementor\Repeater;
use Elementor\Utils;


defined( 'ABSPATH' ) || die();

class Rsaddon_pro_event_sidebar_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve counter widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'rs-event-sidebar';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve counter widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'RS Event Sidebar', 'rsaddon' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve counter widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'glyph-icon flaticon-menu';
	}

	/**
	 * Retrieve the list of scripts the counter widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.3.0
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_categories() {
        return [ 'rsaddon_category' ];
    }

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'sidebar_event' ];
	}

	/**
	 * Register counter widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_button',
			[
				'label' => esc_html__( 'Event Sidebar', 'rsaddon' ),
			]
		);

		$this->add_control(
		    'price__heading',
		    [
		        'type' => Controls_Manager::HEADING,
		        'label' => esc_html__( 'Price Section', 'rsaddon' ),
		        'separator' => 'before',
		    ]
		);

		$this->add_control(
			'event_price_text',
			[
                'label'       => esc_html__( 'Price Text', 'rsaddon' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Price',
                'placeholder' => esc_html__( 'Price', 'rsaddon' ),
                'separator'   => 'before',
			]
		);

		$this->add_control(
			'btn_text',
			[
                'label'       => esc_html__( 'Button Text', 'rsaddon' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Book Now',
                'placeholder' => esc_html__( 'Book Now', 'rsaddon' ),
                'separator'   => 'before',
			]
		);

		$this->add_control(
		    'attendees__heading',
		    [
		        'type' => Controls_Manager::HEADING,
		        'label' => esc_html__( 'Attendees Section', 'rsaddon' ),
		        'separator' => 'before',
		    ]
		);

		$this->add_control(
			'attendees_text',
			[
                'label'       => esc_html__( 'Attendees Text', 'rsaddon' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => '100+ Attendees This Event',
                'placeholder' => esc_html__( 'Attendees Text', 'rsaddon' ),
                'separator'   => 'before',
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
		    'attendees_image',
		    [
		        'label' => esc_html__('Image', 'rsaddon'),
		        'type' => Controls_Manager::MEDIA,
		        'default' => [
		            'url' => Utils::get_placeholder_image_src(),
		        ],
		    ]
		);

		$this->add_control(
		    'attendees_list',
		    [
		        'show_label' => false,
		        'type' => Controls_Manager::REPEATER,
		        'fields' => $repeater->get_controls(),
		        'default' => [
		            ['image' => ['url' => Utils::get_placeholder_image_src()]],
		            ['image' => ['url' => Utils::get_placeholder_image_src()]],
		            ['image' => ['url' => Utils::get_placeholder_image_src()]],
		            ['image' => ['url' => Utils::get_placeholder_image_src()]]
		        ]
		    ]
		);  


		$this->add_control(
		    'map__heading',
		    [
		        'type' => Controls_Manager::HEADING,
		        'label' => esc_html__( 'Map Section', 'rsaddon' ),
		        'separator' => 'before',
		    ]
		);

		$this->add_control(
			'map_text',
			[
                'label'       => esc_html__( 'Map Title', 'rsaddon' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Where is it?',
                'placeholder' => esc_html__( 'Where is it?', 'rsaddon' ),
                'separator'   => 'before',
			]
		);


		$this->end_controls_section();
	}

	/**
	 * Render counter widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	/**
	 * Render counter widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {	
	$settings = $this->get_settings_for_display();
	$best_wp = new wp_Query(array(
		'post_type'        => 'events'
	));		
    						
	$ev_price        		= get_post_meta(  get_the_ID(), 'ev_price', true );
	$ev_start_date        	= get_post_meta(  get_the_ID(), 'ev_start_date', true );
	$ev_end_date          	= get_post_meta(  get_the_ID(), 'ev_end_date', true );
	$ev_location          	= get_post_meta ( get_the_ID(), 'ev_location', true);
	$ev_link              	= get_post_meta ( get_the_ID(), 'ev_book_btn', true);
        $ev_speaker_name      	= get_post_meta ( get_the_ID(), 'ev_speaker_name', true);
        $speaker_img      		= get_post_meta ( get_the_ID(), 'speaker_img', true);
        $ev_start_time = get_post_meta( get_the_ID(), 'ev_start_time', true);
        $ev_end_time   = get_post_meta( get_the_ID(), 'ev_end_time', true);
        $ev_link = ($ev_link) ? $ev_link : '' ;
        $ev_start_time = ($ev_start_time) ? $ev_start_time : '' ;
        $ev_end_time = ($ev_end_time) ? $ev_end_time : '' ;
    	?>   
                        
      	<div class="rs_event__sidebar">
      		<div class="rs_sidebar rs_sidebar_price">      			
            	<?php if(!empty($settings['event_price_text'])) { ?>	
            		<span class="rs__price">			    
                        <?php echo esc_html($settings['event_price_text']);?>	
                        <strong><?php echo esc_attr($ev_price); ?></strong> 
                	</span> 			    
            	<?php } ?>

    			<?php if(!empty($ev_start_time)|| !empty($ev_end_time)){ ?>
	    			<div class="rs__time"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z" fill="#1273eb"></path></svg> <?php echo esc_html($ev_start_time); ?> <?php echo esc_html__('-', 'ecenter') ?> <?php echo esc_html($ev_end_time); ?></div>
	    		<?php } ?>

	    		<?php if(!empty($ev_start_date)|| !empty($ev_end_date)){ ?>
		    		<div class="rs__time rs__time_dt"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z" fill="#1273eb"></path></svg> <?php echo esc_attr($ev_start_date); ?>  <?php echo esc_html__('-', 'ecenter') ?> <?php echo esc_attr($ev_end_date); ?></div>
		    	<?php } ?>

		    	<?php if(!empty($ev_location)){ ?>
		    		<div class="rs__time rs__time_lo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z" fill="#1273eb"></path></svg> <?php echo esc_attr($ev_location); ?></div>
		    	<?php } ?>

            	<?php if(!empty($settings['btn_text'])) { ?>                				    
                    <a href="<?php echo esc_url($ev_link); ?>" class="book__btn"><?php echo esc_html($settings['btn_text']); ?> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z" fill="#1273eb"></path></svg></a> 	
            	<?php } ?>          
      		</div>

      		<div class="rs_sidebar rs_sidebar_atten">
      			<ul>
	      			<?php 
	      				foreach ( $settings['attendees_list'] as $index => $item ) : 
	  					$image = wp_get_attachment_image_url( $item['attendees_image']['id']);
	  					if ( ! $image ) {
	  					    $image = Utils::get_placeholder_image_src();
	  					}
	      				?> 
	      				<li class="attendees-image">
		      				<a href="<?php echo esc_url($ev_link); ?>"><img src="<?php echo esc_url( $image ); ?>" alt="image"></a>
		      			</li>
	      			<?php endforeach; ?>
	      			<li> <a href="<?php echo esc_url($ev_link); ?>"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#106eea"></path></svg></a></li>
	      		</ul>
      			<?php if(!empty($settings['attendees_text'])) { ?>
					<h4 class="attendees__title">			    
			            <?php echo esc_html($settings['attendees_text']);?>	
			    	</h4> 
			    <?php } ?>
      		</div>

      		<div class="rs_sidebar rs_sidebar_map"> 
      			<?php if(!empty($settings['map_text'])) { ?>
					<h4 class="map__title">			    
			            <?php echo esc_html($settings['map_text']);?>	
			    	</h4> 
			    <?php } ?>
      			<iframe width="100%" height="270"
				    src="https://maps.google.com/maps?q= <?php echo esc_attr($ev_location); ?> &t=&z=14&ie=UTF8&iwloc=&output=embed"
				    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
				</iframe>
      		</div>
      	</div>
            
	<?php 
	}
}