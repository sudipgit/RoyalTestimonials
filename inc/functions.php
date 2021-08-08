<?php
/**
* All general functions here
*
*
*
*/



/**
*  Get all published testimonials 
*  @parem number of testimonials to return
*
*/


function wrtGetTestimonials($numberposts=null)
{
if(!$numberposts || $numberposts<=0)
	$numberposts=-1;

$args = array(
  'numberposts' => $numberposts,
  'post_type'   => 'royal_testimonials',
  'post_status' => 'publish'
);
 
$testimonials = get_posts( $args );

return $testimonials;	
	
}