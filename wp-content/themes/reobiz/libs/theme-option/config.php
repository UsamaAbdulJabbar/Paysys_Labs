<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "reobiz_option";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'reobiz/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        'page_priority'        => 8,
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Reobiz Options', 'reobiz' ),
        'page_title'           => esc_html__( 'Reobiz Options', 'reobiz' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        'forced_dev_mode_off' => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        'compiler' => true,

        // OPTIONAL -> Give you extra features
        'page_priority'        => 20,        
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        'force_output' => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( esc_html__( 'reobiz Theme', 'reobiz' ), $v );
    } else {
        $args['intro_text'] = esc_html__( 'reobiz Theme', 'reobiz' );
    }

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTSreobiz
      
     */     
   // -> START General Settings
   Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'General Sections', 'reobiz' ),
        'id'               => 'basic-checkbox',
        'customizer_width' => '450px',
        'fields'           => array(
        	array(
        	    'id'       => 'enable_global',
        	    'type'     => 'switch', 
        	    'title'    => esc_html__('Enable Global Settings', 'reobiz'),
        	    'subtitle' => esc_html__('If you enable global settings all option will be work only theme option', 'reobiz'),
        	    'default'  => false,
        	),
            array(
                'id'       => 'container_size',
                'title'    => esc_html__( 'Container Size', 'reobiz' ),
                'subtitle' => esc_html__( 'Container Size example(1200px)', 'reobiz' ),
                'type'     => 'text',
                'default'  => '1270px'                
            ),
            array(
                'id'       => 'logo',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Default Logo', 'reobiz' ),
                'subtitle' => esc_html__( 'Upload your logo', 'reobiz' ),
                'url'=> true                
            ),

            array(
                'id'       => 'logo_light',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Your Light', 'reobiz' ),
                'subtitle' => esc_html__( 'Upload your light logo', 'reobiz' ),
                'url'=> true                
            ),
            array(
                'id'       => 'logo_icons',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload default icon logo', 'reobiz' ),
                'subtitle' => esc_html__( 'Upload default icon logo', 'reobiz' ),
                'url'=> true
            ),

            array(
                'id'       => 'logo_icons_light',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Light icon logo', 'reobiz' ),
                'subtitle' => esc_html__( 'Upload Light icon logo', 'reobiz' ),
                'url'=> true
            ),

            array(
                    'id'       => 'logo-height',                               
                    'title'    => esc_html__( 'Logo Height', 'reobiz' ),
                    'subtitle' => esc_html__( 'Logo max height example(50px)', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => '25px'                    
            ), 

            array(
                    'id'       => 'logo-height-mobile',                               
                    'title'    => esc_html__( 'Mobile Logo Height', 'reobiz' ),
                    'subtitle' => esc_html__( 'Mobile Logo max height example(50px)', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => '25px'                    
            ),

            array(
                'id'       => 'rswplogo_sticky',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Your Sticky Logo', 'reobiz' ),
                'subtitle' => esc_html__( 'Upload your sticky logo', 'reobiz' ),
                'url'=> true                
            ),

            array(
                'id'       => 'sticky_logo_height',                               
                'title'    => esc_html__( 'Sticky Logo Height', 'reobiz' ),
                'subtitle' => esc_html__( 'Sticky Logo max height example(20px)', 'reobiz' ),
                'type'     => 'text',
                'default'  => '25px'
                    
            ),            
            array(
                'id'       => 'rs_favicon',
                'type'     => 'media',
                'title'    => esc_html__( 'Upload Favicon', 'reobiz' ),
                'subtitle' => esc_html__( 'Upload your faviocn here', 'reobiz' ),
                'url'=> true            
            ),
            
            array(
                'id'       => 'off_sticky',
                'type'     => 'switch', 
                'title'    => esc_html__('Sticky Menu', 'reobiz'),
                'subtitle' => esc_html__('You can show or hide sticky menu here', 'reobiz'),
                'default'  => false,
            ),
               
             array(
                'id'       => 'off_search',
                'type'     => 'switch', 
                'title'    => esc_html__('Show Search', 'reobiz'),
                'subtitle' => esc_html__('You can show or hide search icon at menu area', 'reobiz'),
                'default'  => false,
            ),           
 
     
            array(
                'id'       => 'show_top_bottom',
                'type'     => 'switch', 
                'title'    => esc_html__('Go to Top', 'reobiz'),
                'subtitle' => esc_html__('You can show or hide here', 'reobiz'),
                'default'  => false,
            ), 

            array(
                'id'       => 'show_top_bottom_postition',
                'type'     => 'button_set',
                'title'    => __('Go to Top Position', 'reobiz'),                
                'options' => array(
                    'left' => 'Left', 
                    'center' => 'Center', 
                    'right' => 'Right'
                 ), 
                'default' => 'right',
                'required' => array(
                    array(
                        'show_top_bottom',
                        'equals',
                        1,
                    ),
                ), 
            ),
        )
    ));
    
    
    // -> START Header Section
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header', 'reobiz' ),
        'id'               => 'header',
        'customizer_width' => '450px',
        'icon' => 'el el-certificate',       
         
        'fields'           => array(
        array(
            'id'     => 'notice_critical',
            'type'   => 'info',
            'notice' => true,
            'style'  => 'success',
            'title'  => esc_html__('Header Top Area', 'reobiz')            
        ),
        
        array(
                'id'       => 'show-top',
                'type'     => 'switch', 
                'title'    => esc_html__('Show Top Bar', 'reobiz'),
                'subtitle' => esc_html__('You can select top bar show or hide', 'reobiz'),
                'default'  => false,
        ),         
      
        
        array(
                'id'       => 'mobile-show-top',
                'type'     => 'switch', 
                'title'    => esc_html__('Mobile Show Top Bar', 'reobiz'),
                'subtitle' => esc_html__('You can select mobile top bar show or hide', 'reobiz'),
                'default'  => true,
                'required' => array(
                    array(
                        'show-top',
                        'equals',
                        1,
                    ),
                ), 
        ),         
      
        array(
            'id'       => 'show-social',
            'type'     => 'switch', 
            'title'    => esc_html__('Show Social Icons at Header', 'reobiz'),
            'subtitle' => esc_html__('You can select Social Icons show or hide', 'reobiz'),
            'default'  => true,
        ),  
                    
          array(
            'id'     => 'notice_critical2',
            'type'   => 'info',
            'notice' => true,
            'style'  => 'success',
            'title'  => esc_html__('Header Area', 'reobiz')            
        ),

        array(
                'id'               => 'header-grid',
                'type'             => 'select',
                'title'            => esc_html__('Header Area Width', 'reobiz'),                  
               
                //Must provide key => value pairs for select options
                'options'          => array(                                     
                
                    'container' => esc_html__('Container', 'reobiz'),
                    'full'      => esc_html__('Container Fluid', 'reobiz'),
                ),

                'default'          => 'container',            
            ),
    
        array(
                'id'       => 'phone',                               
                'title'    => esc_html__( ' Phone Number', 'reobiz' ),
                'subtitle' => esc_html__( 'Enter Phone Number', 'reobiz' ),
                'type'     => 'text',     
        ),

        array(
                'id'       => 'phone2',                               
                'title'    => esc_html__( ' Secondary Phone Number', 'reobiz' ),
                'subtitle' => esc_html__( 'Enter Phone Number', 'reobiz' ),
                'type'     => 'text',     
        ),

        array(
            'id'       => 'top-address',                               
            'title'    => esc_html__( 'Address Area', 'reobiz' ),
            'subtitle' => esc_html__( 'Enter Your address area', 'reobiz' ),
            'type'     => 'text', 
        ),
               
        array(
            'id'       => 'top-email',                               
            'title'    => esc_html__( 'Email Address', 'reobiz' ),
            'subtitle' => esc_html__( 'Enter Email Address', 'reobiz' ),
            'type'     => 'text',
            'validate' => 'email',
            'msg'      => esc_html__('Email Address Not Valid', 'reobiz')  
        ),         

        array(
            'id'       => 'open_hours',                               
            'title'    => esc_html__( 'Opening Hours', 'reobiz' ),
            'subtitle' => esc_html__( 'Enter Opening Hours', 'reobiz' ),
            'type'     => 'text',
            
        ),  

        array(
            'id'       => 'quote_btns',
            'type'     => 'switch', 
            'title'    => esc_html__('Show Quote Button', 'reobiz'),
            'subtitle' => esc_html__('You can show or hide Quote Button', 'reobiz'),
            'default'  => false,

        ),
            
        array(
            'id'       => 'quote',                               
            'title'    => esc_html__( 'Quote Button Text', 'reobiz' ),                  
            'type'     => 'text',
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ), 
                
        ),  
        
        array(
            'id'       => 'quote_link',                               
            'title'    => esc_html__( 'Quote Button Link', 'reobiz' ),
            'subtitle' => esc_html__( 'Enter Quote Button Link Here', 'reobiz' ),
            'type'     => 'text', 
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                
            ),
            array(
            'id'       => 'quote_btns_link',
            'type'     => 'switch', 
            'title'    => esc_html__('Open Quote Button Link New Window', 'reobiz'),            
            'default'  => false,
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ), 
        ),

        array(
            'id'        => 'quote_bg_colros',
            'type'      => 'color',                       
            'title'     => esc_html__('Quote Button Bg Color','reobiz'),
            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
            'default'   => '',                        
            'validate'  => 'color',  
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                      
        ),

        array(
            'id'        => 'quote_txt_colros',
            'type'      => 'color',                       
            'title'     => esc_html__('Quote Button Color','reobiz'),
            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
            'default'   => '',                        
            'validate'  => 'color',  
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                      
        ),

        array(
            'id'        => 'quote_hover__bg_colros',
            'type'      => 'color',                       
            'title'     => esc_html__('Quote Button Hover Bg Color','reobiz'),
            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
            'default'   => '',                        
            'validate'  => 'color',  
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                      
        ),

        array(
            'id'        => 'quote_hover_txt__colros',
            'type'      => 'color',                       
            'title'     => esc_html__('Quote Button Hover Color','reobiz'),
            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
            'default'   => '',                        
            'validate'  => 'color',  
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                      
        ),


        array(
            'id'        => 'quote_stk_bg_colros',
            'type'      => 'color',                       
            'title'     => esc_html__('Quote Button Bg Color (Sticky)','reobiz'),
            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
            'default'   => '',                        
            'validate'  => 'color',  
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                      
        ),

        array(
            'id'        => 'quote_stk_txt_colros',
            'type'      => 'color',                       
            'title'     => esc_html__('Quote Button Bg Color (Sticky)','reobiz'),
            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
            'default'   => '',                        
            'validate'  => 'color',  
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                      
        ),

        array(
            'id'        => 'quote_hover_sticky_bg_colros',
            'type'      => 'color',                       
            'title'     => esc_html__('Quote Button Hover Bg Color (Sticky)','reobiz'),
            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
            'default'   => '',                        
            'validate'  => 'color',  
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                      
        ),

        array(
            'id'        => 'quote_hover_txt_sticky_colros',
            'type'      => 'color',                       
            'title'     => esc_html__('Quote Button Hover Color (Sticky)','reobiz'),
            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
            'default'   => '',                        
            'validate'  => 'color',  
            'required' => array(
                array(
                    'quote_btns',
                    'equals',
                    1,
                ),
            ),                      
        ),
              
        )
    ) 

);  
   

Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Header Layout', 'reobiz' ),
'id'               => 'header-style',
'customizer_width' => '450px',
'subsection' =>true,      
'fields'    => array( 
                    
                array(
                    'id'       => 'header_layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Header Layout', 'reobiz'), 
                    'subtitle' => esc_html__('Select header layout. Choose between 1, 2 or 3 layout.', 'reobiz'),
                    'options'  => array(
                    'style1'   => array(
                        'alt'      => 'Header Style 1', 
                        'img'      => get_template_directory_uri().'/libs/img/style_1.png'
                    ),                        
                    'style4' => array(
                        'alt'    => 'Header Style 2', 
                        'img'    => get_template_directory_uri().'/libs/img/style_2.png'
                    ),
                    'style3' => array(
                        'alt'    => 'Header Style 3', 
                        'img'    => get_template_directory_uri().'/libs/img/style_3.png'
                    ),
                    'style6' => array(
                        'alt'    => 'Header Style 4', 
                        'img'    => get_template_directory_uri().'/libs/img/style_4.png'
                    ),
                    'style5' => array(
                        'alt'    => 'Header Style 5', 
                        'img'    => get_template_directory_uri().'/libs/img/style_5.png'
                    ), 
                    'style7' => array(
                        'alt'    => 'Header Style 6', 
                        'img'    => get_template_directory_uri().'/libs/img/style_6.png'
                    ),
                    'style8' => array(
                        'alt'    => 'Header Style 7', 
                        'img'    => get_template_directory_uri().'/libs/img/style_7.png'
                    ),               
                    ),
                    'default' => 'style1'
            ),                           
                
        )
    ) 
);

                                   
//Topbar settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Toolbar area', 'reobiz' ),
        'desc'   => esc_html__( 'Toolbar area Style Here', 'reobiz' ),        
        'subsection' =>true,  
        'fields' => array( 
                        
                array(
                    'id'        => 'toolbar_bg_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar background Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#106eea',                        
                    'validate'  => 'color',                        
                ),
                array(
                    'id'        => 'toolbar_bg_skew_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Skew background Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ),    

                array(
                    'id'        => 'toolbar_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Text Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ), 

                 array(
                    'id'        => 'transparent_toolbar_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Transparent Toolbar Text Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ),  

                array(
                    'id'        => 'toolbar_link_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Link Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ), 

               

                array(
                    'id'        => 'toolbar_link_hover_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Link Hover Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#cccccc',                        
                    'validate'  => 'color',                        
                ),  

                 array(
                    'id'        => 'transparent_toolbar_link_hover_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Transparent Toolbar Link Hover Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#cccccc',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_ic_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Icon Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_soci_ic_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Toolbar Social Icon Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'toolbar_text_size',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Toolbar Font Size','reobiz'),
                    'subtitle'  => esc_html__('Font Size', 'reobiz'),    
                    'default'   => '14px',                                            
                ), 

                array(
                    'id'        => 'toolbar_borders',
                    'type'      => 'color_rgba',                       
                    'title'     => esc_html__('Seperator Border Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),   
                      
                    'default'  => array(
                        'color'     => '',
                        'alpha'     => 1                    
                    ),
                    'output' => array(                 
                    'border-color'            => '#rs-header .toolbar-area .toolbar-contact ul li, #rs-header .toolbar-area .opening, #rs-header.header-style5 .toolbar-area .opening, #rs-header.header-style5 .toolbar-area .toolbar-contact ul li, #rs-header.header-style5 .toolbar-area'
                    )
                ),  
                
        )
    )
);

    //Preloader settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Preloader Style', 'reobiz' ),
        'desc'   => esc_html__( 'Preloader Style Here', 'reobiz' ),        
        'fields' => array( 
            array(
                'id'       => 'show_preloader',
                'type'     => 'switch', 
                'title'    => esc_html__('Show Preloader', 'reobiz'),
                'subtitle' => esc_html__('You can show or hide preloader', 'reobiz'),
                'default'  => false,
            ), 

            array(
                'id'        => 'preloader_bg_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Preloader Background Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '#ffffff',                        
                'validate'  => 'color',                        
            ), 
            
            array(
                'id'        => 'preloader_text_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Preloader Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '#ffffff',                        
                'validate'  => 'color',                        
            ), 

            array(
                'id'    => 'preloader_img', 
                'url'   => true,     
                'title' => esc_html__( 'Preloader Image', 'reobiz' ),                 
                'type'  => 'media',                                  
            ),       
        )
    ));   

//End Preloader settings  
    // -> START Style Section
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Style', 'reobiz' ),
        'id'               => 'stle',
        'customizer_width' => '450px',
        'icon' => 'el el-brush',
        ));
    
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Global Style', 'reobiz' ),
        'desc'   => esc_html__( 'Style your theme', 'reobiz' ),        
        'subsection' =>true,  
        'fields' => array( 
                        
                        array(
                            'id'        => 'body_bg_color',
                            'type'      => 'color',                           
                            'title'     => esc_html__('Body Backgroud Color','reobiz'),
                            'subtitle'  => esc_html__('Pick body background color', 'reobiz'),
                            'default'   => '#ffffff',
                            'validate'  => 'color',                        
                        ), 
                        
                        array(
                            'id'        => 'body_text_color',
                            'type'      => 'color',            
                            'title'     => esc_html__('Text Color','reobiz'),
                            'subtitle'  => esc_html__('Pick text color', 'reobiz'),
                            'default'   => '#363636',
                            'validate'  => 'color',                        
                        ),     
        
                        array(
                            'id'        => 'primary_color',
                            'type'      => 'color', 
                            'title'     => esc_html__('Primary Color','reobiz'),
                            'subtitle'  => esc_html__('Select Primary Color.', 'reobiz'),
                            'default'   => '#101010',
                            'validate'  => 'color',                        
                        ), 

                        array(
                            'id'        => 'secondary_color',
                            'type'      => 'color', 
                            'title'     => esc_html__('Secondary Color','reobiz'),
                            'subtitle'  => esc_html__('Select Secondary Color.', 'reobiz'),
                            'default'   => '#1273eb',
                            'validate'  => 'color',                        
                        ),

                        array(
                            'id'        => 'link_text_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Link Color','reobiz'),
                            'subtitle'  => esc_html__('Pick Link color', 'reobiz'),
                            'default'   => '#1273eb',
                            'validate'  => 'color',                        
                        ),
                        
                        array(
                            'id'        => 'link_hover_text_color',
                            'type'      => 'color',                 
                            'title'     => esc_html__('Link Hover Color','reobiz'),
                            'subtitle'  => esc_html__('Pick link hover color', 'reobiz'),
                            'default'   => '#1273eb',
                            'validate'  => 'color',                        
                        ),    
                       
                 ) 
            ) 
    ); 

       
    
    //Menu settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Main Menu', 'reobiz' ),
        'desc'   => esc_html__( 'Main Menu Style Here', 'reobiz' ),        
        'subsection' =>true,  
        'fields' => array( 

                        array(
                            'id'     => 'notice_critical_menu',
                            'type'   => 'info',
                            'notice' => true,
                            'style'  => 'success',
                            'title'  => esc_html__('Main Menu Settings', 'reobiz'),                                           
                        ),

                        array(
                            'id'       => 'main_menu_center',
                            'type'     => 'switch',
                            'title'    => esc_html__( 'Main Menu Center', 'reobiz' ),
                            'on'       => esc_html__( 'Enabled', 'reobiz' ),
                            'off'      => esc_html__( 'Disabled', 'reobiz' ),
                            'default'  => false,
                        ),

                        array(
                            'id'       => 'main_menu_icon',
                            'type'     => 'switch',
                            'title'    => esc_html__( 'Main Menu Icon Hide', 'reobiz' ),
                            'on'       => esc_html__( 'Enabled', 'reobiz' ),
                            'off'      => esc_html__( 'Disabled', 'reobiz' ),
                            'default'  => false,
                        ),

                        array(
                            'id'        => 'menu_area_bg_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Main Menu Background Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                            'default'   => '',                        
                            'validate'  => 'color',                        
                        ), 

                        array(
                            'id'        => 'menu_borders',
                            'type'      => 'color_rgba',                       
                            'title'     => esc_html__('Border Color (Only For Header Style 3)','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),   
                              
                            'default'  => array(
                                'color'     => '',
                                'alpha'     => 1                    
                            ),
                            'output' => array(                 
                            'border-color'            => 'body #rs-header.header-style-3 .header-inner .box-layout'
                            )
                        ),
                        
                        array(
                            'id'        => 'menu_text_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Main Menu Text Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                            'default'   => '#101010',                        
                            'validate'  => 'color',                        
                        ), 
                        
                        array(
                            'id'        => 'transparent_menu_text_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Tranparent Menu Text Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                            'default'   => '#ffffff',                        
                            'validate'  => 'color',                        
                        ), 

                        array(
                            'id'        => 'transparent_menu_hover_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Tranparent Menu Hover Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                            'default'   => '#1273eb',                        
                            'validate'  => 'color',                        
                        ),  

                        array(
                            'id'        => 'transparent_menu_active_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Tranparent Menu Active Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                            'default'   => '#1273eb',                        
                            'validate'  => 'color',                        
                        ), 

                        array(
                            'id'        => 'menu_text_hover_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Main Menu Text Hover Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),           
                            'default'   => '#1273eb',                 
                            'validate'  => 'color',                        
                        ), 

                        array(
                            'id'        => 'menu_text_active_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Main Menu Text Active Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),
                            'default'   => '#1273eb',
                            'validate'  => 'color',                        
                        ),

                        array(
                            'id'        => 'onepage_menu_text_active_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Onepage menu active Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),
                            'default'   => '',
                            'validate'  => 'color',                        
                        ),

                        array(
                            'id'        => 'menu_desc_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Main Description Text Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),
                            'default'   => '',
                            'validate'  => 'color',
                            'output' => array(                 
                                'color'            => '.navbar-menu span.description'
                                )                         
                        ),

                        array(
                            'id'        => 'menu_item_gap',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Menu Item Left Right Gap','reobiz'),   
                            'default'   => '10px',                             
                        ),

                        array(
                            'id'        => 'menu_item_gap2',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Menu Item Top Gap','reobiz'),   
                            'default'   => '45px',                             
                        ),                        

                        array(
                            'id'        => 'menu_item_gap3',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Menu Item Bottom Gap','reobiz'),   
                            'default'   => '45px',                             
                        ),

                        array(
                            'id'       => 'menu_text_trasform',
                            'type'     => 'switch',
                            'title'    => esc_html__( 'Menu Text Uppercase', 'reobiz' ),
                            'on'       => esc_html__( 'Enabled', 'reobiz' ),
                            'off'      => esc_html__( 'Disabled', 'reobiz' ),
                            'default'  => false,
                        ),

                        array(
                            'id'     => 'notice_critical_dropmenu',
                            'type'   => 'info',
                            'notice' => true,
                            'style'  => 'success',
                            'title'  => esc_html__('Dropdown Menu Settings', 'reobiz'),                                           
                        ),
                                               
                        array(
                            'id'        => 'drop_down_bg_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Dropdown Menu Background Color','reobiz'),
                            'subtitle'  => esc_html__('Pick bg color', 'reobiz'),
                            'default'   => '#ffffff',
                            'validate'  => 'color',                        
                        ), 
                            
                        
                        array(
                            'id'        => 'drop_text_color',
                            'type'      => 'color',                     
                            'title'     => esc_html__('Dropdown Menu Text Color','reobiz'),
                            'subtitle'  => esc_html__('Pick text color', 'reobiz'),
                            'default'   => '#101010',
                            'validate'  => 'color',                        
                        ), 
                        
                        array(
                            'id'        => 'drop_text_hover_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Dropdown Menu Hover Text Color','reobiz'),
                            'subtitle'  => esc_html__('Pick text color', 'reobiz'),
                            'default'   => '#1273eb',
                            'validate'  => 'color',                        
                        ),                              
                     

                        array(
                            'id'       => 'menu_text_trasform2',
                            'type'     => 'switch',
                            'title'    => esc_html__( 'Dropdown Menu Text Uppercase', 'reobiz' ),
                            'on'       => esc_html__( 'Enabled', 'reobiz' ),
                            'off'      => esc_html__( 'Disabled', 'reobiz' ),
                            'default'  => false,
                        ),

                        array(
                            'id'       => 'menu_text_plus_icon',
                            'type'     => 'switch',
                            'title'    => esc_html__( 'Dropdown Menu Plus Icon', 'reobiz' ),
                            'on'       => esc_html__( 'Enabled', 'reobiz' ),
                            'off'      => esc_html__( 'Disabled', 'reobiz' ),
                            'default'  => false,
                        ),

                        array(
                             'id'        => 'dropdown_menu_item_gap',
                             'type'      => 'text',                       
                             'title'     => esc_html__('Dropdown Menu Item Left Right Gap','reobiz'),   
                             'default'   => '40px',                             
                         ), 

                        array(
                             'id'        => 'dropdown_menu_item_separate',
                             'type'      => 'text',                       
                             'title'     => esc_html__('Dropdown Menu Item Middle Gap','reobiz'),   
                             'default'   => '10px',                             
                         ), 
                         array(
                             'id'        => 'dropdown_menu_item_gap2',
                             'type'      => 'text',                       
                             'title'     => esc_html__('Dropdown Menu Boxes Top Bottom Gap','reobiz'),   
                             'default'   => '21px',                             
                         ),
                         array(
                             'id'     => 'notice_critical3',
                             'type'   => 'info',
                             'notice' => true,
                             'style'  => 'success',
                             'title'  => esc_html__('Mega Menu Settings', 'reobiz'),                                           
                         ),

                          array(
                            'id'        => 'meaga_menu_item_gap',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Mega Menu Item Left Right Gap','reobiz'),   
                            'default'   => '40px',                             
                        ), 

                         array(
                            'id'        => 'mega_menu_item_separate',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Mega Menu Item Middle Gap','reobiz'),   
                            'default'   => '10px',                             
                        ),  
                        array(
                            'id'        => 'mega_menu_item_gap2',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Mega Menu Boxes Top Bottom Gap','reobiz'),   
                            'default'   => '21px',                             
                        ),                       
                        
                        
                )
            )
        ); 

     //Sticky Menu settings
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Sticky Menu', 'reobiz' ),
        'desc'       => esc_html__( 'Sticky Menu Style Here', 'reobiz' ),        
        'subsection' =>true,  
        'fields' => array(                       

                        array(
                            'id'        => 'stiky_menu_area_bg_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Sticky Menu Area Background Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                            'default'   => '#ffffff',                        
                            'validate'  => 'color',                        
                        ), 
                        
                        array(
                            'id'        => 'stikcy_menu_text_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Menu Text Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                            'default'   => '#101010',                        
                            'validate'  => 'color',                        
                        ), 
                       

                        array(
                            'id'        => 'sticky_menu_text_hover_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Menu Text Hover Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),           
                            'default'   => '#1273eb',                 
                            'validate'  => 'color',                        
                        ), 

                        array(
                            'id'        => 'stikcy_menu_text_active_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Main Menu Text Active Color','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),
                            'default'   => '#1273eb',
                            'validate'  => 'color',                        
                        ),
                                               
                        array(
                            'id'        => 'sticky_drop_down_bg_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Dropdown Menu Background Color','reobiz'),
                            'subtitle'  => esc_html__('Pick bg color', 'reobiz'),
                            'default'   => '#ffffff',
                            'validate'  => 'color',                        
                        ), 
                            
                        
                        array(
                            'id'        => 'stikcy_drop_text_color',
                            'type'      => 'color',                     
                            'title'     => esc_html__('Dropdown Menu Text Color','reobiz'),
                            'subtitle'  => esc_html__('Pick text color', 'reobiz'),
                            'default'   => '#101010',
                            'validate'  => 'color',                        
                        ), 
                        
                        array(
                            'id'        => 'sticky_drop_text_hover_color',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Dropdown Menu Hover Text Color','reobiz'),
                            'subtitle'  => esc_html__('Pick text color', 'reobiz'),
                            'default'   => '#1273eb',
                            'validate'  => 'color',                        
                        ),  

                        array(
                            'id'        => 'menu_item_gap_sticky',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Menu Item Left & Right Gap','reobiz'),  
                            'subtitle'  => esc_html__('Example:15px', 'reobiz'),                            
                        ),


                        array(
                            'id'        => 'menu_item_gap2_sticky',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Menu Item Top Gap','reobiz'),  
                            'subtitle'  => esc_html__('Example:15px', 'reobiz'),  
                                                      
                        ),                        

                        array(
                            'id'        => 'menu_item_gap3_sticky',
                            'type'      => 'text',                       
                            'title'     => esc_html__('Menu Item Bottom Gap','reobiz'),   
                            'subtitle'  => esc_html__('Example:15px', 'reobiz'),                                                
                        ),                      
                )
            )
        ); 

    //Breadcrumb settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Breadcrumb Style', 'reobiz' ),      
        'subsection' =>true,  
        'fields' => array( 

                    array(
                        'id'       => 'off_breadcrumb_all',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Show or Hide Banner', 'reobiz'),
                        'subtitle' => esc_html__('You can show or hide Banner here Note: If you turn on the option, Banner will be hidden.', 'reobiz'),
                        'default'  => false,
                    ),

                    array(
                        'id'       => 'off_breadcrumb',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Show off Breadcrumb', 'reobiz'),
                        'subtitle' => esc_html__('You can show or hide off breadcrumb here', 'reobiz'),
                        'default'  => true,
                    ),

                    array(
                        'id'        => 'breadcrumb_bg_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Background Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#101010',                        
                        'validate'  => 'color',                        
                    ),                     

                     array(
                        'id'       => 'page_banner_main',
                        'type'     => 'media',
                        'title'    => esc_html__( 'Background Banner', 'reobiz' ),
                        'subtitle' => esc_html__( 'Upload your banner', 'reobiz' ),                  
                    ), 

                     array(
                        'id'        => 'breadcrumb_title',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Title Font Size','reobiz'),                          
                        'default'   => '46px'                                                                       
                    ), 

                    array(
                        'id'               => 'breadcrumb-align',
                        'type'             => 'select',
                        'title'            => esc_html__('Title & Breadcrumb Alignment', 'reobiz'),                   
                        'desc'             => esc_html__('Change your title and breadcrumb text alignment', 'reobiz'),
                    //Must provide key => value pairs for select options
                    'options'          => array(
                        'rs-banner-left'               => esc_html__('Left','reobiz'),                                   
                        'rs-banner-center'                => esc_html__('Center', 'reobiz'),                                         
                        'rs-banner-right'                => esc_html__('Right', 'reobiz'),
                       
                        ),
                        'default'          => 'center',                                  
                    ),  
                    
                    array(
                        'id'        => 'breadcrumb_text_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Text Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#ffffff',                        
                        'validate'  => 'color',                        
                    ),                   

                    array(
                        'id'        => 'breadcrumb_seperator_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Breadcrumb Seperator Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#1273eb',                        
                        'validate'  => 'color',                        
                    ),  
                    
                  
                    array(
                        'id'        => 'breadcrumb_top_gap',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Top Gap','reobiz'),                          
                        'default'   => '120px',                                              
                    ), 
                    array(
                        'id'        => 'breadcrumb_bottom_gap',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Bottom Gap','reobiz'),                          
                        'default'   => '120px',                                             
                    ),

                    array(
                        'id'        => 'breadcrumb_top_gap_mobile',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Top Gap (Mobile)','reobiz'),                          
                        'default'   => '',                                              
                    ), 
                    array(
                        'id'        => 'breadcrumb_bottom_gap_mobile',
                        'type'      => 'text',                       
                        'title'     => esc_html__('Bottom Gap (Mobile)','reobiz'),                          
                        'default'   => '',                                             
                    ),     
                        
                )
            )
        );

    //Button settings
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Button Style', 'reobiz' ),
        'desc'       => esc_html__( 'Button Style Here', 'reobiz' ),        
        'subsection' =>true,  
        'fields' => array( 

                    array(
                        'id'        => 'btn_bg_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Background Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#1273eb',                        
                        'validate'  => 'color',                        
                    ), 

                    array(
                        'id'        => 'btn_bg_hover',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Hover Background','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#1273eb',                        
                        'validate'  => 'color',                        
                    ), 

                    array(
                        'id'        => 'btn_bg_hover_border',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Hover Border Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#1273eb',                        
                        'validate'  => 'color',                        
                    ), 
                    
                    array(
                        'id'        => 'btn_text_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Text Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#ffffff',                        
                        'validate'  => 'color',                        
                    ), 
                    
                    array(
                        'id'        => 'btn_txt_hover_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Hover Text Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#ffffff',                        
                        'validate'  => 'color',                        
                    ),  
                )
            )
        );
    
    //offcanvas  settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Offcanvas Style', 'reobiz' ),
        'desc'   => esc_html__( 'Offcanvas Style Here', 'reobiz' ),        
        'subsection' =>false,  
        'fields' => array( 

                array(
                    'id'       => 'off_canvas',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Show off Canvas', 'reobiz'),
                    'subtitle' => esc_html__('You can show or hide off canvas here', 'reobiz'),
                    'default'  => false,
                ), 

                array(
                    'id'       => 'Offcanvas_layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Hamburger Layout', 'reobiz'), 
                    'subtitle' => esc_html__('Select Hamburger layout.', 'reobiz'),
                    'options'  => array(
                        'style1'   => array(
                        'alt'      => 'Hamburger Style 1', 
                        'img'      => get_template_directory_uri().'/libs/img/ham_dots.png'
                        
                        ),                        
                        'style2' => array(
                            'alt'    => 'Hamburger Style 2', 
                            'img'    => get_template_directory_uri().'/libs/img/ham_line.png'
                        ),                                   
                    ),
                    'default' => 'style1'
                ), 

                array(
                    'id'        => 'offcan_bgs_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Background Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ), 
   

                array(
                    'id'        => 'offcan_link_social_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Social Icon Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#ffffff',                        
                    'validate'  => 'color',                        
                ), 

                array(
                    'id'        => 'offcan_txt_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Text Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#333333',                        
                    'validate'  => 'color',                        
                ),
                 
                array(
                    'id'        => 'offcan_link_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Link Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#333333',                        
                    'validate'  => 'color',                        
                ),  
                array(
                    'id'        => 'offcan_link_hovers_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Link hover Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#555555',                        
                    'validate'  => 'color',                        
                ),  

                array(
                    'id'        => 'offcanvas_line_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Line Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#1273eb',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'Offcanvas_layout',
                            'equals',
                            'style2',
                        ),
                    ),                         
                ),

                array(
                    'id'        => 'offcanvas_closede_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Close Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#1273eb',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'Offcanvas_layout',
                            'equals',
                            'style2',
                        ),
                    ),                         
                ),
          
                array(
                    'id'        => 'offcanvas_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Dots Primary Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '#333333',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'Offcanvas_layout',
                            'equals',
                            'style1',
                        ),
                    ),                         
                ),

                array(
                    'id'        => 'offcanvas_text_color_sticky',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Dots Primary Color (Sticky)','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'Offcanvas_layout',
                            'equals',
                            'style1',
                        ),
                    ),                         
                ), 
          
                array(
                    'id'        => 'offcanvas_dots_secondary_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Dots Secondary Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'Offcanvas_layout',
                            'equals',
                            'style1',
                        ),
                    ),                         
                ),
          
                array(
                    'id'        => 'offcanvas_dots_secondary_color_sticky',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Dots Secondary Color (Sticky)','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'Offcanvas_layout',
                            'equals',
                            'style1',
                        ),
                    ),                         
                ),

                array(
                    'id'        => 'offcanvas_close_dots_primary_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Close Dots Primary Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '',                        
                    'validate'  => 'color', 
                    'required' => array(
                        array(
                            'Offcanvas_layout',
                            'equals',
                            'style1',
                        ),
                    ),                         
                ),

                array(
                    'id'        => 'offcanvas_dots_close_secondary_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Hamburger Close Dots Secondary Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '',                        
                    'validate'  => 'color',  
                    'required' => array(
                        array(
                            'Offcanvas_layout',
                            'equals',
                            'style1',
                        ),
                    ),                        
                ),
            )
        )
    );
    

    //-> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Typography', 'reobiz' ),
        'id'     => 'typography',
        'desc'   => esc_html__( 'You can specify your body and heading font here','reobiz'),
        'icon'   => 'el el-font',
        'fields' => array(

            array(
                'id'       => 'new_update_typography',
                'type'     => 'button_set',
                'title'    => __('Typography Option', 'reobiz'),                
                'options' => array(
                    'rsdefault' => 'Default Typography', 
                    'rsupdate' => 'Update Typography',
                ), 
                'default' => 'rsdefault'                
            ),

            array(
                'id'       => 'opt-typography-body',
                'type'     => 'typography',
                'title'    => esc_html__( 'Body Font', 'reobiz' ),
                'subtitle' => esc_html__( 'Specify the body font properties.', 'reobiz' ),
                'google'   => true, 
                'font-style' =>false,           
                'default'  => array(                    
                    'font-size'   => '16px',
                    'font-family' => 'Roboto',
                    'font-weight' => '400',
                    'color'       => '',
                    'line-height' => ''
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsdefault'
                    ),
                )
            ),
             array(
                'id'       => 'opt-typography-menu',
                'type'     => 'typography',
                'title'    => esc_html__( 'Navigation Font', 'reobiz' ),
                'subtitle' => esc_html__( 'Specify the menu font properties.', 'reobiz' ),
                'google'   => true,
                'font-backup' => true,                
                'all_styles'  => true,              
                'default'  => array(
                    'color'       => '#202427',                    
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '15px',                    
                    'font-weight' => '500',                    
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsdefault'
                    ),
                )
            ),
            array(
                'id'          => 'opt-typography-h1',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H1', 'reobiz' ),
                'font-backup' => true,                
                'all_styles'  => true,
                'units'       => 'px',
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                'color'       => '#0a0a0a',
                'font-style'  => '700',
                'font-family' => 'Poppins',
                'google'      => true,
                'font-size'   => '46px',
                'line-height' => '56px'
                
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsdefault'
                    ),
                )
            ),
            array(
                'id'          => 'opt-typography-h2',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H2', 'reobiz' ),
                'font-backup' => true,                
                'all_styles'  => true,                 
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                    'color'       => '#0a0a0a',
                    'font-style'  => '700',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '36px',
                    'line-height' => '40px'                    
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsdefault'
                    ),
                )
            ),
            array(
                'id'          => 'opt-typography-h3',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H3', 'reobiz' ),             
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                    'color'       => '#0a0a0a',
                    'font-style'  => '700',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '28px',
                    'line-height' => '32px'
                    
                    ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsdefault'
                    ),
                )
            ),
            array(
                'id'          => 'opt-typography-h4',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H4', 'reobiz' ),                
                'font-backup' => false,                
                'all_styles'  => true,               
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                    'color'       => '#0a0a0a',
                    'font-style'  => '700',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '20px',
                    'line-height' => '28px'
                    ),
                    'required' => array(
                        array(
                            'new_update_typography',
                            'equals',
                            'rsdefault'
                        ),
                    )
                ),
            array(
                'id'          => 'opt-typography-h5',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H5', 'reobiz' ),                
                'font-backup' => false,                
                'all_styles'  => true,                
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                    'default'     => array(
                    'color'       => '#0a0a0a',
                    'font-style'  => '700',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '18px',
                    'line-height' => '28px'
                    ),
                    'required' => array(
                        array(
                            'new_update_typography',
                            'equals',
                            'rsdefault'
                        ),
                    )
                ),
            array(
                'id'          => 'opt-typography-6',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H6', 'reobiz' ),
             
                'font-backup' => false,                
                'all_styles'  => true,                
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                    'color'       => '#0a0a0a',
                    'font-style'  => '700',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '20px'
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsdefault'
                    ),
                )
            ), 



            array(
                'id'       => 'opt-typography-body-update',
                'type'     => 'typography',
                'title'    => esc_html__( 'Body Font', 'reobiz' ),
                'subtitle' => esc_html__( 'Specify the body font properties.', 'reobiz' ),
                'google'   => true, 
                'font-style' =>false,   
                'text-align'  => false,         
                'default'  => array(                    
                    'font-size'   => '',
                    'font-family' => '',
                    'font-weight' => '',
                    'color'       => '',
                    'line-height' => ''
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsupdate'
                    ),
                )
            ),

            array(
                'id'       => 'opt-typography-menu-update',
                'type'     => 'typography',
                'title'    => esc_html__( 'Navigation Font', 'reobiz' ),
                'subtitle' => esc_html__( 'Specify the menu font properties.', 'reobiz' ),
                'google'   => true,
                'font-backup' => true,                
                'all_styles'  => true,              
                'color'  => false,              
                'text-align'  => false,              
                'default'  => array(                   
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '',                    
                    'font-weight' => '',                    
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsupdate'
                    ),
                )
            ),
            array(
                'id'          => 'opt-typography-h1-update',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H1', 'reobiz' ),
                'font-backup' => true,                
                'all_styles'  => true,
                'units'       => 'px',
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                'color'       => '',
                'font-style'  => '',
                'font-family' => '',
                'google'      => true,
                'font-size'   => '',
                'line-height' => ''                
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsupdate'
                    ),
                )
            ),
            array(
                'id'          => 'opt-typography-h2-update',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H2', 'reobiz' ),
                'font-backup' => true,                
                'all_styles'  => true,                 
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                    'color'       => '',
                    'font-style'  => '',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '',
                    'line-height' => ''
                    
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsupdate'
                    ),
                )
            ),

            array(
                'id'       => 'opt-typography-body-sidebar-update',
                'type'     => 'typography',
                'title'    => esc_html__( 'Sidebar H2 Typography', 'reobiz' ),
                'subtitle' => esc_html__( 'Specify the body font properties.', 'reobiz' ),
                'google'   => true, 
                'font-style' =>false,   
                'text-align'  => false,         
                'default'  => array(                    
                    'font-size'   => '',
                    'font-family' => '',
                    'font-weight' => '',
                    'color'       => '',
                    'line-height' => ''
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsupdate'
                    ),
                )
            ),

            array(
                'id'          => 'opt-typography-h3-update',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H3', 'reobiz' ),             
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                    'color'       => '',
                    'font-style'  => '',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '',
                    'line-height' => ''
                    
                    ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsupdate'
                    ),
                )
            ),
            array(
                'id'          => 'opt-typography-h4-update',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H4', 'reobiz' ),                
                'font-backup' => false,                
                'all_styles'  => true,               
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                    'color'       => '',
                    'font-style'  => '',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '',
                    'line-height' => ''
                    ),
                    'required' => array(
                        array(
                            'new_update_typography',
                            'equals',
                            'rsupdate'
                        ),
                    )
                ),
            array(
                'id'          => 'opt-typography-h5-update',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H5', 'reobiz' ),                
                'font-backup' => false,                
                'all_styles'  => true,                
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                    'default'     => array(
                    'color'       => '',
                    'font-style'  => '',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '',
                    'line-height' => ''
                    ),
                    'required' => array(
                        array(
                            'new_update_typography',
                            'equals',
                            'rsupdate'
                        ),
                    )
                ),
            array(
                'id'          => 'opt-typography-6-update',
                'type'        => 'typography',
                'title'       => esc_html__( 'Heading H6', 'reobiz' ),
             
                'font-backup' => false,                
                'all_styles'  => true,                
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__( 'Typography option with each property can be called individually.', 'reobiz' ),
                'default'     => array(
                    'color'       => '',
                    'font-style'  => '',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '',
                    'line-height' => ''
                ),
                'required' => array(
                    array(
                        'new_update_typography',
                        'equals',
                        'rsupdate'
                    ),
                )
            ),                
        )
    )                   
);

    /*Blog Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog', 'reobiz' ),
        'id'               => 'blog',
        'customizer_width' => '450px',
        'icon' => 'el el-comment',
        )
        );
        
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog Settings', 'reobiz' ),
        'id'               => 'blog-settings',
        'subsection'       => true,
        'customizer_width' => '450px',      
        'fields'           => array(
                                
                array(
                    'id'       => 'off_banner_blog_all',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Show or Hide Banner', 'reobiz'),
                    'subtitle' => esc_html__('You can show or hide Banner here', 'reobiz'),
                    'default'  => false,
                ),
                array(
                    'id'    => 'blog_banner_main', 
                    'url'   => true,     
                    'title' => esc_html__( 'Blog Page Banner', 'reobiz' ),                 
                    'type'  => 'media',                                  
                ),

                array(
                    'id'        => 'banner__top__gap',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Banner Top Gap','reobiz'),   
                    'default'   => '',                             
                ),                        

                array(
                    'id'        => 'banner__btm__gap',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Banner Bottom Gap','reobiz'),   
                    'default'   => '',                             
                ),  

                array(
                    'id'        => 'blog_bg_color',
                    'type'      => 'color',                           
                    'title'     => esc_html__('Body Backgroud Color','reobiz'),
                    'subtitle'  => esc_html__('Pick body background color', 'reobiz'),
                    'default'   => '#fbfbfb',
                    'validate'  => 'color',                        
                ),

                array(
                    'id'        => 'breadcrumb__title_text_color',
                    'type'      => 'color',                       
                    'title'     => esc_html__('Title Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                    'default'   => '',                        
                    'validate'  => 'color',                        
                ),
                
                array(
                    'id'       => 'blog_title',                               
                    'title'    => esc_html__( 'Blog  Title', 'reobiz' ),
                    'subtitle' => esc_html__( 'Enter Blog  Title Here', 'reobiz' ),
                    'type'     => 'text',                                   
                ),
                
                array(
                    'id'               => 'blog-layout',
                    'type'             => 'image_select',
                    'title'            => esc_html__('Select Blog Layout', 'reobiz'), 
                    'subtitle'         => esc_html__('Select your blog layout', 'reobiz'),
                    'options'          => array(
                    'full'             => array(
                    'alt'              => 'Blog Style 1', 
                    'img'              => get_template_directory_uri().'/libs/img/1c.png'                                      
                ),
                    '2right'           => array(
                    'alt'              => 'Blog Style 2', 
                    'img'              => get_template_directory_uri().'/libs/img/2cr.png'
                ),
                '2left'            => array(
                'alt'              => 'Blog Style 3', 
                'img'              => get_template_directory_uri().'/libs/img/2cl.png'
                ),                                  
                ),
                'default'          => '2right'
                ),                      
                
                array(
                    'id'               => 'blog-grid',
                    'type'             => 'select',
                    'title'            => esc_html__('Select Blog Gird', 'reobiz'),                   
                    'desc'             => esc_html__('Select your blog gird layout', 'reobiz'),
                //Must provide key => value pairs for select options
                'options'          => array(
                    '12'               => esc_html__('1 Column','reobiz'),                                   
                    '6'                => esc_html__('2 Column', 'reobiz'),                                         
                    '4'                => esc_html__('3 Column', 'reobiz'),
                    '3'                => esc_html__('4 Column', 'reobiz'),
                    ),
                    'default'          => '12',                                  
                ),  
                
                array(
                'id'               => 'blog-author-post',
                'type'             => 'select',
                'title'            => esc_html__('Show Author Info ', 'reobiz'),                   
                'desc'             => esc_html__('Select author info show or hide', 'reobiz'),
                //Must provide key => value pairs for select options
                'options'          => array(                                            
                'show'             => esc_html__('Show','reobiz'), 
                'hide'             => esc_html__('Hide', 'reobiz'),
                ),
                'default'          => 'show',
                
                ), 

                

                array(
                'id'               => 'blog-category',
                'type'             => 'select',
                'title'            => esc_html__('Show Category', 'reobiz'),                   
               
                //Must provide key => value pairs for select options
                'options'          => array(                                            
                'show'             => esc_html__('Show','reobiz'), 
                'hide'             => esc_html__('Hide', 'reobiz'),
                ),
                'default'          => 'show',
                
                ),  
                
                array(
                    'id'               => 'blog-date',
                    'type'             => 'switch',
                    'title'            => esc_html__('Show Date', 'reobiz'),                   
                    'desc'             => esc_html__('You can show/hide date at blog page', 'reobiz'),
                    
                    'default'          => true,
                ), 
                array(
                    'id'               => 'blog_readmore',                               
                    'title'            => esc_html__( 'Blog  ReadMore Text', 'reobiz' ),
                    'subtitle'         => esc_html__( 'Enter Blog  ReadMore Here', 'reobiz' ),
                    'type'             => 'text',                                   
                ),
                
            )
        ) 
                
    );
    
    
    /*Single Post Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Single Post', 'reobiz' ),
        'id'               => 'spost',
        'subsection'       => true,
        'customizer_width' => '450px',      
        'fields'           => array(                            
            
            array(
                'id'       => 'off_banner_blog_single_all',
                'type'     => 'switch', 
                'title'    => esc_html__('Show or Hide Banner', 'reobiz'),
                'subtitle' => esc_html__('You can show or hide Banner here', 'reobiz'),
                'default'  => false,
            ),

            array(
                    'id'       => 'blog_banner', 
                    'url'      => true,     
                    'title'    => esc_html__( 'Blog Single page banner', 'reobiz' ),                  
                    'type'     => 'media',
                    
            ),  
           
            array(
               'id'       => 'blog-author',
               'type'     => 'switch', 
               'title'    => esc_html__('Show Meta', 'reobiz'),
               'subtitle' => esc_html__('You can show or hide Meta', 'reobiz'),
               'default'  => false,
            ),   
           
            array(
               'id'       => 'blog-pagination',
               'type'     => 'switch', 
               'title'    => esc_html__('Single Post Pagination Show/Hide', 'reobiz'),
               'subtitle' => esc_html__('You can show or hide single post pagination', 'reobiz'),
               'default'  => true,
            ),     
        )
    ));

  
    /*Team Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Team Section', 'reobiz' ),
        'id'               => 'team',
        'customizer_width' => '450px',
        'icon' => 'el el-user',
        'fields'           => array(

             array(
                'id'       => 'show-team-banner',
                'type'     => 'switch', 
                'title'    => esc_html__('Show Team Page Banner', 'reobiz'),
                'subtitle' => esc_html__('You can select banner show or hide', 'reobiz'),
                'default'  => true,
            ), 
        
            array(
                    'id'       => 'team_single_image', 
                    'url'      => true,     
                    'title'    => esc_html__( 'Team Single page banner image', 'reobiz' ),                    
                    'type'     => 'media',
                    
            ),  

             array(
                    'id'        => 'team_single_bg_color',
                    'type'      => 'color',                           
                    'title'     => esc_html__('Sinlge Team Body Backgroud Color','reobiz'),
                    'subtitle'  => esc_html__('Pick body background color', 'reobiz'),
                    'default'   => '#ffffff',
                    'validate'  => 'color',                        
                ),
            
                array(
                    'id'       => 'team_slug',                               
                    'title'    => esc_html__( 'Team Slug', 'reobiz' ),
                    'subtitle' => esc_html__( 'Enter Team Slug Here', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => esc_html__('teams', 'reobiz'),
                    
                ),  

                array(
                    'id'       => 'team_cat_slug',                               
                    'title'    => esc_html__( 'Team Category Slug', 'reobiz' ),
                    'subtitle' => esc_html__( 'Enter Team Cat Slug Here', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => '',
                    
                ), 

                array(
                        'id'       => 'team_level',                               
                        'title'    => esc_html__( 'Team Category Level', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Level Here Here', 'reobiz' ),
                        'type'     => 'text',
                        'default'  => 'Team Categorires',
                        
                ),   
                
                array(
                        'id'       => 'quick_contact_text',                               
                        'title'    => esc_html__( ' Quick Contact Text', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Quick Contact Text', 'reobiz' ),
                        'type'     => 'text',
                        'default'  => 'Quick Contact',
                        
                ),   

                array(
                        'id'       => 'exp_activities_text',                               
                        'title'    => esc_html__( 'Experience & Activities Text', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Experience & Activities Text', 'reobiz' ),
                        'type'     => 'text',
                        'default'  => 'Experience & Activities',
                        
                ),                
                          
             )
         ) 
    );  



    /*Department Sections*/
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Portfolio Section', 'reobiz' ),
        'id'               => 'Portfolio',
        'customizer_width' => '450px',
        'icon' => 'el el-align-right',
        'fields'           => array(

            array(
            'id'       => 'disable_portfoli_banner',
            'type'     => 'switch', 
            'title'    => esc_html__('Disable Portfolio Details Banner', 'reobiz'),
            'subtitle' => esc_html__('You can show or hide banner here', 'reobiz'),
            'default'  => true,
        ),
        
        array(
            'id'       => 'department_single_image', 
            'url'      => true,     
            'title'    => esc_html__( 'Portfolio Single page banner image', 'reobiz' ),                    
            'type'     => 'media',
            'required' => array(
                array(
                    'disable_portfoli_banner',
                    'equals',
                    1,
                ),
            ), 
                
        ),           


            array(
                    'id'       => 'portfolio_slug',                               
                    'title'    => esc_html__( 'Portfolio Slug', 'reobiz' ),
                    'subtitle' => esc_html__( 'Enter Portfolio Slug Here', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => 'portfolio',
                    
            ), 

            array(
                    'id'       => 'portfolio_cat_slug',                               
                    'title'    => esc_html__( 'Portfolio Category Slug', 'reobiz' ),
                    'subtitle' => esc_html__( 'Enter Portfolio Cat Slug Here', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => '',
                    
            ), 

            array(
                    'id'       => 'portfolio_level',                               
                    'title'    => esc_html__( 'Portfolio Category Level', 'reobiz' ),
                    'subtitle' => esc_html__( 'Enter Level Here Here', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => 'Portfolio Categorires',
                    
            ), 
        )
    ) 
);


    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Event Style', 'reobiz' ),
        'desc'   => esc_html__( 'Event Style Here', 'reobiz' ),
        'icon'   => 'el el-share',
        'submenu' => true, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array( 

                array(
                    'id'       => 'disable_events_banner',
                    'type'     => 'switch', 
                    'title'    => esc_html__('Disable Banner Image', 'reobiz'),
                    'subtitle' => esc_html__('You can show or hide banner here', 'reobiz'),
                    'default'  => true,
                ),
                
                array(
                    'id'       => 'event_single_image', 
                    'url'      => true,     
                    'title'    => esc_html__( 'Banner image', 'reobiz' ),                    
                    'type'     => 'media',
                    'required' => array(
                        array(
                            'disable_events_banner',
                            'equals',
                            1,
                        ),
                    ),  
                ),          

                array(
                    'id'       => 'event_slug',                               
                    'title'    => esc_html__( 'Event Slug', 'reobiz' ),
                    'subtitle' => esc_html__( 'Enter Event Slug Here', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => 'events',
                    'required' => array(
                        array(
                            'disable_events_banner',
                            'equals',
                            1,
                        ),
                    ), 
                ),       
            ) 
        ) 
    );



    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Social Icons', 'reobiz' ),
        'desc'   => esc_html__( 'Add your social icon here', 'reobiz' ),
        'icon'   => 'el el-share',
         'submenu' => true, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array(
                    array(
                        'id'       => 'facebook',                               
                        'title'    => esc_html__( 'Facebook Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Facebook Link', 'reobiz' ),
                        'type'     => 'text',                     
                    ),
                        
                     array(
                        'id'       => 'twitter',                               
                        'title'    => esc_html__( 'Twitter Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Twitter Link', 'reobiz' ),
                        'type'     => 'text'
                    ),
                    
                        array(
                        'id'       => 'rss',                               
                        'title'    => esc_html__( 'Rss Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Rss Link', 'reobiz' ),
                        'type'     => 'text'
                    ),
                    
                     array(
                        'id'       => 'pinterest',                               
                        'title'    => esc_html__( 'Pinterest Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Pinterest Link', 'reobiz' ),
                        'type'     => 'text'
                    ),
                     array(
                        'id'       => 'linkedin',                               
                        'title'    => esc_html__( 'Linkedin Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Linkedin Link', 'reobiz' ),
                        'type'     => 'text',
                        
                    ),
                     array(
                        'id'       => 'google',                               
                        'title'    => esc_html__( 'Google Plus Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Google Plus  Link', 'reobiz' ),
                        'type'     => 'text',                       
                    ),

                    array(
                        'id'       => 'instagram',                               
                        'title'    => esc_html__( 'Instagram Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Instagram Link', 'reobiz' ),
                        'type'     => 'text',                       
                    ),

                     array(
                        'id'       => 'youtube',                               
                        'title'    => esc_html__( 'Youtube Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Youtube Link', 'reobiz' ),
                        'type'     => 'text',                       
                    ),

                    array(
                        'id'       => 'tumblr',                               
                        'title'    => esc_html__( 'Tumblr Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Tumblr Link', 'reobiz' ),
                        'type'     => 'text',                       
                    ),

                    array(
                        'id'       => 'vimeo',                               
                        'title'    => esc_html__( 'Vimeo Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Vimeo Link', 'reobiz' ),
                        'type'     => 'text',                       
                    ),  

                    array(
                        'id'       => 'telegram',                               
                        'title'    => esc_html__( 'Telegram Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Telegram Link', 'reobiz' ),
                        'type'     => 'text',                       
                    ), 

                    array(
                        'id'       => 'tiktok',                               
                        'title'    => esc_html__( 'Tiktok Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Tiktok Link', 'reobiz' ),
                        'type'     => 'text',                       
                    ), 

                    array(
                        'id'       => 'whatsapp',                               
                        'title'    => esc_html__( 'Whatsapp Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Whatsapp Link', 'reobiz' ),
                        'type'     => 'text',                       
                    ),

                    array(
                        'id'       => 'soundcloud',                               
                        'title'    => esc_html__( 'Soundcloud Link', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter Soundcloud Link', 'reobiz' ),
                        'type'     => 'text',                       
                    ), 

                     array(
                        'id'       => 'show-icon-extra',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Do you want exta Iocn?', 'reobiz'),
                        'subtitle' => esc_html__('You can show here extra icon here', 'reobiz'),
                        'default'  => false,
                ),               
        
       

                     array(
                    'id'       => 'extra_icon',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Extra Social Icon', 'reobiz' ),
                    'subtitle' => esc_html__( 'You can add your own social icon here as like <li> <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a> </li> and each icon seperate line', 'reobiz' ),
                    'default' => '<li> <a href="#" target="_blank"><i class="fab fa-accessible-icon"></i></a> </li>',
                     'required' => array(
                    array(
                        'show-icon-extra',
                        'equals',
                        1,
                    ),
                ), 
                   
                ), 

                        
            ) 
        ) 
    );
    
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Mouse Pointer', 'reobiz' ),
        'desc'   => esc_html__( 'Add your Mouse Pointer here', 'reobiz' ),
        'icon'   => 'el el-hand-up',
         'submenu' => true, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array(
                        array(
                            'id'       => 'show_pointer',
                            'type'     => 'switch', 
                            'title'    => esc_html__('Show Pointer', 'reobiz'),
                            'subtitle' => esc_html__('You can show or hide Mouse Pointer', 'reobiz'),
                            'default'  => false,
                        ), 

                        array(
                            'id'        => 'pointer_border',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Pointer Border','reobiz'),
                            'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                            'default'   => '#1273eb',                        
                            'validate'  => 'color',                        
                        ), 

                        array(
                            'id'       => 'border_width',                               
                            'title'    => esc_html__( 'Border Width', 'reobiz' ),
                            'subtitle' => esc_html__( 'Enter Pointer Border Width', 'reobiz' ),
                            'type'     => 'text',
                            'default'   => '2',                         
                        ), 

                        array(
                            'id'        => 'pointer_bg',
                            'type'      => 'color',                       
                            'title'     => esc_html__('Pointer Background','reobiz'),
                            'subtitle'  => esc_html__('Enter Pointer Background color', 'reobiz'),    
                            'default'   => 'transparent',                        
                            'validate'  => 'color',                        
                        ),  


                        array(
                            'id'       => 'diameter',                               
                            'title'    => esc_html__( 'Diameter', 'reobiz' ),
                            'subtitle' => esc_html__( 'Enter Pointer diameter Size', 'reobiz' ),
                            'type'     => 'text',  
                            'default'   => '40',                    
                        ),   

                        array(
                            'id'       => 'speed',                               
                            'title'    => esc_html__( 'Pointer Speed', 'reobiz' ),
                            'subtitle' => esc_html__( 'Enter Pointer Scale Size', 'reobiz' ),
                            'type'     => 'text',
                            'default'   => '4',                         
                        ),                     

                        array(
                            'id'       => 'scale',                               
                            'title'    => esc_html__( 'Hover Scale', 'reobiz' ),
                            'subtitle' => esc_html__( 'Enter Pointer Scale Size', 'reobiz' ),
                            'type'     => 'text',
                            'default'   => '1.3',                         
                        ),
            ) 
        ) 
    );
    if ( class_exists( 'WooCommerce' ) ) {
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Woocommerce', 'reobiz' ),    
        'icon'   => 'el el-shopping-cart',    
        ) 
    ); 

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Shop', 'reobiz' ),
        'id'               => 'shop_layout',
        'customizer_width' => '450px',
        'subsection' =>true,      
        'fields'           => array(                      
            array(
                'id'       => 'shop_banner', 
                'url'      => true,     
                'title'    => esc_html__( 'Shop page banner', 'reobiz' ),                    
                'type'     => 'media',
            ), 
            array(
                    'id'       => 'shop-layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Select Shop Layout', 'reobiz'), 
                    'subtitle' => esc_html__('Select your shop layout', 'reobiz'),
                    'options'  => array(
                        'full'      => array(
                            'alt'   => 'Shop Style 1', 
                            'img'   => get_template_directory_uri().'/libs/img/1c.png'                                      
                        ),
                        'right-col' => array(
                            'alt'   => 'Shop Style 2', 
                            'img'   => get_template_directory_uri().'/libs/img/2cr.png'
                        ),
                        'left-col'  => array(
                            'alt'   => 'Shop Style 3', 
                            'img'   => get_template_directory_uri().'/libs/img/2cl.png'
                        ),                                  
                    ),
                    'default' => 'full'
                ),

                array(
                    'id'       => 'wc_num_product',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Number of Products Per Page', 'reobiz' ),
                    'default'  => '9',
                ),

                array(
                    'id'       => 'wc_num_product_per_row',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Number of Products Per Row', 'reobiz' ),
                    'default'  => '3',
                ),

                array(
                    'id'       => 'related_product_per_page',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Related Products Per Page', 'reobiz' ),
                    'default'  => '3',
                ),

                array(
                    'id'       => 'wc_cart_icon',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Cart Icon Show At Menu Area', 'reobiz' ),
                    'on'       => esc_html__( 'Enabled', 'reobiz' ),
                    'off'      => esc_html__( 'Disabled', 'reobiz' ),
                    'default'  => false,
                ), 

                array(
                    'id'        => 'cart',
                    'type'      => 'color',
                    'title'     => esc_html__('Cart Icon Color (Normal)','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '',
                    'validate'  => 'color',
                    'output' => array(                 
                        'color'            => '.menu-cart-area i'
                    ), 
                    'required' => array('wc_cart_icon','equals', true),                       
                ),

                array(
                    'id'        => 'carts',
                    'type'      => 'color',
                    'title'     => esc_html__('Cart Icon Color (Sticky)','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '',
                    'validate'  => 'color',
                    'output' => array(                 
                        'color'            => '.header-inner.sticky .menu-cart-area i'
                    ), 
                    'required' => array('wc_cart_icon','equals', true),                       
                ), 

                array(
                    'id'        => 'carts_shops',
                    'type'      => 'color',
                    'title'     => esc_html__('Shop Icon Color ','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '',
                    'validate'  => 'color',
                    'output' => array(                 
                        'color'            => '.menu-cart-area .woocommerce-mini-cart__empty-message:before'
                    ), 
                    'required' => array('wc_cart_icon','equals', true),                       
                ),

                array(
                    'id'        => 'carts_shops_text',
                    'type'      => 'color',
                    'title'     => esc_html__('Shop Text Color ','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '',
                    'validate'  => 'color',
                    'output' => array(                 
                        'color'            => '.menu-cart-area .woocommerce-mini-cart__empty-message'
                    ), 
                    'required' => array('wc_cart_icon','equals', true),                       
                ),

                array(
                    'id'       => 'cart_count',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Cart Count Show', 'reobiz' ),
                    'on'       => esc_html__( 'Enabled', 'reobiz' ),
                    'off'      => esc_html__( 'Disabled', 'reobiz' ),
                    'default'  => false,
                ),

                array(
                    'id'        => 'cart_count_colors_bg',
                    'type'      => 'color',
                    'title'     => esc_html__('Cart Count Bg Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '',
                    'validate'  => 'color',
                    'output' => array(                 
                        'background-color'            => '.rsw-count'
                    ), 
                    'required' => array('cart_count','equals', true),                       
                ), 

                array(
                    'id'        => 'cart_count_colors',
                    'type'      => 'color',
                    'title'     => esc_html__('Cart Count Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '',
                    'validate'  => 'color',
                    'output' => array(                 
                        'color'            => '.rsw-count'
                    ), 
                    'required' => array('cart_count','equals', true),                       
                ), 

                array(
                'id'       => 'disable-sidebar',
                'type'     => 'switch', 
                'title'    => esc_html__('Sidebar Disable For Single Product Page', 'reobiz'),                
                'default'  => true,
            ), 
               
            )
        ) 
    );
}
   
    Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Footer Option', 'reobiz' ),
    'desc'   => esc_html__( 'Footer style here', 'reobiz' ),
    'icon'   => 'el el-th-large',   
    'fields' => array(
                array(
                        'id'       => 'footer_bg_image', 
                        'url'      => true,     
                        'title'    => esc_html__( 'Footer Background Image', 'reobiz' ),                 
                        'type'     => 'media',                                  
                ),

                array(
                        'id'        => 'footer_bg_color',
                        'type'      => 'color',
                        'title'     => esc_html__('Footer Bg Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                        'default'   => '#101010',
                        'validate'  => 'color',                        
                    ),  

                 array(
                    'id'               => 'header_grid2',
                    'type'             => 'select',
                    'title'            => esc_html__('Footer Area Width', 'reobiz'),             
                   
                    'options'          => array(                                     
                    
                        'container' => esc_html__('Container', 'reobiz'),
                        'full'      => esc_html__('Container Fluid', 'reobiz')
                    ),

                    'default'          => 'container',            
                ),

                array(
                    'id'       => 'footer_logo',
                    'type'     => 'media',
                    'title'    => esc_html__( 'Footer Logo', 'reobiz' ),
                    'subtitle' => esc_html__( 'Upload your footer logo', 'reobiz' ),                  
                ), 

             
                array(
                    'id'       => 'footer-logo-height',                               
                    'title'    => esc_html__( 'Logo Height', 'reobiz' ),
                    'subtitle' => esc_html__( 'Logo max height example(50px)', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => '40px'                    
                ),

                array(
                    'id'       => 'footer-top-gap',                               
                    'title'    => esc_html__( 'Footer Top Gap', 'reobiz' ),
                    'subtitle' => esc_html__( 'Footer Top Gap example(50px)', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => ''                 
                ),

                array(
                    'id'       => 'footer-bottom-gap',                               
                    'title'    => esc_html__( 'Footer Bottom Gap', 'reobiz' ),
                    'subtitle' => esc_html__( 'Footer Bottom Gap example(50px)', 'reobiz' ),
                    'type'     => 'text',
                    'default'  => ''                  
                ),  

                array(
                    'id'        => 'foot_social_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '#ffffff',
                    'validate'  => 'color',                        
                ),                   

                array(
                    'id'        => 'foot_top_border_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Top Border Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '',
                    'validate'  => 'color',                        
                ),                   

                array(
                    'id'        => 'foot_social_hover',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon Hover','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '#ffffff',
                    'validate'  => 'color',                        
                ),   

                array(
                    'id'        => 'footer_text_size',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Footer Font Size','reobiz'),
                    'subtitle'  => esc_html__('Font Size', 'reobiz'),    
                    'default'   => '16px',                                            
                ),  

                array(
                    'id'        => 'footer_h3_size',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Footer Title Font Size','reobiz'),
                    'subtitle'  => esc_html__('Font Size', 'reobiz'),    
                    'default'   => '24px',                                            
                ),  

                array(
                    'id'        => 'footer_link_size',
                    'type'      => 'text',                       
                    'title'     => esc_html__('Footer Link Font Size','reobiz'),
                    'subtitle'  => esc_html__('Font Size', 'reobiz'),    
                    'default'   => '',                                            
                ), 
                array(
                    'id'        => 'footer_title_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Title Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '#ffffff',
                    'validate'  => 'color',                        
                ),   

                array(
                    'id'        => 'footer_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Text Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '#e0e0e0',
                    'validate'  => 'color',                        
                ),

                array(
                    'id'        => 'footer_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Icon Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '',
                    'validate'  => 'color', 
                    'output' => array(                 
                    'color'            => '.rs-footer .fa-ul li i, .rs-footer .recent-post-widget .show-featured .post-desc i'
                    )                       
                ),   

                array(
                    'id'        => 'footer_link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Link Hover Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '#1273eb',
                    'validate'  => 'color',                        
                ),   

                array(
                    'id'        => 'footer_input_bg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Button Background Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '#1273eb',
                    'validate'  => 'color',                        
                ), 

                array(
                        'id'        => 'footer_input_hover_color',
                        'type'      => 'color',
                        'title'     => esc_html__('Footer Button Hover Background Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                        'default'   => '',
                        'validate'  => 'color',                        
                    ),

                array(
                        'id'        => 'footer_input_border_color',
                        'type'      => 'color',
                        'title'     => esc_html__('Footer input Border Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                        'default'   => '#333333',
                        'validate'  => 'color',                        
                    ),  

                array(
                    'id'        => 'footer_input_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer Button Text Color','reobiz'),
                    'subtitle'  => esc_html__('Pick color.', 'reobiz'),
                    'default'   => '#ffffff',
                    'validate'  => 'color',                        
                ),                  
                       
                
                array(
                    'id'       => 'copyright',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Footer CopyRight', 'reobiz' ),
                    'subtitle' => esc_html__( 'Change your footer copyright text ?', 'reobiz' ),
                    'default'  => esc_html__( '2023 All Rights Reserved', 'reobiz' ),
                ),  

                array(
                    'id'       => 'copyright_bg',
                    'type'     => 'color',
                    'title'    => esc_html__( 'Copyright Background', 'reobiz' ),
                    'subtitle' => esc_html__( 'Copyright Background Color', 'reobiz' ),      
                    'default'  => '',            
                ),
                array(
                    'id'       => 'copyright_borders',
                    'type'     => 'color',
                    'title'    => esc_html__( 'Copyright Border Color', 'reobiz' ),
                    'subtitle' => esc_html__( 'Copyright Border Color', 'reobiz' ),      
                    'default'  => ''            
                ),

                array(
                    'id'       => 'copyright_borders_rgab',
                    'type'     => 'color_rgba',
                    'title'    => esc_html__( 'Copyright Border Color', 'reobiz' ),
                    'subtitle' => esc_html__( 'Copyright Border Color', 'reobiz' ),      
                    'default'  => array(
                        'color'     => '',
                        'alpha'     => 1                    
                    ),
                    'output' => array(                 
                        'border-color'  => '.rs-footer .footer-bottom .container, .rs-footer .footer-bottom .container-fluid, .footer-subscribe .subscribe-bg'
                    )            
                ),
                
                array(
                    'id'       => 'copyright_text_color',
                    'type'     => 'color',
                    'title'    => esc_html__( 'Copyright Text Color', 'reobiz' ),
                    'subtitle' => esc_html__( 'Copyright Text Color', 'reobiz' ),      
                    'default'  => '#e0e0e0',            
                ), 
            ) 
        ) 
    );

    //Newsletter Settings
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Newsletter Popup', 'reobiz' ),
        'desc'   => esc_html__( 'Newsletter Popup Here', 'reobiz' ),        
        'fields' => array( 
            array(
                'id'       => 'rs_newsletter',
                'type'     => 'switch', 
                'title'    => esc_html__('Newsletter Show / Hide', 'reobiz'),
                'subtitle' => esc_html__('You can show or hide newsletter', 'reobiz'),
                'default'  => false,
            ), 

            array(
                'id'               => 'rs_editor_text',
                'type'             => 'editor',
                'title'            => __('Editor Text', 'reobiz'), 
                'subtitle'         => __('Text Editor', 'reobiz'),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )
            ),

            array(
                'id'    => 'newsletter_img', 
                'url'   => true,     
                'title' => esc_html__( 'Newsletter Image', 'reobiz' ),                 
                'type'  => 'media',
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                                  
            ),

            array(
                'id'       => 'newsletter_bg_image',
                'type'     => 'media',
                'title'    => esc_html__( 'Newsletter Bg Image', 'reobiz' ),
                'subtitle' => esc_html__( 'Upload your image', 'reobiz' ),
                'url'=> true,
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )              
            ),

            array(
                'id'        => 'newsletter_body_ovelay_color',
                'type'      => 'color_rgba',                       
                'title'     => esc_html__('Popup Body Overlay Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'  => array(
                    'color'     => '',
                    'alpha'     => 1                    
                ),
                'output' => array(                 
                    'background'            => 'body.newsletter-enable::before'
                ),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                        
            ), 

            array(
                'id'        => 'newsletter_bg_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Background Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '',                        
                'validate'  => 'color',
                'output' => array(                 
                    'background'            => 'body .rs-newsletter-section-wrap'
                ),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                        
            ), 
            
            array(
                'id'        => 'newsletter_title_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Newsletter Title Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '',                        
                'validate'  => 'color', 
                'output' => array(                 
                    'color'            => 'body .rs-newsletter-section-wrap .rs-newsletter-section .rs-newsletter-content h3'
                ),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                       
            ),       

            array(
                'id'        => 'newsletter_text_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Newsletter Intro Text Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '',                        
                'validate'  => 'color', 
                'output' => array(                 
                    'color'            => 'body .rs-newsletter-section-wrap.image_enable .rs-newsletter-section .rs-newsletter-content p, body .rs-newsletter-section-wrap .rs-newsletter-section .rs-newsletter-content p, body .rs-newsletter-section-wrap .rs-newsletter-section .rs-newsletter-content'
                ),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                       
            ), 

            array(
                'id'        => 'newsletter_input_bg_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Newsletter Input Bg Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '',                        
                'validate'  => 'color', 
                'output' => array(                 
                    'background'            => 'body .rs-newsletter-section-wrap .mc4wp-form-fields input[type="email"]'
                ),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                       
            ),

            array(
                'id'        => 'newsletter_input_text_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Newsletter Input Text Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '',                        
                'validate'  => 'color', 
                'output' => array(                 
                    'color'            => 'body .rs-newsletter-section-wrap .mc4wp-form-fields input[type="email"]'
                ),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                       
            ),

            array(
                'id'        => 'newsletter_placeholder_text_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Newsletter Placeholder Text Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '',                        
                'validate'  => 'color', 
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                       
            ),

            array(
                'id'        => 'newsletter_btn_bg_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Newsletter Button Bg Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '',                        
                'validate'  => 'color', 
                'output' => array(                 
                    'background'            => 'body .rs-newsletter-section-wrap .mc4wp-form-fields input[type="submit"]'
                ),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                       
            ),

            array(
                'id'        => 'newsletter_btn_text_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Newsletter Button Text Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '',                        
                'validate'  => 'color', 
                'output' => array(                 
                    'color'            => 'body .rs-newsletter-section-wrap .mc4wp-form-fields input[type="submit"]'
                ),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                       
            ),

            array(
                'id'        => 'newsletter_close_color',
                'type'      => 'color',                       
                'title'     => esc_html__('Newsletter Close Color','reobiz'),
                'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                'default'   => '',                        
                'validate'  => 'color', 
                'output' => array(                 
                    'fill'            => 'body .rs-accept-cookie-btn svg'
                ),
                'required' => array(
                    array(
                        'rs_newsletter',
                        'equals',
                        '1',
                    ),
                )                       
            ),                   
        )
    )); 
    
        Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Coming Soon Page', 'reobiz' ),
        'desc'   => esc_html__( 'You can set coming soon/maintenance mode here', 'reobiz' ),
        'icon'   => 'el el-time',    
        'fields' => array(

                    array(
                        'id'       => 'show-comingsoon',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Enable Coming Soon', 'reobiz'),
                        'subtitle' => esc_html__('You can enable/disable coming soon', 'reobiz'),
                        'default'  => false,
                    ),

                    array(
                        'id'       => 'coming_logo',
                        'type'     => 'media',
                        'title'    => esc_html__( 'Upload Coming Soon Logo', 'reobiz' ),
                        'subtitle' => esc_html__( 'Upload your image', 'reobiz' ),
                        'url'=> true                
                    ),

                    array(
                        'id'       => 'coming-logo-height',                               
                        'title'    => esc_html__( 'Logo Height', 'reobiz' ),
                        'subtitle' => esc_html__( 'Logo max height example(50px)', 'reobiz' ),
                        'type'     => 'text',
                        'default'  => '50px'                    
                    ), 

                    array(
                        'id'       => 'coming_title',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Title', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter title for coming soon page', 'reobiz' ), 
                        'default'  => esc_html__('Coming Soon', 'reobiz')                
                    ),  
                    
                    array(
                        'id'       => 'coming_text',
                        'type'     => 'textarea',
                        'title'    => esc_html__( 'Text', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter text coming soon page', 'reobiz' ),  
                        'default'  => esc_html__('Our Exciting Website Is Coming Soon! Check Back Later', 'reobiz')             
                    ),                         
                    
                    array(
                        'id'            => 'opt-date-time',
                        'type'          => 'text',
                        'title'         => esc_html__('Date/Time', 'reobiz'),
                        'subtitle'      => esc_html__('Add Date/Time ex(Y-m-d  H:m:s)','reobiz'), 
                        'default'  =>   esc_html__('2020-10-22 17:40:12','reobiz'),                          
                    ),
                    array(
                        'id'       => 'coming_day',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Day Text', 'reobiz' ),                  
                        'default'  => esc_html__('Days', 'reobiz')                
                    ),

                  
                    array(
                        'id'       => 'coming_hour',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Hour Text', 'reobiz' ),                  
                        'default'  => esc_html__('Hours', 'reobiz')                
                    ), 

                    array(
                        'id'       => 'coming_min',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Minute Text', 'reobiz' ),                  
                        'default'  => esc_html__('Minutes', 'reobiz')                
                    ),

                   

                    array(
                        'id'       => 'coming_sec',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Second Text', 'reobiz' ),                  
                        'default'  => esc_html__('Seconds', 'reobiz')                
                    ),

                   
                  
                    array(
                        'id'       => 'coming_bg',
                        'type'     => 'media',
                        'title'    => esc_html__( 'Upload Page Background', 'reobiz' ),
                        'subtitle' => esc_html__( 'Upload your image', 'reobiz' ),
                        'url'=> true                
                    ), 

                     array(
                        'id'       => 'fllow_title',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Social Title', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter title', 'reobiz' ), 
                        'default'  => esc_html__('Follow us', 'reobiz')                
                    ), 

                    array(
                        'id'        => 'text_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Text Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#ffffff',                        
                        'validate'  => 'color',                        
                    ),

                    array(
                        'id'        => 'circle_border_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Countdown Circle Border Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#ffffff',                        
                        'validate'  => 'color',                        
                    ), 

                    array(
                        'id'        => 'circle_primary_color',
                        'type'      => 'color',                       
                        'title'     => esc_html__('Countdown Circle Bg Color','reobiz'),
                        'subtitle'  => esc_html__('Pick color', 'reobiz'),    
                        'default'   => '#1273EB',                        
                        'validate'  => 'color',                        
                    ),       
                                      
                ) 
            ) 
        ); 

    
    Redux::setSection( $opt_name, array(
    'title'  => esc_html__( '404 Error Page', 'reobiz' ),
    'desc'   => esc_html__( '404 details  here', 'reobiz' ),
    'icon'   => 'el el-error-alt',    
    'fields' => array(

                array(
                        'id'       => 'title_404',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Title', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter title for 404 page', 'reobiz' ), 
                        'default'  => esc_html__('404', 'reobiz')                
                    ),  
                
                array(
                        'id'       => 'text_404',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Text', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter text for 404 page', 'reobiz' ),  
                        'default'  => esc_html__('Page Not Found', 'reobiz')             
                    ),                      
                       
                
                array(
                        'id'       => 'back_home',
                        'type'     => 'text',
                        'title'    => esc_html__( 'Back to Home Button Label', 'reobiz' ),
                        'subtitle' => esc_html__( 'Enter label for "Back to Home" button', 'reobiz' ),
                        'default'  => esc_html__('Back to Homepage', 'reobiz')  
                                    
                    ), 

                array(
                    'id'       => 'error_bg',
                    'type'     => 'media',
                    'title'    => esc_html__( 'Upload 404 Page Bg', 'reobiz' ),
                    'subtitle' => esc_html__( 'Upload your image', 'reobiz' ),
                    'url'=> true                
                ),                
            
                                  
            ) 
        ) 
    ); 


    /**********************************
    ********* Custom CSS =***********
    ***********************************/
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Custom CSS', 'reobiz'),
        'icon'      => 'el-icon-bookmark',
        'icon_class' => 'el-icon-large',
        'fields'    => array(
            array(
                'id'        => 'custom-css',
                'type'      => 'ace_editor',
                'mode'      => 'css',
                'title'     => esc_html__('Custom CSS', 'reobiz'),
                'subtitle' => esc_html__('you can add here your custom css code', 'reobiz'),
                'default'   => '',
            ),                                                                      

        ) 
     ) 
    );   


    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";           
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.     
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => esc_html__( 'Section via hook', 'reobiz' ),
                'desc'   => esc_html__( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'reobiz' ),
                'icon'   => 'el el-paper-clip',              
                'fields' => array()
            );
            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';
            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_action( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );              
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }