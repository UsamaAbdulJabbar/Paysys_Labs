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


defined( 'ABSPATH' ) || die();

class Rsaddon_pro_event_meta_Widget extends \Elementor\Widget_Base {

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
		return 'rs-event-meta';
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
		return esc_html__( 'RS Event Meta', 'rsaddon' );
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
		return [ 'meta' ];
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
				'label' => esc_html__( 'Event Meta', 'rsaddon' ),
			]
		);

		$this->add_control(
			'event_speaker_text',
			[
                'label'       => esc_html__( 'Speaker Text', 'rsaddon' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Speaker',
                'placeholder' => esc_html__( 'Speaker', 'rsaddon' ),
                'separator'   => 'before',
			]
		);

		$this->add_control(
			'event_date_text',
			[
                'label'       => esc_html__( 'Event Data Text', 'rsaddon' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Event Date',
                'placeholder' => esc_html__( 'Event Event Data', 'rsaddon' ),
                'separator'   => 'before',
			]
		);

		$this->add_control(
			'event_location_text',
			[
                'label'       => esc_html__( 'Location Text', 'rsaddon' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Location',
                'placeholder' => esc_html__( 'Location', 'rsaddon' ),
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
	    							
		$ev_price        = get_post_meta(  get_the_ID(), 'ev_price', true );
		$ev_start_date        = get_post_meta(  get_the_ID(), 'ev_start_date', true );
		$ev_end_date          = get_post_meta(  get_the_ID(), 'ev_end_date', true );
		$ev_location          = get_post_meta ( get_the_ID(), 'ev_location', true);
		$ev_link              = get_post_meta ( get_the_ID(), 'ev_book_btn', true);
        $ev_speaker_name      = get_post_meta ( get_the_ID(), 'ev_speaker_name', true);
        $speaker_img      = get_post_meta ( get_the_ID(), 'speaker_img', true);
    	?>   
                        
        <ul class="rs__event__meta_style">            
            <?php if(!empty($ev_speaker_name)): ?>
                <li class="image__speak">
                	<div class="rs__event_sp_img">
                    	<img src="<?php echo esc_url($speaker_img) ?>" alt="image">
                	</div>
                	<?php if(!empty($settings['event_speaker_text'])) { ?>	
                		<span class="rs__speaker">			    
	                        <?php echo esc_html($settings['event_speaker_text']);?>	
	                        <strong><?php echo esc_attr($ev_speaker_name); ?></strong> 
                    	</span> 			    
                	<?php } ?>                                                                            
                                         
                </li>
            <?php endif; ?>
            
            <?php if(!empty($ev_start_date)): ?>
                <li class="ev_st_date">
                	<div class="rs__event_sp_img">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="none"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"  fill="#1273eb"></path></svg>
                    </div>                     
                	<?php if(!empty($settings['event_date_text'])) { ?>
	                	<span class="rs__date">				    
	                        <strong><?php echo esc_html($settings['event_date_text']); ?></strong> 	
	                        <?php echo esc_attr($ev_start_date); ?>
	                    </span> 		    
                	<?php } ?>                                                    
                                         
                </li>
            <?php endif; ?>
            <?php if(!empty($ev_location)): ?>
                <li class="ev__loca_s">
                	<div class="rs__event_sp_img">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z" fill="#1273eb"></path></svg>
	                </div>
                	<?php if(!empty($settings['event_location_text'])) { ?>		
                		<span class="rs__location">		    
	                        <strong><?php echo esc_html($settings['event_location_text']); ?></strong> 	
	                        <?php echo esc_attr($ev_location); ?>
                    	</span> 		    
                	<?php } ?>                                                       
                                         
                </li>
            <?php endif; ?>
        </ul>

	<?php 
	}
}