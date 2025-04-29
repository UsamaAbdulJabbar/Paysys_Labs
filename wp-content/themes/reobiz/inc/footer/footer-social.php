<?php
/*
     Footer Social
*/
     global $reobiz_option;
?>
<?php 
      if(!empty($reobiz_option['show-social2'])){
            $footer_social = $reobiz_option['show-social2'];
            if($footer_social == 1){?>
                  <ul class="footer_social">  
                        <?php
                         if(!empty($reobiz_option['facebook'])) { ?>
                         <li> 
                              <a href="<?php echo esc_url($reobiz_option['facebook'])?>" target="_blank"><span><i class="fab fa-facebook"></i></span></a> 
                         </li>
                        <?php } ?>
                        <?php if(!empty($reobiz_option['twitter'])) { ?>
                        <li> 
                              <a href="<?php echo esc_url($reobiz_option['twitter']);?> " target="_blank"><span> <i class="ri-twitter-x-fill"></i> </span></a> 
                        </li>
                        <?php } ?>
                        <?php if(!empty($reobiz_option['rss'])) { ?>
                        <li> 
                              <a href="<?php  echo esc_url($reobiz_option['rss']);?> " target="_blank"><span><i class="fas fa-rss"></i></span></a> 
                        </li>
                        <?php } ?>
                        <?php if (!empty($reobiz_option['pinterest'])) { ?>
                        <li> 
                              <a href="<?php  echo esc_url($reobiz_option['pinterest']);?> " target="_blank"><span><i class="fab fa-pinterest-p"></i></span></a> 
                        </li>
                        <?php } ?>
                        <?php if (!empty($reobiz_option['linkedin'])) { ?>
                        <li> 
                              <a href="<?php  echo esc_url($reobiz_option['linkedin']);?> " target="_blank"><span><i class="fab fa-linkedin"></i></span></a> 
                        </li>
                        <?php } ?>
                        <?php if (!empty($reobiz_option['google'])) { ?>
                        <li> 
                              <a href="<?php  echo esc_url($reobiz_option['google']);?> " target="_blank"><span><i class="fab fa-google-plus-square"></i></span></a> 
                        </li>
                        <?php } ?>
                        <?php if (!empty($reobiz_option['instagram'])) { ?>
                        <li> 
                              <a href="<?php  echo esc_url($reobiz_option['instagram']);?> " target="_blank"><span><i class="fab fa-instagram"></i></span></a> 
                        </li>
                        <?php } ?>
                        <?php if(!empty($reobiz_option['vimeo'])) { ?>
                        <li> 
                              <a href="<?php  echo esc_url($reobiz_option['vimeo'])?> " target="_blank"><span><i class="fab fa-vimeo"></i></span></a> 
                        </li>
                        <?php } ?>
                        <?php if (!empty($reobiz_option['tumblr'])) { ?>
                        <li> 
                              <a href="<?php  echo esc_url($reobiz_option['tumblr'])?> " target="_blank"><span><i class="fab fa-tumblr"></i></span></a> 
                        </li>
                        <?php } ?>
                        <?php if (!empty($reobiz_option['youtube'])) { ?>
                        <li> 
                              <a href="<?php  echo esc_url($reobiz_option['youtube'])?> " target="_blank"><span><i class="fab fa-youtube"></i></span></a> 
                        </li>
                        <?php } ?>     
                  </ul>
       <?php } 
}?>
