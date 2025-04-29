<?php

/*
Header Style 3
*/
global $reobiz_option;
$sticky = $reobiz_option['off_sticky']; 
$sticky_menu = ($sticky == 1) ? ' menu-sticky' : '';

// Header Options here
require get_parent_theme_file_path('inc/header/header-options.php');

if ( !has_nav_menu( 'menu-1' ) ) { 
    $margin_minus = 'margin_minus';
}else{
    $margin_minus = '';
}
?>


<?php 
    //off convas here
    get_template_part('inc/header/off-canvas');
?> 


<!-- Mobile Menu Start -->
    <div class="responsive-menus"><?php require get_parent_theme_file_path('inc/header/responsive-menu.php');?></div>
<!-- Mobile Menu End -->

<header id="rs-header" class="fixed-menu <?php echo esc_attr( $margin_minus );?> mainsmenu<?php echo esc_attr($main_menu_hides);?> <?php echo esc_attr($main_menu_icon);?>">
    <?php 
      //include sticky search here
      get_template_part('inc/header/search');
    ?> 
    <div class="header-inner">
        <!-- Logo Area Start -->
        <div class="logo-section">
            <div class="<?php echo esc_attr($header_width);?>">
                <?php  get_template_part('inc/header/logo'); ?>
            </div>
        </div>
        
      <!-- Header Menu Start -->  
      <?php
        $menu_bg_color = !empty($menu_bg) ? 'style=background:'.$menu_bg.'' : '';
        ?>
        <div class="box-layout <?php echo esc_attr($header_width);?>" <?php echo wp_kses($menu_bg_color, 'reobiz');?>>
        <div class="row-tables"> 
            <div class="menu-area col-cell menu_type_<?php echo esc_attr($main_menu_type);?>">
                <div class="<?php echo esc_attr($header_width);?>">
                    <div class="menu_one">
                        <div class="row-table">               
                            <div id="fixedmenus" class="col-cell menu-responsive">  
                                <?php                  
                                    if(is_page_template('page-single.php')){
                                        require get_parent_theme_file_path('inc/header/menu-single.php'); 
                                    }else{
                                        require get_parent_theme_file_path('inc/header/menu-fixed.php'); 
                                    }               
                                ?>
                            </div>                           

                            <div class="col-cell header-quote"> 
                                <div class="sidebarmenu-area text-right mobilehum">                                    
                                    <ul class="offcanvas-icon">
                                        <li class="nav-link-container"> 
                                        <?php if($reobiz_option['Offcanvas_layout'] == 'style2'){ ?>
                                            <a href='#' class="nav-menu-link menu-button">                                                
                                                <div class="dot-hum"></div>
                                                <div class="dot-hum"></div>
                                                <div class="dot-hum"></div>
                                            </a> 
                                            <?php } else { ?>
                                            <a href='#' class="nav-menu-link menu-button">
                                                <div class="dot1"></div>
                                                <div class="dot2"></div>
                                                <div class="dot3"></div>
                                                <div class="dot4"></div>
                                                <div class="dot5"></div>
                                                <div class="dot6"></div>
                                                <div class="dot7"></div>
                                                <div class="dot8"></div>
                                                <div class="dot9"></div>
                                            </a>
                                        <?php } ?>
                                        </li>
                                    </ul>                                       
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>    
            </div>
        </div>
      <!-- Header Menu End --> 
      </div>

      <div class="toolbar-sl-share">
        <?php if(!empty($reobiz_option['phone'])) { ?>
        <div class="rs-contact-phone"> 
            <?php esc_attr_e('T:', 'reobiz'); ?>                                                                
            <a href="tel:+<?php echo esc_attr(str_replace(" ","",($reobiz_option['phone'])))?>"> <?php echo esc_html($reobiz_option['phone']); ?></a>                   
        </div>
        <?php } ?>
        <?php if(!empty($reobiz_option['top-email'])) { ?>
        <div class="rs-contact-email">
            <?php esc_attr_e('E:', 'reobiz'); ?>                                
            <a href="mailto:<?php echo esc_attr($reobiz_option['top-email'])?>"><?php echo esc_html($reobiz_option['top-email'])?></a>
        </div>
        <?php } ?>
        <ul class="clearfix">
          <?php
          if(!empty($reobiz_option['show-social'])){
            $top_social = $reobiz_option['show-social']; 
        
              if($top_social == '1'){ 

                if(!empty($reobiz_option['facebook'])) { ?>
                <li> <a href="<?php echo esc_url($reobiz_option['facebook']);?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
                <?php } ?>
                <?php if(!empty($reobiz_option['twitter'])) { ?>
                <li> <a href="<?php echo esc_url($reobiz_option['twitter']);?> " target="_blank"> <i class="fab ri-twitter-x-line"></i> </a> </li>
                <?php } ?>
                <?php if(!empty($reobiz_option['rss'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['rss']);?> " target="_blank"> <i class="fas fa-rss"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['pinterest'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['pinterest']);?> " target="_blank"> <i class="fab fa-pinterest-p"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['linkedin'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['linkedin']);?> " target="_blank">  <i class="fab fa-linkedin-in"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['google'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['google']);?> " target="_blank"> <i class="fab fa-google-plus-square"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['instagram'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['instagram']);?> " target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                <?php } ?>
                <?php if(!empty($reobiz_option['vimeo'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['vimeo']);?> " target="_blank"> <i class="fab fa-vimeo-v"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['tumblr'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['tumblr']);?> " target="_blank"> <i class="fab fa-tumblr"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['youtube'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['youtube']);?> " target="_blank"> <i class="fab fa-youtube"></i> </a> </li>
                <?php } ?>
                        
                <?php }
                }
             ?>
        </ul>
      </div>
    </div>
</header>

<!-- Slider Start Here -->
<?php  
    get_template_part( 'inc/breadcrumbs' );
    get_template_part('inc/header/slider/slider'); 