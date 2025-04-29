<?php

class RS_Elements_Addon_Control {

    private $rselements_options;

    public function __construct() {
        add_action( 'admin_menu', array( $this, 'rselements_add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'rselements_page_init' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'rselements_admin_scripts' ) );
       // register_activation_hook( RSADDON_PLUGIN_FILE, [$this,'rseelements_plugin_activate'] );
    }

    public function rselements_admin_scripts(){
        wp_register_style('rselements-admin-styles', RSADDON_DIR_URL_PRO . 'admin/assets/css/rselements-admin.css', array(), null );
        wp_enqueue_style('rselements-admin-styles');
    }


    public function rselements_add_plugin_page() {
        add_submenu_page(
            'edit.php?post_type=rselements_pro',
            __( 'RS Elements Settings', 'rsaddons' ),
            __( 'RS Elements Settings', 'textrsaddonsdomain' ),
            'manage_options',
            'rselements-addon-settings',
            [$this,'rselements_create_admin_page']
        );
    }
    

    /**
     *
     */
    public function rselements_create_admin_page() {
        $this->rselements_options = get_option( 'rselements_addon_option' );

        ?>
        <div class="wrap">
            <form class="rselements-form" method="post" action="options.php">
                <?php
                settings_fields( 'rselements_addon_group' );
                do_settings_sections( 'rselements-addon-field' );
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }


    public function rselements_page_init(){

        /**
         * Sanitize callback
         */
        register_setting(
            'rselements_addon_group',
            'rselements_addon_option',
            array( $this, 'rselements_sanitize' )
        );

        add_settings_section(
            'rselements_post_type_section_field_id',
            esc_html__( 'Active Custom Post', 'rsaddon' ),
            array( $this, 'rselements_section_info' ),
            'rselements-addon-field'
        );

        add_settings_section(
            'rselements_section_field_id',
            esc_html__( 'Deactivate elements for better performance', 'rsaddon' ),
            array( $this, 'rselements_section_info' ),
            'rselements-addon-field'
        );

        /**
         * Team
         */
        add_settings_field(
            'rs_team_post',
            esc_html__( 'RS Teams', 'rsaddon' ),
            array( $this, 'rselements_team_setting' ),
            'rselements-addon-field',
            'rselements_post_type_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        /**
         * Portfolio
         */
        add_settings_field(
            'rs_portfolio_post',
            esc_html__( 'RS Portfolio', 'rsaddon' ),
            array( $this, 'rselements_portfolio_setting' ),
            'rselements-addon-field',
            'rselements_post_type_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        /**
         * Testimonials
         */
        add_settings_field(
            'rs_testimonials_post',
            esc_html__( 'RS Testimonials', 'rsaddon' ),
            array( $this, 'rselements_testimonials_setting' ),
            'rselements-addon-field',
            'rselements_post_type_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );


        /**
         * Testimonials
         */
        add_settings_field(
            'rs_events_post',
            esc_html__( 'RS Event', 'rsaddon' ),
            array( $this, 'rselements_events_setting' ),
            'rselements-addon-field',
            'rselements_post_type_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        /**
         * Heading addon control
         */
        add_settings_field(
            'rs_heading',
            esc_html__( 'RS Heading', 'rsaddon' ),
            array( $this, 'rselements_heading_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Animated heading control
         */
        add_settings_field(
            'rs_animated_heading',
            esc_html__( 'RS Animated Heading', 'rsaddon' ),
            array( $this, 'rselements_animated_heading_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Team Grid control
         */
        add_settings_field(
            'rs_team_gread',
            esc_html__( 'RS Team Grid', 'rsaddon' ),
            array( $this, 'rselements_team_gread_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Full Width Slider control
         */
        add_settings_field(
            'rs_advanced_video',
            esc_html__( 'RS Advance Video', 'rsaddon' ),
            array( $this, 'rselements_advanced_video_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Full Width Slider control
         */
        add_settings_field(
            'rs_team_slider',
            esc_html__( 'RS Team Slider', 'rsaddon' ),
            array( $this, 'rselements_team_slider_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Portfolio Grid
         */
        add_settings_field(
            'rs_portfolio_grid',
            esc_html__( 'RS Portfolio Grid', 'rsaddon' ),
            array( $this, 'rselements_portfolio_grid_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Portfolio Filter
         */
        add_settings_field(
            'rs_portfolio_filter',
            esc_html__( 'RS Portfolio Filter', 'rsaddon' ),
            array( $this, 'rselements_portfolio_filter_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Portfolio Slider
         */
        add_settings_field(
            'rs_portfolio_slider',
            esc_html__( 'RS Portfolio Slider', 'rsaddon' ),
            array( $this, 'rselements_portfolio_slider_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Counter
         */
        add_settings_field(
            'rs_counter',
            esc_html__( 'RS Counter', 'rsaddon' ),
            array( $this, 'rselements_counter_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Services Grid
         */
        add_settings_field(
            'rs_service_grid',
            esc_html__( 'RS Services Grid', 'rsaddon' ),
            array( $this, 'rselements_service_grid_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Services Slider
         */
        add_settings_field(
            'rs_service_slider',
            esc_html__( 'RS Services Slider', 'rsaddon' ),
            array( $this, 'rselements_service_slider_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Video
         */
        add_settings_field(
            'rs_video',
            esc_html__( 'RS Video', 'rsaddon' ),
            array( $this, 'rselements_video_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Pricing Table
         */
        add_settings_field(
            'rs_pricing_table',
            esc_html__( 'RS Pricing Table', 'rsaddon' ),
            array( $this, 'rselements_pricing_table_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Button
         */
        add_settings_field(
            'rs_button',
            esc_html__( 'RS Button', 'rsaddon' ),
            array( $this, 'rselements_button_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Logo Showcase
         */
        add_settings_field(
            'rs_logo_showcase',
            esc_html__( 'RS Logo Showcase', 'rsaddon' ),
            array( $this, 'rselements_logo_showcase_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * CTA
         */
        add_settings_field(
            'rs_cta',
            esc_html__( 'RS CTA', 'rsaddon' ),
            array( $this, 'rselements_cta_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Testimonial Grid
         */
        add_settings_field(
            'rs_testimonial_grid',
            esc_html__( 'RS Testimonial Grid', 'rsaddon' ),
            array( $this, 'rselements_testimonial_grid_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
       
        /**
         * Testimonial Slider Two
         */
        add_settings_field(
            'rs_testimonial_slider',
            esc_html__( 'RS Testimonial Slider', 'rsaddon' ),
            array( $this, 'rselements_testimonial_slider_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Flip Box
         */
        add_settings_field(
            'rs_flip_box',
            esc_html__( 'RS Flip Box', 'rsaddon' ),
            array( $this, 'rselements_flip_box_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Tab
         */
        add_settings_field(
            'rs_tab',
            esc_html__( 'RS Tab', 'rsaddon' ),
            array( $this, 'rselements_tab_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Advance Tab
         */
        add_settings_field(
            'rs_advance_tab',
            esc_html__( 'RS Advance Tab', 'rsaddon' ),
            array( $this, 'rselements_advance_tab_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Icon Box
         */
        add_settings_field(
            'rs_icon_box',
            esc_html__( 'RS Icon Box', 'rsaddon' ),
            array( $this, 'rselements_icon_box_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Blog Grid
         */
        add_settings_field(
            'rs_blog_grid',
            esc_html__( 'RS Blog Grid', 'rsaddon' ),
            array( $this, 'rselements_blog_grid_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Blog Slider
         */
        add_settings_field(
            'rs_blog_slider',
            esc_html__( 'RS Blog Slider', 'rsaddon' ),
            array( $this, 'rselements_blog_slider_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Number Grid
         */
        add_settings_field(
            'rs_number_grid',
            esc_html__( 'RS Number Grid', 'rsaddon' ),
            array( $this, 'rselements_number_grid_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Contact Form 7
         */
        add_settings_field(
            'rs_contact_form_7',
            esc_html__( 'RS Contact Form 7', 'rsaddon' ),
            array( $this, 'rselements_contact_form_7_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Progress Bar
         */
        add_settings_field(
            'rs_progress_bar',
            esc_html__( 'RS Progress Bar', 'rsaddon' ),
            array( $this, 'rselements_progress_bar_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Progress Pie
         */
        add_settings_field(
            'rs_progress_pie',
            esc_html__( 'RS Progress Pie', 'rsaddon' ),
            array( $this, 'rselements_progress_pie_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        
        /**
         * Contact Box
         */
        add_settings_field(
            'rs_contact_box',
            esc_html__( 'RS Contact Box', 'rsaddon' ),
            array( $this, 'rselements_contact_box_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Tooltip
         */
        add_settings_field(
            'rs_tooltip',
            esc_html__( 'RS Tooltip', 'rsaddon' ),
            array( $this, 'rselements_tooltip_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Static Product
         */
        add_settings_field(
            'rs_product_grid',
            esc_html__( 'RS Porduct Grid', 'rsaddon' ),
            array( $this, 'rselements_product_grid_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * FAQ
         */
        add_settings_field(
            'rs_faq',
            esc_html__( 'RS FAQ', 'rsaddon' ),
            array( $this, 'rselements_faq_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Image Showcase
         */
        add_settings_field(
            'rs_image_showcase',
            esc_html__( 'RS Image Showcase', 'rsaddon' ),
            array( $this, 'rselements_image_showcase_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Image Hover Effect
         */
        add_settings_field(
            'rs_image_hover_effect',
            esc_html__( 'RS Image Hover Effect', 'rsaddon' ),
            array( $this, 'rselements_image_hover_effect_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Features List
         */
        add_settings_field(
            'rs_features_list',
            esc_html__( 'RS Features List', 'rsaddon' ),
            array( $this, 'rselements_features_list_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        /**
         * Brochures 
         */
        add_settings_field(
            'rs_table',
            esc_html__( 'RS Table', 'rsaddon' ),
            array( $this, 'rselements_table_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Dual Button
         */
        add_settings_field(
            'rs_dual_button',
            esc_html__( 'RS Dual Button', 'rsaddon' ),
            array( $this, 'rselements_dual_button_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Image Parallax
         */
        add_settings_field(
            'rs_image_parallax',
            esc_html__( 'RS Image Parallax', 'rsaddon' ),
            array( $this, 'rselements_image_parallax_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Image Animation Shape
         */
        add_settings_field(
            'rs_image_animation_shape',
            esc_html__( 'RS Image Animation Shape', 'rsaddon' ),
            array( $this, 'rselements_image_animation_shape_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
       
        /**
         * Accordion
         */
        add_settings_field(
            'rs_pricing_list',
            esc_html__( 'RS Price List', 'rsaddon' ),
            array( $this, 'rselements_pricing_list_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        /**
         * Newsletter
         */
        add_settings_field(
            'rs_newsletter',
            esc_html__( 'RS Countdown', 'rsaddon' ),
            array( $this, 'rselements_countdown_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        
        /**
         * Hover Tab
         */
        add_settings_field(
            'rs_business_hour',
            esc_html__( 'RS Business Hour', 'rsaddon' ),
            array( $this, 'rselements_business_hour_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        /**
         * App ScreenSlider
         */
        add_settings_field(
            'rs_app_screen_slider',
            esc_html__( 'RS Apps Screeen Slider', 'rsaddon' ),
            array( $this, 'rselements_screenslider_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

         /**
         * roadmap slider
         */
        add_settings_field(
            'rs_dual_heading',
            esc_html__( 'Dual Color Heading', 'rsaddon' ),
            array( $this, 'rselements_dual_color_heading_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );


        /**
         * Post Navigation
         */
        add_settings_field(
            'rs_gradient_heading',
            esc_html__( 'RS Gradient Heading', 'rsaddon' ),
            array( $this, 'rs_gradient_heading_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        add_settings_field(
            'rs_rain_animation',
            esc_html__( 'RS Rain Animation', 'rsaddon' ),
            array( $this, 'rselements_rain_animation_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        add_settings_field(
            'rs_product_slider',
            esc_html__( 'RS Product Slider', 'rsaddon' ),
            array( $this, 'rselements_product_slider_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        add_settings_field(
            'rs_product_list',
            esc_html__( 'RS Porduct List', 'rsaddon' ),
            array( $this, 'rselements_product_list_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        add_settings_field(
            'rs_blockquote',
            esc_html__( 'RS Blockquote', 'rsaddon' ),
            array( $this, 'rselements_blockquote_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        add_settings_field(
            'rs_static_product',
            esc_html__( 'RS Static Product', 'rsaddon' ),
            array( $this, 'rselements_static_product_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

        add_settings_field(
            'rs_event_grid',
            esc_html__( 'RS Events Grid', 'rsaddon' ),
            array( $this, 'rs_event_grid_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        add_settings_field(
            'rs_event_meta',
            esc_html__( 'RS Events Meta', 'rsaddon' ),
            array( $this, 'rs_event_meta_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );
        add_settings_field(
            'rs_event_sidebar',
            esc_html__( 'RS Events Sidebar', 'rsaddon' ),
            array( $this, 'rs_event_sidebar_setting' ),
            'rselements-addon-field',
            'rselements_section_field_id',
            array( 'class' => 'rselements_addon_field' )
        );

    }

    

    /**
     * Sanitize all form
     */
    public function rselements_sanitize( $input_addon ) {
        $rs_addon_arg = array();
        //Team
        if( isset( $input_addon['rs_team_post'] ) ){
            $rs_addon_arg['rs_team_post'] = sanitize_text_field( $input_addon['rs_team_post'] );
        }
        //Portfolio
        if( isset( $input_addon['rs_portfolio_post'] ) ){
            $rs_addon_arg['rs_portfolio_post'] = sanitize_text_field( $input_addon['rs_portfolio_post'] );
        }
        //Testimonials
        if( isset( $input_addon['rs_testimonials_post'] ) ){
            $rs_addon_arg['rs_testimonials_post'] = sanitize_text_field( $input_addon['rs_testimonials_post'] );
        }        

        //Event
        if( isset( $input_addon['rs_events_post'] ) ){
            $rs_addon_arg['rs_events_post'] = sanitize_text_field( $input_addon['rs_events_post'] );
        }

        //Heading
        if( isset( $input_addon['rs_heading_setting'] ) ){
            $rs_addon_arg['rs_heading_setting'] = sanitize_text_field( $input_addon['rs_heading_setting'] );
        }
        //Animated Heading
        if( isset( $input_addon['rs_animated_heading_setting'] ) ){
            $rs_addon_arg['rs_animated_heading_setting'] = sanitize_text_field( $input_addon['rs_animated_heading_setting'] );
        }
        //Team Grid
        if( isset( $input_addon['rs_team_gread_setting'] ) ){
            $rs_addon_arg['rs_team_gread_setting'] = sanitize_text_field( $input_addon['rs_team_gread_setting'] );
        }
        //Full Width Slider
        if( isset( $input_addon['rs_advanced_video_setting'] ) ){
            $rs_addon_arg['rs_advanced_video_setting'] = sanitize_text_field( $input_addon['rs_advanced_video_setting'] );
        }
        //Team Slider
        if( isset( $input_addon['rs_team_slider_setting'] ) ){
            $rs_addon_arg['rs_team_slider_setting'] = sanitize_text_field( $input_addon['rs_team_slider_setting'] );
        }
        //Portfolio Grid 
        if( isset( $input_addon['rs_portfolio_grid_setting'] ) ){
            $rs_addon_arg['rs_portfolio_grid_setting'] = sanitize_text_field( $input_addon['rs_portfolio_grid_setting'] );
        }
        //Portfolio Filter 
        if( isset( $input_addon['rs_portfolio_filter_setting'] ) ){
            $rs_addon_arg['rs_portfolio_filter_setting'] = sanitize_text_field( $input_addon['rs_portfolio_filter_setting'] );
        }
        //Portfolio Slider 
        if( isset( $input_addon['rs_portfolio_slider_setting'] ) ){
            $rs_addon_arg['rs_portfolio_slider_setting'] = sanitize_text_field( $input_addon['rs_portfolio_slider_setting'] );
        }
        //Counter 
        if( isset( $input_addon['rs_counter_setting'] ) ){
            $rs_addon_arg['rs_counter_setting'] = sanitize_text_field( $input_addon['rs_counter_setting'] );
        }
        //Services Grid 
        if( isset( $input_addon['rs_service_grid_setting'] ) ){
            $rs_addon_arg['rs_service_grid_setting'] = sanitize_text_field( $input_addon['rs_service_grid_setting'] );
        }
        //Services Slider 
        if( isset( $input_addon['rs_service_slider_setting'] ) ){
            $rs_addon_arg['rs_service_slider_setting'] = sanitize_text_field( $input_addon['rs_service_slider_setting'] );
        }
        //Video 
        if( isset( $input_addon['rs_video_setting'] ) ){
            $rs_addon_arg['rs_video_setting'] = sanitize_text_field( $input_addon['rs_video_setting'] );
        }
        //Pricing Table 
        if( isset( $input_addon['rs_pricing_table_setting'] ) ){
            $rs_addon_arg['rs_pricing_table_setting'] = sanitize_text_field( $input_addon['rs_pricing_table_setting'] );
        }
        //Button
        if( isset( $input_addon['rs_button_setting'] ) ){
            $rs_addon_arg['rs_button_setting'] = sanitize_text_field( $input_addon['rs_button_setting'] );
        }
        //Logo Showcase
        if( isset( $input_addon['rs_logo_showcase_setting'] ) ){
            $rs_addon_arg['rs_logo_showcase_setting'] = sanitize_text_field( $input_addon['rs_logo_showcase_setting'] );
        }
        //CTA
        if( isset( $input_addon['rs_cta_setting'] ) ){
            $rs_addon_arg['rs_cta_setting'] = sanitize_text_field( $input_addon['rs_cta_setting'] );
        }
        //Testimonial Grid
        if( isset( $input_addon['rs_testimonial_grid_setting'] ) ){
            $rs_addon_arg['rs_testimonial_grid_setting'] = sanitize_text_field( $input_addon['rs_testimonial_grid_setting'] );
        }
        //Testimonial Slider
        if( isset( $input_addon['rs_testimonial_slider_setting'] ) ){
            $rs_addon_arg['rs_testimonial_slider_setting'] = sanitize_text_field( $input_addon['rs_testimonial_slider_setting'] );
        }
        //Testimonial Slider Two
        if( isset( $input_addon['rs_testimonial_slider_two_setting'] ) ){
            $rs_addon_arg['rs_testimonial_slider_two_setting'] = sanitize_text_field( $input_addon['rs_testimonial_slider_two_setting'] );
        }
        //Flip Box
        if( isset( $input_addon['rs_flip_box_setting'] ) ){
            $rs_addon_arg['rs_flip_box_setting'] = sanitize_text_field( $input_addon['rs_flip_box_setting'] );
        }
        //Tab
        if( isset( $input_addon['rs_tab_setting'] ) ){
            $rs_addon_arg['rs_tab_setting'] = sanitize_text_field( $input_addon['rs_tab_setting'] );
        }
        //Advance Tab
        if( isset( $input_addon['rs_advance_tab_setting'] ) ){
            $rs_addon_arg['rs_advance_tab_setting'] = sanitize_text_field( $input_addon['rs_advance_tab_setting'] );
        }
        //Icon Box
        if( isset( $input_addon['rs_icon_box_setting'] ) ){
            $rs_addon_arg['rs_icon_box_setting'] = sanitize_text_field( $input_addon['rs_icon_box_setting'] );
        }
        //Blog Slider
        if( isset( $input_addon['rs_blog_slider_setting'] ) ){
            $rs_addon_arg['rs_blog_slider_setting'] = sanitize_text_field( $input_addon['rs_blog_slider_setting'] );
        }
        //Number Grid
        if( isset( $input_addon['rs_number_grid_setting'] ) ){
            $rs_addon_arg['rs_number_grid_setting'] = sanitize_text_field( $input_addon['rs_number_grid_setting'] );
        }
        //Contact Form 7
        if( isset( $input_addon['rs_contact_form_7_setting'] ) ){
            $rs_addon_arg['rs_contact_form_7_setting'] = sanitize_text_field( $input_addon['rs_contact_form_7_setting'] );
        }
        //Progress Bar
        if( isset( $input_addon['rs_progress_bar_setting'] ) ){
            $rs_addon_arg['rs_progress_bar_setting'] = sanitize_text_field( $input_addon['rs_progress_bar_setting'] );
        }
        //Progress Pie
        if( isset( $input_addon['rs_progress_pie_setting'] ) ){
            $rs_addon_arg['rs_progress_pie_setting'] = sanitize_text_field( $input_addon['rs_progress_pie_setting'] );
        }
        //Contact Box
        if( isset( $input_addon['rs_contact_box_setting'] ) ){
            $rs_addon_arg['rs_contact_box_setting'] = sanitize_text_field( $input_addon['rs_contact_box_setting'] );
        }
        //Tooltip
        if( isset( $input_addon['rs_tooltip_setting'] ) ){
            $rs_addon_arg['rs_tooltip_setting'] = sanitize_text_field( $input_addon['rs_tooltip_setting'] );
        }
        //Static Product
        if( isset( $input_addon['rs_product_grid_setting'] ) ){
            $rs_addon_arg['rs_product_grid_setting'] = sanitize_text_field( $input_addon['rs_product_grid_setting'] );
        }
        //FAQ
        if( isset( $input_addon['rs_faq_setting'] ) ){
            $rs_addon_arg['rs_faq_setting'] = sanitize_text_field( $input_addon['rs_faq_setting'] );
        }
        //Image Showcase
        if( isset( $input_addon['rs_image_showcase_setting'] ) ){
            $rs_addon_arg['rs_image_showcase_setting'] = sanitize_text_field( $input_addon['rs_image_showcase_setting'] );
        }
        //Image Hover Effect
        if( isset( $input_addon['rs_image_hover_effect_setting'] ) ){
            $rs_addon_arg['rs_image_hover_effect_setting'] = sanitize_text_field( $input_addon['rs_image_hover_effect_setting'] );
        }
        //Features List
        if( isset( $input_addon['rs_features_list_setting'] ) ){
            $rs_addon_arg['rs_features_list_setting'] = sanitize_text_field( $input_addon['rs_features_list_setting'] );
        }
        //Brochures
        if( isset( $input_addon['rs_table_setting'] ) ){
            $rs_addon_arg['rs_table_setting'] = sanitize_text_field( $input_addon['rs_table_setting'] );
        }
        //Dual Button
        if( isset( $input_addon['rs_dual_button_setting'] ) ){
            $rs_addon_arg['rs_dual_button_setting'] = sanitize_text_field( $input_addon['rs_dual_button_setting'] );
        }
        //Image Parallax
        if( isset( $input_addon['rs_image_parallax_setting'] ) ){
            $rs_addon_arg['rs_image_parallax_setting'] = sanitize_text_field( $input_addon['rs_image_parallax_setting'] );
        }
        //Image Animation Shape
        if( isset( $input_addon['rs_image_animation_shape_setting'] ) ){
            $rs_addon_arg['rs_image_animation_shape_setting'] = sanitize_text_field( $input_addon['rs_image_animation_shape_setting'] );
        }
        //Breadcrumb
        if( isset( $input_addon['rs_breadcrumb_setting'] ) ){
            $rs_addon_arg['rs_breadcrumb_setting'] = sanitize_text_field( $input_addon['rs_breadcrumb_setting'] );
        }
        //Accordion
        if( isset( $input_addon['rs_pricing_list_setting'] ) ){
            $rs_addon_arg['rs_pricing_list_setting'] = sanitize_text_field( $input_addon['rs_pricing_list_setting'] );
        }
        //Newsletter
        if( isset( $input_addon['rs_countdown_setting'] ) ){
            $rs_addon_arg['rs_countdown_setting'] = sanitize_text_field( $input_addon['rs_countdown_setting'] );
        }
        //Hover Tab
        if( isset( $input_addon['rs_business_hour_setting'] ) ){
            $rs_addon_arg['rs_business_hour_setting'] = sanitize_text_field( $input_addon['rs_business_hour_setting'] );
        }

        //Hover Tab
        if( isset( $input_addon['rs_screen_slider_setting'] ) ){
            $rs_addon_arg['rs_screen_slider_setting'] = sanitize_text_field( $input_addon['rs_screen_slider_setting'] );
        }

        //roadmap slider
        if( isset( $input_addon['rs_dual_color_heading_setting'] ) ){
            $rs_addon_arg['rs_dual_color_heading_setting'] = sanitize_text_field( $input_addon['rs_dual_color_heading_setting'] );
        }


        //Post Navigation
        if( isset( $input_addon['rs_gradient_heading_setting'] ) ){
            $rs_addon_arg['rs_gradient_heading_setting'] = sanitize_text_field( $input_addon['rs_gradient_heading_setting'] );
        }

        //rain animation
        if( isset( $input_addon['rs_rain_animation_setting'] ) ){
            $rs_addon_arg['rs_rain_animation_setting'] = sanitize_text_field( $input_addon['rs_rain_animation_setting'] );
        }

        //rain animation
         if( isset( $input_addon['rs_product_slider_settings'] ) ){
            $rs_addon_arg['rs_product_slider_settings'] = sanitize_text_field( $input_addon['rs_product_slider_settings'] );
        }

        if( isset( $input_addon['rs_product_slider_list_settings'] ) ){
            $rs_addon_arg['rs_product_slider_list_settings'] = sanitize_text_field( $input_addon['rs_product_slider_list_settings'] );
        }

        if( isset( $input_addon['rs_blockquote_settings'] ) ){
            $rs_addon_arg['rs_blockquote_settings'] = sanitize_text_field( $input_addon['rs_blockquote_settings'] );
        }


        if( isset( $input_addon['rs_static_product_setting'] ) ){
            $rs_addon_arg['rs_static_product_setting'] = sanitize_text_field( $input_addon['rs_static_product_setting'] );
        }

        if( isset( $input_addon['rs_blog_grid_setting'] ) ){
            $rs_addon_arg['rs_blog_grid_setting'] = sanitize_text_field( $input_addon['rs_blog_grid_setting'] );
        }

        if( isset( $input_addon['rs_event_grid_setting'] ) ){
            $rs_addon_arg['rs_event_grid_setting'] = sanitize_text_field( $input_addon['rs_event_grid_setting'] );
        }

        if( isset( $input_addon['rs_event_meta_setting'] ) ){
            $rs_addon_arg['rs_event_meta_setting'] = sanitize_text_field( $input_addon['rs_event_meta_setting'] );
        }

        if( isset( $input_addon['rs_event_sidebar_setting'] ) ){
            $rs_addon_arg['rs_event_sidebar_setting'] = sanitize_text_field( $input_addon['rs_event_sidebar_setting'] );
        }

        
        
        

        
        

        return $rs_addon_arg;
    }

    /**
     * Print the Section text
     */
    public function rselements_section_info() {
        //print 'Enter your settings below:';
    }

    

    public function rselements_static_product_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_static_product_setting]" id="rs_static_product_setting" value="rselement_static_product" %s/>',
                (isset( $this->rselements_options['rs_static_product_setting']) && $this->rselements_options['rs_static_product_setting'] ) == 'rselement_static_product' ? 'checked' : ''
            );
            ?>
            <label for="rs_static_product_setting"></label>
        </div>
        <?php
    }


    public function rselements_blockquote_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_blockquote_settings]" id="rs_blockquote_settings" value="rs_blockquote" %s/>',
                (isset( $this->rselements_options['rs_blockquote_settings']) && $this->rselements_options['rs_blockquote_settings'] ) == 'rs_blockquote' ? 'checked' : ''
            );
            ?>
            <label for="rs_blockquote_settings"></label>
        </div>
        <?php
    }

    public function rselements_product_list_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_product_slider_list_settings]" id="rs_product_slider_list_settings" value="rs_product_slider_list" %s/>',
                (isset( $this->rselements_options['rs_product_slider_list_settings']) && $this->rselements_options['rs_product_slider_list_settings'] ) == 'rs_product_slider_list' ? 'checked' : ''
            );
            ?>
            <label for="rs_product_slider_list_settings"></label>
        </div>
        <?php
    }

    public function rselements_product_slider_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_product_slider_settings]" id="rs_product_slider_settings" value="rs_product_slider" %s/>',
                (isset( $this->rselements_options['rs_product_slider_settings']) && $this->rselements_options['rs_product_slider_settings'] ) == 'rs_product_slider' ? 'checked' : ''
            );
            ?>
            <label for="rs_product_slider_settings"></label>
        </div>
        <?php
    }

    /**
     * Team
     */
    public function rselements_team_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_team_post]" id="rs_team_post" value="rs_team_post" %s/>',
                (isset( $this->rselements_options['rs_team_post']) && $this->rselements_options['rs_team_post'] ) == 'rs_team_post' ? 'checked' : ''
            );
            ?>
            <label for="rs_team_post"></label>
        </div>
        <?php
    }

    /**
     * Portfolio
     */
    public function rselements_portfolio_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_portfolio_post]" id="rs_portfolio_post" value="rs_portfolio_post" %s/>',
                (isset( $this->rselements_options['rs_portfolio_post']) && $this->rselements_options['rs_portfolio_post'] ) == 'rs_portfolio_post' ? 'checked' : ''
            );
            ?>
            <label for="rs_portfolio_post"></label>
        </div>
        <?php
    }

     /**
     * Testimonials
     */
    public function rselements_testimonials_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_testimonials_post]" id="rs_testimonials_post" value="rs_testimonials_post" %s/>',
                (isset( $this->rselements_options['rs_testimonials_post']) && $this->rselements_options['rs_testimonials_post'] ) == 'rs_testimonials_post' ? 'checked' : ''
            );
            ?>
            <label for="rs_testimonials_post"></label>
        </div>
        <?php
    }

     /**
     * Testimonials
     */
    public function rselements_events_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_events_post]" id="rs_events_post" value="rs_events_post" %s/>',
                (isset( $this->rselements_options['rs_events_post']) && $this->rselements_options['rs_events_post'] ) == 'rs_events_post' ? 'checked' : ''
            );
            ?>
            <label for="rs_events_post"></label>
        </div>
        <?php
    }

    /**
     * Heading field
     */
    public function rselements_heading_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_heading_setting]" id="rs_heading_setting" value="rselement_heading" %s/>',
                (isset( $this->rselements_options['rs_heading_setting']) && $this->rselements_options['rs_heading_setting'] ) == 'rselement_heading' ? 'checked' : ''
            );
            ?>
            <label for="rs_heading_setting"></label>
        </div>
        <?php
    }

    /**
     * Animated Heading
     */
    public function rselements_animated_heading_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_animated_heading_setting]" id="rs_animated_heading_setting" value="rselement_animated_heading" %s/>',
                (isset( $this->rselements_options['rs_animated_heading_setting']) && $this->rselements_options['rs_animated_heading_setting'] ) == 'rselement_animated_heading' ? 'checked' : ''
            );
            ?>
            <label for="rs_animated_heading_setting"></label>
        </div>
        <?php
    }

    /**
     * Team Grid
     */
    public function rselements_team_gread_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_team_gread_setting]" id="rs_team_gread_setting" value="rselement_team_gread" %s/>',
                (isset( $this->rselements_options['rs_team_gread_setting']) && $this->rselements_options['rs_team_gread_setting'] ) == 'rselement_team_gread' ? 'checked' : ''
            );
            ?>
            <label for="rs_team_gread_setting"></label>
        </div>
        <?php
    }

    /**
     * Full Width Slider
     */
    public function rselements_advanced_video_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_advanced_video_setting]" id="rs_advanced_video_setting" value="rselement_advanced_video" %s/>',
                (isset( $this->rselements_options['rs_advanced_video_setting']) && $this->rselements_options['rs_advanced_video_setting'] ) == 'rselement_advanced_video' ? 'checked' : ''
            );
            ?>
            <label for="rs_advanced_video_setting"></label>
        </div>
        <?php
    }

    /**
     * Team Slider
     */
    public function rselements_team_slider_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_team_slider_setting]" id="rs_team_slider_setting" value="rselement_team_slider" %s/>',
                (isset( $this->rselements_options['rs_team_slider_setting']) && $this->rselements_options['rs_team_slider_setting'] ) == 'rselement_team_slider' ? 'checked' : ''
            );
            ?>
            <label for="rs_team_slider_setting"></label>
        </div>
        <?php
    }

    /**
     * Portfolio Grid
     */
    public function rselements_portfolio_grid_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_portfolio_grid_setting]" id="rs_portfolio_grid_setting" value="rselement_portfolio_grid" %s/>',
                (isset( $this->rselements_options['rs_portfolio_grid_setting']) && $this->rselements_options['rs_portfolio_grid_setting'] ) == 'rselement_portfolio_grid' ? 'checked' : ''
            );
            ?>
            <label for="rs_portfolio_grid_setting"></label>
        </div>
        <?php
    }

    /**
     * Portfolio Filter
     */
    public function rselements_portfolio_filter_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_portfolio_filter_setting]" id="rs_portfolio_filter_setting" value="rselement_portfolio_filter" %s/>',
                (isset( $this->rselements_options['rs_portfolio_filter_setting']) && $this->rselements_options['rs_portfolio_filter_setting'] ) == 'rselement_portfolio_filter' ? 'checked' : ''
            );
            ?>
            <label for="rs_portfolio_filter_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Portfolio Slider
     */
    public function rselements_portfolio_slider_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_portfolio_slider_setting]" id="rs_portfolio_slider_setting" value="rselement_portfolio_slider" %s/>',
                (isset( $this->rselements_options['rs_portfolio_slider_setting']) && $this->rselements_options['rs_portfolio_slider_setting'] ) == 'rselement_portfolio_slider' ? 'checked' : ''
            );
            ?>
            <label for="rs_portfolio_slider_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Counter
     */
    public function rselements_counter_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_counter_setting]" id="rs_counter_setting" value="rselement_counter" %s/>',
                (isset( $this->rselements_options['rs_counter_setting']) && $this->rselements_options['rs_counter_setting'] ) == 'rselement_counter' ? 'checked' : ''
            );
            ?>
            <label for="rs_counter_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Services Grid
     */
    public function rselements_service_grid_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_service_grid_setting]" id="rs_service_grid_setting" value="rselement_service_grid" %s/>',
                (isset( $this->rselements_options['rs_service_grid_setting']) && $this->rselements_options['rs_service_grid_setting'] ) == 'rselement_service_grid' ? 'checked' : ''
            );
            ?>
            <label for="rs_service_grid_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Services Slider
     */
    public function rselements_service_slider_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_service_slider_setting]" id="rs_service_slider_setting" value="rselement_service_slider" %s/>',
                (isset( $this->rselements_options['rs_service_slider_setting']) && $this->rselements_options['rs_service_slider_setting'] ) == 'rselement_service_slider' ? 'checked' : ''
            );
            ?>
            <label for="rs_service_slider_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Video
     */
    public function rselements_video_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_video_setting]" id="rs_video_setting" value="rselement_video" %s/>',
                (isset( $this->rselements_options['rs_video_setting']) && $this->rselements_options['rs_video_setting'] ) == 'rselement_video' ? 'checked' : ''
            );
            ?>
            <label for="rs_video_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Pricing Table
     */
    public function rselements_pricing_table_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_pricing_table_setting]" id="rs_pricing_table_setting" value="rselement_pricing_table" %s/>',
                (isset( $this->rselements_options['rs_pricing_table_setting']) && $this->rselements_options['rs_pricing_table_setting'] ) == 'rselement_pricing_table' ? 'checked' : ''
            );
            ?>
            <label for="rs_pricing_table_setting"></label>
        </div>
        <?php
    }
    
    
    /**
     * Button
     */
    public function rselements_button_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_button_setting]" id="rs_button_setting" value="rselement_button" %s/>',
                (isset( $this->rselements_options['rs_button_setting']) && $this->rselements_options['rs_button_setting'] ) == 'rselement_button' ? 'checked' : ''
            );
            ?>
            <label for="rs_button_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Logo Showcase
     */
    public function rselements_logo_showcase_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_logo_showcase_setting]" id="rs_logo_showcase_setting" value="rselement_logo_showcase" %s/>',
                (isset( $this->rselements_options['rs_logo_showcase_setting']) && $this->rselements_options['rs_logo_showcase_setting'] ) == 'rselement_logo_showcase' ? 'checked' : ''
            );
            ?>
            <label for="rs_logo_showcase_setting"></label>
        </div>
        <?php
    }
    
    /**
     * CTA
     */
    public function rselements_cta_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_cta_setting]" id="rs_cta_setting" value="rselement_cta" %s/>',
                (isset( $this->rselements_options['rs_cta_setting']) && $this->rselements_options['rs_cta_setting'] ) == 'rselement_cta' ? 'checked' : ''
            );
            ?>
            <label for="rs_cta_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Testimonial Grid
     */
    public function rselements_testimonial_grid_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_testimonial_grid_setting]" id="rs_testimonial_grid_setting" value="rselement_testimonial_grid" %s/>',
                (isset( $this->rselements_options['rs_testimonial_grid_setting']) && $this->rselements_options['rs_testimonial_grid_setting'] ) == 'rselement_testimonial_grid' ? 'checked' : ''
            );
            ?>
            <label for="rs_testimonial_grid_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Testimonial Slider
     */
    public function rselements_testimonial_slider_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_testimonial_slider_setting]" id="rs_testimonial_slider_setting" value="rselement_testimonial_slider" %s/>',
                (isset( $this->rselements_options['rs_testimonial_slider_setting']) && $this->rselements_options['rs_testimonial_slider_setting'] ) == 'rselement_testimonial_slider' ? 'checked' : ''
            );
            ?>
            <label for="rs_testimonial_slider_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Flip Box
     */
    public function rselements_flip_box_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_flip_box_setting]" id="rs_flip_box_setting" value="rselement_flip_box" %s/>',
                (isset( $this->rselements_options['rs_flip_box_setting']) && $this->rselements_options['rs_flip_box_setting'] ) == 'rselement_flip_box' ? 'checked' : ''
            );
            ?>
            <label for="rs_flip_box_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Tab
     */
    public function rselements_tab_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_tab_setting]" id="rs_tab_setting" value="rselement_tab" %s/>',
                (isset( $this->rselements_options['rs_tab_setting']) && $this->rselements_options['rs_tab_setting'] ) == 'rselement_tab' ? 'checked' : ''
            );
            ?>
            <label for="rs_tab_setting"></label>
        </div>
        <?php
    }

    /**
     * Advance Tab
     */
    public function rselements_advance_tab_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_advance_tab_setting]" id="rs_advance_tab_setting" value="rselement_advance_tab" %s/>',
                (isset( $this->rselements_options['rs_advance_tab_setting']) && $this->rselements_options['rs_advance_tab_setting'] ) == 'rselement_advance_tab' ? 'checked' : ''
            );
            ?>
            <label for="rs_advance_tab_setting"></label>
        </div>
        <?php
    }
    
    /**
     * Icon Box
     */
    public function rselements_icon_box_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_icon_box_setting]" id="rs_icon_box_setting" value="rselement_icon_box" %s/>',
                (isset( $this->rselements_options['rs_icon_box_setting']) && $this->rselements_options['rs_icon_box_setting'] ) == 'rselement_icon_box' ? 'checked' : ''
            );
            ?>
            <label for="rs_icon_box_setting"></label>
        </div>
        <?php
    }

    /**
     * Blog Grid
     */
    public function rselements_blog_grid_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_blog_grid_setting]" id="rs_blog_grid_setting" value="rselement_blog_grid" %s/>',
                (isset( $this->rselements_options['rs_blog_grid_setting']) && $this->rselements_options['rs_blog_grid_setting'] ) == 'rselement_blog_grid' ? 'checked' : ''
            );
            ?>
            <label for="rs_blog_grid_setting"></label>
        </div>
        <?php
    }

    /**
     * Blog Slider
     */
    public function rselements_blog_slider_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_blog_slider_setting]" id="rs_blog_slider_setting" value="rselement_blog_slider" %s/>',
                (isset( $this->rselements_options['rs_blog_slider_setting']) && $this->rselements_options['rs_blog_slider_setting'] ) == 'rselement_blog_slider' ? 'checked' : ''
            );
            ?>
            <label for="rs_blog_slider_setting"></label>
        </div>
        <?php
    }

    /**
     * Number Grid
     */
    public function rselements_number_grid_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_number_grid_setting]" id="rs_number_grid_setting" value="rselement_number_grid" %s/>',
                (isset( $this->rselements_options['rs_number_grid_setting']) && $this->rselements_options['rs_number_grid_setting'] ) == 'rselement_number_grid' ? 'checked' : ''
            );
            ?>
            <label for="rs_number_grid_setting"></label>
        </div>
        <?php
    }

    /**
     * Contact Form 7
     */
    public function rselements_contact_form_7_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_contact_form_7_setting]" id="rs_contact_form_7_setting" value="rselement_contact_form_7" %s/>',
                (isset( $this->rselements_options['rs_contact_form_7_setting']) && $this->rselements_options['rs_contact_form_7_setting'] ) == 'rselement_contact_form_7' ? 'checked' : ''
            );
            ?>
            <label for="rs_contact_form_7_setting"></label>
        </div>
        <?php
    }

    /**
     * Progress Bar
     */
    public function rselements_progress_bar_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_progress_bar_setting]" id="rs_progress_bar_setting" value="rselement_progress_bar" %s/>',
                (isset( $this->rselements_options['rs_progress_bar_setting']) && $this->rselements_options['rs_progress_bar_setting'] ) == 'rselement_progress_bar' ? 'checked' : ''
            );
            ?>
            <label for="rs_progress_bar_setting"></label>
        </div>
        <?php
    }

    /**
     * Progress Pie
     */
    public function rselements_progress_pie_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_progress_pie_setting]" id="rs_progress_pie_setting" value="rselement_progress_pie" %s/>',
                (isset( $this->rselements_options['rs_progress_pie_setting']) && $this->rselements_options['rs_progress_pie_setting'] ) == 'rselement_progress_pie' ? 'checked' : ''
            );
            ?>
            <label for="rs_progress_pie_setting"></label>
        </div>
        <?php
    }

    /**
     * Contact Box
     */
    public function rselements_contact_box_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_contact_box_setting]" id="rs_contact_box_setting" value="rselement_contact_box" %s/>',
                (isset( $this->rselements_options['rs_contact_box_setting']) && $this->rselements_options['rs_contact_box_setting'] ) == 'rselement_contact_box' ? 'checked' : ''
            );
            ?>
            <label for="rs_contact_box_setting"></label>
        </div>
        <?php
    }

    /**
     * Tooltip
     */
    public function rselements_tooltip_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_tooltip_setting]" id="rs_tooltip_setting" value="rselement_tooltip" %s/>',
                (isset( $this->rselements_options['rs_tooltip_setting']) && $this->rselements_options['rs_tooltip_setting'] ) == 'rselement_tooltip' ? 'checked' : ''
            );
            ?>
            <label for="rs_tooltip_setting"></label>
        </div>
        <?php
    }

    /**
     * Static Product
     * 
     */
    public function rselements_product_grid_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_product_grid_setting]" id="rs_product_grid_setting" value="rselement_product_grid" %s/>',
                (isset( $this->rselements_options['rs_product_grid_setting']) && $this->rselements_options['rs_product_grid_setting'] ) == 'rselement_product_grid' ? 'checked' : ''
            );
            ?>
            <label for="rs_product_grid_setting"></label>
        </div>
        <?php
    }

    /**
     * FAQ
     */
    public function rselements_faq_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_faq_setting]" id="rs_faq_setting" value="rselement_faq" %s/>',
                (isset( $this->rselements_options['rs_faq_setting']) && $this->rselements_options['rs_faq_setting'] ) == 'rselement_faq' ? 'checked' : ''
            );
            ?>
            <label for="rs_faq_setting"></label>
        </div>
        <?php
    }

    /**
     * Image Showcase
     */
    public function rselements_image_showcase_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_image_showcase_setting]" id="rs_image_showcase_setting" value="rselement_image_showcase" %s/>',
                (isset( $this->rselements_options['rs_image_showcase_setting']) && $this->rselements_options['rs_image_showcase_setting'] ) == 'rselement_image_showcase' ? 'checked' : ''
            );
            ?>
            <label for="rs_image_showcase_setting"></label>
        </div>
        <?php
    }

    /**
     * Image Hover Effect
     */
    public function rselements_image_hover_effect_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_image_hover_effect_setting]" id="rs_image_hover_effect_setting" value="rselement_image_hover_effect" %s/>',
                (isset( $this->rselements_options['rs_image_hover_effect_setting']) && $this->rselements_options['rs_image_hover_effect_setting'] ) == 'rselement_image_hover_effect' ? 'checked' : ''
            );
            ?>
            <label for="rs_image_hover_effect_setting"></label>
        </div>
        <?php
    }

    /**
     * Features List
     */
    public function rselements_features_list_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_features_list_setting]" id="rs_features_list_setting" value="rselement_features_list" %s/>',
                (isset( $this->rselements_options['rs_features_list_setting']) && $this->rselements_options['rs_features_list_setting'] ) == 'rselement_features_list' ? 'checked' : ''
            );
            ?>
            <label for="rs_features_list_setting"></label>
        </div>
        <?php
    }

     /**
     * Features List
     */
    public function rselements_rain_animation_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_rain_animation_setting]" id="rs_rain_animation_setting" value="rselement_rain_animation" %s/>',
                (isset( $this->rselements_options['rs_rain_animation_setting']) && $this->rselements_options['rs_rain_animation_setting'] ) == 'rselement_rain_animation' ? 'checked' : ''
            );
            ?>
            <label for="rs_rain_animation_setting"></label>
        </div>
        <?php
    }

    /**
     * Brochures
     */
    public function rselements_table_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_table_setting]" id="rs_table_setting" value="rselement_table" %s/>',
                (isset( $this->rselements_options['rs_table_setting']) && $this->rselements_options['rs_table_setting'] ) == 'rselement_table' ? 'checked' : ''
            );
            ?>
            <label for="rs_table_setting"></label>
        </div>
        <?php
    }

    /**
     * Dual Button
     */
    public function rselements_dual_button_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_dual_button_setting]" id="rs_dual_button_setting" value="rselement_dual_button" %s/>',
                (isset( $this->rselements_options['rs_dual_button_setting']) && $this->rselements_options['rs_dual_button_setting'] ) == 'rselement_dual_button' ? 'checked' : ''
            );
            ?>
            <label for="rs_dual_button_setting"></label>
        </div>
        <?php
    }

    /**
     * Image Parallax
     */
    public function rselements_image_parallax_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_image_parallax_setting]" id="rs_image_parallax_setting" value="rselement_image_parallax" %s/>',
                (isset( $this->rselements_options['rs_image_parallax_setting']) && $this->rselements_options['rs_image_parallax_setting'] ) == 'rselement_image_parallax' ? 'checked' : ''
            );
            ?>
            <label for="rs_image_parallax_setting"></label>
        </div>
        <?php
    }

    /**
     * Image Animation Shape
     */
    public function rselements_image_animation_shape_setting() {
        ?>
        
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_image_animation_shape_setting]" id="rs_image_animation_shape_setting" value="rselement_image_animation_shape" %s/>',
                (isset( $this->rselements_options['rs_image_animation_shape_setting']) && $this->rselements_options['rs_image_animation_shape_setting'] ) == 'rselement_image_animation_shape' ? 'checked' : ''
            );
            ?>
            <label for="rs_image_animation_shape_setting"></label>
        </div>
        <?php
    }


    /**
     * Accordion
     */
    public function rselements_pricing_list_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_pricing_list_setting]" id="rs_pricing_list_setting" value="rselement_pricing_list" %s/>',
                (isset( $this->rselements_options['rs_pricing_list_setting']) && $this->rselements_options['rs_pricing_list_setting'] ) == 'rselement_pricing_list' ? 'checked' : ''
            );
            ?>
            <label for="rs_pricing_list_setting"></label>
        </div>
        <?php
    }

    /**
     * Newsletter
     */
    public function rselements_countdown_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_countdown_setting]" id="rs_countdown_setting" value="rselement_countdown" %s/>',
                (isset( $this->rselements_options['rs_countdown_setting']) && $this->rselements_options['rs_countdown_setting'] ) == 'rselement_countdown' ? 'checked' : ''
            );
            ?>
            <label for="rs_countdown_setting"></label>
        </div>
        <?php
    }

    /**
     * Hover Tabs
     */
    public function rselements_business_hour_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_business_hour_setting]" id="rs_business_hour_setting" value="rselement_business_hour" %s/>',
                (isset( $this->rselements_options['rs_business_hour_setting']) && $this->rselements_options['rs_business_hour_setting'] ) == 'rselement_business_hour' ? 'checked' : ''
            );
            ?>
            <label for="rs_business_hour_setting"></label>
        </div>
        <?php
    }

    /**
     * Apps ScreenSlider
     */
    public function rselements_screenslider_setting() {
        ?>
        <div class="checkbox">
            <?php

            printf('<input type="checkbox" name="rselements_addon_option[rs_screen_slider_setting]" id="rs_screen_slider_setting" value="rselement_screen_slider" %s/>',
                (isset( $this->rselements_options['rs_screen_slider_setting']) && $this->rselements_options['rs_screen_slider_setting'] ) == 'rselement_screen_slider' ? 'checked' : ''
            );
            ?>
            <label for="rs_screen_slider_setting"></label>
        </div>
        <?php
    }

     /**
     * roadmap slider
     */
    public function rselements_dual_color_heading_setting() {
        ?>
        <div class="checkbox">
            <?php

            printf('<input type="checkbox" name="rselements_addon_option[rs_dual_color_heading_setting]" id="rs_dual_color_heading_setting" value="rselement_dual_color_heading" %s/>',
                (isset( $this->rselements_options['rs_dual_color_heading_setting']) && $this->rselements_options['rs_dual_color_heading_setting'] ) == 'rselement_dual_color_heading' ? 'checked' : ''
            );
            ?>
            <label for="rs_dual_color_heading_setting"></label>
        </div>
        <?php
    }



    /**
     * Post Navigation
     */
    public function rs_gradient_heading_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_gradient_heading_setting]" id="rs_gradient_heading_setting" value="rselement_gradient_heading" %s/>',
                (isset( $this->rselements_options['rs_gradient_heading_setting']) && $this->rselements_options['rs_gradient_heading_setting'] ) == 'rselement_gradient_heading' ? 'checked' : ''
            );
            ?>
            <label for="rs_gradient_heading_setting"></label>
        </div>
        <?php
    }


    /**
     * Event Grid
     */
    public function rs_event_grid_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_event_grid_setting]" id="rs_event_grid_setting" value="rs_event_grid" %s/>',
                (isset( $this->rselements_options['rs_event_grid_setting']) && $this->rselements_options['rs_event_grid_setting'] ) == 'rs_event_grid' ? 'checked' : ''
            );
            ?>
            <label for="rs_event_grid_setting"></label>
        </div>
        <?php
    }


    /**
     * Event Meta
     */
    public function rs_event_meta_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_event_meta_setting]" id="rs_event_meta_setting" value="rs_event_meta" %s/>',
                (isset( $this->rselements_options['rs_event_meta_setting']) && $this->rselements_options['rs_event_meta_setting'] ) == 'rs_event_meta' ? 'checked' : ''
            );
            ?>
            <label for="rs_event_meta_setting"></label>
        </div>
        <?php
    }


    /**
     * Event Meta
     */
    public function rs_event_sidebar_setting() {
        ?>
        <div class="checkbox">
            <?php
            printf('<input type="checkbox" name="rselements_addon_option[rs_event_sidebar_setting]" id="rs_event_sidebar_setting" value="rs_event_sidebar" %s/>',
                (isset( $this->rselements_options['rs_event_sidebar_setting']) && $this->rselements_options['rs_event_sidebar_setting'] ) == 'rs_event_sidebar' ? 'checked' : ''
            );
            ?>
            <label for="rs_event_sidebar_setting"></label>
        </div>
        <?php
    }



    
}

if( is_admin() )
    new RS_Elements_Addon_Control();