<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kulluu
 */

get_header(); $licenseKey = get_option("ReobizWordPressTheme_lic_Key","");
if (!empty($licenseKey)){?> 

  <?php 

  $portfolio_layout = get_post_meta( get_the_ID(), 'image_select', true );

    if ($portfolio_layout == 'slider'){
        require get_parent_theme_file_path('inc/portfolio/single-slider.php');       
    } 

    elseif ($portfolio_layout == 'gallery') {         
        require get_parent_theme_file_path('inc/portfolio/single-gallery.php');             
    }
    else{
      require get_parent_theme_file_path('inc/portfolio/single-standard.php');
    }
 ?>


<?php }

get_footer();