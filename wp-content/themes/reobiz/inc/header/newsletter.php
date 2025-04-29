<?php 
$reobiz_option = get_option( 'reobiz_option' );
if(!empty($reobiz_option['rs_newsletter'])){
$image_enable = !empty( $reobiz_option['newsletter_img']['url'] ) ? 'image_enable' : 'image_disable' ;
$newsletter_bg = !empty( $reobiz_option['newsletter_bg_image']['url'] ) ? $reobiz_option['newsletter_bg_image']['url'] : '' ;
if (!empty( $reobiz_option['newsletter_img']['url'] ) || !empty( $reobiz_option['rs_editor_text'] )) { ?>

<?php if (!empty($newsletter_bg)) { ?>
    <div class="rs-newsletter-section-wrap <?php echo esc_html($image_enable); ?> rs-cookie-overlay d-none rsnewsletter_bg" style="background: url(<?php echo esc_attr($newsletter_bg); ?>);">
<?php } else { ?>
    <div class="rs-newsletter-section-wrap <?php echo esc_html($image_enable); ?> rs-cookie-overlay d-none">
<?php } ?>
    <div class="rs-newsletter-section">
        <?php if (!empty( $reobiz_option['newsletter_img']['url'] ) ) { ?>
            <div class="rs_newsletter_img">
                <img src="<?php echo esc_url( $reobiz_option['newsletter_img']['url']); ?>" alt="Newsletter">
            </div>
        <?php } ?>
        <?php if (!empty( $reobiz_option['rs_editor_text'] ) ) { ?>
            <div class="rs-newsletter-content">
                <?php echo do_shortcode( $reobiz_option['rs_editor_text'] ); ?>
                <div class="rs-accept-cookies rs-accept-cookie-btn"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"></path></svg> </div> 
            </div>
        <?php } ?> 
    </div>  
</div>
<?php }
}