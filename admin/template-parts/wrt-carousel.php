<?php 

/**
*   Called in template wrt-setting.php
*   Admin carousel panel Setting
*  
*/
?> 

<td>
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_carousel_style1.png';?>" /> 
		<input <?php if(!$wrt_setting_options || $wrt_setting_options['wrt_carousel_preview_style']=='style1') echo 'checked="checked"';?> type="radio" name="wrt_carousel_preview_style" value="style1"/>
	</div>
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_carousel_style2.png';?>" /> 
		<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_preview_style']=='style2') echo 'checked="checked"';?> type="radio" name="wrt_carousel_preview_style" value="style2"/>
	</div>
    <div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_carousel_style3.png';?>" /> 
		<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_preview_style']=='style3') echo 'checked="checked"';?> type="radio" name="wrt_carousel_preview_style" value="style3"/>
	</div>
    <div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_carousel_style4.png';?>" /> 
		<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_preview_style']=='style4') echo 'checked="checked"';?> type="radio" name="wrt_carousel_preview_style" value="style4"/>
	</div>
</td>

<td>
	<span class="shortcode">[wrt_royal_carousel]</span>
</td>
<td>
	<div class="general-settings">
		<h3><?php _e( 'General settings', 'royal-testimonials' ); ?> </h3>
		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Total Testimoninals:', 'royal-testimonials' ); ?></strong></label>
			<input class="wrt-text" type="number" name="wrt_carousel_total" value="<?php if($wrt_setting_options) echo $wrt_setting_options['wrt_carousel_total']; else echo '0';?>"/>
			<span class="wrt-des"><?php _e( '(-1 or 0 to show all testimonials)', 'royal-testimonials' ); ?></span>
		</div>
		<div class="wrt-form-fields">
			<h4><?php _e( 'Testimoninal Per Slide:', 'royal-testimonials' ); ?></h4>
			<label><strong><?php _e( 'Desktop:', 'royal-testimonials' ); ?> </strong></label>
			<select class="wrt-text"  name="wrt_carousel_per_slide_desktop">
			
				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_desktop']==6) echo 'selected="selected"';?> value="6">6</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_desktop']==5) echo 'selected="selected"';?> value="5">5</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_desktop']==4) echo 'selected="selected"';?> value="4">4</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_desktop']==3) echo 'selected="selected"'; else if(!$wrt_setting_options) echo 'selected="selected"';?> value="3">3</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_desktop']==2) echo 'selected="selected"';?> value="2">2</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_desktop']==1) echo 'selected="selected"';?> value="1">1</option>
				
			</select>

			<label><strong><?php _e( 'Tablet:', 'royal-testimonials' ); ?></strong> </label>

			<select class="wrt-text" name="wrt_carousel_per_slide_tablet">	

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_tablet']==6) echo 'selected="selected"';?> value="6">6</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_tablet']==5) echo 'selected="selected"'; ?> value="5">5</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_tablet']==4) echo 'selected="selected"';?> value="4">4</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_tablet']==3) echo 'selected="selected"'; ?> value="3">3</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_tablet']==2) echo 'selected="selected"';else if(!$wrt_setting_options) echo 'selected="selected"';?> value="2">2</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_tablet']==1) echo 'selected="selected"';?> value="1">1</option>

			</select>

			<label><strong><?php _e( 'Mobile:', 'royal-testimonials' ); ?> </strong></label>

			<select class="wrt-text" name="wrt_carousel_per_slide_mobile">

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_mobile']==3) echo 'selected="selected"'; ?> value="3">3</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_mobile']==2) echo 'selected="selected"';?> value="2">2</option>

				<option <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_per_slide_mobile']==1) echo 'selected="selected"';else if(!$wrt_setting_options) echo 'selected="selected"';?> value="1">1</option>

			</select>
			<span class="wrt-des"><?php _e( '(Number of testimonials you want to show per slide.)', 'royal-testimonials' ); ?> </span>
		</div>

		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Sliding Interval:', 'royal-testimonials' ); ?></strong></label>
			<input class="wrt-text" min="500" type="number" name="wrt_carousel_sliding_interval" value="<?php if($wrt_setting_options) echo $wrt_setting_options['wrt_carousel_sliding_interval']; else echo '4000';?>"/>
			<span class="wrt-des"><?php _e( '(Put only integer value calculated by milisecond minimum 500)', 'royal-testimonials' ); ?> </span>
		</div>
		
		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Sliding Speed:', 'royal-testimonials' ); ?></strong></label>
			<input class="wrt-text" min="100"  type="number" name="wrt_carousel_sliding_speed" value="<?php if($wrt_setting_options) echo $wrt_setting_options['wrt_carousel_sliding_speed']; else echo '4000';?>"/>
			<span class="wrt-des"><?php _e( '(Put only integer value calculated by milisecond minimum 100)', 'royal-testimonials' ); ?> </span>
		</div>
		
		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Disable Autoplay Carousel:', 'royal-testimonials' ); ?></strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_disable_autoplay']=='false') echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_carousel_disable_autoplay" value="false"/> 
		</div>
	</div>

	<div class="navigation-settings">
		<h3><?php _e( 'Navigation Settings', 'royal-testimonials' ); ?> </h3>
		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Hide Navigation Arrows:', 'royal-testimonials' ); ?></strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_hide_arrows']=='false') echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_carousel_hide_arrows" value="false"/> 
		</div>

		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Hide Navigation Bullets:', 'royal-testimonials' ); ?></strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_hide_buttles']=='false') echo 'checked="checked"';else if(!$wrt_setting_options) echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_carousel_hide_buttles" value="false"/> 
		</div>
	</div> 

	<div class="display-setting">
	   <h3> <?php _e( 'Display Settings', 'royal-testimonials' ); ?></h3>
		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Hide Client Photo:', 'royal-testimonials' ); ?></strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_hide_photo']=='yes') echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_carousel_hide_photo" value="yes"/> 
		</div>

		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Hide Client Name:', 'royal-testimonials' ); ?></strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_hide_name']=='yes') echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_carousel_hide_name" value="yes"/> 
		</div>
		
		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Hide Title:', 'royal-testimonials' ); ?></strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_hide_title']=='yes') echo 'checked="checked"'; else if(!$wrt_setting_options) echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_carousel_hide_title" value="yes"/> 
		</div>

		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Hide Rating:', 'royal-testimonials' ); ?></strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_hide_rating']=='yes') echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_carousel_hide_rating" value="yes"/> 
		</div>

		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Hide Company Name:', 'royal-testimonials' ); ?></strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_hide_company']=='yes') echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_carousel_hide_company" value="yes"/> 
		</div>

		<div class="wrt-form-fields">
			<label><strong><?php _e( 'Hide Website:', 'royal-testimonials' ); ?></strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_carousel_hide_website']=='yes') echo 'checked="checked"'; else if(!$wrt_setting_options) echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_carousel_hide_website" value="yes"/> 
		</div>
	</div>
</td>