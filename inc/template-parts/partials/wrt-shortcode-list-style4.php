<?php 
/**
*   Called in template wrt-shortcode-list.php
*   list style4
*  
*/
?>  

<div class="wrt-list">
	<?php $row=1;
		foreach($testimonials as $testimonial){
			if(($row%2)==1){
	?>
		<div class="item wrt-list-style4 wrt-odd">
			<div class="wrt-body">
				<div class="wrt-list-header">
					<?php if ($wrt_setting_options['wrt_list_hide_photo']=='no'){ ?>
					<div class="wrt-img">
						<?php
					
						if(has_post_thumbnail($testimonial->ID))
						{
						?>
						
							<img src="<?php echo get_the_post_thumbnail_url($testimonial->ID,'thumbnail');?>" />
						<?php } else{ ?>
							<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/assets/images/images.jpg';?>"/>
						<?php } ?>
					</div>
					<?php } ?>
					<div class="wrt-list-desc">
						<?php if ($wrt_setting_options['wrt_list_hide_rating']=='no'){ 
							$rating= get_post_meta( $testimonial->ID, 'wrt_client_rating',true);
							?>
							<div class="wrt-rating">
							<?php for($i=1;$i<=5;$i++){ ?>
								<span class="fa fa-star <?php if($i<=$rating) echo 'checked';?>"></span>
							<?php } ?>
							</div>						
						<?php } ?>
						<?php if ($wrt_setting_options['wrt_list_hide_title']=='no'){ ?>
						<div class="wrt-title">
							<h3><?php _e($testimonial->post_title, 'royal-testimonials');?></h3>
						</div>
						 <?php } ?>
						<div class="wrt-desc">
							<?php _e($testimonial->post_content, 'royal-testimonials');?>
						</div>
					</div>
				</div>	
				<div class="wrt-author-contact">
					<?php if ($wrt_setting_options['wrt_list_hide_name']=='no' && get_post_meta( $testimonial->ID, 'wrt_client_full_name',true)){ ?>
					<div class="wrt-name">
						<h4><?php _e(get_post_meta( $testimonial->ID, 'wrt_client_full_name',true), 'royal-testimonials');?></h4>
					</div>	
					<?php } ?>	
					<?php if ($wrt_setting_options['wrt_list_hide_company']=='no' && get_post_meta( $testimonial->ID, 'wrt_client_company',true) ){ ?>
						<p class="wrt_company">
						<?php _e(get_post_meta( $testimonial->ID, 'wrt_client_company',true), 'royal-testimonials');?>
						</p>
					<?php } ?>							
					<?php if ($wrt_setting_options['wrt_list_hide_website']=='no' && get_post_meta( $testimonial->ID, 'wrt_client_website',true)){ ?>
						<p class="wrt_website">
						<a href="<?php echo get_post_meta( $testimonial->ID, 'wrt_client_website',true);?>" target="_blank"><?php _e(get_post_meta( $testimonial->ID, 'wrt_client_website',true), 'royal-testimonials');?></a>
						</p>
					<?php } ?>
				</div>			
			</div>
		</div>
		
		<?php } else { ?>
		
		<div class="item wrt-list-style4 wrt-even">
			<div class="wrt-body">
				<div class="wrt-list-header">	
					<div class="wrt-list-desc">
						<?php if ($wrt_setting_options['wrt_list_hide_rating']=='no'){ 
							$rating= get_post_meta( $testimonial->ID, 'wrt_client_rating',true);
						?>
						<div class="wrt-rating">
						
						<?php for($i=1;$i<=5;$i++){ ?>
							<span class="fa fa-star <?php if($i<=$rating) echo 'checked';?>"></span>
						<?php } ?>
						</div>						
						<?php } ?>
						<?php if ($wrt_setting_options['wrt_list_hide_title']=='no'){ ?>
						<div class="wrt-title">
							<h3><?php _e($testimonial->post_title, 'royal-testimonials');?></h3>
						</div>
						 <?php } ?>
						<div class="wrt-desc">
							<?php _e($testimonial->post_content, 'royal-testimonials');?> 
						</div>
					</div>
					<?php if ($wrt_setting_options['wrt_list_hide_photo']=='no'){ ?>
					<div class="wrt-img">
						<?php
						if(has_post_thumbnail($testimonial->ID))
						{
						?> 
						
							<img src="<?php echo get_the_post_thumbnail_url($testimonial->ID,'thumbnail');?>" />
						<?php } else{ ?>
							<img src="<?php echo WRT_PLUGIN_ROOT_URL.'/assets/images/images.jpg';?>"/>
						<?php } ?>
					</div>
					<?php } ?>
				</div>	
				<div class="wrt-author-contact">
					<?php if (get_post_meta( $testimonial->ID, 'wrt_client_full_name',true)){ ?>
					<div class="wrt-name">
						<h4><?php _e(get_post_meta( $testimonial->ID, 'wrt_client_full_name',true), 'royal-testimonials');?></h4>
					</div>	
					<?php } ?>
					<?php if ($wrt_setting_options['wrt_list_hide_company']=='no'){ ?>
						<p class="wrt_company">
						<?php _e(get_post_meta( $testimonial->ID, 'wrt_client_company',true), 'royal-testimonials');?>
						</p>
					<?php } ?>							
					 <?php if ($wrt_setting_options['wrt_list_hide_website']=='no' && get_post_meta( $testimonial->ID, 'wrt_client_website',true)){ ?>
						<p class="wrt_website">
						 <a href="<?php echo get_post_meta( $testimonial->ID, 'wrt_client_website',true);?>" target="_blank"><?php _e(get_post_meta( $testimonial->ID, 'wrt_client_website',true), 'royal-testimonials');?></a>
						</p>
					  <?php } ?>
				</div>			
			</div>
		</div>
	<?php } $row++; } ?>
</div>




