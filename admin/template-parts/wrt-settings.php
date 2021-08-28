<?php 

/**
*   Called in inc/classes.php
*   Admin panel Setting
*   Testimonials settings template
*   All setting options added here
*/
 
  $wrt_setting_options = get_option('wrt_setting_options');
?>

<div class="wrt-settings">
	<h2><?php _e('Testimonial Settings', 'royal-testimonials' ); ?></h1>
	<form action="" method="post">
		<table>
			<thead>
				<tr>
					<th><?php _e('Preview', 'royal-testimonials' ); ?></th>
					<th><?php _e('Shortcode', 'royal-testimonials' ); ?></th>
					<th><?php _e('Setting', 'royal-testimonials' ); ?></th>
				</tr>
			</thead>
			<tbody>
			   <tr>
				  <?php include( 'wrt-carousel.php' );?>
			   </tr>
				<tr>
					<?php include( 'wrt-grid.php' );?>
				</tr>
				<tr>
					<?php include( 'wrt-list.php' );?>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3"> 
						<input type="submit" value="Save Settings" class="wrt_button"/>
					</td>
				</tr>
			</tfoot>
		</table>
	</form>
	
	<p><?php _e('You can our documentation here', 'royal-testimonials' ); ?> <a target="_blank" href="https://leturetech.com/royal-testimonials-documentation/"> <?php _e('See Documentation', 'royal-testimonials' ); ?></a></p>
	<p><?php _e('You can our demo here', 'royal-testimonials' ); ?> <a target="_blank" href="https://leturetech.com/royal-testimonials/"> <?php _e('See Demo', 'royal-testimonials' ); ?></a></p>
</div>


