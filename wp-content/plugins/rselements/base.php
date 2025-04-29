<?php
/**
 * Main Elementor Rsaddon Extension Class
 *
 * The main class that initiates and runs the plugin.
 *
 * @since 1.0.0
 */
final class Rsaddon_Elementor_Pro_Extension {
	/**
	 * Plugin Version
	 *
	 * @since 1.0.0
	 *
	 * @var string The plugin version.
	 */
	const VERSION = '1.0.0';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const MINIMUM_PHP_VERSION = '5.4';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var Elementor_Test_Extension The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return Elementor_Test_Extension An instance of the class.
	 */
	public static function init() {

		static $instance = false;


		$get_version = get_option( 'rselement_version' );
        $updated     = get_option( 'rselement_updated' );

        if ( $get_version < RSELEMENT_VERSION && !$updated ) {
			
			
			$all_elements_list = self::rselements_widget_list();

			update_option('rselements_addon_option',$all_elements_list);

			update_option( 'rselement_version', RSELEMENT_VERSION );	
			update_option( 'rselement_updated',false );	
			
        }

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;

	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {	
		add_action( 'plugins_loaded', [ $this, 'rselement_init' ] );

		if(defined('WPML_TM_VERSION')){
	        add_filter( 'elementor/documents/get/post_id',[ $this, 'rselements_wpml_template_translation']);
        }

		register_activation_hook( RSADDON_PLUGIN_FILE, [$this,'rseelements_plugin_activate'] );
	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 *
	 * Fired by `init` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */


	/**
	 * Initialize the plugin
	 *
	 * Load the plugin only after Elementor (and other plugins) are loaded.
	 * Checks for basic plugin requirements, if one check fail don't continue,
	 * if all check have passed load the files required to run the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function rselement_init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}

		// Add Plugin actions
		add_action( 'elementor/widgets/register', [ $this, 'init_widgets' ] );
		add_action( 'elementor/elements/categories_registered', [ $this, 'add_category' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'rsaddon_register_plugin_styles' ] );		
		add_action( 'admin_enqueue_scripts', [ $this, 'rsaddon_admin_defualt_css' ] );		
		add_action( 'elementor/editor/before_enqueue_scripts', [ $this, 'rsaddon_register_plugin_admin_styles' ] );

		add_action( 'wp_enqueue_scripts', [ $this, 'rselements_studio_fonts_url' ] );

		$this->include_files();
		
	}

	public function rselements_wpml_template_translation($id){
	    $postType = get_post_type( $id );
	    if ( 'elementor_library' === $postType ) {
		    return apply_filters( 'wpml_object_id', $id, $postType, true );
	    }
	    return $id;
    }

	function rselements_studio_fonts_url() {
          $font_url = '';
          
          /*
          Translators: If there are characters in your language that are not supported
          by chosen font(s), translate this to 'off'. Do not translate into your own language.
           */
          if ( 'off' !== _x( 'on', 'Google font: on or off', 'rsaddon' ) ) {
              $font_url = add_query_arg( 'family', urlencode( 'Open Sans: 400,500,600,700|Montserrat: 400,500,600,700' ), "//fonts.googleapis.com/css" );
          }
        return $font_url;
    }

	public function rsaddon_register_plugin_styles() {

		$dir = plugin_dir_url(__FILE__);     
     
        wp_enqueue_style( 'slick-theme', $dir.'assets/css/slick-theme.css' );
        wp_enqueue_style( 'brands', $dir.'assets/css/brands.css' );
        wp_enqueue_style( 'solid', $dir.'assets/css/solid.css' );
        wp_enqueue_style( 'rsaddons-floaticon', $dir.'assets/fonts/flaticon.css' );
        wp_enqueue_style( 'headding-title', $dir.'assets/css/headding-title.css' );
        wp_enqueue_style( 'dataTables', '//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css' );
        wp_enqueue_style( 'rsaddons-pro', $dir.'assets/css/rsaddons.css' );		
		wp_enqueue_script( 'jquery-plugin', $dir.'assets/js/jquery.plugin.js' , array('jquery'), '201513434', true);  
		wp_enqueue_script( 'jquery-cookie', $dir.'assets/js/jquery.cookie.js' , array('jquery'), '201513434', true);	
		wp_enqueue_script( 'popper', $dir.'assets/js/popper.min.js' , array('jquery'), '201513434', true);    
        wp_enqueue_script( 'datatables', $dir.'assets/js/datatables.min.js' , array('jquery'), '201513434', true );       
        wp_enqueue_script( 'jquery-counterup', $dir.'assets/js/jquery.counterup.min.js' , array('jquery'), '201513434', true );  
        wp_enqueue_script( 'time-circle', $dir.'assets/js/time-circle.js' , array('jquery'), '201513434', true );     
        wp_enqueue_script( 'headding-title', $dir.'assets/js/headding-title.js' , array('jquery'), '201513434', true);      
        wp_enqueue_script( 'js-tilt-view', $dir.'assets/js/tilt.jquery.min.js', array('jquery'), '201513434', true);    
        wp_enqueue_script( 'jquery-plugin-progressbar', $dir.'assets/js/jQuery-plugin-progressbar.js' , array('jquery'), '201513434', true);      
        wp_enqueue_script( 'rsaddons-custom-pro', $dir.'assets/js/custom.js', array('jquery', 'imagesloaded'), '201513434', true); 	
       	
    }

    public function rsaddon_register_plugin_admin_styles(){
    	$dir = plugin_dir_url(__FILE__);
    	wp_enqueue_style( 'rsaddons-admin-pro', $dir.'assets/css/admin/admin.css' );
    	wp_enqueue_style( 'rsaddons-admin-floaticon-pro', $dir.'assets/fonts/flaticon.css' );
    } 

    public function rsaddon_admin_defualt_css(){
    	$dir = plugin_dir_url(__FILE__);
    	wp_enqueue_style( 'rsaddons-admin-pro-style', $dir.'assets/css/admin/style.css' );    	
    }

     public function include_files() {       
        require( __DIR__ . '/inc/rs-addon-icons.php' ); 
        require( __DIR__ . '/inc/form.php' );  
        require( __DIR__ . '/inc/helper.php' );  
        require( __DIR__ . '/inc/single-templates.php' );
    }

	public function add_category( $elements_manager ) {
        $elements_manager->add_category(
            'rsaddon_category',
            [
                'title' => esc_html__( 'RS Elementor Addons', 'rsaddon' ),
                'icon' => 'fa fa-smile-o',
            ]
        );
    }

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'rsaddon' ),
			'<strong>' . esc_html__( 'RS Addon Custom Elementor Addon', 'rsaddon' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'rsaddon' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'rsaddon' ),
			'<strong>' . esc_html__( 'RS Addon Custom Elementor Addon', 'rsaddon' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'rsaddon' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'rsaddon' ),
			'<strong>' . esc_html__( 'RS Addon Custom Elementor Addon', 'rsaddon' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'rsaddon' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	public function rseelements_plugin_activate() {
        $all_elements_list = $this->rselements_widget_list();

        update_option('rselements_addon_option',$all_elements_list);
    }


	public static function rselements_widget_list() {
        $rsall_elements = [
           
            'rs_portfolio_post' => 'rs_portfolio_post',
            'rs_testimonials_post' => 'rs_testimonials_post',
            'rs_events_post' => 'rs_events_post',
            'rs_team_post' => 'rs_team_post ',
            'rs_heading_setting' => 'rselement_heading',
            'rs_animated_heading_setting' => 'rselement_animated_heading',
            'rs_team_gread_setting' => 'rselement_team_gread',
            'rs_advanced_video_setting' => 'rselement_advanced_video',
            'rs_team_slider_setting' => 'rselement_team_slider',
            'rs_portfolio_grid_setting' => 'rselement_portfolio_grid',
            'rs_portfolio_filter_setting' => 'rselement_portfolio_filter',
            'rs_portfolio_slider_setting' => 'rselement_portfolio_slider',
            'rs_counter_setting' => 'rselement_counter',
            'rs_service_grid_setting' => 'rselement_service_grid',
            'rs_service_slider_setting' => 'rselement_service_grid',
            'rs_video_setting' => 'rselement_video',
            'rs_pricing_table_setting' => 'rselement_pricing_table',
            'rs_button_setting' => 'rselement_button',
            'rs_logo_showcase_setting' => 'rselement_logo_showcase',
            'rs_cta_setting' => 'rselement_cta',
            'rs_testimonial_grid_setting' => 'rselement_testimonial_grid',
            'rs_testimonial_slider_two_setting' => 'rselement_testimonial_slider_two',
            'rs_flip_box_setting' => 'rselement_flip_box',
            'rs_tab_setting' => 'rselement_tab',
            'rs_advance_tab_setting' => 'rselement_advance_tab',
            'rs_icon_box_setting' => 'rselement_icon_box',
            'rs_blog_grid_setting' => 'rselement_blog_grid',
            'rs_blog_slider_setting' => 'rselement_blog_slider',
            'rs_number_grid_setting' => 'rselement_number_grid',
            'rs_contact_form_7_setting' => 'rselement_contact_form_7',
            'rs_progress_bar_setting' => 'rselement_progress_bar',
            'rs_progress_pie_setting' => 'rselement_progress_pie',
            'rs_contact_box_setting' => 'rselement_contact_box',
            'rs_tooltip_setting' => 'rselement_tooltip',
            'rs_product_grid_setting' => 'rselement_product_grid',
            'rs_faq_setting' => 'rselement_faq',
            'rs_image_showcase_setting' => 'rselement_image_showcase',
            'rs_image_hover_effect_setting' => 'rselement_image_hover_effect',
            'rs_features_list_setting' => 'rselement_features_list',
            'rs_table_setting' => 'rselement_table',
            'rs_dual_button_setting' => 'rselement_dual_button',
            'rs_image_animation_shape_setting' => 'rselement_image_animation_shape',
            'rs_pricing_list_setting' => 'rselement_pricing_list',
            'rs_countdown_setting' => 'rselement_countdown',
            'rs_business_hour_setting' => 'rselement_business_hour',
            'rs_screen_slider_setting' => 'rselement_screen_slider',
            'rs_testimonial_slider_setting' => 'rselement_testimonial_slider',
            'rs_image_parallax_setting' => 'rselement_image_parallax',
            'rs_dual_color_heading_setting' => 'rselement_dual_color_heading',
            'rs_gradient_heading_setting' => 'rselement_gradient_heading',
            'rs_product_slider_settings' => 'rs_product_slider',
            'rs_product_slider_list_settings' => 'rs_product_slider_list',
            'rs_blockquote_settings' => 'rs_blockquote',
            'rs_static_product_setting' => 'rselement_static_product',
            'rs_rain_animation_setting' => 'rselement_rain_animation',
            'rs_event_grid_setting' => 'rs_event_grid',
            'rs_event_meta_setting' => 'rs_event_meta',
            'rs_event_sidebar_setting' => 'rs_event_sidebar',
           
        ];

        return $rsall_elements;
    }

	/**
	 * Init Widgets
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init_widgets() {
		//$licenseKey = get_option("ReobizWordPressTheme_lic_Key","");
		//if (!empty($licenseKey)){
		
		$rselements_addon_setting = get_option( 'rselements_addon_option' );

		// Register widget
		// heading widget -1
		if( isset( $rselements_addon_setting['rs_heading_setting'] ) == 'rselement_heading' ){
			require_once( __DIR__ . '/widgets/heading/heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_Heading_Widget() );
		}

		// heading - 2
		if( isset( $rselements_addon_setting['rs_dual_color_heading_setting'] ) == 'rselement_dual_color_heading' ){
            require_once( __DIR__ . '/widgets/dual-heading/dual-heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_Heading_dual_Widget() );	
        }

		// animated heading -3
		if( isset( $rselements_addon_setting['rs_animated_heading_setting'] ) == 'rselement_animated_heading' ){
			require_once( __DIR__ . '/widgets/animated-heading/animated-heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_Animated_Heading_Widget());
		}

		// dual color heading -4


		if( isset( $rselements_addon_setting['rs_gradient_heading_setting'] ) == 'rselement_gradient_heading' ){
            require_once( __DIR__ . '/widgets/gradient-heading/gradient-heading.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Prelements_Elementor_Pro_Gradient_Heading_Widget() );		
        }

		// grid -5

		if( isset( $rselements_addon_setting['rs_portfolio_grid_setting'] ) == 'rselement_portfolio_grid' ){
			require_once( __DIR__ . '/widgets/portfolio-grid/portfolio-grid-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Portfolio_pro_Grid_Widget() );
		
		}

		//Team Slider -6 
		if( isset( $rselements_addon_setting['rs_team_slider_setting'] ) == 'rselement_team_slider' ) {
			require_once( __DIR__ . '/widgets/team-member-slider/team-slider-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_Team_Slider_Pro_Widget() );
		}

		//Portfolio Filter -6
		if( isset( $rselements_addon_setting['rs_portfolio_filter_setting'] ) == 'rselement_portfolio_filter' ) {
			require_once( __DIR__ . '/widgets/portfolio-filter/portfolio-filter-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Portfolio_pro_Filter_Widget() );
		}

		//
		if( isset( $rselements_addon_setting['rs_team_gread_setting'] ) == 'rselement_team_gread' ) {
			require_once( __DIR__ . '/widgets/team-member/team-grid-widget.php' );	
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_Team_Grid_Widget() );
		}
		
		
		//Portfolio Slider
		if( isset( $rselements_addon_setting['rs_portfolio_slider_setting'] ) == 'rselement_portfolio_slider' ) {
			require_once( __DIR__ . '/widgets/portfolio-slider/portfolio-slider-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Portfolio_Slider_Pro_Widget() );	
		}
		//Counter
		if( isset( $rselements_addon_setting['rs_counter_setting'] ) == 'rselement_counter' ) {
			require_once( __DIR__ . '/widgets/counter/rs-counter.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RSCounter_Widget() );
		}
		//Service Grid
		if( isset( $rselements_addon_setting['rs_service_grid_setting'] ) == 'rselement_service_grid' ) {
			require_once( __DIR__ . '/widgets/services/rs-service-grid.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RSservices_Grid_Widget() );
		}
		//Service Slider
		if( isset( $rselements_addon_setting['rs_service_slider_setting'] ) == 'rselement_service_slider' ) {
			require_once( __DIR__ . '/widgets/service-slider/service-slider-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_services_Widget() );
		}
		//Video
		if( isset( $rselements_addon_setting['rs_video_setting'] ) == 'rselement_video' ) {
			require_once( __DIR__ . '/widgets/video/rs-video.php');
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RSvideo_Widget() );
		}
		//Pricing Table
		if( isset( $rselements_addon_setting['rs_pricing_table_setting'] ) == 'rselement_pricing_table' ) {
			require_once( __DIR__ . '/widgets/pricing-table/pricing-table.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_Pricing_Table_Widget() );
		}


		//Button
		if( isset( $rselements_addon_setting['rs_button_setting'] ) == 'rselement_button' ) {
			require_once( __DIR__ . '/widgets/button/button.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Button_Widget() );

		}
		//Logo Showcase
		if( isset( $rselements_addon_setting['rs_logo_showcase_setting'] ) == 'rselement_logo_showcase' ) {
			require_once( __DIR__ . '/widgets/logo-widget/logo.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Logo_Showcase_Widget() );
		}
		//CTA
		if( isset( $rselements_addon_setting['rs_cta_setting'] ) == 'rselement_cta' ) {
			require_once( __DIR__ . '/widgets/cta/cta.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_CTA_Widget() );
		}
		//Testimonial Grid
		if( isset( $rselements_addon_setting['rs_testimonial_grid_setting'] ) == 'rselement_testimonial_grid' ) {
			require_once( __DIR__ . '/widgets/testimonial/testimonail-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Testimonial_Grid_Widget() );
		}
		
		//Flip Box
		if( isset( $rselements_addon_setting['rs_flip_box_setting'] ) == 'rselement_flip_box' ) {
			require_once( __DIR__ . '/widgets/flip-box/flip-box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Flip_Box_Widget() );
		}
		//Tab
		if( isset( $rselements_addon_setting['rs_tab_setting'] ) == 'rselement_tab' ) {
			require_once( __DIR__ . '/widgets/tab/tab.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Tab_Widget() );
		}
		//Advance Tab
		if( isset( $rselements_addon_setting['rs_advance_tab_setting'] ) == 'rselement_advance_tab' ) {
			require_once( __DIR__ . '/widgets/advanced-tab/tab.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Pro_Advance_Tab_Widget() );
		}

		//Blog Grid
		if( isset( $rselements_addon_setting['rs_blog_grid_setting'] ) == 'rselement_blog_grid' ) {
			require_once( __DIR__ . '/widgets/blog-grid/blog-grid-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_Blog_Grid_Widget() );
		}
		//Blog Slider
		if( isset( $rselements_addon_setting['rs_blog_slider_setting'] ) == 'rselement_blog_slider' ) {
			require_once( __DIR__ . '/widgets/blog-slider/blog-slider-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_Pro_Blog_Slider_Widget() );
		}
		//Number Grid
		if( isset( $rselements_addon_setting['rs_number_grid_setting'] ) == 'rselement_number_grid' ) {
			require_once( __DIR__ . '/widgets/number/rs-number.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RSnumber_Grid_Widget() );
		}
		//Contact Form 7
		if( isset( $rselements_addon_setting['rs_contact_form_7_setting'] ) == 'rselement_contact_form_7' ) {
			require_once( __DIR__ . '/widgets/cf7/contact-cf7.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RSCF7_Widget() );
		}
		//Progress Bar
		if( isset( $rselements_addon_setting['rs_progress_bar_setting'] ) == 'rselement_progress_bar' ) {
			require_once( __DIR__ . '/widgets/progress/rs-progress.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_progress_Widget() );	
		}
		//Progress Pie
		if( isset( $rselements_addon_setting['rs_progress_pie_setting'] ) == 'rselement_progress_pie' ) {
			require_once( __DIR__ . '/widgets/progress-pie/progress-pie.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_Pro_Progress_Pie_Widget() );
		}
		//Contact Box
		if( isset( $rselements_addon_setting['rs_contact_box_setting'] ) == 'rselement_contact_box' ) {
			require_once( __DIR__ . '/widgets/contact-box/contact-box.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RScontactbox_Grid_Widget() );
		}
		//Tooltip
		if( isset( $rselements_addon_setting['rs_tooltip_setting'] ) == 'rselement_tooltip' ) {
			require_once( __DIR__ . '/widgets/tooltip/rs-tooltip.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RSTooltip_Box_Widget() );
		}
		//Static Product
		if( isset( $rselements_addon_setting['rs_static_product_setting'] ) == 'rselement_static_product' ) {
			require_once( __DIR__ . '/widgets/static-product/static-product.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RSStatic_Product_Widget() );
		}
		//FAQ
		if( isset( $rselements_addon_setting['rs_faq_setting'] ) == 'rs_faq_setting' ) {
			require_once( __DIR__ . '/widgets/faq/rs-faq.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_Faq_Widget() );
		}
		//Image Showcase
		if( isset( $rselements_addon_setting['rs_image_showcase_setting'] ) == 'rselement_image_showcase' ) {
			require_once( __DIR__ . '/widgets/image-widget/image.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Image_Showcase_Widget() );
		}
		//Image Hover Effect
		if( isset( $rselements_addon_setting['rs_image_hover_effect_setting'] ) == 'rselement_image_hover_effect' ) {
			require_once( __DIR__ . '/widgets/image-hover-widget/image-hover-effect.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Image_Hover_Effect_Widget() );
		}
		//Features List
		if( isset( $rselements_addon_setting['rs_features_list_setting'] ) == 'rselement_features_list' ) {
			require_once( __DIR__ . '/widgets/feature-list/feature-list.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_Pro_Features_List_Widget() );
		}
       
		//Dual Button
		if( isset( $rselements_addon_setting['rs_dual_button_setting'] ) == 'rselement_dual_button' ) {
			require_once( __DIR__ . '/widgets/dual-button/dual-button.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Pro_Dual_Button_Widget() );
		}
		//Image Parallax
		if( isset( $rselements_addon_setting['rs_image_parallax_setting'] ) == 'rselement_image_parallax' ) {
			require_once( __DIR__ . '/widgets/image-box/image.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Image_hover_Widget() );
		}
		//Image Animation Shape
		if( isset( $rselements_addon_setting['rs_image_animation_shape_setting'] ) == 'rselement_image_animation_shape' ) {
			require_once( __DIR__ . '/widgets/image-animation/image-animation.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Image_Animation_Effect_Widget() );
		}
		

		//Apps Screen Slider
		if( isset( $rselements_addon_setting['rs_screen_slider_setting'] ) == 'rselement_screen_slider' ) {
			require_once( __DIR__ . '/widgets/apps-screenshots/apps-screenshots.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_Apps_screenshots_Widget() );
		}

		// rs advanced vidoe

		if( isset( $rselements_addon_setting['rs_advanced_video_setting'] ) == 'rselement_advanced_video' ){
            require_once( __DIR__ . '/widgets/advance-video/advance-video.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RSaddvideo_Widget() );		
        }

		
		
		if( isset( $rselements_addon_setting['rs_pricing_list_setting'] ) == 'rselement_pricing_list' ){
            require_once( __DIR__ . '/widgets/price-list/price-list.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Price_List_Pro_Widget() );		
        }
		
		if( isset( $rselements_addon_setting['rs_business_hour_setting'] ) == 'rselement_business_hour' ){
            require_once( __DIR__ . '/widgets/business-hour/rs-hour.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_Business_Hour_Widget() );		
        }
		
		if( isset( $rselements_addon_setting['rs_countdown_setting'] ) == 'rselement_countdown' ){
            require_once( __DIR__ . '/widgets/countdown/countdown.php' );		
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_Pro_Countdown_Widget() );	
        }

		if( isset( $rselements_addon_setting['rs_table_setting'] ) == 'rselement_table' ){
            require_once( __DIR__ . '/widgets/table/table.php' );		
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Pro_Table_Elementor_Widget() );		
        }

		if( isset( $rselements_addon_setting['rs_rain_animation_setting'] ) == 'rselement_rain_animation' ){
            require_once( __DIR__ . '/widgets/rs-banner-line-animate/animate_line.php' );		
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_banner_line_animate_Widget() );		
        }

		if( isset( $rselements_addon_setting['rs_testimonial_slider_setting'] ) == 'rselement_testimonial_slider' ){
            require_once( __DIR__ . '/widgets/testimonial-slider/testimonail-slider-widget.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Pro_Testimonial_Slider_Widget() );		
        }

		if( isset( $rselements_addon_setting['rs_blockquote_settings'] ) == 'rs_blockquote' ){
            require_once( __DIR__ . '/widgets/blockquote/blockquote.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Pro_Blockquote_Widget() );		
        }

		
		if( isset( $rselements_addon_setting['rs_icon_box_setting'] ) == 'rselement_icon_box' ){
			require_once( __DIR__ . '/widgets/iconbox/rs-iconbox.php' );
			\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_pro_RSIcon_Box_Widget() );
			
		}	

		// Event Grid Here
        if( isset( $rselements_addon_setting['rs_event_grid_setting'] ) == 'rs_event_grid' ){
            require_once( __DIR__ . '/widgets/event-grid/event-grid-widget.php' );
            \Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_Events_Grid_Pro_Widget() );
        }

		// Event Meta Here
        if( isset( $rselements_addon_setting['rs_event_meta_setting'] ) == 'rs_event_meta' ){
            require_once( __DIR__ . '/widgets/event-meta/event_meta.php' );
            \Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_event_meta_Widget() );
        }

	    // Event Sidebar Here
        if( isset( $rselements_addon_setting['rs_event_sidebar_setting'] ) == 'rs_event_sidebar' ){
            require_once( __DIR__ . '/widgets/event-sidebar/event-sidebar.php' );
            \Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_pro_event_sidebar_Widget() );
        }					
					
		if(class_exists('woocommerce')) {

			if( isset( $rselements_addon_setting['rs_product_grid_setting'] ) == 'rselement_product_grid' ){
				require_once( __DIR__ . '/widgets/woocommerce/product-grid.php' );	
				\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_Pro_Product_Grid_Widget() );
			}

			if( isset( $rselements_addon_setting['rs_product_slider_settings'] ) == 'rs_product_slider' ){
				require_once( __DIR__ . '/widgets/woocommerce/product-slider.php' );	
				\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_Pro_Product_Slider_Widget() );
			}

			if( isset( $rselements_addon_setting['rs_product_slider_list_settings'] ) == 'rs_product_slider_list' ){
				require_once( __DIR__ . '/widgets/woocommerce/product-list.php' );	
				\Elementor\Plugin::instance()->widgets_manager->register( new \Rsaddon_Elementor_Pro_Product_List_Widget() );
			}
			
			
		}
		add_action( 'elementor/elements/categories_registered', [$this, 'add_category'] );
	}
}


function rselement_addon()
{
	return Rsaddon_Elementor_Pro_Extension::init();
}

// kick-off the plugin
rselement_addon();