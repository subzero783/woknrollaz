jQuery(document).ready(function($){
  console.log('custom scripts');  
  
  AOS.init(); 

  // Events calendar
  var content = "<div class='wrapper-01'></div>";
  $(".tribe-events-event-image, .tribe-events-single-event-description, .tribe-events-cal-links").wrapAll( content );
  $(".tribe-events-single-section.primary").wrapAll( content );

  // Events Calendar Single Event
  var singleEventTitle = $('h1.tribe-events-single-event-title').text();
  var singleEventHeader = '<div class="events-list-header" style="background-image:url(http://woknrollaz.com/wp-content/uploads/2021/05/events-header-image-01.jpg);"><span><h2>'+singleEventTitle+'</h2></span></div>';
  $('#tribe-events-pg-template').prepend(singleEventHeader);

  // hero 2 slider
  $('.hero_2_slider').slick({
    dots: false,
    infinite: true,
    speed: 2000,
    fade: true, 
    cssEase: 'linear',
    autoplaySpeed: 3000,
    autoplay: true, 
    pauseOnHover: false,
    adaptiveHeight: false
  }); 

  $('.testimonials_slider_2').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: false, 
    cssEase: 'linear',
    autoplaySpeed: 6000,
    autoplay: true, 
    pauseOnHover: true,
    adaptiveHeight: false
  });

  var images = document.querySelectorAll(".lazyload");
  lazyload(images);    
 
  $(".navbar-toggler").on('click', ()=>{
    if($(".navbar-collapse").hasClass("ag-show")){
      $(".navbar-collapse").removeClass("ag-show");
    }else{
      $(".navbar-collapse").addClass("ag-show");
    }
  });

  //Video play
  $('.video_play_button').on('click', function(e){
    e.stopPropagation();

      $(this).prev('.video-html').trigger('play');
      $(this).hide('slow');
      $(this).addClass('hidden_play_button');
  });
     

  
  // if ( !$("nav.sticky_nav").hasClass('sticky_nav_default_appear') ) {
    //Nav bar on scroll
    window.onscroll = function() {
      scrollFunction();
    };
  // }

  function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
      $("nav.sticky_nav").addClass("sticky");
      $(".navbar-mobile").addClass("mobile-sticky");
    } else {
      $("nav.sticky_nav").removeClass("sticky"); 
      $(".navbar-mobile").removeClass("mobile-sticky");
    }
  }
});   