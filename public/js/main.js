var ticking = false;
  var isFirefox = (/Firefox/i.test(navigator.userAgent));
  var isIe = (/MSIE/i.test(navigator.userAgent)) || (/Trident.*rv\:11\./i.test(navigator.userAgent));
  var scrollSensitivitySetting = 30; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive) 
  var slideDurationSetting = 600; //Amount of time for which slide is "locked"
  var currentSlideNumber = 0;
  var totalSlideNumber = $(".background").length;

  // ------------- DETERMINE DELTA/SCROLL DIRECTION ------------- //
  function parallaxScroll(evt) {
    if (isFirefox) {
      //Set delta for Firefox
      delta = evt.detail * (-120);
    } else if (isIe) {
      //Set delta for IE
      delta = -evt.deltaY;
    } else {
      //Set delta for all other browsers
      delta = evt.wheelDelta;
    }

    if (ticking != true) {
      if (delta <= -scrollSensitivitySetting) {
        //Down scroll
        ticking = true;
        if (currentSlideNumber !== totalSlideNumber - 1) {
          currentSlideNumber++;
          nextItem();
        }
        slideDurationTimeout(slideDurationSetting);
      }
      if (delta >= scrollSensitivitySetting) {
        //Up scroll
        ticking = true;
        if (currentSlideNumber !== 0) {
          currentSlideNumber--;
        }
        previousItem();
        slideDurationTimeout(slideDurationSetting);
      }
    }
  }

  // ------------- SET TIMEOUT TO TEMPORARILY "LOCK" SLIDES ------------- //
  function slideDurationTimeout(slideDuration) {
    setTimeout(function() {
      ticking = false;
    }, slideDuration);
  }

  // ------------- ADD EVENT LISTENER ------------- //
  var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
  window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);

  // ------------- SLIDE MOTION ------------- //
  function nextItem() {
    var $previousSlide = $(".background").eq(currentSlideNumber - 1);
    $previousSlide.removeClass("up-scroll").addClass("down-scroll");
  }

  function previousItem() {
    var $currentSlide = $(".background").eq(currentSlideNumber);
    $currentSlide.removeClass("down-scroll").addClass("up-scroll");
  }

// svgmorphing starta here====================================================
      var el = document.querySelector( '.md-slider' ),
        settings = {
          autoplay : true,
          interval : 1000,
          devices : [ 
            { cName : 'md-device-1', canRotate : false, imgsrc : 'img/site1.jpg' },
            { cName : 'md-device-2', canRotate : false, imgsrc : 'img/site2.jpg' },
            { cName : 'md-device-3', canRotate : true, imgsrc : 'img/site3.jpg', rotatedsrc : 'img/site3r.jpg' },
            { cName : 'md-device-4', canRotate : true, imgsrc : 'img/site4.jpg', rotatedsrc : 'img/site4r.jpg' }
          ]
        },
        devicesTotal = settings.devices.length,
        ds = MorphingDevice( el, settings );

      // create navigation triggers
      var nav = document.createElement( 'nav' );
      for( var i = 0; i < devicesTotal; ++i ) {

        var trigger = document.createElement( 'a' );
        trigger.className = i === 0 ? 'md-current' : '';
        trigger.setAttribute( 'href', '#' );
        trigger.setAttribute( 'pos', i );
        trigger.onclick = function( event ) {

          ds.stopSlideshow();
          var pos = Number( event.target.getAttribute( 'pos' ) );
          if( pos === ds.getCurrent() ) {
            return false;
          }
          ds.updateCurrentTrigger( event.target );
          ds.setCurrent( pos );
          ds.changeDevice();
          return false;

        };
        nav.appendChild( trigger );

      }
      el.appendChild( nav );

      if( settings.autoplay ) {
        ds.startSlideshow();
      }
