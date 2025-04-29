<?php
    global $reobiz_option;    
    $header_width_meta = get_post_meta(get_queried_object_id(), 'header_width_custom', true);
    if ($header_width_meta != ''){
        $header_width = ( $header_width_meta == 'full' ) ? 'container-fluid': 'container';
    }else{
        $header_width = !empty($reobiz_option['header-grid']) ? $reobiz_option['header-grid'] : '';
        $header_width = ( $header_width == 'full' ) ? 'container-fluid': 'container';
    }
    $banner_hide = get_post_meta(get_queried_object_id(), 'banner_hide', true);
    if($banner_hide !='hide'){ 
    if(!empty($reobiz_option['off_banner_blog_all']) || $banner_hide =='show'){ 
        return;
    } else {
?>

<?php 
    $post_menu_type = get_post_meta(get_queried_object_id(), 'menu-type', true); 
    $post_meta_data = get_post_meta(get_queried_object_id(), 'banner_image', true);
    $content_banner = get_post_meta(get_queried_object_id(), 'content_banner', true); 
?>

<div class="rs-breadcrumbs  porfolio-details is-shop-hide gg">
<?php if($post_meta_data !='') { ?>
    <div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url( $post_meta_data );?>')">
        <div class="<?php echo esc_attr($header_width);?>">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>"> 
                <?php 
                    $post_meta_title = get_post_meta(get_queried_object_id(), 'select-title', true);?>
                    <?php if( $post_meta_title != 'hide' ){             
                    ?>
                    <h1 class="page-title">
                        <?php if($content_banner !=''){
                           echo esc_html($content_banner);
                            } else {                              
                                
                                if(!empty($reobiz_option['blog_title'])) { ?>
                                    <?php echo esc_html($reobiz_option['blog_title']);?>
                                    <?php }
                                    else{
                                     esc_html_e('Blog','reobiz');
                                } 
                            }
                        ?>
                    </h1>
                    <?php } 
                    if(!empty($reobiz_option['off_breadcrumb'])){
                        $rs_breadcrumbs = get_post_meta(get_queried_object_id(), 'select-bread', true);
                        if( $rs_breadcrumbs != 'hide' ):        
                        if(function_exists('bcn_display')){?>
                            <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                        <?php } 
                        endif;
                    }
                ?>    
              </div>
            </div>
          </div>
        </div>
    </div>
<?php }
    elseif(!empty($reobiz_option['blog_banner_main']['url'])) { ?>
    <div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url($reobiz_option['blog_banner_main']['url']);?>')">
      <div class="<?php echo esc_attr($header_width);?>">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>">
                <?php 
                    $post_meta_title = get_post_meta(get_queried_object_id(), 'select-title', true);?>
                        <?php if( $post_meta_title != 'hide' ){             
                    ?>
                    <h1 class="page-title">
                        <?php if($content_banner !=''){
                                echo esc_html($content_banner);
                            } else {                                
                                 
                            if(!empty($reobiz_option['blog_title'])) { ?>
                                <?php echo esc_html($reobiz_option['blog_title']);?>
                                <?php }
                                else{
                                 esc_html_e('Blog','reobiz');
                                } 
                            }
                        ?>
                    </h1>
                    <?php } 
                    if(!empty($reobiz_option['off_breadcrumb'])){
                        $rs_breadcrumbs = get_post_meta(get_queried_object_id(), 'select-bread', true);
                        if( $rs_breadcrumbs != 'hide' ):        
                        if(function_exists('bcn_display')){?>
                            <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                        <?php } 
                        endif;
                    }
                ?>            
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } else {   
  ?>
  <div class="rs-breadcrumbs-inner">  
    <div class="<?php echo esc_attr($header_width);?>">
      <div class="row">
        <div class="col-md-12 text-center">
            <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>">
                <?php 
                      $post_meta_title = get_post_meta(get_queried_object_id(), 'select-title', true);?>
                      <?php if( $post_meta_title != 'hide' ){             
                      ?>
                        <h1 class="page-title">
                            <?php if($content_banner !=''){
                                echo esc_html($content_banner);
                                } else {                                
                                  
                                  if(!empty($reobiz_option['blog_title'])) { ?>
                                      <?php echo esc_html($reobiz_option['blog_title']);?>
                                      <?php }
                                      else{
                                       esc_html_e('Blog','reobiz');
                                    } 
                                }
                            ?>
                        </h1>
                        <?php } 
                        if(!empty($reobiz_option['off_breadcrumb'])){
                            $rs_breadcrumbs = get_post_meta(get_queried_object_id(), 'select-bread', true);
                            if( $rs_breadcrumbs != 'hide' ):        
                                if(function_exists('bcn_display')){?>
                                    <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                                <?php } 
                            endif;
                        }
                ?>            
            </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  }
?>  
</div>
<?php }} ?>