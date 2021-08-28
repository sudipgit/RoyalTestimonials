<?php
/**
*   Called in shortcode.php
*   Frontend  carousel slider template
*  
*/

?> 
<div id="wrt-testimonials-<?php echo $style;?>" class="wrt-testimonials" data-items='{"mobile":"<?php echo $show_mobile;?>","tablet":"<?php echo $show_tablet;?>","desktop":"<?php echo $show_desktop;?>"}' data-interval="<?php echo $interval;?>" data-speed="<?php echo $speed;?>" data-loop="true" data-autoplay="<?php echo $autoplay;?>" data-nav="<?php echo $arrows;?>" data-dots="<?php echo $bullets;?>" data-hoverpause="true">
<?php include( 'partials/wrt-shortcode-carousel-'.$style.'.php' );?>	
</div>

<!-- partial -->
 

