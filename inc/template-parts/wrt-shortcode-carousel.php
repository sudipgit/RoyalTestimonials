<?php
/**
*   Called in shortcode.php
*   Frontend  carousel slider template
*  
*/

?>
<div id="wrt-testimonials-<?php _e($style,'royal-testimonials');?>" class="wrt-testimonials" data-items='{"mobile":"<?php _e($show_mobile,'royal-testimonials');?>","tablet":"<?php _e($show_tablet,'royal-testimonials');?>","desktop":"<?php _e($show_desktop,'royal-testimonials');?>"}' data-interval="<?php _e($interval,'royal-testimonials');?>" data-speed="<?php _e($speed,'royal-testimonials');?>" data-loop="true" data-autoplay="<?php _e($autoplay,'royal-testimonials');?>" data-nav="<?php _e($arrows,'royal-testimonials');?>" data-dots="<?php _e($bullets,'royal-testimonials');?>" data-hoverpause="true">

<?php
	include( 'partials/wrt-shortcode-carousel-'.$style.'.php' );	
?>	
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='<?php  _e(WRT_PLUGIN_ROOT_URL,'royal-testimonials');?>/assets/js/wrt-carousel.js'></script>

<!-- partial -->
 

