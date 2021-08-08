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
	<h2> Testimonial Settings</h1>
	<form action="" method="post">
		<table>
			<thead>
				<tr>
					<th>Preview</th>
					<th>Shortcode</th>
					<th>Setting</th>
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
	
	<p>You can our documentation here <a target="_blank" href="https://leturetech.com/royal-testimonials-documentation/">See Documentation</a></p>
	<p>You can our demo here <a target="_blank" href="https://leturetech.com/royal-testimonials/">See Demo</a></p>
</div>


