<?php

/**
*  Main class for admin panel setting options
*  Adding Testimonail menu 
*  Save Testimonails setting options
*/

if ( ! class_exists( 'wrtTestimonialsClass' ) ) :
class wrtTestimonialsClass{


	/**
	*  
	*  Adding Testimonail menu to action 
	*  
	*/
	function __construct()
      {
		  
           add_action( 'admin_menu',array(&$this,'add_wrt_testimonials_menus'));
           $this->wrtAddDefaultOptions();

      }

    /**
	*  
	*  Adding Testemonial Settings submenu
	*  
	*/
  	function add_wrt_testimonials_menus()
  	  {
  	  	 
	      add_submenu_page(
                     'edit.php?post_type=royal_testimonials', 
                     'Testemonial Settings', 
                     'Testemonial Settings',       
                     'manage_options',           
                     'royal_testimonials_settings',
                     array(&$this,'wrtTestimonialsSettings')
             );

      }
	  
	  
	
    /**
	*  
	*  Saving default settings 
	*
	*/
	  	
 
   public function wrtAddDefaultOptions()
   {
	   $wrt_setting_options = get_option('wrt_setting_options'); 
	   
	   if($wrt_setting_options)
		   return;
	   
	   $wrt_options=array(
		
		  'wrt_carousel_preview_style'=> 'style1',
		  'wrt_carousel_total' => -1,
		  'wrt_carousel_per_slide_desktop' => 3,
		  'wrt_carousel_per_slide_tablet' => 2,
		  'wrt_carousel_per_slide_mobile' => 1,
		  'wrt_carousel_sliding_interval' => 4000,
		  'wrt_carousel_sliding_speed' => 1000,
		  'wrt_carousel_disable_autoplay' => 'no',
		  'wrt_carousel_hide_arrows' => 'no' ,
		  'wrt_carousel_hide_buttles' => 'yes' ,
		  'wrt_carousel_hide_title' => 'yes' ,
		  'wrt_carousel_hide_photo' => 'no' ,
		  'wrt_carousel_hide_name' => 'no' ,
		  'wrt_carousel_hide_rating' => 'no' ,
		  'wrt_carousel_hide_company' => 'no' ,
		  'wrt_carousel_hide_website' => 'yes' ,
		  
		  
		  
		  
		 'wrt_grid_preview_style'=> 'style1',
  		  'wrt_grid_total' => -1,
		  'wrt_grid_columns_desktop' => 3,
		  'wrt_grid_columns_tablet' =>2,
		  'wrt_grid_columns_mobile' => 1,
		  'wrt_grid_hide_title' => 'yes',
		  'wrt_grid_hide_photo' => 'no' ,
		  'wrt_grid_hide_name' => 'no' ,
		  'wrt_grid_hide_rating' => 'no' ,
		  'wrt_grid_hide_company' => 'no' ,
		  'wrt_grid_hide_website' => 'yes' ,
		  
		  
		  
		  'wrt_list_preview_style'=> 'style1',
		  'wrt_list_total' => -1,
		  'wrt_list_hide_title' => 'yes' ,
		  'wrt_list_hide_photo' => 'no' ,
		  'wrt_list_hide_name' => 'no' ,
		  'wrt_list_hide_rating' => 'no' ,
		  'wrt_list_hide_company' => 'no',
		  'wrt_list_hide_website' => 'yes' 
		  
		
		
		
		
		);
		
		
		update_option('wrt_setting_options', $wrt_options);
	   
	   
   }
 
 
 
    /**
	*  
	*  Adding Testemonial Settings form 
	*  if form submitted the save the options
	*/
	  
	public function wrtTestimonialsSettings(){
		 
		 
		 // checking if submit the form
		 
		 if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		     $this->wrtSaveTestimonialsSettings();
		
		
		    }
		    
		 
	     // Adding Testimonails setting template
		 
		   include( 'template-parts/wrt-settings.php' );
	
		}
		
		
    /**
	*  
	*  Saving Testemonial Settings 
	*  All post meta 
 	*  
	*/
	public function wrtSaveTestimonialsSettings()
	{
		
		// Carousel slider options
		  
		 if(isset($_POST['wrt_carousel_hide_rating']))
		    $wrt_carousel_hide_rating='yes';
	     else 
			$wrt_carousel_hide_rating='no';
		
		if(isset($_POST['wrt_carousel_hide_company']))
		    $wrt_carousel_hide_company='yes';
	     else 
			$wrt_carousel_hide_company='no';
		
		if(isset($_POST['wrt_carousel_hide_website']))
		    $wrt_carousel_hide_website='yes';
	     else 
			$wrt_carousel_hide_website='no';
		
		
		if(isset($_POST['wrt_carousel_disable_autoplay']))
		    $wrt_carousel_disable_autoplay='false';
	     else 
			$wrt_carousel_disable_autoplay='true';
		
		if(isset($_POST['wrt_carousel_hide_arrows']))
		    $wrt_carousel_hide_arrows='false';
	     else 
			$wrt_carousel_hide_arrows='true';
		
		
		if(isset($_POST['wrt_carousel_hide_buttles']))
		    $wrt_carousel_hide_buttles='false';
	     else 
			$wrt_carousel_hide_buttles='true';
		
		
		if(isset($_POST['wrt_carousel_hide_title']))
		    $wrt_carousel_hide_title='yes';
	     else 
			$wrt_carousel_hide_title='no';
		
		
		if(isset($_POST['wrt_carousel_hide_photo']))
		    $wrt_carousel_hide_photo='yes';
	     else 
			$wrt_carousel_hide_photo='no';
		
		if(isset($_POST['wrt_carousel_hide_name']))
		    $wrt_carousel_hide_name='yes';
	     else 
			$wrt_carousel_hide_name='no';
		
		// End carousel slider options
	
		
		// Grid view options
		
		if(isset($_POST['wrt_grid_hide_rating']))
		    $wrt_grid_hide_rating='yes';
	     else 
			$wrt_grid_hide_rating='no';
		
		if(isset($_POST['wrt_grid_hide_company']))
		    $wrt_grid_hide_company='yes';
	     else 
			$wrt_grid_hide_company='no';
		
		if(isset($_POST['wrt_grid_hide_website']))
		    $wrt_grid_hide_website='yes';
	     else 
			$wrt_grid_hide_website='no';
		if(isset($_POST['wrt_grid_hide_title']))
		    $wrt_grid_hide_title='yes';
	     else 
			$wrt_grid_hide_title='no';
		
		if(isset($_POST['wrt_grid_hide_photo']))
		    $wrt_grid_hide_photo='yes';
	     else 
			$wrt_grid_hide_photo='no';
		
		if(isset($_POST['wrt_grid_hide_name']))
		    $wrt_grid_hide_name='yes';
	     else 
			$wrt_grid_hide_name='no';
		
		// End grid view options
		 
		
		// List view options
		
		if(isset($_POST['wrt_list_hide_rating']))
		    $wrt_list_hide_rating='yes';
	     else 
			$wrt_list_hide_rating='no';
		
		if(isset($_POST['wrt_list_hide_company']))
		    $wrt_list_hide_company='yes';
	     else 
			$wrt_list_hide_company='no';
		
		if(isset($_POST['wrt_list_hide_website']))
		    $wrt_list_hide_website='yes';
	     else 
			$wrt_list_hide_website='no';
		if(isset($_POST['wrt_list_hide_title']))
		    $wrt_list_hide_title='yes';
	     else 
			$wrt_list_hide_title='no';
		
		if(isset($_POST['wrt_list_hide_photo']))
		    $wrt_list_hide_photo='yes';
	     else 
			$wrt_list_hide_photo='no';
		
			
		if(isset($_POST['wrt_list_hide_name']))
		    $wrt_list_hide_name='yes';
	     else 
			$wrt_list_hide_name='no';
		
		// End List view options
		
		
		
		
		$wrt_options=array(
		
		  'wrt_carousel_preview_style'=> $_POST['wrt_carousel_preview_style'],
		  'wrt_carousel_total' => $_POST['wrt_carousel_total'],
		  'wrt_carousel_per_slide_desktop' => $_POST['wrt_carousel_per_slide_desktop'],
		  'wrt_carousel_per_slide_tablet' => $_POST['wrt_carousel_per_slide_tablet'],
		  'wrt_carousel_per_slide_mobile' => $_POST['wrt_carousel_per_slide_mobile'],
		  'wrt_carousel_sliding_interval' => $_POST['wrt_carousel_sliding_interval'],
		  'wrt_carousel_sliding_speed' => $_POST['wrt_carousel_sliding_speed'],
		  'wrt_carousel_disable_autoplay' => $wrt_carousel_disable_autoplay ,
		  'wrt_carousel_hide_arrows' => $wrt_carousel_hide_arrows ,
		  'wrt_carousel_hide_buttles' => $wrt_carousel_hide_buttles ,
		  'wrt_carousel_hide_title' => $wrt_carousel_hide_title ,
		  'wrt_carousel_hide_photo' => $wrt_carousel_hide_photo ,
		  'wrt_carousel_hide_name' => $wrt_carousel_hide_name ,
		  'wrt_carousel_hide_rating' => $wrt_carousel_hide_rating ,
		  'wrt_carousel_hide_company' => $wrt_carousel_hide_company ,
		  'wrt_carousel_hide_website' => $wrt_carousel_hide_website ,
		  
		  
		  
		  
		 'wrt_grid_preview_style'=> $_POST['wrt_grid_preview_style'],
  		  'wrt_grid_total' => $_POST['wrt_grid_total'],
		  'wrt_grid_columns_desktop' => $_POST['wrt_grid_columns_desktop'],
		  'wrt_grid_columns_tablet' => $_POST['wrt_grid_columns_tablet'],
		  'wrt_grid_columns_mobile' => $_POST['wrt_grid_columns_mobile'],
		  'wrt_grid_hide_title' => $wrt_grid_hide_title ,
		  'wrt_grid_hide_photo' => $wrt_grid_hide_photo ,
		  'wrt_grid_hide_name' => $wrt_grid_hide_name ,
		  'wrt_grid_hide_rating' => $wrt_grid_hide_rating ,
		  'wrt_grid_hide_company' => $wrt_grid_hide_company ,
		  'wrt_grid_hide_website' => $wrt_grid_hide_website ,
		  
		  
		  
		  'wrt_list_preview_style'=> $_POST['wrt_list_preview_style'],
		  'wrt_list_total' => $_POST['wrt_list_total'],
		
		  'wrt_list_hide_title' => $wrt_list_hide_title ,
		  'wrt_list_hide_photo' => $wrt_list_hide_photo ,
		  'wrt_list_hide_name' => $wrt_list_hide_name ,
		  'wrt_list_hide_rating' => $wrt_list_hide_rating ,
		  'wrt_list_hide_company' => $wrt_list_hide_company ,
		  'wrt_list_hide_website' => $wrt_list_hide_website ,
		  
		
		
		
		
		);
		
		
		update_option('wrt_setting_options', $wrt_options);
  
        
       
		
		  
		
	}	
		 
		 




}

endif;

/**
*  
*  Create an object to execute the class
*  
*  
*/

 $obj=new wrtTestimonialsClass();
 
 
 
 