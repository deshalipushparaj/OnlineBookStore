$(document).ready(function() {
  var scroll_start = 0;
  var startchange = $('#startchange');
  var offset = startchange.offset();
  if (startchange.length) {
    $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if (scroll_start > offset.top) {
        $(".navbar-default").css('background-color', '#c1292e');
      } else {
        $('.navbar-default').css('background-color', 'transparent');
      }
    });
  }
});


$(function () {
    
    'use strict';
    
    //Trigger Nice scroll plugin
    $('html').niceScroll();
    
    //Scroll to features
    $('header .arrow i').on('click', function(){
        
        $('html, body').animate({
            scrollTop : $('.features').offset().top
        },1000);
    });
    //show the rest of work 
    $('.show-more').on('click',function(){
        $('.hidden').fadeIn(500);
    });
    //check testimonials
     var leftArrow = $('.testim .fa-chevron-left'),
         rightArrow = $('.testim .fa-chevron-right')
    function arrow (){
        if($('.client:first').hasClass('active')){
            leftArrow.fadeOut()
        }else{
            leftArrow.fadeIn()
        }
        if($('.client:last').hasClass('active')){
            rightArrow.fadeOut()
        }else{
            rightArrow.fadeIn()
        }
    }
    arrow ();
    
    $('.testim i').on('click',function(){
        if($(this).hasClass('fa-chevron-right')){
            $('.testim .active').fadeOut(200,function(){
                $(this).removeClass('active').next('.client').addClass('active').fadeIn();
                arrow ();
            });
        }else{
            $('.testim .active').fadeOut(200,function(){
                $(this).removeClass('active').prev('.client').addClass('active').fadeIn();
                arrow ();
            });
        }
    })
});



	