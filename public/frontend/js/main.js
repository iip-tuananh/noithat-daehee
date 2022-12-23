
$(document).ready(function(){
  $('li.clc').click(function(){
    $('li.clc').removeClass("active");
    $(this).addClass("active");
  });
});

// $(document).ready(function(){
//   $('.carousel-indicators li').click(function(){
//     $('.carousel-indicators li').removeClass("active");
//     $(this).addClass("active");
//   });
// });


$(document).ready(function(){
  $('.new-tabs ul li a').click(function(){
    $('.new-tabs ul li a').removeClass("active");
    $(this).addClass("active");
  });
});

var swiper2 = new Swiper('.slide-banner', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // freeMode: true,
  loop: true,   
  autoplay: true, 
  slidesPerView: 1,
  speed: 1500,
  autoHeight: true,
});
var swiper2 = new Swiper('.slide-bannerads', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // freeMode: true,
  loop: false,
  autoplay: 
    {
      delay: 5000,
    },
  slidesPerView: 4,
  spaceBetween: 25,
  breakpoints: {
    1024: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 1.25,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1.25,
      spaceBetween: 10,
    }
  }
});
var swiper2 = new Swiper('.slide-news', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // freeMode: true,
  loop: false,
  autoplay: 
    {
      delay: 5000,
    },
  slidesPerView: 3,
  spaceBetween: 25,
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 1.25,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1.25,
      spaceBetween: 10,
    }
  }
});

var swiper2 = new Swiper('.slide-thumbs', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // freeMode: true,
  // loop: true,   
  // autoplay: true, 
  slidesPerView: 6,
  spaceBetween: 5,
  breakpoints: {
    1024: {
      slidesPerView: 4.5,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3.5,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1.5,
      spaceBetween: 10,
    }
  }
});

var swiper2 = new Swiper('.slide-feel', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
  },
  // freeMode: true,
  loop: true,
  roundLengths: true,
  // autoplay: true, 
  slidesPerView: 3,
  spaceBetween: 40,
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    }
  }
});

var swiper2 = new Swiper('.slider-topduan', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
  },
  // freeMode: true,
  loop: true,
  roundLengths: true,
  autoplay: true,
  slidesPerView: 4,
  spaceBetween: 40,
  breakpoints: {
    1024: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    }
  }
});
// $("#myModal").on('hidden.bs.modal', function (e) {
//     $("#myModal iframe").attr("src", $("#myModal iframe").attr("src"));
// });

// $(".title-step").click(function() {    
//   $(this).parents().children('.rep-step').animate({ 'height': 'toggle' });
// });
var swiper2 = new Swiper('.swiper-container.slide-partner', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // freeMode: true,
  loop: false,
  autoplay: 
    {
      delay: 7000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    
  slidesPerView: 4,
  spaceBetween: 25,
  breakpoints: {
    1024: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 1.25,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1.25,
      spaceBetween: 10,
    }
  }
  
});

$(".title-step").click(function() {
    var menuSiblings = $(this).closest('.item-step').siblings().find('.rep-step');
    menuSiblings.slideUp();
    $(this).parents().children('.rep-step').slideDown();
});

$(document).ready(function(){
  $('.title-step').click(function(){
    $('.title-step').removeClass("active");
    $(this).addClass("active");
  });
});

$(function(){
    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) $(".click-top").fadeIn();
      else $(".click-top").fadeOut();
    });
      $(".click-top").click(function () {
      $("body,html").animate({scrollTop: 0}, "slow");
    });
  });

$(window).scroll(function(){
    if ($(this).scrollTop() > 1) {
       $('.header-menu').addClass('newClass');
       $('#w-cate').addClass('newClass');
    } else {
       $('.header-menu').removeClass('newClass');
       $('#w-cate').removeClass('newClass');
    }

  if ($(this).scrollTop() > 1) {
    $('.menu-mobile').addClass('newClass');
  } else {
    $('.menu-mobile').removeClass('newClass');
  }
});


$(window).load(function() {
  $(".new-big .info h2").delay(150).addClass('tm-left');
  $(".new-big .info h1").delay(150).addClass('tm-left');
  $(".new-big .info .readnow").delay(150).addClass('tm-left');
  // $("#overlayer").delay(2000).fadeOut("slow"); 
})

jQuery(document).ready(function( $ ) {
  $("#menu").mmenu({
     "extensions": [
        "fx-menu-zoom"
     ],
     "counters": true
  });
});
