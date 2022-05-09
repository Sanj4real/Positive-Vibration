// header
document.addEventListener("DOMContentLoaded", function () {
   // make it as accordion for smaller screens
   if (window.innerWidth > 992) {

      document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

         everyitem.addEventListener('mouseover', function (e) {

            let el_link = this.querySelector('a[data-bs-toggle]');

            if (el_link != null) {
               let nextEl = el_link.nextElementSibling;
               el_link.classList.add('show');
               nextEl.classList.add('show');
            }

         });
         everyitem.addEventListener('mouseleave', function (e) {
            let el_link = this.querySelector('a[data-bs-toggle]');

            if (el_link != null) {
               let nextEl = el_link.nextElementSibling;
               el_link.classList.remove('show');
               nextEl.classList.remove('show');
            }


         })
      });

   }
   // end if innerWidth
});
// DOMContentLoaded  end


$('.banner__slider').slick({
   dots: false,
   infinite: true,
   speed: 500,
   fade: true,
   prevArrow: '<i class="las la-arrow-left"></i>',
   nextArrow: '<i class="las la-arrow-right"></i>',
   cssEase: 'linear'
});

$('.support__wrap').slick({
   dots: false,
   infinite: false,
   speed: 300,
   prevArrow: '<i class="las la-arrow-left"></i>',
   nextArrow: '<i class="las la-arrow-right"></i>',
   slidesToShow: 4,
   slidesToScroll: 1,
   responsive: [{
      breakpoint: 1024,
      settings: {
         slidesToShow: 3,
         slidesToScroll: 3,
         infinite: true,
         dots: true
      }
   },
   {
      breakpoint: 600,
      settings: {
         slidesToShow: 2,
         slidesToScroll: 2
      }
   },
   {
      breakpoint: 480,
      settings: {
         slidesToShow: 1,
         slidesToScroll: 1
      }
   }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
   ]
});

$('.gallery__wrap').slick({
   dots: false,
   infinite: false,
   speed: 300,
   prevArrow: '<i class="las la-arrow-left"></i>',
   nextArrow: '<i class="las la-arrow-right"></i>',
   slidesToShow: 4,
   slidesToScroll: 1,
   responsive: [{
      breakpoint: 1024,
      settings: {
         slidesToShow: 3,
         slidesToScroll: 3,
         infinite: true,
         dots: true
      }
   },
   {
      breakpoint: 600,
      settings: {
         slidesToShow: 2,
         slidesToScroll: 2
      }
   },
   {
      breakpoint: 480,
      settings: {
         slidesToShow: 1,
         slidesToScroll: 1
      }
   }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
   ]
});

$('.testimonial__wrap').slick({
   dots: false,
   infinite: false,
   speed: 300,
   prevArrow: '<i class="las la-arrow-left"></i>',
   nextArrow: '<i class="las la-arrow-right"></i>',
   slidesToShow: 1,
   slidesToScroll: 1,
   responsive: [{
      breakpoint: 1024,
      settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         infinite: true,
         dots: true
      }
   },
   {
      breakpoint: 600,
      settings: {
         slidesToShow: 1,
         slidesToScroll: 1
      }
   },
   {
      breakpoint: 480,
      settings: {
         slidesToShow: 1,
         slidesToScroll: 1
      }
   }
   ]
});



// Count
$(window).on('load', function () {
   $('.bc_sec_last li h4').counterUp({
      delay: 100,
      time: 800
   });
});






// hamburger
$(document).ready(function () {
   $('#btn-close').click(function () {
     $(this).toggleClass('open');
   });
 });


// vertical--tab--page
(function ($, document) {

   let height = -1;

   $('.tab__content').each(function () {
      height = height > $(this).outerHeight() ? height : $(this).outerHeight();
      $(this).css('position', 'absolute');
   });

   $('[data-tabs]').css('min-height', height + 40 + 'px');

}(jQuery, document));

// verical-tab-hompage
function openCity(evt, cityName) {
   var i, tabcontent, tablinks;
   tabcontent = document.getElementsByClassName("tabcontent");
   for (i = 0; i < tabcontent.length; i++) {
     tabcontent[i].style.display = "none";
   }
   tablinks = document.getElementsByClassName("tablinks");
   for (i = 0; i < tablinks.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" active", "");
   }
   document.getElementById(cityName).style.display = "block";
   evt.currentTarget.className += " active";
 }

 // Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

// search button
jQuery(document).ready(function ($) {
   var wHeight = window.innerHeight;
   $('#mk-fullscreen-searchform').css('top', wHeight / 2);
   jQuery(window).resize(function () {
      wHeight = window.innerHeight;
      $('#mk-fullscreen-searchform').css('top', wHeight / 2);
   });
   $('.header__search').click(function () {
      console.log("Open Search, Search Centered");
      $("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
   });
   $("a.mk-fullscreen-close").click(function () {
      console.log("Closed Search");
      $("div.mk-fullscreen-search-overlay").removeClass("mk-fullscreen-search-overlay-show");
   });



});

// header
 // scrollup
 $(window).scroll(function () {
   if ($(this).scrollTop() > 50) {
      $("#header").addClass("scrollUp");
   } else {
      $("#header").removeClass("scrollUp");
   }
 });


 // copyform-js
function copy() {
   var copyText = document.getElementById("copyClipboard");
   copyText.select();
   copyText.setSelectionRange(0, 99999);
   document.execCommand("copy");
   
   $('#copied-success').fadeIn(800);
   $('#copied-success').fadeOut(800);
 }
 
// password
// Input field password type show/hide
function showPassword(id, el) {
   let x = document.getElementById(id);
   if (x.type === 'password') {
      x.type = 'text';
      el.innerHTML =
         '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg> ';
   } else {
      x.type = 'password';
      el.innerHTML =
         '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
   }
}
 