<?php
/* Top Header part for grassy template
*/
global $reobiz_option;
?>
<?php if(!empty($reobiz_option['show-top'])){ 
  if(is_page()){
     $rs_top_bar = get_post_meta($post->ID, 'top_bar', true);
     if($rs_top_bar == 'Show' || $rs_top_bar == ''){
     ?> 
    <div class="toolbar-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-7 col-xs-12">
            <div class="toolbar-contact">
              <ul>
                <?php if(!empty($reobiz_option['welcome-text'])) { ?>
                <li> <i class="fa fa-handshake-o"></i> <?php echo esc_html($reobiz_option['welcome-text']); ?> </li>
                <?php } ?>
                <?php if(!empty($reobiz_option['top-email'])) { ?>
                <li> <i class="fa fa-envelope-o"></i><a href="mailto:<?php echo esc_attr($reobiz_option['top-email'])?>"><?php echo esc_html($reobiz_option['top-email'])?></a> </li>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-5 col-xs-12">
            <div class="toolbar-sl-share">
              <ul>
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
                      <?php } 
                      }
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
 else{
  ?>
  <div class="toolbar-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-7 col-xs-12">
            <div class="toolbar-contact">
              <ul>
                <?php if(!empty($reobiz_option['welcome-text'])) { ?>
                <li> <i class="fa fa-handshake-o"></i> <?php echo esc_html($reobiz_option['welcome-text']); ?> </li>
                <?php } ?>                
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-5 col-xs-12">
            <div class="toolbar-sl-share">
              <ul>
                <?php
                if(!empty($reobiz_option['show-social'])){
                  $top_social = $reobiz_option['show-social']; 
              
                    if($top_social == '1'){              
                      if(!empty($reobiz_option['facebook'])) { ?>
                      <li> <a href="<?php echo esc_url($reobiz_option['facebook']);?>" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                      <?php } ?>
                      <?php if(!empty($reobiz_option['twitter'])) { ?>
                      <li> <a href="<?php echo esc_url($reobiz_option['twitter']);?> " target="_blank"><i class="fab ri-twitter-x-line"></i></a> </li>
                      <?php } ?>
                      <?php if(!empty($reobiz_option['rss'])) { ?>
                      <li> <a href="<?php  echo esc_url($reobiz_option['rss']);?> " target="_blank"><i class="fa fa-rss"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($reobiz_option['pinterest'])) { ?>
                      <li> <a href="<?php  echo esc_url($reobiz_option['pinterest']);?> " target="_blank"><i class="fab fa-pinterest-p"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($reobiz_option['linkedin'])) { ?>
                      <li> <a href="<?php  echo esc_url($reobiz_option['linkedin']);?> " target="_blank"><i class="fab fa-linkedin"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($reobiz_option['google'])) { ?>
                      <li> <a href="<?php  echo esc_url($reobiz_option['google']);?> " target="_blank"><i class="fab fa-google-plus-square"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($reobiz_option['instagram'])) { ?>
                      <li> <a href="<?php  echo esc_url($reobiz_option['instagram']);?> " target="_blank"><i class="fab fa-instagram"></i></a> </li>
                      <?php } ?>
                      <?php if(!empty($reobiz_option['vimeo'])) { ?>
                      <li> <a href="<?php  echo esc_url($reobiz_option['vimeo']);?> " target="_blank"><i class="fab fa-vimeo"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($reobiz_option['tumblr'])) { ?>
                      <li> <a href="<?php  echo esc_url($reobiz_option['tumblr']);?> " target="_blank"><i class="fab fa-tumblr"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($reobiz_option['youtube'])) { ?>
                      <li> <a href="<?php  echo esc_url($reobiz_option['youtube']);?> " target="_blank"><i class="fab fa-youtube"></i></a> </li>
                      <?php } 
                      }
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
