<?php 

global $reobiz_option;
if(!empty($reobiz_option['facebook']) || !empty($reobiz_option['twitter']) || !empty($reobiz_option['rss']) || !empty($reobiz_option['pinterest']) || !empty($reobiz_option['google']) || !empty($reobiz_option['instagram']) || !empty($reobiz_option['vimeo']) || !empty($reobiz_option['tumblr']) ||  !empty($reobiz_option['youtube'])){
?>

    <ul class="offcanvas_social">  
        <?php
        if(!empty($reobiz_option['facebook'])) { ?>
                <li> <a href="<?php echo esc_url($reobiz_option['facebook']);?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
                <?php } ?>
                <?php if(!empty($reobiz_option['twitter'])) { ?>
                <li> <a href="<?php echo esc_url($reobiz_option['twitter']);?>" target="_blank"> <i class="fab ri-twitter-x-line"></i> </a> </li>
                <?php } ?>
                <?php if(!empty($reobiz_option['rss'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['rss']);?>" target="_blank"> <i class="fas fa-rss"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['pinterest'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['pinterest']);?>" target="_blank"> <i class="fab fa-pinterest-p"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['linkedin'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['linkedin']);?>" target="_blank"> <i class="fab fa-linkedin-in"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['google'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['google']);?>" target="_blank"> <i class="fab fa-google-plus-square"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['instagram'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['instagram']);?>" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                <?php } ?>
                <?php if(!empty($reobiz_option['vimeo'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['vimeo']);?>" target="_blank"> <i class="fab fa-vimeo-v"></i> </a> </li>
                <?php } ?>
                <?php if (!empty($reobiz_option['tumblr'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['tumblr']);?>" target="_blank"> <i class="fab fa-tumblr"></i> </a> </li>
                <?php } ?>

                <?php if (!empty($reobiz_option['youtube'])) { ?>
                <li> <a href="<?php  echo esc_url($reobiz_option['youtube']);?>" target="_blank"> <i class="fab fa-youtube"></i> </a> </li>
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
    </ul>
<?php }

