<?php
/**
 * @author  rs-theme
 * @since   1.0
 * @version 1.0 
 */
wp_head();  
global $reobiz_option;
$error_bg = !empty($reobiz_option['error_bg']) ? 'style="background:url('.$reobiz_option['error_bg']['url'].')"': '';?>

<div class="page-error <?php if($reobiz_option){
    echo esc_attr('not-found-bg');
}?>" <?php echo wp_kses_post( $error_bg ); ?>>
    <div class="container">
        <div id="content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">    
                    <section class="error-404 not-found">    
                        <div class="page-content">
                            <h2>
                                <span>
                                    
                                    <?php
                                        if(!empty($reobiz_option['title_404'])){
                                            echo wp_kses($reobiz_option['title_404'], 'reobiz');
                                        }
                                        else{
                                            echo esc_html__( '404', 'reobiz' ); 
                                        }
                                    ?>
                                </span>                      
                                <?php

                                 if(!empty($reobiz_option['text_404'])){
                                      echo wp_kses($reobiz_option['text_404'], 'reobiz');
                                 }
                                 else{
                                  echo esc_html__( 'oops! page not found', 'reobiz' ); }
                                 ?>
                            </h2>
                            <a class="readon" href="<?php echo esc_url( home_url('/') ); ?>">
                                <?php
                                 if(!empty($reobiz_option['back_home'])){
                                     echo esc_html($reobiz_option['back_home']);
                                 }
                                 else{
                                     esc_html_e('Or back to homepage', 'reobiz'); 
                                  }
                                ?>
                            <i class="fa reobizicon-right-arrow"></i></a>
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->    
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>   
</div> <!-- .page-error -->
<?php
wp_footer();
