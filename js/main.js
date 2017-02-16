"use strict"

$(function() {

// Initialzing the slick carousel
$(".panel--one").slick({
  dots: true,
  infinite: true,
  mobileFirst: true,
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});

  var $header = $('header');
  var headerHeight = $header.height();
  
  var $window = $(window);
  var $panel2 = $('.panel--two');

  var elementSelectorsToTransition = ['h1', 'a'];
  var elementsToTransition = [];
  var allEls = $(elementSelectorsToTransition.join(','));
  
  for (var i = 0; i < allEls.length; i++) {if (window.CP.shouldStopExecution(1)){break;}
    var $el = $(allEls[i]);
    elementsToTransition.push({
      '$el': $el,
      'top': $el.offset().top,
      'height': $el.height()
    });
  }
window.CP.exitedLoop(1);

  
  $window.scroll(function() {
    var scrollPos = $window.scrollTop();
    var panelPos = $panel2.offset().top;
    var headerTriggerPos = panelPos - headerHeight;

    if (scrollPos < headerTriggerPos) {
      allEls.removeAttr('style');
      return;
    } 
    
    if (scrollPos > headerTriggerPos + headerHeight) {
      allEls.height(0);
      return;
    }

    var amountOfHeaderCovered = scrollPos - headerTriggerPos;
    
    for (var i = 0; i < elementsToTransition.length; i++) {if (window.CP.shouldStopExecution(2)){break;}
      var elObj = elementsToTransition[i];
      var amountOfElCovered = elObj.top + elObj.height - amountOfHeaderCovered;
      console.log(elObj, amountOfElCovered);
      
      if (amountOfElCovered >= 0 || amountOfElCovered <= elObj.height) {
        console.log('yo yo!');
        elObj.$el.height(amountOfElCovered);
      }
    }
window.CP.exitedLoop(2);

  });

});