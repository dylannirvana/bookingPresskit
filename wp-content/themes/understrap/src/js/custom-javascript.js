// // Smooth scrolling by Devin Stugeon
jQuery(function($){
  // this part intializes jQuery you a-holes

   $('a[href*=#]:not([href=#])').click(function() {
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
     || location.hostname == this.hostname) {

       var target = $(this.hash);
       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
       if (target.length) {
         $('html,body').animate({
           scrollTop: target.offset().top
         }, 1000);
         return false;
       }
     }
   }); // END Smooth scroll
/////////////

/////////////
}); // END jQuery
////////////

// TweenMax ScrollMagic ///////////////////////////////////////

// // BASIC TWEEN
var controller = new ScrollMagic.Controller();

// build scene
var scene1 = new ScrollMagic.Scene({
          triggerElement: "#bio"
        })
        .setTween("#bio", 0.5, {color: "#fff", scale:1.02, ease:Power2.easeInOut}) // trigger a TweenMax.to tween
        .addTo(controller);

var scene2 = new ScrollMagic.Scene({
          triggerElement: "#booking"
        })
        .setTween("#booking", 0.5, {color: "#fff", scale:1.02, ease:Power2.easeInOut}) // trigger a TweenMax.to tween
        .setTween(".dfclogo", 0.5, {opacity: 0, ease:Power1.easeOut}) // trigger a TweenMax.to tween
        .addTo(controller);

var scene3 = new ScrollMagic.Scene({
          triggerElement: "#music"
        })
        .setTween("#music", 0.5, {color: "#fff", scale:1.02, ease:Power2.easeInOut}) // trigger a TweenMax.to tween
        .setTween(".dfclogo", 0.5, {opacity: .5, ease:Power1.easeOut}) // trigger a TweenMax.to tween
        .addTo(controller);

var scene4 = new ScrollMagic.Scene({
          triggerElement: "#shows"
        })
        .setTween("#shows", 0.5, {color: "#fff", scale:1.1, ease:Power2.easeInOut}) // trigger a TweenMax.to tween
        // .setTween(".dfclogo", 0.5, {opacity: 0, ease:Power1.easeOut}) // trigger a TweenMax.to tween
        .addTo(controller);

//////////

// SECTION WIPES
// // $(function () { // wait for document ready
//   // init
//   var controller = new ScrollMagic.Controller({
//     globalSceneOptions: {
//       triggerHook: 'onLeave'
//     }
//   });
//
//   // get all slides
//   var slides = document.querySelectorAll("section.panel");
//
//   // create scene for every slide
//   for (var i=0; i<slides.length; i++) {
//     new ScrollMagic.Scene({
//         triggerElement: slides[i]
//       })
//       .setPin(slides[i])
//       .addIndicators() // add indicators (requires plugin)
//       .addTo(controller);
//   }
//
// }); // END jQuery
