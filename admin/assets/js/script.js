/**
*
* Admin script
*
*/



jQuery('#wrt_client_rating2').hover(function(){
	 jQuery('#wrt_client_rating1,#wrt_client_rating2').toggleClass('hovered');
   
});

jQuery('#wrt_client_rating3').hover(function(){
	 jQuery('#wrt_client_rating1,#wrt_client_rating2,#wrt_client_rating3').toggleClass('hovered');
   
});
jQuery('#wrt_client_rating4').hover(function(){
	 jQuery('#wrt_client_rating1,#wrt_client_rating2,#wrt_client_rating3,#wrt_client_rating4').toggleClass('hovered');
   
});
jQuery('#wrt_client_rating5').hover(function(){
	 jQuery('#wrt_client_rating1,#wrt_client_rating2,#wrt_client_rating3,#wrt_client_rating4,#wrt_client_rating5').toggleClass('hovered');
   
});



jQuery('#wrt_client_rating1').click(function(){
	
	 jQuery('.wrt_client_rating_radio').removeClass('checked');
	 jQuery('#wrt_client_rating1').addClass('checked');
   
});
jQuery('#wrt_client_rating2').click(function(){
	
	 jQuery('.wrt_client_rating_radio').removeClass('checked');
	 jQuery('#wrt_client_rating1,#wrt_client_rating2').addClass('checked');
   
});

jQuery('#wrt_client_rating3').click(function(){
	 jQuery('.wrt_client_rating_radio').removeClass('checked');
	 jQuery('#wrt_client_rating1,#wrt_client_rating2,#wrt_client_rating3').addClass('checked');
   
});
jQuery('#wrt_client_rating4').click(function(){
	 jQuery('.wrt_client_rating_radio').removeClass('checked');
	 jQuery('#wrt_client_rating1,#wrt_client_rating2,#wrt_client_rating3,#wrt_client_rating4').addClass('checked');
   
});
jQuery('#wrt_client_rating5').click(function(){
	 jQuery('.wrt_client_rating_radio').removeClass('checked');
	 jQuery('#wrt_client_rating1,#wrt_client_rating2,#wrt_client_rating3,#wrt_client_rating4,#wrt_client_rating5').addClass('checked');
   
});