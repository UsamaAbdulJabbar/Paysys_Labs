<?php 
global $reobiz_option;
$preloader_img = "";

if(!empty($reobiz_option['show_preloader']))
  {
    $loading = $reobiz_option['show_preloader'];
    if(!empty($reobiz_option['preloader_img'])){
      $preloader_img = $reobiz_option['preloader_img'];
    }
    if($loading == 1){
      if(empty($preloader_img['url'])):
      ?> 

      <div id="reobiz-load">
        <div class="loader-reobiz">
          <div id="medvill-load">             
                <div class="spinner_inner">
                  <div class="spinner"></div>
              </div>
              </div>
        </div>
      </div>  

      
        
      <?php else: ?>
          <div id="reobiz-load">
              <img src="<?php echo esc_url($preloader_img['url']);?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
          </div>
      <?php endif; ?>
  <?php }
}?>

<?php

if(!empty($reobiz_option['off_sticky'])):   
    $sticky = $reobiz_option['off_sticky'];         
    if($sticky == 1):
     $sticky_menu ='menu-sticky';        
    endif;
   else:
   $sticky_menu ='';
endif;

if( is_page() ){
 $post_meta_header = get_post_meta($post->ID, 'trans_header', true);  

     if($post_meta_header == 'Default Header'){       
        $header_style = 'default_header';             
     }
     else{
        $header_style = 'transparent_header';
    }
 }
 else{
    $header_style = 'transparent_header';
 }


 ?>   