$(document).ready(function() {
    "use strict";

    /*
      ============================================================
           Page Loader Javascript
      ============================================================
    */
      $(window).load(function(){
        $("body").imagesLoaded(function(){
          $(".loader-cont").fadeOut();
          $("#loader-overflow").delay(200).fadeOut(700);
        });
      });
    /*
	  ============================================================
		   Main Banner Javascript
	  ============================================================
	*/
    if ($('.slider').length) {
        $('.slider').on('init', function(e, slick) {
            var $firstAnimatingElements = $('.slick-slide:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        $('.slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
            fade: true
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function() {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function() {
                    $this.removeClass($animationType);
                });
            });
        }
    }






      /*
      ============================================================
           popup
      ============================================================
    */


    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-3d-unfold',
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
        beforeOpen: function() {
          // just a hack that adds mfp-anim class to markup 
           this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
          // this.st.mainClass = this.st.el.attr('data-effect');
        }
        },
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          /*titleSrc: function(item) {
            return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
          }*/
        }
      });
    
        /*
      ============================================================
           Masonry Gallery Javascript
      ============================================================
    */








    if ($('.masonry').length) {
        $(".masonry").imagesLoaded(function() {
            $(".masonry").masonry();
        });
    }
    if ($('.items-grid').length) {
        var fselector = 0,
            itemsGrid = $(".items-grid");
        (function($) {
            "use strict";
            var isotopeMode;
            if (itemsGrid.hasClass("masonry")) {
                isotopeMode = "masonry";
            } else {
                isotopeMode = "fitRows"
            }
            itemsGrid.imagesLoaded(function() {
                itemsGrid.isotope({
                    itemSelector: '.mix',
                    layoutMode: isotopeMode,
                    filter: fselector
                });
            });
            $(".port-filter").on('click', '.filter', function() {
                $(".filter").removeClass("active");
                $(this).addClass("active");
                fselector = $(this).attr('data-filter');
                itemsGrid.isotope({
                    itemSelector: '.mix',
                    layoutMode: isotopeMode,
                    filter: fselector
                });
                return false;
            });
        })(jQuery);
    }
    if ($('#items-grid2').length) {
        var fselector = 0,
            itemsGrid = $("#items-grid2");
        (function($) {
            "use strict";
            var isotopeMode;
            if (itemsGrid.hasClass("masonry")) {
                isotopeMode = "masonry";
            } else {
                isotopeMode = "fitRows"
            }
            itemsGrid.imagesLoaded(function() {
                itemsGrid.isotope({
                    itemSelector: '.mix',
                    layoutMode: isotopeMode,
                    filter: fselector
                });
            });
            $(".port-filter").on('click', '.filter', function() {
                $(".filter").removeClass("active");
                $(this).addClass("active");
                fselector = $(this).attr('data-filter');
                itemsGrid.isotope({
                    itemSelector: '.mix',
                    layoutMode: isotopeMode,
                    filter: fselector
                });
                return false;
            });
        })(jQuery);
    }
    if ($('js-height-fullscr').length) {
        $(".js-height-fullscr").height($(window).height());
    }
    /*
	  ============================================================
		   Count Down Javascript
	  ============================================================
	*/
    if ($('.countdown').length) {
        $('.countdown').downCount({
            date: '8/8/2018 12:00:00',
            offset: +1
        });
    }
    /*
	  ============================================================
		   Counter Javascript
	  ============================================================
	*/
    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    }
    /*
	  ============================================================
		   Testimonial Slider Javascript
	  ============================================================
	*/
    if ($('.chr-testimonial-1').length) {
        $('.chr-testimonial-1').slick({
            slidesToShow: 2,
            dots: false,
            autoplay: true,
            centerMode: false,
            responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: true,
                    slidesToShow: 2
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    slidesToShow: 1
                }
            }, {
                breakpoint: 481,
                settings: {
                    arrows: true,
                    slidesToShow: 1
                }
            }]
        });
    }
    /*
	  ============================================================
		  Hotel Testimonial Slider Javascript
	  ============================================================
	*/
    if ($('.hotel-testimonial').length) {
        $('.hotel-testimonial').slick({
            slidesToShow: 2,
            dots: false,
            autoplay: true,
            centerMode: false,
            responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: true,
                    slidesToShow: 2
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    slidesToShow: 1
                }
            }, {
                breakpoint: 481,
                settings: {
                    arrows: true,
                    slidesToShow: 1
                }
            }]
        });
    }
    /*
	  ============================================================
		   Room Slider Javascript
	  ============================================================
	*/
    if ($('.chr-roomslider').length) {
        $('.chr-roomslider').slick({
            slidesToShow: 3,
            dots: false,
            autoplay: true,
            centerMode: false,
            arrows: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: true,
                    slidesToShow: 2
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    slidesToShow: 1
                }
            }, {
                breakpoint: 481,
                settings: {
                    arrows: true,
                    slidesToShow: 1
                }
            }]
        });
    }
    /*
	  ============================================================
		   Staff Slider Javascript
	  ============================================================
	*/
    if ($('.chr-staff-slider').length) {
        $('.chr-staff-slider').slick({
            slidesToShow: 4,
            dots: true,
            autoplay: true,
            centerMode: false,
            arrows: false,
            responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: true,
                    slidesToShow: 3
                }
            }, {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }, {
                breakpoint: 481,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }]
        });
    }
    /*
	  ============================================================
		   Special Room Slider Javascript
	  ============================================================
	*/
    if ($('.special-room-slider').length) {
        $('.special-room-slider').slick({
            arrows: false,
            fade: false,
            dots: true,
        });
    }
    /*
	  ============================================================
		   Blog Slider Javascript
	  ============================================================
	*/
    if ($('.blog-slider').length) {
        $('.blog-slider').slick({
            arrows: true,
            fade: false,
            dots: false,
        });
    }
    /*
	  ============================================================
		   Room Detail Slider Javascript
	  ============================================================
	*/
    if ($('.slider-for').length) {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            dots: false,
            asNavFor: '.slider-nav'
        });
    }
    if ($('.slider-nav').length) {
        $('.slider-nav').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true
        });
    }
    /*
	  ============================================================
		   Testimonial Slider Javascript
	  ============================================================
	*/
    if ($('.chr-testimonial-1.arrows').length) {
        $('.chr-testimonial-1.arrows').slick({
            arrows: true
        });
    }
    /*
	  ============================================================
		   Fancy Effect Slider Javascript
	  ============================================================
	*/
    if ($('.fancy-effect').length) {
        $(".fancy-effect").hover3d({
            selector: ".fancy-thumb"
        });
    }
    /*
	  ============================================================
		   Custom Select Menu Slider Javascript
	  ============================================================
	*/
    if ($('select').length) {
        $('select').each(function() {
            var $this = $(this),
                numberOfOptions = $(this).children('option').length;
            $this.addClass('hidden');
            $this.wrap('<div class="text"></div>');
            $this.after('<div class="styledselect"></div>');
            var $styledselect = $this.next('div.styledselect');
            $styledselect.text($this.children('option').eq(0).text());
            var $list = $('<ul />', {
                'class': 'options'
            }).insertAfter($styledselect);
            for (var i = 0; i < numberOfOptions; i++) {
                $('<li />', {
                    text: $this.children('option').eq(i).text(),
                    rel: $this.children('option').eq(i).val()
                }).appendTo($list);
            }
            var $listItems = $list.children('li');
            $styledselect.click(function(e) {
                e.stopPropagation();
                $('div.styledselect.active').each(function() {
                    $(this).removeClass('active').next('ul.options').hide();
                });
                $(this).toggleClass('active').next('ul.options').toggle();
            });
            $listItems.click(function(e) {
                e.stopPropagation();
                $styledselect.text($(this).text()).removeClass('active');
                $this.val($(this).attr('rel'));
                $list.hide();
            });
            $(document).click(function() {
                $styledselect.removeClass('active');
                $list.hide();
            });
        });
    }
    /*
	  ============================================================
		   Brand Slider Javascript
	  ============================================================
	*/
    if ($('.brnd-slider').length) {
        $('.brnd-slider').slick({
            slidesToShow: 5,
            dots: false,
            autoplay: true,
            centerMode: true,
            arrows: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }, {
                breakpoint: 481,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }]
        });
    }

    /*
	  ============================================================
		   Responsive Menu Javascript
	  ============================================================
	*/
    if (typeof($.fn.dlmenu) == 'function') {
        $('#mg-responsive-navigation').each(function() {
            $(this).find('.dl-submenu').each(function() {
                if ($(this).siblings('a').attr('href') && $(this).siblings('a').attr('href') != '#') {
                    var parent_nav = $('<li class="menu-item mg-parent-menu"></li>');
                    parent_nav.append($(this).siblings('a').clone());
                    $(this).prepend(parent_nav);
                }
            });
            $(this).dlmenu();
        });
    }
    /*
	  ============================================================
		   Pretty Photo Javascript
	  ============================================================
	*/
    if ($("a[data-rel^='prettyphoto']").length) {
        $("a[data-rel^='prettyphoto']").prettyPhoto({
            animation_speed: 'fast',
            slideshow: 10000,
            hideflash: true
        });
    }
    /*
	  ============================================================
		   Twetter Tweet Javascript
	  ============================================================
	*/
    if ($("#twitter-feeds").length) {
        $("#twitter-feeds").tweet({
            username: "OscarThemes",
            modpath: './js/twitter/',
            avatar_size: false,
            count: 3,
            loading_text: "loading tweets..."
        });
    }
    /*
	  ============================================================
		   Flickr Feed Javascript
	  ============================================================
	*/
    if ($("#flickr-feeds").length) {
        $('#flickr-feeds').jflickrfeed({
            limit: 12,
            qstrings: {
                id: '152623543@N06'
            },
            itemTemplate: '<li>' + '<a class="lightbox" rel="prettyphoto" href="{{image}}" title="{{title}}">' + '<img src="{{image_s}}" alt="{{title}}" />' + '</a>' + '</li>'
        });
    }
    /*
    =======================================================================
      Map Script
    =======================================================================
    */
    if($('#map-canvas').length){
      google.maps.event.addDomListener(window, 'load', initialize);
    }
    /*
    =======================================================================
        NEWSLETTER
    =======================================================================
    */
    $(function () {
      'use strict';
        var $form = $('#mc-embedded-subscribe-form');

        $('#mc-embedded-subscribe').on('click', function(event) {
        if(event) event.preventDefault();
        register($form);
        });
      });

      function register($form) {
        $.ajax({
        type: $form.attr('method'),
        url: $form.attr('action'),
        data: $form.serialize(),
        cache       : false,
        dataType    : 'json',
        contentType: "application/json; charset=utf-8",
        error       : function(err) { $('#notification_container').html('<div id="nl-alert-container"  class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Could not connect to server. Please try again later.</div>'); },
        success     : function(data) {
         
          if (data.result != "success") {
          var message = data.msg;
          $('#notification_container').html('<div id="nl-alert-container"  class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'+message+'</div>');
          } 

          else {
          var message = data.msg;
          $('#notification_container').html('<div id="nl-alert-container"  class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'+message+'</div>');
          }
        }
        });
      }
    /*
    =======================================================================
         Map Custom Style Script Script
    =======================================================================
    */
    function initialize() {
          
      "use strict";
      
      var MY_MAPTYPE_ID = 'custom_style';
      var map;
      var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
      var featureOpts = [
        {"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}

      ];
      var mapOptions = {
        zoom: 12,
        center: brooklyn,
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
        },
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeId: MY_MAPTYPE_ID
      };

      map = new google.maps.Map(
        document.getElementById('map-canvas'),
        mapOptions
      );

      var styledMapOptions = {
        name: 'Custom Style'
      };

      var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

      map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
    }
});
/*
=======================================================================
     Image Loader  Script Library
=======================================================================
*/
(function(){function e(){}function t(e,t){for(var n=e.length;n--;)if(e[n].listener===t)return n;return-1}function n(e){return function(){return this[e].apply(this,arguments)}}var i=e.prototype,r=this,o=r.EventEmitter;i.getListeners=function(e){var t,n,i=this._getEvents();if("object"==typeof e){t={};for(n in i)i.hasOwnProperty(n)&&e.test(n)&&(t[n]=i[n])}else t=i[e]||(i[e]=[]);return t},i.flattenListeners=function(e){var t,n=[];for(t=0;e.length>t;t+=1)n.push(e[t].listener);return n},i.getListenersAsObject=function(e){var t,n=this.getListeners(e);return n instanceof Array&&(t={},t[e]=n),t||n},i.addListener=function(e,n){var i,r=this.getListenersAsObject(e),o="object"==typeof n;for(i in r)r.hasOwnProperty(i)&&-1===t(r[i],n)&&r[i].push(o?n:{listener:n,once:!1});return this},i.on=n("addListener"),i.addOnceListener=function(e,t){return this.addListener(e,{listener:t,once:!0})},i.once=n("addOnceListener"),i.defineEvent=function(e){return this.getListeners(e),this},i.defineEvents=function(e){for(var t=0;e.length>t;t+=1)this.defineEvent(e[t]);return this},i.removeListener=function(e,n){var i,r,o=this.getListenersAsObject(e);for(r in o)o.hasOwnProperty(r)&&(i=t(o[r],n),-1!==i&&o[r].splice(i,1));return this},i.off=n("removeListener"),i.addListeners=function(e,t){return this.manipulateListeners(!1,e,t)},i.removeListeners=function(e,t){return this.manipulateListeners(!0,e,t)},i.manipulateListeners=function(e,t,n){var i,r,o=e?this.removeListener:this.addListener,s=e?this.removeListeners:this.addListeners;if("object"!=typeof t||t instanceof RegExp)for(i=n.length;i--;)o.call(this,t,n[i]);else for(i in t)t.hasOwnProperty(i)&&(r=t[i])&&("function"==typeof r?o.call(this,i,r):s.call(this,i,r));return this},i.removeEvent=function(e){var t,n=typeof e,i=this._getEvents();if("string"===n)delete i[e];else if("object"===n)for(t in i)i.hasOwnProperty(t)&&e.test(t)&&delete i[t];else delete this._events;return this},i.removeAllListeners=n("removeEvent"),i.emitEvent=function(e,t){var n,i,r,o,s=this.getListenersAsObject(e);for(r in s)if(s.hasOwnProperty(r))for(i=s[r].length;i--;)n=s[r][i],n.once===!0&&this.removeListener(e,n.listener),o=n.listener.apply(this,t||[]),o===this._getOnceReturnValue()&&this.removeListener(e,n.listener);return this},i.trigger=n("emitEvent"),i.emit=function(e){var t=Array.prototype.slice.call(arguments,1);return this.emitEvent(e,t)},i.setOnceReturnValue=function(e){return this._onceReturnValue=e,this},i._getOnceReturnValue=function(){return this.hasOwnProperty("_onceReturnValue")?this._onceReturnValue:!0},i._getEvents=function(){return this._events||(this._events={})},e.noConflict=function(){return r.EventEmitter=o,e},"function"==typeof define&&define.amd?define("eventEmitter/EventEmitter",[],function(){return e}):"object"==typeof module&&module.exports?module.exports=e:this.EventEmitter=e}).call(this),function(e){function t(t){var n=e.event;return n.target=n.target||n.srcElement||t,n}var n=document.documentElement,i=function(){};n.addEventListener?i=function(e,t,n){e.addEventListener(t,n,!1)}:n.attachEvent&&(i=function(e,n,i){e[n+i]=i.handleEvent?function(){var n=t(e);i.handleEvent.call(i,n)}:function(){var n=t(e);i.call(e,n)},e.attachEvent("on"+n,e[n+i])});var r=function(){};n.removeEventListener?r=function(e,t,n){e.removeEventListener(t,n,!1)}:n.detachEvent&&(r=function(e,t,n){e.detachEvent("on"+t,e[t+n]);try{delete e[t+n]}catch(i){e[t+n]=void 0}});var o={bind:i,unbind:r};"function"==typeof define&&define.amd?define("eventie/eventie",o):e.eventie=o}(this),function(e,t){"function"==typeof define&&define.amd?define(["eventEmitter/EventEmitter","eventie/eventie"],function(n,i){return t(e,n,i)}):"object"==typeof exports?module.exports=t(e,require("wolfy87-eventemitter"),require("eventie")):e.imagesLoaded=t(e,e.EventEmitter,e.eventie)}(window,function(e,t,n){function i(e,t){for(var n in t)e[n]=t[n];return e}function r(e){return"[object Array]"===d.call(e)}function o(e){var t=[];if(r(e))t=e;else if("number"==typeof e.length)for(var n=0,i=e.length;i>n;n++)t.push(e[n]);else t.push(e);return t}function s(e,t,n){if(!(this instanceof s))return new s(e,t);"string"==typeof e&&(e=document.querySelectorAll(e)),this.elements=o(e),this.options=i({},this.options),"function"==typeof t?n=t:i(this.options,t),n&&this.on("always",n),this.getImages(),a&&(this.jqDeferred=new a.Deferred);var r=this;setTimeout(function(){r.check()})}function f(e){this.img=e}function c(e){this.src=e,v[e]=this}var a=e.jQuery,u=e.console,h=u!==void 0,d=Object.prototype.toString;s.prototype=new t,s.prototype.options={},s.prototype.getImages=function(){this.images=[];for(var e=0,t=this.elements.length;t>e;e++){var n=this.elements[e];"IMG"===n.nodeName&&this.addImage(n);var i=n.nodeType;if(i&&(1===i||9===i||11===i))for(var r=n.querySelectorAll("img"),o=0,s=r.length;s>o;o++){var f=r[o];this.addImage(f)}}},s.prototype.addImage=function(e){var t=new f(e);this.images.push(t)},s.prototype.check=function(){function e(e,r){return t.options.debug&&h&&u.log("confirm",e,r),t.progress(e),n++,n===i&&t.complete(),!0}var t=this,n=0,i=this.images.length;if(this.hasAnyBroken=!1,!i)return this.complete(),void 0;for(var r=0;i>r;r++){var o=this.images[r];o.on("confirm",e),o.check()}},s.prototype.progress=function(e){this.hasAnyBroken=this.hasAnyBroken||!e.isLoaded;var t=this;setTimeout(function(){t.emit("progress",t,e),t.jqDeferred&&t.jqDeferred.notify&&t.jqDeferred.notify(t,e)})},s.prototype.complete=function(){var e=this.hasAnyBroken?"fail":"done";this.isComplete=!0;var t=this;setTimeout(function(){if(t.emit(e,t),t.emit("always",t),t.jqDeferred){var n=t.hasAnyBroken?"reject":"resolve";t.jqDeferred[n](t)}})},a&&(a.fn.imagesLoaded=function(e,t){var n=new s(this,e,t);return n.jqDeferred.promise(a(this))}),f.prototype=new t,f.prototype.check=function(){var e=v[this.img.src]||new c(this.img.src);if(e.isConfirmed)return this.confirm(e.isLoaded,"cached was confirmed"),void 0;if(this.img.complete&&void 0!==this.img.naturalWidth)return this.confirm(0!==this.img.naturalWidth,"naturalWidth"),void 0;var t=this;e.on("confirm",function(e,n){return t.confirm(e.isLoaded,n),!0}),e.check()},f.prototype.confirm=function(e,t){this.isLoaded=e,this.emit("confirm",this,t)};var v={};return c.prototype=new t,c.prototype.check=function(){if(!this.isChecked){var e=new Image;n.bind(e,"load",this),n.bind(e,"error",this),e.src=this.src,this.isChecked=!0}},c.prototype.handleEvent=function(e){var t="on"+e.type;this[t]&&this[t](e)},c.prototype.onload=function(e){this.confirm(!0,"onload"),this.unbindProxyEvents(e)},c.prototype.onerror=function(e){this.confirm(!1,"onerror"),this.unbindProxyEvents(e)},c.prototype.confirm=function(e,t){this.isConfirmed=!0,this.isLoaded=e,this.emit("confirm",this,t)},c.prototype.unbindProxyEvents=function(e){n.unbind(e.target,"load",this),n.unbind(e.target,"error",this)},s});