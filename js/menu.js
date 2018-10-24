// A $( document ).ready() block.
$( document ).ready(function() {
// Config
// =================================================

var $root          = $('html'),
    $nav_header    = $('.stickyMenu'),
    header_height  = $('.stickyMenu').height(),
    hero_height    = $('.home').height(),
    offset_val     = hero_height - header_height,
    eventType      = ((document.ontouchstart !== null) ? 'click' : 'touchstart');

// Method
// =================================================

function navSlide() {
  var scroll_top = $(window).scrollTop();

  if (scroll_top >= offset_val) { // the detection!
    $nav_header.addClass('is-sticky');
  } else {
    $nav_header.removeClass('is-sticky');
  }
}

// Handler
// =================================================

$(window).scroll(navSlide);

function anchorScroll(event) {
  var id     = $(this).attr('href'),
      offset = header_height,
      target = $(id).offset().top - offset;

  $('html, body').animate({
    scrollTop: target
  }, 500);

  event.preventDefault();
}

});


/* ===============================================================
========================== Responsive menu ========================= */

// Ovo ti je jquery
// $(document).ready(function() {

//     $('.nav-toggle').on('click', function(e) {
//       e.preventDefault();
      
//           $('body').toggleClass('nav-open');
//           $('.hamburger-mobile-line').toggleClass('open');

// });


// Ovo je vanilla js by Strahinja
(function(){

    //Ikonica na koju klikces da se otvori menu
    var navToggle         = document.querySelector(".nav-toggle");
    //Klasa koja se dodaje na body tagkada se klikne na navToggle
    var bodyClass         = document.querySelector("body");
    //Dodaje na aktivnu ikonicu - u nasem slucaju na close dodaje open klasu
    var hamburgerMenuLine = document.querySelector(".hamburger-mobile-line");

    //click event sa js
    navToggle.addEventListener("click", function(e) {
        //radi klik na bilo koji element, cak i na a bez obzira da li a href tag imao # ili realan linkm, npr google.com
        e.preventDefault();
   
        bodyClass.classList.toggle('nav-open');
        hamburgerMenuLine.classList.toggle("open");
    });
 
}());