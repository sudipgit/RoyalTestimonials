<?php 

/**
*   Called in template wrt-setting.php
*   Admin list panel Setting
*  
*/

?>

<td>
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_list_style1.png';?>" /> 
		<input <?php if(!$wrt_setting_options || $wrt_setting_options['wrt_list_preview_style']=='style1') echo 'checked="checked"';?> type="radio" name="wrt_list_preview_style" value="style1"/>
	</div>
	
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_list_style2.png';?>" /> 
		<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_list_preview_style']=='style2') echo 'checked="checked"';?> type="radio" name="wrt_list_preview_style" value="style2"/>
	</div>
	
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_list_style3.png';?>" /> 
		<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_list_preview_style']=='style3') echo 'checked="checked"';?> type="radio" name="wrt_list_preview_style" value="style3"/>
	</div>
	
	<div class="wrt-preview-field">
		<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/admin/assets/images/preview_list_style4.png';?>" /> 
		<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_list_preview_style']=='style4') echo 'checked="checked"';?> type="radio" name="wrt_list_preview_style" value="style4"/>
	</div>
</td>
<td><span class="shortcode">[wrt_royal_list]</span>
	
	 	<!-- <p style="max-width:200px">You can add multiple list with shortcode with theme parameter. <b>If you use shortcode with theme parameter below then the preview selction will not work.</b> It will show the style you added in parameter.
	 <br/></br>
	 [wrt_list theme="style1"]<br/></br>
	 [wrt_list theme="style2"]<br/></br>
	 [wrt_list theme="style3"]<br/></br>
	 [wrt_list theme="style4"]<br/></br>-->
</td>
<td>
 <div class="general-settings">
     <h3> General settings</h3>
	<div class="wrt-form-fields">
		<label><strong>Total Testimoninals:</strong></label>
		<input class="wrt-text" type="number" name="wrt_list_total" value="<?php if($wrt_setting_options) echo $wrt_setting_options['wrt_list_total']; else echo '0';?>"/>
		<span class="wrt-des"> (-1 or 0 to show all testimonials) </span>
	</div>
	</div>
	<div class="display-setting">
		 <h3> Display Settings</h3>
		<div class="wrt-form-fields">
			<label><strong>Hide Client Photo:</strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_list_hide_photo']=='yes') echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_list_hide_photo" value="yes"/> 
		</div>
		
		<div class="wrt-form-fields">
			<label><strong>Hide Client Name:</strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_list_hide_name']=='yes') echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_list_hide_name" value="yes"/> 
		</div>
		
		<div class="wrt-form-fields">
			<label><strong>Hide Title:</strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_list_hide_title']=='yes') echo 'checked="checked"'; else if(!$wrt_setting_options) echo 'checked="checked"';?>  class="wrt-checkbox" type="checkbox" name="wrt_list_hide_title" value="yes"/> 
		</div>
		
		<div class="wrt-form-fields">
			<label><strong>Hide Rating:</strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_list_hide_rating']=='yes') echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_list_hide_rating" value="yes"/> 
		</div>
		
		<div class="wrt-form-fields">
			<label><strong>Hide Company Name:</strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_list_hide_company']=='yes') echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_list_hide_company" value="yes"/> 
		</div>
		
		<div class="wrt-form-fields">
			<label><strong>Hide Website:</strong></label>
			<input <?php if($wrt_setting_options && $wrt_setting_options['wrt_list_hide_website']=='yes') echo 'checked="checked"';else if(!$wrt_setting_options) echo 'checked="checked"';?> class="wrt-checkbox" type="checkbox" name="wrt_list_hide_website" value="yes"/> 
		</div>	 
		</div>
</td>