<?php
/**
 * Elementor RS video Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Utils;
use Elementor\Group_Control_Background;
use Elementor\register_controls;

defined( 'ABSPATH' ) || die();

class Rsaddon_Elementor_pro_RSaddvideo_Widget extends \Elementor\Widget_Base {

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
		return 'advance-video';
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
		return __( 'RS Advance Video', 'rsaddon' );
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
		return 'glyph-icon flaticon-multimedia';
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
		return [ 'video' ];
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
			'section_counter',
			[
				'label' => esc_html__( 'Video', 'rsaddon' ),
			]
		);

		$this->add_responsive_control(
            'align',
            [
                'label' => esc_html__( 'Title Alignment', 'rsaddon' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'rsaddon' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'rsaddon' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'rsaddon' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                    'justify' => [
                        'title' => esc_html__( 'Justify', 'rsaddon' ),
                        'icon' => 'eicon-text-align-justify',
                    ],
                ],
                'default'     => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .rs-advance-video' => 'text-align: {{VALUE}}'
                ],
            ]
        );

	
		$this->add_control(
			'video_link',
			[
				'label' => esc_html__( 'Enter Link Here', 'rsaddon' ),
				'type' => Controls_Manager::TEXT,
				'default'     => '#',
				'placeholder' => esc_html__( 'Video link here', 'rsaddon' ),				
			]
		);
	
		$this->add_control(
			'image',
			[
				'label' => esc_html__( 'Background Image', 'rsaddon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,				
			]
		);	

        $this->add_responsive_control(
		    'video_full_area_padding',
		    [
		        'label' => esc_html__( 'Area Padding', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', 'em', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .rs-advance-video' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		    ]
		);		
		
		$this->end_controls_section();


		$this->start_controls_section(
			'section_icon',
			[
				'label' => esc_html__( 'Icon', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
		    \Elementor\Group_Control_Background::get_type(),
		    [
		        'name' => 'background',
		        'label' => __( 'Background', 'plugin-domain' ),
		        'types' => [ 'classic', 'gradient' ],
		        'selector' => '{{WRAPPER}} .rs-advance-video .rs-icon-inners .animate-border .popup-border',
		    ]
		);


		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'rsaddon' ),
				'type' => Controls_Manager::COLOR,				
				'selectors' => [
					'{{WRAPPER}} .rs-advance-video .rs-icon-inners .animate-border .popup-border i' => 'color: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);

		

		$this->add_control(
			'icon_border',
			[
				'label' => esc_html__( 'Icon Border Color', 'rsaddon' ),
				'type' => Controls_Manager::COLOR,				
				'selectors' => [
					'{{WRAPPER}} .rs-advance-video .rs-icon-inners .animate-border .popup-border:before' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .rs-advance-video .rs-icon-inners .animate-border .popup-border:after' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
            'video_icon_postion_ver',
            [
                'label' => esc_html__( 'Icon Position Vertical', 'rsaddon' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],

                
                'selectors' => [
                    '{{WRAPPER}} .rs-advance-video .overly-border' => 'top: {{SIZE}}%;',                   
                    '{{WRAPPER}} .rs-advance-video .rs-icon-inners .animate-border .popup-border' => 'top: {{SIZE}}px;',                   
                ],
            ]
        );

		$this->add_responsive_control(
            'video_icon_postion_ht',
            [
                'label' => esc_html__( 'Icon Position Horizontal', 'rsaddon' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                
                'selectors' => [
                    '{{WRAPPER}} .rs-advance-video .overly-border' => 'left: {{SIZE}}%;',                   
                    '{{WRAPPER}} .rs-advance-video .rs-icon-inners .animate-border .popup-border' => 'left: {{SIZE}}%;',                   
                ],
            ]
        );

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[	'label' => esc_html__( 'Typography', 'rsaddon' ),
				'name' => 'typography_icon',				
				'selector' => '{{WRAPPER}} .rs-advance-video .popup-videos i, {{WRAPPER}} .rs-advance-video .rs-icon-inners .animate-border .popup-border i',
				'separator' => 'before',
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
		$rand = rand(12, 3330);

		$this->add_inline_editing_attributes( 'description', 'basic' );
        $this->add_render_attribute( 'description', 'class', 'video-desc' ); 

		?>
  		<div class="rs-advance-video video-item-<?php echo esc_attr($rand);?> <?php echo esc_html($settings['align']);?>" <?php if(!empty($settings['image']['url'])):?>style="background: url(<?php echo esc_url($settings['image']['url']);?>);"<?php endif;?>>   
			    <div class="rs-icon-inners">  						
					<div class="animate-border">
					    <a class="popup-border popup-videos" href="<?php echo esc_url($settings['video_link']);?>">
							<i class="fa fa-play"></i>
						</a>
					</div>  						
				</div>			    
			</div>	


		<script type="text/javascript">			
			jQuery(document).ready(function(){
				jQuery('.popup-videos').magnificPopup({
			        disableOn: 10,
			        type: 'iframe',
			        mainClass: 'mfp-fade',
			        removalDelay: 160,
			        preloader: false,

			        fixedContentPos: false
			    }); 
			});
		</script>
    
<?php 
	}
}