<?php
/**
 * @author  rs-theme
 */
function reobiz_body_classes( $classes ) {
  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    $classes[] = 'hfeed';
  }

  return $classes;
}
add_filter( 'body_class', 'reobiz_body_classes' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function reobiz_pingback_header() {
  if ( is_singular() && pings_open() ) {
    echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
  }
}
add_action( 'wp_head', 'reobiz_pingback_header' );

/**  kses_allowed_html */

function reobiz_prefix_kses_allowed_html($tags, $context){
  switch($context) {
    case 'reobiz': 
      $tags = array( 
        'a'                => array(
      'class'  => array(),
      'href'   => array(),
      'rel'  => array(),
      'title'  => array(),
      'target' => array(),
    ),
    'abbr'               => array(
      'title' => array(),
    ),
    'b'                => array(),
    'blockquote'           => array(
      'cite' => array(),
    ),
    'cite'               => array(
      'title' => array(),
    ),
    'code'               => array(),
    'del'              => array(
      'datetime'   => array(),
      'title'    => array(),
    ),
    'dd'               => array(),
    'div'              => array(
      'class'  => array(),
      'title'  => array(),
      'style'  => array(),
    ),
    'dl'               => array(),
    'dt'               => array(),
    'em'               => array(),
    'h1'               => array(),
    'h2'               => array(),
    'h3'               => array(),
    'h4'               => array(),
    'h5'               => array(),
    'h6'               => array(),
    'i'                => array(
      'class' => array(),
    ),
    'img'              => array(
      'alt'  => array(),
      'class'  => array(),
      'height' => array(),
      'src'  => array(),
      'width'  => array(),
    ),
    'li'               => array(
      'class' => array(),
    ),
    'ol'               => array(
      'class' => array(),
    ),
    'p'                => array(
      'class' => array(),
    ),
    'q'                => array(
      'cite'   => array(),
      'title'  => array(),
    ),
    'span'               => array(
      'class'  => array(),
      'title'  => array(),
      'style'  => array(),
    ),
    'iframe'             => array(
      'width'      => array(),
      'height'     => array(),
      'scrolling'    => array(),
      'frameborder'  => array(),
      'allow'      => array(),
      'src'      => array(),
    ),
    'strike'             => array(),
    'small'             => array(),
    'br'               => array(),
    'strong'             => array(),
    'data-wow-duration'        => array(),
    'data-wow-delay'         => array(),
    'data-wallpaper-options'     => array(),
    'data-stellar-background-ratio'  => array(),
    'ul'               => array(
      'class' => array(),
    ),
    
      );
      return $tags;
    default: 
      return $tags;
  }
}

add_filter( 'wp_kses_allowed_html', 'reobiz_prefix_kses_allowed_html', 10, 2);

/*
Register Fonts theme google font
*/
function reobiz_studio_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'reobiz' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Poppins:300,400,500,600,700,900' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}
/*
Enqueue scripts and styles.
*/
function reobiz_studio_scripts() {
    wp_enqueue_style( 'studio-fonts', reobiz_studio_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'reobiz_studio_scripts' );


//Favicon Icon
function reobiz_site_icon() {
 if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) {     
    global $reobiz_option;
     
    if(!empty($reobiz_option['rs_favicon']['url']))
    {?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(($reobiz_option['rs_favicon']['url'])); ?>"> 
  <?php 
    }
  }
}
add_filter('wp_head', 'reobiz_site_icon');


//excerpt for specific section
function reobiz_wpex_get_excerpt( $args = array() ) {
  // Defaults
  $defaults = array(
    'post'            => '',
    'length'          => 48,
    'readmore'        => false,
    'readmore_text'   => esc_html__( 'read more', 'reobiz' ),
    'readmore_after'  => '',
    'custom_excerpts' => true,
    'disable_more'    => false,
  );
  // Apply filters
  $defaults = apply_filters( 'reobiz_wpex_get_excerpt_defaults', $defaults );
  // Parse args
  $args = wp_parse_args( $args, $defaults );
  // Apply filters to args
  $args = apply_filters( 'reobiz_wpex_get_excerpt_args', $defaults );
  // Extract
  extract( $args );
  // Get global post data
  if ( ! $post ) {
    global $post;
  }

  // Get post ID
  $post_id = $post->ID;

  // Check for custom excerpt
  if ( $custom_excerpts && has_excerpt( $post_id ) ) {
    $output = $post->post_excerpt;
  }
  // No custom excerpt...so lets generate one
  else {
    // Readmore link
    $readmore_link = '<a href="' . get_permalink( $post_id ) . '" class="readmore">' . $readmore_text . $readmore_after . '</a>';
    // Check for more tag and return content if it exists
    if ( ! $disable_more && strpos( $post->post_content, '<!--more-->' ) ) {
      $output = apply_filters( 'the_content', get_the_content( $readmore_text . $readmore_after ) );
    }
    // No more tag defined so generate excerpt using wp_trim_words
    else {
      // Generate excerpt
      $output = wp_trim_words( strip_shortcodes( $post->post_content ), $length );
      // Add readmore to excerpt if enabled
      if ( $readmore ) {
        $output .= apply_filters( 'reobiz_wpex_readmore_link', $readmore_link );
      }

    }

  }
  // Apply filters and echo
  return apply_filters( 'reobiz_wpex_get_excerpt', $output );
}


//Demo content file include here

function reobiz_import_files() {
    return array(

        // Business Main Demo

        array(
          'import_file_name'           => 'Business Main',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/business/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/business/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/business/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),  
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/business/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://business.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Business Main Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/business/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/business/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/business/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/business/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://business.reobiztheme.com/onepage',    
        ),
        
        // Business Consultant Demo

        array(
          'import_file_name'           => 'Business Consultant',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consultant/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consultant/reobiz-widget.wie',      
           'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consultant/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consultant/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consultant.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Business Consultant Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consultant/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consultant/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consultant/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consultant/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consultant.reobiztheme.com/onepage',    
        ),


        // Business Consultanting Demo

        array(
          'import_file_name'           => 'Business consulting',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consulting/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consulting/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consulting/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consulting/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consulting.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Business consulting',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consulting/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consulting/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consulting/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consulting/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consulting.reobiztheme.com/onepage',    
        ),
        
        // Digital Agency SEO Demo

        array(
          'import_file_name'           => 'Digital Agency SEO',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/seo/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/seo/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/seo/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/seo/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://seo.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Digital Agency SEO',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/seo/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/seo/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/seo/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/seo/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://seo.reobiztheme.com/onepage',    
        ),        


        // Law Firm Demo

        array(
          'import_file_name'           => 'Law Firm Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/lawfirm/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/lawfirm/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/lawfirm/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/lawfirm/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://lawfirm.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Law Firm Demo',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/lawfirm/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/lawfirm/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/lawfirm/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/lawfirm/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://lawfirm.reobiztheme.com/onepage',    
        ),

        // Digital Agency Demo

        array(
          'import_file_name'           => 'Digital Agecny Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/agency/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/agency/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/agency/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/agency/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://agency.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Digital Agecny Demo',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/agency/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/agency/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/agency/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/agency/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://agency.reobiztheme.com/onepage',    
        ),        


        // Consulting Demo 02

        array(
          'import_file_name'           => 'Business Consulting 02',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consulting2/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consulting2/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consulting2/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),    
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consulting2/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consulting2.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Business Consulting 02',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consulting2/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consulting2/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consulting2/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consulting2/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consulting2.reobiztheme.com/onepage',    
        ),
        

        // Business Demo 03

        array(
          'import_file_name'           => 'Business Demo 03',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/business3/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/business3/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/business3/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),  
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/business3/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://business3.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Business Demo 03',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/business3/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/business3/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/business3/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/business3/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://business3.reobiztheme.com/onepage',    
        ),        


        // Insurance Demo

        array(
          'import_file_name'           => 'Insurance Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/insurance/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/insurance/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/insurance/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/insurance/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://insurance.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Insurance Demo Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/insurance/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/insurance/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/insurance/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ), 
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/insurance/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://insurance.reobiztheme.com/onepage',    
        ),        


        // Saas Demo

        array(
          'import_file_name'           => 'Saas Demo',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/saas/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/saas/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/saas/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/saas/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://
           .reobiztheme.com/',    
        ),

        // Human Resource

        array(
          'import_file_name'           => 'Human Resource Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/human/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/human/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/human/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/human/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://human.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Human Resource Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/human/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/human/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/human/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),  
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/human/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://human.reobiztheme.com/onepage',    
        ),

        // Digital Agency

        array(
          'import_file_name'           => 'Digital Agency Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/digital/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/digital/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/digital/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/digital/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://digital.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Digital Agency Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/digital/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/digital/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/digital/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/digital/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://digital.reobiztheme.com/onepage',    
        ),  

        // App Landing

        array(
          'import_file_name'           => 'App Landing Demo',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/app/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/app/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/app/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/app/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://app.reobiztheme.com/',    
        ),

        // Consulting 3

        array(
          'import_file_name'           => 'Business consulting 3 Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consulting3/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consulting3/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consulting3/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consulting3/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consulting3.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Business consulting 3 Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consulting3/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consulting3/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consulting3/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consulting3/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consulting3.reobiztheme.com/onepage',    
        ), 


        // Corporate Business

        array(
          'import_file_name'           => 'Corporate Business Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/corporate/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/corporate/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/corporate/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/corporate/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://corporate.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Corporate Business Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/corporate/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/corporate/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/corporate/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/corporate/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://corporate.reobiztheme.com/onepage',    
        ),   
       

        // IT Solutions

        array(
          'import_file_name'           => 'IT Solutions Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/itsolutions/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/itsolutions/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/itsolutions/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/itsolutions/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://itsolutions.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'IT Solutions Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/itsolutions/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/itsolutions/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/itsolutions/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/itsolutions/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://itsolutions.reobiztheme.com/onepage',    
        ),   
        


        // Marketing

        array(
          'import_file_name'           => 'Marketing Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/marketing/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/marketing/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/marketing/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),  
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/marketing/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://marketing.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Marketing Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/marketing/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/marketing/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/marketing/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/marketing/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://marketing.reobiztheme.com/onepage',    
        ),           


        // Marketing

        array(
          'import_file_name'           => 'Corporate 2 Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/corporate2/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/corporate2/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/corporate2/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/corporate2/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://corporate2.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Corporate 2 Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/corporate2/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/corporate2/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/corporate2/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/corporate2/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://corporate2.reobiztheme.com/onepage',    
        ),           


        // Finance

        array(
          'import_file_name'           => 'Finance Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/finance/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/finance/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/finance/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/finance/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://finance.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Finance Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/finance/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/finance/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/finance/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/finance/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://finance.reobiztheme.com/onepage',    
        ),   

        

        // Business 2
        array(
          'import_file_name'           => 'Business 2 Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/business2/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/business2/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/business2/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/business2/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://business2.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Business 2 Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/business2/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/business2/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/business2/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/business2/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://business2.reobiztheme.com/onepage',    
        ),   
        

        // Consulting 4
        array(
          'import_file_name'           => 'Consulting 4 Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consulting4/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consulting4/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consulting4/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consulting4/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consulting4.reobiztheme.com/',    
        ),

        array(
          'import_file_name'           => 'Consulting 4 Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/consulting4/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/consulting4/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/consulting4/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/consulting4/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://consulting4.reobiztheme.com/onepage',    
        ), 

        // Marketing Consultant
        array(
          'import_file_name'           => 'Marketing Consulting Demo',
          'categories'                 => array( 'Multipages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/marketing-consulting/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/marketing-consulting/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/marketing-consulting/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/marketing-consulting/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://marketing2025.reobiztheme.com',    
        ),

        // Marketing Consultant
        array(
          'import_file_name'           => 'Marketing Consulting Onepage',
          'categories'                 => array( 'Onepages' ),
          'import_file_url'            => 'https://reobiztheme.com/demos/marketing-consulting/reobiz-content.xml',
          'import_widget_file_url'     => 'https://reobiztheme.com/demos/marketing-consulting/reobiz-widget.wie',      
          'import_redux'               => array(
                array(
                  'file_url'    =>  'https://reobiztheme.com/demos/marketing-consulting/reobiz-options.json',
                  'option_name' => 'reobiz_option',
                ),
            ),   
          'import_preview_image_url'   => 'https://reobiztheme.com/demos/marketing-consulting/screen.png',   
          'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'reobiz' ),
           'preview_url'                => 'https://marketing2025.reobiztheme.com/onepage',    
        ),     

    );   

}

add_filter( 'pt-ocdi/import_files', 'reobiz_import_files' );


function reobiz_set_import_id(){
    if(isset( $_GET['import'] )) {
        $import_demo_id =(int) $_GET['import'];
        unset($_COOKIE['import_id']);
        if(!isset($_COOKIE['import_id'])) {
            setcookie('import_id', $import_demo_id, time()+3600); 
        }  
    }
}  

add_action( 'init', 'reobiz_set_import_id');

function reobiz_after_import_setup() {

    // Assign menus to their locations.
    $main_menu   = get_term_by( 'name', 'Main Menu', 'nav_menu' ); 
    $single_menu = get_term_by( 'name', 'Single Menu', 'nav_menu' );
    $mobile_menu = get_term_by( 'name', 'Mobile Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
          'menu-1' => $main_menu->term_id,        
          'menu-2' => $single_menu->term_id,
          'menu-3' => $mobile_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).



    if(isset($_COOKIE['import_id'])) {

        $selected= (int)$_COOKIE['import_id']; 
        if($selected==0 || $selected==2 || $selected==4 || $selected==6 || $selected==8 || $selected==10 || $selected==12 || $selected==14 || $selected==16 || $selected==19 || $selected==21 || $selected==24 || $selected==26 || $selected==28 || $selected==30 || $selected==32 || $selected==34 || $selected==36 || $selected==38 || $selected==40){
            $front_page_id = get_page_by_title( 'Home' ); 
        } else{
            $front_page_id = get_page_by_title( 'Onepage' ); 
        }

        $blog_page_id  = get_page_by_title( 'Blog' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        update_option( 'page_for_posts', $blog_page_id->ID );

        if(class_exists('RevSlider'))
        {
            if($selected==0 || $selected==1 ) {
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/business/sliders/home-main.zip");
                ob_get_clean();
            }

            if($selected==2 || $selected==3 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/consultant/sliders/consultant.zip");
                ob_get_clean();
            }

            if($selected==4 || $selected==5 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/consulting/sliders/consulting.zip");
                ob_get_clean();
            }
            
            if($selected==8 || $selected==9 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/lawfirm/sliders/lawfirm.zip");
                ob_get_clean();
            }
            
            
            if($selected==12 || $selected==13 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/consulting2/sliders/consulting-2.zip");
                ob_get_clean();
            }
            
            if($selected==14 || $selected==15 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/business3/sliders/business-3.zip");
                ob_get_clean();
            }
            
            if($selected==16 || $selected==17 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/insurance/sliders/insurance.zip");
                ob_get_clean();
            }
            
            if($selected==18){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/saas/sliders/saasfull.zip");
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/saas/sliders/datasaas.zip");
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/saas/sliders/saas-integration.zip");
                ob_get_clean();
            }
            
            if($selected==19 || $selected==20 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/human/sliders/human.zip");
                ob_get_clean();
            }        

            if($selected==21 || $selected==22 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/digital/sliders/digital-illustration.zip");
                ob_get_clean();
            }        

            if($selected==23 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/app/sliders/applanding.zip");
                ob_get_clean();
            }        

            if($selected==24 || $selected==25 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/consulting3/sliders/consulting-03.zip");
                ob_get_clean();
            }       

             if($selected==26 || $selected==27 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/corporate/sliders/corporate.zip");
                ob_get_clean();
            }        

            if($selected==28 || $selected==29 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/itsolutions/sliders/itsolutions.zip");
                ob_get_clean();
            }        

            if($selected==30 || $selected==31 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/marketing/sliders/marketing.zip");
                ob_get_clean();
            }     

            if($selected==32 || $selected==33 ){
                $slider = new RevSlider();
                ob_start();
                $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/corporate2/sliders/corporate-2.zip");
                ob_get_clean();
            }             


            if($selected==36 || $selected==37 ){
                $slider = new RevSlider();
                ob_start();
                $response = $slider->importSliderFromPost(true, true, get_template_directory()."/ocdi/business2/sliders/business2.zip");
                ob_get_clean();
            }    
           
        }

    }
    unset($_COOKIE['import_id']);
   
}

//disable elementor default styles
update_option('elementor_disable_color_schemes', 'yes');
update_option('elementor_disable_typography_schemes', 'yes');

//Check Custom Post Types in Elementor Setting
function reobiz_custom_post_type_elementor_support() {
    // Custom post types you want to enable Elementor for
    $post_types = ['page', 'post', 'teams', 'testimonials', 'events', 'portfolios', 'elementor-rshf']; // Replace with your CPT slugs
    // Merge existing supported post types with your custom post types
    $elementor_support = array_merge( get_option( 'elementor_cpt_support', [] ), $post_types );
    // Update Elementor supported post types option
    update_option( 'elementor_cpt_support', $elementor_support );
}
add_action( 'init', 'reobiz_custom_post_type_elementor_support' );


add_action( 'pt-ocdi/after_import', 'reobiz_after_import_setup' );

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

$licenseKey  = get_option("ReobizWordPressTheme_lic_Key","");
if(empty($licenseKey)) :
    add_action( 'admin_notices', 'reobiz_admin_notice__success');
    function reobiz_admin_notice__success() {?>
        <div class="reobiz-notice notice notice-theme is-dismissible">
            <div class="reobiz-notice-intro">The Reobiz Theme must need to activate the purchase code. <a href="<?php echo esc_url(get_admin_url())?>/admin.php?page=reobiz">Active Now!</a></div>
        </div>
        <?php 
    } 
endif;