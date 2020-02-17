$(document).ready(function(){
    
 //menu
    $(window).scroll(function() {
    if($(this).scrollTop()>5) {
        $( ".navbar" ).addClass("fixed-top");
        $( ".navbar-brand" ).removeClass("sobrex");
        $( ".img-logo" ).addClass("imaglo");
    } else {
        $( ".navbar" ).removeClass("fixed-top");
        $( ".navbar-brand" ).addClass("sobrex");
        $( ".img-logo" ).removeClass("imaglo");
    }
});
          $("html").niceScroll({
        cursorwidth: "0.3rem",
        cursorfixedheight: 20,
        cursorcolor: "#E58D2A",
        cursorborder: "0px",
        autohidemode: !1,
        zindex: 9999
    });   
  });

var swiper = new Swiper('.s1',{
    slidesPerView: 1,
      spaceBetween: 0,
      effect: 'fade',
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    }); 

var swiper = new Swiper('.s2', {
      effect: 'cube',
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });       

var swiper = new Swiper('.s3',{
    slidesPerView: 3,
      spaceBetween: 0,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });      

(function scrollReveal() {
  window.sr = ScrollReveal();
  
window.sr = ScrollReveal({
  reset: false,
  viewFactor: 0.4,
  easing: "cubic-bezier(0.560, 0.005, 0.225, 1.150)"
});

sr.reveal(".post-media", {
  origin: "bottom",
  distance: "10rem",
  duration: 900
});
sr.reveal(".blog-meta", {
  origin: "bottom",
  distance: "0rem",
  duration: 1200
});
})();


