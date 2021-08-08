/**
*
* Global front end script
*
*/

jQuery("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").wrtCarousel({
  autoplay: $("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").data("autoplay"), 
  margin: 0,
  items: 3,
  loop: $("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").data("loop"),
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: $("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4" ).data( "interval" ),
  smartSpeed: $("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").data("speed"),
  nav: $("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").data("nav"),
  dots: $("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").data("dots"),
  autoplayHoverPause:$("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").data("hoverpause"),
  responsive: {
    0: {		
      items: 1
    },

    600: {		
      items: $("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").data("items").mobile
    },

    1024: {
      items: $("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").data("items").tablet
    },

    1366: {
      items: $("#wrt-testimonials-style1, #wrt-testimonials-style2, #wrt-testimonials-style3, #wrt-testimonials-style4").data("items").desktop
    }
  }
});
 