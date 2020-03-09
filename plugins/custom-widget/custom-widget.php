<?php 
/**
* Plugin Name: Advanced Custom Widget
* Plugin URI: http://mansfeld.pl/sklep/
* Description: Czysty widget.
* Version: 1.0
* Author: Paweł Mansfeld
* Author URI: http://mansfeld.pl/
**/


 class clear_widget extends WP_Widget {
     function __construct() {
          parent::__construct(false, $name = 'Czysty widget');    
     }
     function widget($args, $instance) {    
         extract( $args );
         $title         = apply_filters('widget_title', $instance['title']);
         $message     = $instance['message'];
         ?>
               <?php echo $before_widget; ?>
                   <?php if ( $title )
                         echo $before_title . $title . $after_title; ?> 
<?php echo $message; ?>
       <?php echo $after_widget; ?>
<?php }
 function form($instance) {
     $title         = esc_attr($instance['title']);
     $message    = esc_attr($instance['message']);
     ?>
     <p>
       <label for="<?php echo $this->get_field_id('title'); ?>">Tytuł</label> 
       <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
     </p>
     <p>
       <label for="<?php echo $this->get_field_id('message'); ?>">Zawartość</label> 
       <input class="widefat" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>" type="text" value="<?php echo $message; ?>" />
     </p>
<?php 
 } 
}
function clear_widget_init(){
   return register_widget('clear_widget');
}
add_action ('widgets_init', 'clear_widget_init');
