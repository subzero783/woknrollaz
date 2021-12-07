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

  // slick slides
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

  //Video play
  $('.video_wrapper, .video_play_button').on('click', function(e){

    console.log('video_wrapper clicked');

    e.preventDefault();
    // if( !$(this).find('.video_play_button').hasClass('hidden_play_button') ){
      $(this).find('.video_cover_image').hide();
      $(this).find('.video_play_button').hide();
      $(this).find('.video_play_button').addClass('hidden_play_button');
      $(this).find('.video-html').get(0).play();
    // }
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

  $(window).load(function(){
    $('.masonry-grid').css({
      'display' : 'flex'
    }).masonry({
      // options... 
      itemSelector: '.grid-item' 
    }); 
    $('.single-event-slick-slider').slick({
      arrows: true,
      dots: false, 
      infinite: true, 
      speed: 500,
      fade: true, 
      cssEase: 'linear', 
      autoplaySpeed: 3000, 
      autoplay: false, 
      pauseOnHover: true, 
      adaptiveHeight: false, 
      prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-caret-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="fas fa-caret-right"></i></button>'
    });
  });

  $('a.image-modal-button, a.video-modal-button').on('click', function(e){ 

    e.stopPropagation();
    e.preventDefault();

    if($(this).hasClass('image-modal-button')){ 

      var masonry_img_src = $(this).children('img').attr('src');
      var masonry_img_slide_index = $('.slick-slider-container').find('img[src="'+masonry_img_src+'"]').parents('.slick-slide').attr('data-slick-index');
      $('.single-event-slick-slider').slick('slickGoTo', masonry_img_slide_index);

    }else{

      var masonry_video_slide_mp4_src = $(this).find('source[type="video/mp4"]').attr('src');
      var masonry_video_slide_index = $('.slick-slider-container').find('source[src="'+masonry_video_slide_mp4_src+'"]').parents('.slick-slide').attr('data-slick-index');
      $('.single-event-slick-slider').slick( 'slickGoTo', masonry_video_slide_index );

    }

    $('.slick-slider-container').css({
      'opacity': '1',
      'visibility': 'visible'
    });
  });

  $('.modal-close').on('click', function(e){
    e.preventDefault();
    $('.slick-slider-container').css({
      'opacity': '0',
      'visibility': 'hidden'
    });
  });

  $('.close-float-signup, .close-float-signup > svg, .close-float-signup > svg > path').on('click', function(e){

    if($(this).siblings('#content').hasClass('open')){

      $(this).parent('#floating_signup').removeClass('open').addClass('closed');
      $(this).siblings('#content').removeClass('open').addClass('closed');
      $(this).removeClass('open').addClass('closed');
      $(this).next('.open-float-signup').removeClass('closed').add('open');

    }

  });
  $('.open-float-signup, .open-float-signup > svg, .open-float-signup > svg > path').on('click', function(e){

    if($(this).siblings('#content').hasClass('closed')){

      $(this).parent('#floating_signup').removeClass('closed').addClass('open');
      $(this).siblings('#content').removeClass('closed').addClass('open');
      $(this).removeClass('open').addClass('closed');
      $(this).prev('.close-float-signup').removeClass('closed').add('open');

    }

  });

});   