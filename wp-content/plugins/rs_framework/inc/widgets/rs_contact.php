<?php 
// Register and load the widget
function rsframework_contact_widget() {
    register_widget( 'contact_widget' );
}
add_action( 'widgets_init', 'rsframework_contact_widget' );

//Contact info Widget 
class contact_widget extends WP_Widget {
 
   /** constructor */
   function __construct() {
    parent::__construct(
      'contact_widget', 
      __('RS Contact Info', 'rsframework'),
      array( 'description' => __( 'Display your contact info!', 'rsframework' ), )
    );
  }
 
    /** @see WP_Widget::widget */
    function widget($args, $instance) { 
        extract( $args );
        $image_src = '';
        $title    = apply_filters('widget_title', $instance['title']);       
        $address2  = isset($instance['address2']) ? $instance['address2'] : '' ;       
        $email  =  $instance['email'];
        $phone   = $instance['phone'];
        $hour   = $instance['hour'];
        $fax   = $instance['fax'];
        $app   = $instance['app'];
      
        echo wp_kses_post($before_widget); 
        if ( $title )
        echo wp_kses_post($before_title . $title . $after_title); ?>
  
  <!-- Contact Info Widget -->
  <ul class="fa-ul">
    <?php           

      if (!empty($address2)){
            echo '<li class="address1"><i class="reobizicon-location" ></i><span>'.wp_kses_post($address2).'</span></li>';
        }

      if (!empty($phone)){
            echo '<li><i class="reobizicon-call" ></i><a href="tel:'. esc_attr(str_replace(" ","", ($phone))) .'">'. esc_html($phone) .'</a></li>';
      }
      
      if (!empty($email)){
            echo '<li><i class="reobizicon-email" ></i><a href="mailto:'.esc_attr($email).'">'.esc_html($email).'</a></li>';
      }
      if (!empty($fax)){
        echo '<li><i class="fas fa-fax"></i>'. esc_html($fax) .'</li>';  
      }
      if (!empty($app)){
      echo '<li><i class="fa fa-whatsapp" ></i>'. esc_html($app) .'</li>';
      }
        
      if (!empty($hour)){
            echo '<li><i class="reobizicon-clock"></i>'.esc_html($hour) .'</li>';    
      }
    ?>

  </ul>

    <?php echo wp_kses_post($after_widget); ?>
     <?php
    }
 
  /** @see WP_Widget::update  */
  function update($new_instance, $old_instance) {
      $instance            = $old_instance;
      $instance['title']   = strip_tags($new_instance['title']);
      $instance['address2'] = wp_kses_post($new_instance['address2']);  
      $instance['email']   = strip_tags($new_instance['email']);
      $instance['phone']   = strip_tags($new_instance['phone']);
      $instance['hour']    = strip_tags($new_instance['hour']);
      $instance['fax']     = strip_tags($new_instance['fax']);
      $instance['app']     = strip_tags($new_instance['app']); 
     
      $instance['url']     = strip_tags($new_instance['url']);      
      return $instance;
    }
 
    /** @see WP_Widget::form */
    function form($instance) {  

       $title   = (isset($instance['title']))? $instance['title'] : '';    
       $address2 = (isset($instance['address2']))? $instance['address2'] :''; 
       $email   = (isset($instance['email']))? $instance['email'] : '';
       $phone   = (isset($instance['phone']))? $instance['phone'] : '';
       $hour    = (isset($instance['hour']))? $instance['hour'] : '';
       $fax     = (isset($instance['fax']))? $instance['fax'] : '';
       $app     = (isset($instance['app']))? $instance['app'] : '';       

     ?>      
        <p>
          <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'rsframework'); ?></label> 
          <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_js( $title); ?>" />
        </p> 
        
        <p>
          <label for="<?php echo esc_attr($this->get_field_id('address2')); ?>"><?php esc_html_e('Address:', 'rsframework'); ?></label>
          <input class="widefat" id="<?php echo esc_attr($this->get_field_id('address2')); ?>" name="<?php echo esc_attr($this->get_field_name('address2')); ?>" type="text" value="<?php echo wp_kses_post($address2); ?>" />
        </p>
        <p>
          <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone:', 'rsframework'); ?></label> 
          <input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_js($phone); ?>" />
        </p>
       
        <p>
          <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email:', 'rsframework'); ?></label> 
          <input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_js($email); ?>" />
        </p>  

        <p>
          <label for="<?php echo esc_attr($this->get_field_id('app')); ?>"><?php esc_html_e('WhatsApp:', 'rsframework'); ?></label> 
          <input class="widefat" id="<?php echo esc_attr($this->get_field_id('app')); ?>" name="<?php echo esc_attr($this->get_field_name('app')); ?>" type="text" value="<?php echo esc_js($app); ?>" />
        </p>     
        
        <p>
          <label for="<?php echo esc_attr($this->get_field_id('fax')); ?>"><?php esc_html_e('Fax:', 'rsframework'); ?></label> 
          <input class="widefat" id="<?php echo esc_attr($this->get_field_id('fax')); ?>" name="<?php echo esc_attr($this->get_field_name('fax')); ?>" type="text" value="<?php echo esc_js($fax); ?>" />
        </p>
        <p>
          <label for="<?php echo esc_attr($this->get_field_id('hour')); ?>"><?php esc_html_e('Opening Hour:', 'rsframework'); ?></label> 
            
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('hour')); ?>" name="<?php echo esc_attr($this->get_field_name('hour')); ?>" type="text" value="<?php echo wp_kses_post($hour); ?>" />
        </p>
       
        <?php 
    }

 
} // end class
