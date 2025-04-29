<?php
/* Top Header part for reobiz Theme
*/

global $reobiz_option;

// Header Options here
require get_parent_theme_file_path('inc/header/header-options.php');

if($rs_top_bar != 'hide'){
  if(!empty($reobiz_option['show-top']) || ($rs_top_bar=='show')){

      $show_topbar_mobile =" ";
      if ( empty($reobiz_option ['mobile-show-top']) ){
          $show_topbar_mobile= 'mobile_topbar_hide';
      }
     
       if( !empty($reobiz_option['welcome-text']) || !empty($reobiz_option['show-social'])){?> 
          <div class="toolbar-area 1 <?php echo esc_attr($show_topbar_mobile); ?>">
            <div class="<?php echo esc_attr($header_width);?>">
              <div class="row">
                <div class="col-lg-7">
                  <div class="toolbar-contact">
                    <ul class="rs-contact-info">                   
                       <?php if(!empty($reobiz_option['welcome-text'])) { ?>
                            <li> <?php echo esc_html($reobiz_option['welcome-text']); ?> </li>
                  <?php } ?> 
                  </ul>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="toolbar-sl-share">
                    <ul class="clearfix">
                      <?php
                      if(!empty($reobiz_option['show-social'])){
                        $top_social = $reobiz_option['show-social']; 
                    
                          if($top_social == '1'){              
                            if(!empty($reobiz_option['facebook'])) { ?>
                            <li> <a href="<?php echo esc_url($reobiz_option['facebook']);?>" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                            <?php } ?>
                            <?php if(!empty($reobiz_option['twitter'])) { ?>
                            <li> <a href="<?php echo esc_url($reobiz_option['twitter']);?> " target="_blank"> <i class="ri-twitter-x-fill"></i> </a> </li>
                            <?php } ?>
                            <?php if(!empty($reobiz_option['rss'])) { ?>
                            <li> <a href="<?php  echo esc_url($reobiz_option['rss']);?> " target="_blank"> <i class="fas fa-rss"></i> </a> </li>
                            <?php } ?>
                            <?php if (!empty($reobiz_option['pinterest'])) { ?>
                            <li> <a href="<?php  echo esc_url($reobiz_option['pinterest']);?> " target="_blank"> <i class="fab fa-pinterest-p"></i> </a> </li>
                            <?php } ?>
                            <?php if (!empty($reobiz_option['linkedin'])) { ?>
                            <li> <a href="<?php  echo esc_url($reobiz_option['linkedin']);?> " target="_blank"> <i class="fab fa-linkedin-in"></i> </a> </li>
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

                            <?php if (!empty($reobiz_option['tiktok'])) { ?>
                            <li> <a href="<?php  echo esc_url($reobiz_option['tiktok']);?>" target="_blank"><i class="fab fa-tiktok"></i></a> </li>
                            <?php } ?>  

                            <?php if (!empty($reobiz_option['whatsapp'])) { ?>
                            <li> <a href="<?php  echo esc_url($reobiz_option['whatsapp']);?>" target="_blank"><i class="fab fa-whatsapp"></i></a> </li>
                            <?php } ?> 

                            <?php if (!empty($reobiz_option['telegram'])) { ?>
                            <li> <a href="<?php  echo esc_url($reobiz_option['telegram']);?>" target="_blank"><i class="fab fa-telegram-plane"></i></a> </li>
                            <?php } ?> 

                            <?php if (!empty($reobiz_option['soundcloud'])) { ?>
                            <li> <a href="<?php  echo esc_url($reobiz_option['soundcloud']);?>" target="_blank"><i class="fab fa-soundcloud"></i></a> </li>
                            <?php } ?> 
                            <?php if( !empty($reobiz_option['show-icon-extra']) && !empty($reobiz_option['extra_icon'])){ 
                                echo wp_kses_post($reobiz_option['extra_icon'],'reobiz');
                            } ?>
                                <?php }
                            }
                         ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php 
    }
  }
}
