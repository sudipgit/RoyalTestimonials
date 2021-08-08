<?php
/**
* All general functions here
* Back end functions
* Create custom post type for Testimonials
* Add custom fields
*/




/**
* Create custom post type for Testimonials
* 
*/

function create_wrt_testimonials_posttype() {
 
    register_post_type( 'royal_testimonials',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' ),
				 'add_new'               => __( 'Add New', 'royal-testimonials' ),
				'add_new_item'          => __( 'Add New Testimonial', 'royal-testimonials' ),  
				'edit_item'             => __( 'Edit Testimonial', 'royal-testimonials' ), 
				'new_item'              => __( 'New Testimonial', 'royal-testimonials' ),
							
	  			'featured_image'        => __( 'Client Photo', 'royal-testimonials' ),    
                'set_featured_image'    => __( 'Set Client Photo', 'royal-testimonials' ),   
                'remove_featured_image' => __( 'Remove Client Photo', 'royal-testimonials' ), 
                'use_featured_image'    => __( 'Use as Client Photo', 'royal-testimonials' )
	
            ),       
			'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'royal_testimonials'),
            'show_in_rest' => true,
 
        )
    );
}


// Hooking up function 
add_action( 'init', 'create_wrt_testimonials_posttype' );



/**
*  Add meta box for Client details
*
*/

function wrt_add_client_fields() {
$screens = array( 'royal_testimonials' );

foreach ( $screens as $screen ) {

    add_meta_box(
        'wrt_client_fields',
        __( 'Client Details', 'royal_testimonials' ),
        'wrt_add_client_fields_callback',
        $screen
    );
 }
}
add_action( 'add_meta_boxes', 'wrt_add_client_fields' );

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post.
 */
function wrt_add_client_fields_callback( $post ) {

// Add a nonce field so we can check for it later.
wp_nonce_field( 'wrt_client_save_full_name', 'wrt_client_full_name_nonce' );
wp_nonce_field( 'wrt_client_save_company', 'wrt_client_company_nonce' );
wp_nonce_field( 'wrt_client_save_website', 'wrt_client_website_nonce' );
wp_nonce_field( 'wrt_client_save_rating', 'wrt_client_rating_nonce' );



/*
 * Use get_post_meta() to retrieve an existing value
 * from the database and use the value for the form.
 */
 
$wrt_client_full_name = get_post_meta( $post->ID, 'wrt_client_full_name', true );
$wrt_client_company = get_post_meta( $post->ID, 'wrt_client_company', true );
$wrt_client_website = get_post_meta( $post->ID, 'wrt_client_website', true );
$wrt_client_rating = get_post_meta( $post->ID, 'wrt_client_rating', true );
?>
<div class="wrt-client-fields"> 
	<label for="wrt_client_full_name"><?php _e( 'Full Name', 'royal-testimonials' ); ?></label>
	<input type="text" id="wrt_client_full_name" name="wrt_client_full_name" value=" <?php echo esc_attr( $wrt_client_full_name );?>" />
	
	<br/><br/><label for="wrt_client_company"><?php  _e( 'Company', 'royal-testimonials' );?></label> 
	<input type="text" id="wrt_client_company" name="wrt_client_company" value="<?php echo esc_attr( $wrt_client_company );?>" />
	
	<br/><br/><label for="wrt_client_website"><?php _e( 'Website', 'royal-testimonials' );?></label> 
	<input type="text" id="wrt_client_website" name="wrt_client_website" value="<?php echo esc_attr( $wrt_client_website );?>" placeholder="ie. https://example.com"/>

	<br/><br/><label for="wrt_client_rating"><?php _e( 'Star Rating', 'royal-testimonials' )?></label> 
	
	<?php for($i=1;$i<=5;$i++) { ?>
	<input <?php if($wrt_client_rating==$i) echo 'checked="checked"';?> type="radio" class="wrt_client_rating_radio <?php if($wrt_client_rating>=$i) echo 'checked';?>" id="wrt_client_rating<?php echo $i;?>" name="wrt_client_rating" value="<?php echo $i;?>" />
	<?php } ?>
	
	
</div>
<?php
}

/**
 * When the testimonail is saved, saves client data.
 * @param int $post_id The ID of the testimonial being saved.
 * Save client full name
 */
 function wrt_client_save_full_name( $post_id ) {

 if ( !isset( $_POST['wrt_client_full_name_nonce'] ) ) {
    return;
 }

 if ( ! wp_verify_nonce( $_POST['wrt_client_full_name_nonce'], 'wrt_client_save_full_name' ) ) {
    return;
 }

 wrt_client_permissions( $post_id );

 $wrt_client_full_name = sanitize_text_field( $_POST['wrt_client_full_name'] );


 update_post_meta( $post_id, 'wrt_client_full_name', $wrt_client_full_name );
 
 
}
add_action( 'save_post', 'wrt_client_save_full_name' );



/**
 * When the testimonail is saved, saves client data.
 * @param int $post_id The ID of the testimonial being saved.
 *  Save Client Company here
 */
 function wrt_client_save_company( $post_id ) {

 if ( !isset( $_POST['wrt_client_company_nonce'] ) ) {
    return;
 }

 if ( ! wp_verify_nonce( $_POST['wrt_client_company_nonce'], 'wrt_client_save_company' ) ) {
    return;
 }

 wrt_client_permissions( $post_id );

 $wrt_client_company = sanitize_text_field( $_POST['wrt_client_company'] );

 update_post_meta( $post_id, 'wrt_client_company', $wrt_client_company );
 
 
}
add_action( 'save_post', 'wrt_client_save_company' );




/**
 * When the testimonail is saved, saves client data.
 * @param int $post_id The ID of the testimonial being saved.
 *  Save Client Website here
 */
 
 function wrt_client_save_website( $post_id ) {

 if ( !isset( $_POST['wrt_client_website_nonce'] ) ) {
    return;
 }

 if ( ! wp_verify_nonce( $_POST['wrt_client_website_nonce'], 'wrt_client_save_website' ) ) {
    return;
 }

 wrt_client_permissions( $post_id );

 $wrt_client_website = sanitize_text_field( $_POST['wrt_client_website'] );

 update_post_meta( $post_id, 'wrt_client_website', $wrt_client_website );
 
 
}
add_action( 'save_post', 'wrt_client_save_website' );




/**
 * When the testimonail is saved, saves client data.
 * @param int $post_id The ID of the testimonial being saved.
 *  Save Client Star Rating here
 */
 
 function wrt_client_save_rating( $post_id ) {

 if ( !isset( $_POST['wrt_client_rating_nonce'] ) ) {
    return;
 }

 if ( ! wp_verify_nonce( $_POST['wrt_client_rating_nonce'], 'wrt_client_save_rating' ) ) {
    return;
 }

 wrt_client_permissions( $post_id );

 $wrt_client_rating = sanitize_text_field( $_POST['wrt_client_rating'] );

 update_post_meta( $post_id, 'wrt_client_rating', $wrt_client_rating );
 
 
}
add_action( 'save_post', 'wrt_client_save_rating' );


/**
 * When the testimonail is saved, check permissions
 * @param int $post_id The ID of the testimonial being saved.
 * 
 */
 

function wrt_client_permissions( $post_id ) {

 if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return;
 }

 if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

    if ( ! current_user_can( 'edit_page', $post_id ) ) {
        return;
    }

 } else {

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
 }

 if ( ! isset( $_POST['wrt_client_full_name'] ) ) {
    return;
 }
 
}