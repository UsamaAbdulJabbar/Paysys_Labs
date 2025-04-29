<?php
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;

defined( 'ABSPATH' ) || die();

class Rsaddon_Elementor_Events_Grid_Pro_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve rsgallery widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'rsevent-gird';
	}		

	/**
	 * Get widget title.
	 *
	 * Retrieve rsgallery widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'RS Events Grid', 'rsaddon' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve rsgallery widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'glyph-icon flaticon-slider-1';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the rsgallery widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
        return [ 'rsaddon_category' ];
    }

	/**
	 * Register rsgallery widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {	

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content Settings', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'event_grid_style',
			[
				'label'   => esc_html__( 'Select Style', 'rsaddon' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'style1',				
				'options' => [
					'style1' => 'Default',
					'style2' => 'List Style',
				],											
			]
		);

		$this->add_control(
			'cat',
			[
				'label'   => esc_html__( 'Category', 'rsaddon' ),
				'type'    => Controls_Manager::SELECT2,	
				'options'   => $this->getCategories(),
				'multiple' => true,	
				'separator' => 'before',					
			]
		);		

		$this->add_control(
			'course_per',
			[
				'label' => esc_html__( 'Event Per Page', 'rsaddon' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'example 3', 'rsaddon' ),
				'separator' => 'before',				
			]
		);

		$this->add_responsive_control(
			'event_col',
			[
				'label'   => esc_html__( 'Columns', 'rsaddon' ),
				'type'    => Controls_Manager::SELECT,	
				'default' => 4,			
				'options' => [
					'6' => esc_html__( '2 Column', 'rsaddon' ),
					'4' => esc_html__( '3 Column', 'rsaddon' ),
					'3' => esc_html__( '4 Column', 'rsaddon' ),
					'2' => esc_html__( '6 Column', 'rsaddon' ),
					'12' => esc_html__( '1 Column', 'rsaddon' ),					
				],
				'separator' => 'before',				
							
			]
		);

		$this->add_control(
			'offset',
			[
				'label' => esc_html__( 'Course offset', 'rsaddon' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'You can write how many course offset. ex(2)', 'rsaddon' ),
				'separator' => 'before',				
			]
		); 

		$this->add_control(
		    'event_content_show_hide',
		    [
		        'label' => esc_html__( 'Description Show / Hide', 'rsaddon' ),
		        'type' => Controls_Manager::SELECT,
		        'default' => 'yes',
		        'options' => [
		            'yes' => esc_html__( 'Yes', 'rsaddon' ),
		            'no' => esc_html__( 'No', 'rsaddon' ),
		        ],    
		        'condition' => [
		            'event_grid_style' => 'style2',
		        ],            
		        'separator' => 'before',
		    ]
		);

		$this->add_control(
		    'event_des',
		    [
		        'label' => esc_html__( 'Show Excerpt Limit', 'rsaddon' ),
		        'type' => Controls_Manager::TEXT,
		        'placeholder' => esc_html__( '16', 'rsaddon' ),
		        'separator' => 'before',
		        'condition' => [
		            'event_grid_style' => 'style2',
		        ],
		    ]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'images_section',
			[
				'label' => esc_html__( 'Image Settings', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
		    'show_thum',
		    [
		        'label'        => esc_html__( 'Show Image', 'rsaddon' ),
		        'type'         => Controls_Manager::SWITCHER,
		        'label_on'     => esc_html__( 'Show', 'rsaddon' ),
		        'label_off'    => esc_html__( 'Hide', 'rsaddon' ),
		        'return_value' => 'yes',
		        'default'      => 'yes',
		    ]
		);

		$this->add_control(
            'thum_overlay_bg',
            [
                'label' => esc_html__( 'Image Overlay Color', 'rsaddon' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .thumbnail-img:before' => 'background: {{VALUE}};',                   
                ],
				'condition' => [
                    'show_thum' => 'yes',
					'event_grid_style' => 'style2',
                ],           
            ]  
        ); 

		$this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'large',
                'separator' => 'before',
                'exclude' => [
                    'custom'
                ],
                'condition' => [
                    'show_thum' => 'yes',
                ],
                'separator' => 'before',
            ]
        );

		$this->add_responsive_control(
		    'img_border_radius',
		    [
		        'label' => esc_html__( 'Border Radius', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .thumbnail-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		        'condition' => [
		            'event_grid_style' => 'style1',
		        ],
		    ]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'lock_section',
			[
				'label' => esc_html__( 'Address Settings', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
		    'add_event',
		    [
		        'label'        => esc_html__( 'Show Address', 'rsaddon' ),
		        'type'         => Controls_Manager::SWITCHER,
		        'label_on'     => esc_html__( 'Show', 'rsaddon' ),
		        'label_off'    => esc_html__( 'Hide', 'rsaddon' ),
		        'return_value' => 'yes',
		        'default'      => 'yes',
		    ]
		);

		$this->end_controls_section();



		$this->start_controls_section(
			'metas_section',
			[
				'label' => esc_html__( 'Date Settings', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
		    'show_meta',
		    [
		        'label'        => esc_html__( 'Show Date', 'rsaddon' ),
		        'type'         => Controls_Manager::SWITCHER,
		        'label_on'     => esc_html__( 'Show', 'rsaddon' ),
		        'label_off'    => esc_html__( 'Hide', 'rsaddon' ),
		        'return_value' => 'yes',
		        'default'      => 'yes',
		    ]
		);

		$this->end_controls_section();


        $this->start_controls_section(
            'button_section',
            [
                'label' => esc_html__( 'Button Settings', 'rsaddon' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
		    'show_btn',
		    [
		        'label'        => esc_html__( 'Show Event Button', 'rsaddon' ),
		        'type'         => Controls_Manager::SWITCHER,
		        'label_on'     => esc_html__( 'Show', 'rsaddon' ),
		        'label_off'    => esc_html__( 'Hide', 'rsaddon' ),
		        'return_value' => 'yes',
		        'default'      => 'yes',
		    ]
		);

		$this->add_control(
			'event_btn_text',
			[
                'label'       => esc_html__( 'Button Text', 'rsaddon' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Join Event',
                'placeholder' => esc_html__( 'Event Button Text', 'rsaddon' ),
                'separator'   => 'before',
                'condition'   => [
                    'show_btn' => 'yes',
                ]
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'section_items_style',
			[
				'label' => esc_html__( 'Events Item Style', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
            'item_bg',
            [
                'label' => esc_html__( 'Background Color', 'rsaddon' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item' => 'background: {{VALUE}};',                   
                ],                
            ]  
        ); 


        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadows',
                'label' => esc_html__( 'Box Shadow', 'plugin-domain' ),
                'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item',
            ]            
        );

        $this->add_responsive_control(
		    'padding_areas',
		    [
		        'label' => esc_html__( 'Content Padding', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', 'em', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part, {{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ]
		    ]
		);

        $this->add_responsive_control(
		    'padding_areas_item',
		    [
		        'label' => esc_html__( 'Item Padding', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', 'em', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		        'condition' => [
		            'event_grid_style' => 'style2',
		        ]
		    ]
		);

		$this->add_responsive_control(
		    'radius_areas_item',
		    [
		        'label' => esc_html__( 'Border Radius', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
				'condition' => [
		            'event_grid_style' => 'style2',
		        ]
		    ]
		);
		
		$this->end_controls_section();

		// Meta Style Start
        $this->start_controls_section(
			'add_event_style',
			[
				'label' => esc_html__( 'Meta Style', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
				    'event_grid_style' => 'style2',
				]
			]
		);

		$this->add_responsive_control(
            'meta_diplay_type',
            [
                'label' => esc_html__( 'Display Type', 'rsaddon' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'inline-flex' => [
                        'title' => esc_html__( 'Inline', 'rsaddon' ),
                        'icon' => 'eicon-post-list',
                    ],
                    'block' => [
                        'title' => esc_html__( 'Normal', 'rsaddon' ),
                        'icon' => 'eicon-posts-grid',
                    ],
                ],
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .content-part ul' => 'display: {{VALUE}} !important;'
                ],
				'condition' => [
				    'event_grid_style' => 'style2',
				]
            ]
        );

        $this->add_control(
            'add_color',
            [
                'label' => esc_html__( 'Color', 'rsaddon' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part ul li' => 'color: {{VALUE}};',                  
                ], 
                'condition' => [
                    'event_grid_style' => 'style2',
                ]               
            ]
        ); 

        $this->add_control(
            'icon_add_color',
            [
                'label' => esc_html__( 'Icon Color', 'rsaddon' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part ul li i' => 'color: {{VALUE}};',                  
                    '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part ul li svg path' => 'fill: {{VALUE}};',                  
                ], 
                'condition' => [
                    'event_grid_style' => 'style2',
                ]               
            ]
        );
		$this->add_responsive_control(
			'svg_icon_size2',
			[
				'label' => esc_html__( 'Svg Icon Size', 'rsaddon' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part ul li svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
                    'event_grid_style' => 'style2',
                ]
			]
		);
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'add_typography',
				'label' => esc_html__( 'Typography', 'rsaddon' ),
				'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part ul li',    
				'condition' => [
				    'event_grid_style' => 'style2',
				]                                
			]
		);
		$this->add_responsive_control(
		    'meta_padding_area',
		    [
		        'label' => esc_html__( 'Area Padding', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', 'em', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .content-part ul' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
		        ],
				'condition' => [
				    'event_grid_style' => 'style2',
				]
		    ]
		);
		$this->add_group_control(
		    Group_Control_Border::get_type(),
		    [
		        'name' => 'meta_line_border',
		        'selector' => '{{WRAPPER}} .content-part ul',
				'condition' => [
				    'event_grid_style' => 'style2',
				]
		    ]
		);
		$this->add_responsive_control(
            'meta_line_shape_show_hide',
            [
                'label' => esc_html__( 'Shape Show/Hide', 'rsaddon' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'inline-block' => [
                        'title' => esc_html__( 'Show', 'rsaddon' ),
                        'icon' => 'eicon-check',
                    ],
                    'none' => [
                        'title' => esc_html__( 'Hide', 'rsaddon' ),
                        'icon' => 'eicon-editor-close',
                    ],
                ],
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .content-part svg' => 'display: {{VALUE}};'
                ],
				'separator' => 'before',
				'condition' => [
				    'event_grid_style' => 'style2',
				]
            ]
        );
		$this->add_control(
            'icon_add_color_line',
            [
                'label' => esc_html__( 'Line Color', 'rsaddon' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part .rs__line_ev path' => 'fill: {{VALUE}};',                  
                ], 
                'condition' => [
                    'event_grid_style' => 'style2',
                ]               
            ]
        );
		$this->end_controls_section();
		// Meta Style End

		// Image Style Start
        $this->start_controls_section(
			'add_event_img_style',
			[
				'label' => esc_html__( 'Image Style', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
				    'event_grid_style' => 'style2',
				]
			]
		);
		$this->add_responsive_control(
            'shape_show_hide',
            [
                'label' => esc_html__( 'Shape Show/Hide', 'rsaddon' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'inline-block' => [
                        'title' => esc_html__( 'Show', 'rsaddon' ),
                        'icon' => 'eicon-check',
                    ],
                    'none' => [
                        'title' => esc_html__( 'Hide', 'rsaddon' ),
                        'icon' => 'eicon-editor-close',
                    ],
                ],
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .thumbnail-img:before' => 'display: {{VALUE}};'
                ],
            ]
        );
		$this->add_control(
		    'image_border_radius',
		    [
		        'label' => esc_html__( 'Border Radius', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .thumbnail-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
		        ],
		    ]
		);
		$this->add_responsive_control(
		    'image_wrapper_width',
		    [
		        'label' => esc_html__( 'Wrapper Width', 'rsaddon' ),
		        'type' => Controls_Manager::SLIDER,
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .thumbnail-img' => 'max-width: {{SIZE}}{{UNIT}} !important; flex: 0 0 {{SIZE}}{{UNIT}} !important;',
		        ],
		    ]
		);
		$this->add_responsive_control(
		    'image_wrapper_height',
		    [
		        'label' => esc_html__( 'Wrapper Height', 'rsaddon' ),
		        'type' => Controls_Manager::SLIDER,
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .thumbnail-img' => 'height: {{SIZE}}{{UNIT}} !important;',
		        ],
		    ]
		);
		$this->add_responsive_control(
		    'image_width',
		    [
		        'label' => esc_html__( 'Width', 'rsaddon' ),
		        'type' => Controls_Manager::SLIDER,
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .thumbnail-img img' => 'width: {{SIZE}}{{UNIT}} !important; height: auto !important;',
		        ],
		    ]
		);
		$this->add_responsive_control(
		    'image_height',
		    [
		        'label' => esc_html__( 'Height', 'rsaddon' ),
		        'type' => Controls_Manager::SLIDER,
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .thumbnail-img img' => 'height: {{SIZE}}{{UNIT}} !important;',
		        ],
		    ]
		);
		$this->end_controls_section();
		// Image Style End

		// Content Box Style Start
        $this->start_controls_section(
			'add_event_content_box_style',
			[
				'label' => esc_html__( 'Content Box Style', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
				    'event_grid_style' => 'style2',
				]
			]
		);
		$this->add_responsive_control(
		    'content_box_width',
		    [
		        'label' => esc_html__( 'Box Width', 'rsaddon' ),
		        'type' => Controls_Manager::SLIDER,
		        'size_units' => [ 'px', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .content-part' => 'max-width: {{SIZE}}{{UNIT}} !important; flex: 0 0 {{SIZE}}{{UNIT}} !important;',
		        ],
		    ]
		);
		$this->end_controls_section();
		// Content Box Style Start

		// Title Style Start
        $this->start_controls_section(
			'section_event_style',
			[
				'label' => esc_html__( 'Title Style', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Color', 'rsaddon' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part .event-title a, {{WRAPPER}} .rs-event-grid .events-inner-item .content-part .event-title a' => 'color: {{VALUE}};',
                ],             
            ]
        );

        $this->add_control(
            'title_color_hover',
            [
                'label' => esc_html__( 'Hover Color', 'rsaddon' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part .event-title a:hover, {{WRAPPER}} .rs-event-grid .events-inner-item .content-part .event-title a:hover' => 'color: {{VALUE}};',                    
                ],                
            ]
            
        );

        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Typography', 'rsaddon' ),
				'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part .event-title, {{WRAPPER}} .rs-event-grid .events-inner-item .content-part .event-title',                   
			]
		);

        $this->add_responsive_control(
		    'title_padding',
		    [
		        'label' => esc_html__( 'Padding', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', 'em', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part .event-title, {{WRAPPER}} .rs-event-grid .events-inner-item .content-part .event-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		    ]
		);

		$this->add_responsive_control(
		    'title_margin',
		    [
		        'label' => esc_html__( 'Margin', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', 'em', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part .event-title, {{WRAPPER}} .rs-event-grid .events-inner-item .content-part .event-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		    ]
		);

        $this->end_controls_section();
		// Title Style End  

		// Date Style Start
        $this->start_controls_section(
			'section_meta_style',
			[
				'label' => esc_html__( 'Date Style', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
				    'event_grid_style' => 'style1',
				] 
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'date_background_',
				'label' => esc_html__( 'Background', 'rsaddon' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item .thumbnail-img .rs__date, {{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs__date',
			]
		);

        $this->add_control(
            'meta__color',
            [
                'label' => esc_html__( 'Color', 'rsaddon' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item .thumbnail-img .rs__date, {{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs__date' => 'color: {{VALUE}}',
                ], 
                'condition' => [
                    'event_grid_style' => 'style1',
                ]            
            ]
        );

        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'date_typography',
				'label' => esc_html__( 'Typography', 'rsaddon' ),
				'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item .thumbnail-img .rs__date, {{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs__date',	
				'condition' => [
				    'event_grid_style' => 'style1',
				] 			
			]
		);  

        $this->end_controls_section();
		// Date Style End

		// Time Style Start
        $this->start_controls_section(
			'section_time_sce_style',
			[
				'label' => esc_html__( 'Time Section Style', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
				    'event_grid_style' => 'style1',
				]
			]
		); 

		$this->add_control(
		    'time_sec_color',
		    [
		        'label' => esc_html__( 'Text Color', 'rsaddon' ),
		        'type' => Controls_Manager::COLOR,		      
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta' => 'color: {{VALUE}}',
		        ]
		    ]
		); 

		$this->add_control(
		    'time_sec_icon_color',
		    [
		        'label' => esc_html__( 'Icon Color', 'rsaddon' ),
		        'type' => Controls_Manager::COLOR,		      
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta li i' => 'color: {{VALUE}}',
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta li svg path' => 'fill: {{VALUE}}',
		        ]
		    ]
		);

		$this->add_control(
		    'time_sec_icon_bg_color',
		    [
		        'label' => esc_html__( 'Icon Bg Color', 'rsaddon' ),
		        'type' => Controls_Manager::COLOR,		      
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta li i' => 'background: {{VALUE}}',
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta li svg' => 'background: {{VALUE}}',
		        ]
		    ]
		);

		$this->add_responsive_control(
			'svg_icon_size',
			[
				'label' => esc_html__( 'Svg Icon Size', 'rsaddon' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta li svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'time_sec_icon_padding',
			[
				'label' => esc_html__( 'Padding', 'rsaddon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta li svg, {{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta li i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'time_sec_typography',
				'label' => esc_html__( 'Typography', 'rsaddon' ),
				'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta',              
			]
		);

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'time_sec_border',
                'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .rs___meta',
            ]
        );
        $this->end_controls_section();
		// Time Style End


        $this->start_controls_section(
			'section_event_content_style',
			[
				'label' => esc_html__( 'Excerpt Style', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
				    'event_grid_style' => 'style2',
				]
			]
		);

		$this->add_control(
		    'excerpt_color',
		    [
		        'label' => esc_html__( 'Color', 'rsaddon' ),
		        'type' => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part p.txt' => 'color: {{VALUE}};',                   

		        ],   
		        'condition' => [
		            'event_grid_style' => 'style2',
		        ]             
		    ]
		);

        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'exc_typography',
				'label' => esc_html__( 'Typography', 'rsaddon' ),
				'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part p.txt', 
				'condition' => [
				    'event_grid_style' => 'style2',
				]              
			]
		);

        $this->add_responsive_control(
		    'excerpt_padding_area',
		    [
		        'label' => esc_html__( 'Padding', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', 'em', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item.style__2 .content-part p.txt' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],
		        'condition' => [
		            'event_grid_style' => 'style1',
		        ]
		    ]
		);

		$this->end_controls_section();  


        $this->start_controls_section(
			'event_btn_style',
			[
				'label' => esc_html__( 'Button Style', 'rsaddon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs( '_tabs_button' );

		$this->start_controls_tab(
            'style_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'rsaddon' ),
            ]
        );
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'btn_bg_color',
				'label' => esc_html__( 'Background', 'rsaddon' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a',
			]
		);

		$this->add_control(
		    'btn_color',
		    [
		        'label' => esc_html__( 'Color', 'rsaddon' ),
		        'type' => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a' => 'color: {{VALUE}};',                   
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a svg path' => 'fill: {{VALUE}};',                   

		        ],                
		    ]
		);

		$this->add_responsive_control(
			'btn_svg_icon_size',
			[
				'label' => esc_html__( 'Svg Icon Size', 'rsaddon' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [
					'{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'btn_typography',
				'label' => esc_html__( 'Typography', 'rsaddon' ),
				'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a',                                     
			]
		);

        $this->add_responsive_control(
		    'btn_padding_area',
		    [
		        'label' => esc_html__( 'Padding', 'rsaddon' ),
		        'type' => Controls_Manager::DIMENSIONS,
		        'size_units' => [ 'px', 'em', '%' ],
		        'selectors' => [
		            '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		        ],		        
		    ]
		);

        $this->add_control(
            'button_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rsaddon' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',           
                ],
            ]
        );

		$this->add_group_control(
		    Group_Control_Border::get_type(),
		    [
		        'name' => 'button_border',
		        'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a',
		    ]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
            'style_hover_tab',
            [
                'label' => esc_html__( 'Hover', 'rsaddon' ),
            ]
        ); 

        $this->add_group_control(
        	Group_Control_Background::get_type(),
        	[
        		'name' => 'btn_bg_color_hover',
        		'label' => esc_html__( 'Background', 'rsaddon' ),
        		'types' => [ 'classic', 'gradient' ],
        		'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a:hover',
        	]
        );

        $this->add_control(
            'btn_color_hover',
            [
                'label' => esc_html__( 'Color', 'rsaddon' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a:hover' => 'color: {{VALUE}};', 
					'{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a:hover svg path' => 'fill: {{VALUE}};',                   

                ],                
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_border_hover',
                'selector' => '{{WRAPPER}} .rs-event-grid .events-inner-item .content-part .btn-part a:hover',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
		$this->end_controls_section();  
	}

	/**
	 * Render rsgallery widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
	$settings = $this->get_settings_for_display(); 
	?>	 


		<div class="rsaddon-unique-sliders rs-event-slider rs-event-grid event-slider-<?php echo esc_attr($settings['event_grid_style']); ?>">
			<div id="rsaddon-grid" class="rs-addon-sliders row">
				<?php 
					if('style1' == $settings['event_grid_style']){
						include(plugin_dir_path(__FILE__)."/style1.php");
					}
					if('style2' == $settings['event_grid_style']){
						include(plugin_dir_path(__FILE__)."/style2.php");
					}
				?>
			</div>
		</div>
	<?php 
	}
	public function getCategories(){
        $cat_list = [];
        if ( post_type_exists( 'events' ) ) { 
          $terms = get_terms( array(
            'taxonomy'    => 'event-category',
            'hide_empty'  => true            
         ) );
            
    
         foreach($terms as $post) {

          $cat_list[$post->slug]  = [$post->name];

         }
      }  
        return $cat_list;
     }  
}