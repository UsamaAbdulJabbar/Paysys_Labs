 <!DOCTYPE html>
<html lang="en-US">
<?php
    /*Template Name: Coming Soon
    */
    wp_head();  
    global $reobiz_option;
    $page_bg    = !empty($reobiz_option['coming_bg']) ? 'style="background:url('.$reobiz_option['coming_bg']['url'].')"': '';

    $day_text   = !empty($reobiz_option['coming_day']) ? $reobiz_option['coming_day'] : 'Days';
    $hour_text  = !empty($reobiz_option['coming_min']) ? $reobiz_option['coming_hour'] : 'Minutes';
    $sec_text   = !empty($reobiz_option['coming_sec']) ? $reobiz_option['coming_sec'] : 'Seconds';
    $min_text   = !empty($reobiz_option['coming_hour']) ? $reobiz_option['coming_min'] : 'Hours';

    $text_color  = !empty($reobiz_option['text_color']) ? $reobiz_option['text_color'] : '#ffffff';
    
    $com_logo_height        = !empty($reobiz_option['coming-logo-height']) ? 'style = "max-height: '.$reobiz_option['coming-logo-height'].'"' : '';

    $countdown_localize_data = array(
        'day_text'   => $day_text,
        'hour_text'  => $hour_text,
        'sec_text'   => $sec_text,
        'min_text'   => $min_text,
        'text_color'  => $text_color,        
    );
        
    wp_localize_script( 'reobiz-main', 'countdown_data', $countdown_localize_data );
?>
<div class="page-error coming-soon" <?php echo wp_kses_post( $page_bg ); ?>>
    <div class="container">
        <div id="content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">    
                    <section class="error-404 not-found">    
                        <div class="page-content">
                            <?php   if (!empty( $reobiz_option['coming_logo']['url'] ) ) { ?>
                                <div class="logo">
                                    <img <?php echo wp_kses($com_logo_height, 'reobiz');?> src="<?php echo esc_url( $reobiz_option['coming_logo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                </div>
                            <?php } ?>
                            <h3>
                                <span>                                    
                                    <?php
                                        if(!empty($reobiz_option['coming_title'])){
                                            echo wp_kses_post($reobiz_option['coming_title']);
                                        }
                                        else{
                                            echo esc_html__( 'Coming Soon', 'reobiz' ); 
                                        }
                                    ?>
                                </span>                      
                                <?php
                                    if(!empty($reobiz_option['coming_text'])){
                                        echo wp_kses_post($reobiz_option['coming_text']);
                                    }
                                    else{
                                        echo esc_html__( 'Our Exciting Website Is Coming Soon! Check Back Later', 'reobiz' ); }
                                ?>
                            </h3>
                            <?php 
                                if(!empty($reobiz_option['opt-date-time'])) : 
                                $timeformat =  $reobiz_option['opt-date-time'];
                            ?>
                            <div class="countdown-inner">
                                <div data-animation-in="slideInLeft" data-animation-out="animate-out fadeOut" class="CountDownTimer" data-date="<?php echo wp_kses_post($timeformat);?>"></div>
                            </div>
                            <?php endif; ?>
                            <div class="follow-us-sbuscribe"> 
                                <div class="follow-us-main">
                                    <?php if (!empty($reobiz_option['fllow_title'])) : ?>
                                        <p class="follow-us">
                                            <?php echo esc_html($reobiz_option['fllow_title']) ?>                                            
                                        </p>        
                                    <?php endif;
                                        if(!empty($reobiz_option['show-social'])){ ?>
                                            <ul class="clearfix">
                                                <?php $top_social = $reobiz_option['show-social'];                                    
                                                    if($top_social == '1'){              
                                                    if(!empty($reobiz_option['facebook'])) { ?>
                                                        <li> <a href="<?php echo esc_url($reobiz_option['facebook']);?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                <?php }
                                                    if(!empty($reobiz_option['twitter'])) { ?>
                                                     <li> <a href="<?php echo esc_url($reobiz_option['twitter']);?> " target="_blank"><i class="fab ri-twitter-x-line"></i></a> </li>
                                                <?php } 
                                                     if(!empty($reobiz_option['rss'])) { ?>
                                                     <li> <a href="<?php  echo esc_url($reobiz_option['rss']);?> " target="_blank"><i class="fas fa-rss"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($reobiz_option['pinterest'])) { ?>
                                                    <li> <a href="<?php  echo esc_url($reobiz_option['pinterest']);?> " target="_blank"><i class="fab fa-pinterest"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($reobiz_option['linkedin'])) { ?>
                                                    <li> <a href="<?php  echo esc_url($reobiz_option['linkedin']);?> " target="_blank"><i class="fab fa-linkedin-in"></i></a> </li>
                                                <?php } ?>
                                               
                                                <?php if (!empty($reobiz_option['instagram'])) { ?>
                                                <li> <a href="<?php  echo esc_url($reobiz_option['instagram']);?> " target="_blank"><i class="fab fa-instagram"></i></a> </li>
                                                <?php } ?>
                                                <?php if(!empty($reobiz_option['vimeo'])) { ?>
                                                <li> <a href="<?php  echo esc_url($reobiz_option['vimeo']);?> " target="_blank"><i class="fab fa-vimeo-v"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($reobiz_option['tumblr'])) { ?>
                                                <li> <a href="<?php  echo esc_url($reobiz_option['tumblr']);?> " target="_blank"><i class="fab fa-tumblr"></i></a> </li>
                                                <?php } ?>
                                                <?php if (!empty($reobiz_option['youtube'])) { ?>
                                                <li> <a href="<?php  echo esc_url($reobiz_option['youtube']);?> " target="_blank"><i class="fab fa-youtube"></i></a> </li>
                                                <?php } ?>
                                                <?php } ?>
                                            </ul>
                                        <?php }
                                    ?>
                                </div>                                    
                             
                            </div>
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->    
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>   
</div> <!-- .page-error -->
<?php
wp_footer(); ?>
</html>
