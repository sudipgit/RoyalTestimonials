<?php
/**
* We have several shortcodes for front end
*  We are adding two types of layout for now
* One is Carousel and another is list/grid view
*/ 

/**
* We will display carousel slider using this shortcode
* No parameter needed
* We will get slider number etc from setting
* Shortcode is [wrt_royal_carousel]
*/

  function wrtCarousel($atts)
	{      
		$wrt_setting_options = get_option('wrt_setting_options');   
		$total=-1;	
		$show_desktop=3;	
		$show_tablet=2;	 
		$show_mobile=1;	  
		$interval=3000;	   	
		$speed=2000;
		$autoplay='true';
		$arrows='true';
		$bullets='false';
		$style='style1';
		if($wrt_setting_options){ 
			$total=$wrt_setting_options['wrt_carousel_total'];	
			$show_desktop=$wrt_setting_options['wrt_carousel_per_slide_desktop'];	   
			$show_tablet=$wrt_setting_options['wrt_carousel_per_slide_tablet'];	    
			$show_mobile=$wrt_setting_options['wrt_carousel_per_slide_mobile'];	     
			$interval=$wrt_setting_options['wrt_carousel_sliding_interval'];
			$speed=$wrt_setting_options['wrt_carousel_sliding_speed'];
			$autoplay=$wrt_setting_options['wrt_carousel_disable_autoplay'];
			$arrows=$wrt_setting_options['wrt_carousel_hide_arrows'];
			$bullets=$wrt_setting_options['wrt_carousel_hide_buttles'];
			$style=$wrt_setting_options['wrt_carousel_preview_style'];
		}	  
		if(is_array($atts))
		$style=$atts['theme'];
		$testimonials=wrtGetTestimonials($total);
		ob_start();

		// include template 
		include( 'template-parts/wrt-shortcode-carousel.php' );
	
		$html=ob_get_clean();
		return $html;
	}
add_shortcode('wrt_royal_carousel','wrtCarousel');

/**
* We will display grid view of testimonials using this shortcode
* No parameter needed
* Shortcode is [wrt_royal_grid]
*/

  function wrtGrid($atts)

	{
		$wrt_setting_options = get_option('wrt_setting_options');   
		$total=-1;	
		$columns_desktop=3;	
		$columns_tablet=2;	 
		$columns_mobile=1;
		$style='style1';
		if($wrt_setting_options)	  { 
			$total=$wrt_setting_options['wrt_grid_total'];	
			$columns_desktop=$wrt_setting_options['wrt_grid_columns_desktop'];	   
			$columns_tablet=$wrt_setting_options['wrt_grid_columns_tablet'];	    
			$columns_mobile=$wrt_setting_options['wrt_grid_columns_mobile'];  
			$style=$wrt_setting_options['wrt_grid_preview_style'];  
		}	  	 
		if(is_array($atts))
		$style=$atts['theme'];
		$testimonials=wrtGetTestimonials($total);
		ob_start();
		
		// include template 
		include( 'template-parts/wrt-shortcode-grid.php' );
		$html=ob_get_clean();
		return $html;
	}
add_shortcode('wrt_royal_grid','wrtGrid');

/**
* We will display list view of testimonials using this shortcode
* No parameter needed
* Shortcode is [wrt_list]
*/

  function wrtList($atts)
	{
		$wrt_setting_options = get_option('wrt_setting_options');   
		$total=-1;	
		$style='style1';
		if($wrt_setting_options)	  { 
			$total=$wrt_setting_options['wrt_list_total'];	  
			$style=$wrt_setting_options['wrt_list_preview_style'];  
		}	  	 
		if(is_array($atts))
		$style=$atts['theme'];
		$testimonials=wrtGetTestimonials($total);
		ob_start();
		// include template 
		include( 'template-parts/wrt-shortcode-list.php' );
		$html=ob_get_clean();
		return $html;
	}
add_shortcode('wrt_royal_list','wrtList');
?>