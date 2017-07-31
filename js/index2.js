$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$(function() {
  $('.res-menu-button').click(function() {
    if ($('.res-menu').css("display") != "none") {
      $('.res-menu').slideUp(1000);
    }
    else {
      $('.res-menu').slideDown(1000);
    }
  });
});

$(function() {
  $('.form-submit').mousedown(function() {
    $('.form-submit').addClass("pressed");
  });
  $('.form-submit').mouseup(function() {
    $('.form-submit').removeClass("pressed");
  });
});

$(window).scroll(function() {
  var scrollPos = $(window).scrollTop(),
  aboutPos = $('.about-wrapper').offset().top,
  servicePos = $('.services-wrapper').offset().top,
  productPos = $('.products-wrapper').offset().top,
  contactPos = $('.contact-wrapper').offset().top;
  
  if (scrollPos >= aboutPos && scrollPos < servicePos) {
    $('.link-a').addClass('selected');
  }
  else {
    $('.link-a').removeClass('selected');
  }
  
  if (scrollPos >= servicePos && scrollPos < productPos) {
    $('.link-b').addClass('selected');
  }
  else {
    $('.link-b').removeClass('selected');
  }
  
  if (scrollPos >= productPos && scrollPos < contactPos) {
    $('.link-c').addClass('selected');
  }
  else {
    $('.link-c').removeClass('selected');
  }
  
  if (scrollPos >= contactPos) {
    $('.link-d').addClass('selected');
  }
  else {
    $('.link-d').removeClass('selected');
  }
  
});