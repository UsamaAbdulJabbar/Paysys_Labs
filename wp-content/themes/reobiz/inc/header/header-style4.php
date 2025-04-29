<?php

/*
Header Style 4
*/
global $reobiz_option;
$sticky = $reobiz_option['off_sticky']; 
$sticky_menu = ($sticky == 1) ? ' menu-sticky' : '';

// Header Options here
require get_parent_theme_file_path('inc/header/header-options.php');

 ?>
    <?php 
        //off convas here
        get_template_part('inc/header/off-canvas');
    ?> 

<!-- Mobile Menu Start -->
    <div class="responsive-menus"><?php require get_parent_theme_file_path('inc/header/responsive-menu.php');?></div>
<!-- Mobile Menu End -->

<header id="rs-header" class="header-style-4 mainsmenu<?php echo esc_attr($main_menu_hides);?> <?php echo esc_attr($main_menu_center);?> <?php echo esc_attr($main_menu_icon);?>">
    <?php 
      //include sticky search here
      get_template_part('inc/header/search');
    ?>
    <div class="header-inner<?php echo esc_attr($sticky_menu);?>">
       <!-- Toolbar Start -->
       <?php          
          get_template_part('inc/header/top-head/top-head','three');
        ?>
      <!-- Toolbar End -->

      <!-- Header Menu Start -->  
      <?php
        $menu_bg_color = !empty($menu_bg) ? 'style=background:'.$menu_bg.'' : '';
        ?>
        <div class="menu-area menu_type_<?php echo esc_attr($main_menu_type);?>" <?php echo wp_kses($menu_bg_color, 'reobiz');?>>
            <div class="<?php echo esc_attr($header_width);?>">
                <div class="menu_one">
                        <div class="row-table"> 
                        <div class="col-cell header-logo">
                            <?php  get_template_part('inc/header/logo'); ?>
                        </div>              
                        <div class="col-cell menu-responsive">  
                            <?php                  
                                if(is_page_template('page-single.php')){
                                    require get_parent_theme_file_path('inc/header/menu-single.php'); 
                                }else{
                                    require get_parent_theme_file_path('inc/header/menu.php'); 
                                }               
                            ?>
                        </div>            
                        <?php
                        if(!empty($reobiz_option['quote'])):   
                          $quote_menu = $reobiz_option['quote'];                        
                        endif;        
                        ?>

                        <div class="col-cell header-quote">                         
                           <?php
                            //include Cart here 
                            if($rs_show_cart != 'hide'){
                              if(!empty($reobiz_option['wc_cart_icon']) || ($rs_show_cart == 'show') ) {
                                get_template_part('inc/header/cart');
                              }
                            } 
                            ?> 

                            
                            <?php 
                            if($rs_top_search != 'hide'):
                              if(!empty($reobiz_option['off_search']) || ($rs_top_search == 'show') ): ?>
                                <div class="sidebarmenu-search">
                                    <div class="sticky_search"> 
                                      <i class="reobizicon-search"></i> 
                                    </div> 
                                </div>
                              <?php endif; 
                            endif;                            

                           if($rs_offcanvas != 'hide'):
                              if(!empty($reobiz_option['off_canvas']) || ($rs_offcanvas == 'show') ): ?>
                              <div class="sidebarmenu-area text-right">
                                <?php if(!empty($reobiz_option['off_canvas']) || ($rs_offcanvas == 'show') ){
                                        $off = $reobiz_option['off_canvas'];
                                        if( ($off == 1) || ($rs_offcanvas == 'show') ){
                                   ?>
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
                                    <?php } 
                                }?> 
                              </div>
                            <?php endif; endif; ?>

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
                            <?php if($rs_show_quote != 'hide'){
                                if(!empty($reobiz_option['quote'])){ ?>
                                  <?php $quote_btns_link = !empty($reobiz_option['quote_btns_link']) ? 'target="_blank"' : '';
                                 ?>
                                <div class="btn_quote"><a href="<?php echo esc_url($reobiz_option['quote_link']); ?>" <?php echo wp_kses_post($quote_btns_link);?> class="quote-button"><?php  echo esc_html($reobiz_option['quote']); ?></a></div>
                            <?php } } ?>
                        </div> 
                    </div>
                </div>
            </div>    
        </div>
    </div>
  <?php 
      get_template_part( 'inc/breadcrumbs' );
  ?>
    <!-- Slider Start Here -->
    <?php  get_template_part('inc/header/slider/slider'); ?>
</header>
