// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// ====== INDEX  ======================================================================================================
// ==
// == A. BURGER MENU
// == B. HOMEPAGE CAROUSEL
// ==
// ====== INDEX  ======================================================================================================

jQuery(document).ready(function($) {

// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
// A.1. BURGER MENU --------------------------------------------------------------------------------------------------- 
    
$(.reveal).on('click touchstart', function (e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hidden') ) {
        
        $(target).removeClass('hidden');
        $('.reveal').addClass('close');
        
    } else {
        
        $(target).addClass('hidden');
        $('.reveal').removeClass('close');
        
    }
    
    e.preventDefault();
    
  });
    
// A.1. END -----------------------------------------------------------------------------------------------------------
    
// A.2. GENERAL SHOW --------------------------------------------------------------------------------------------------
    
$('.showhide').click(function(e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hidden') ) {
        
        $(target).removeClass('hidden');
        $('.showhide').addClass('close');
        
    } else {
        
        $(target).addClass('hidden');
        $('.showhide').removeClass('close');
        
    }
    
    e.preventDefault();
    
  });
    
// A.2. END -----------------------------------------------------------------------------------------------------------
    
// A.2. END -----------------------------------------------------------------------------------------------------------
    
var currentContent = '';	
	$(".toggle-div").on('click', function(){
		currentContent = $(this).attr('name');
		if($('#'+currentContent).hasClass('on')){
			$('#'+currentContent).removeClass('on');			
		}else{
			hideAllContent();
			showCurrentContent(currentContent);
		}
	});

	function hideAllContent(){
		$('.toggle-content').removeClass('on');
	};
	
	function showCurrentContent(currentContentDiv){
		$('#'+currentContentDiv).addClass('on');
	};	
			 
// A.2. END -----------------------------------------------------------------------------------------------------------
    
// A.3. SCROLL TO LINK ------------------------------------------------------------------------------------------------
    
    $(".bob-textLink, .bob-backUp").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 1000,'swing');
    });
    
// A.3. END -----------------------------------------------------------------------------------------------------------
    
// A.4. SHOW HIDE LOGO ------------------------------------------------------------------------------------------------

    var t = $(".wrapper").offset().top;

    $(document).scroll(function(){

        if (document.documentElement.clientWidth > 640) {

            // Hide the logo, and show as you scroll
            if($(this).scrollTop() > t)
            {   
                $('.logo').css({"display":"block"});

            }else{
                $('.logo').css({"display":"none"});
            }


        } else {}


    });
    
// A.4. END -----------------------------------------------------------------------------------------------------------

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// B. HOMEPAGE CAROUSEL +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

(function($) {
    $(function() {
        var jcarousel = $('.jcarousel');

        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width >= 1200) {
                    width = width / 1;
                } 

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
        
            .jcarousel({
                wrap: 'circular'
            });

        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });
        
        $('.jcarousel').jcarouselAutoscroll({
            target: '+=1',
            interval: 7000,
            autostart: true
        });
        
        $('.jcarousel').jcarousel({
            animation: {
                duration: 900,
                easing:   'linear',
                complete: function() {
                }
            }
        });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
    });
})(jQuery);

// B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    


// B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    $(function() {

        var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com'], object, embed"),
        $fluidEl = $("figure");

        $allVideos.each(function() {

          $(this)
            // jQuery .data does not work on object/embed elements
            .attr('data-aspectRatio', this.height / this.width)
            .removeAttr('height')
            .removeAttr('width');

        });

        $(window).resize(function() {

          var newWidth = $fluidEl.width();
          $allVideos.each(function() {

            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.attr('data-aspectRatio'));

          });

        }).resize();

    });
    
    // B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// C. SLIDERS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    $( function() {

		$( '#cs-mtn' ).cbpFWSlider();
		
		$( '#cs-old-mutual' ).cbpFWSlider();
		
		$( '#cs-colourworks' ).cbpFWSlider();
		
		$( '#cs-spree' ).cbpFWSlider();
		
		$( '#cs-gopro' ).cbpFWSlider();
		
		$( '#cs-mama-mio' ).cbpFWSlider();
		
		$( '#cs-bookmarks' ).cbpFWSlider();
		
		$( '#cs-loeries' ).cbpFWSlider();

	} );

// C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
});
// END OF FILE ========================================================================================================
// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// ====== INDEX  ======================================================================================================
// ==
// == A. BURGER MENU
// == B. HOMEPAGE CAROUSEL
// ==
// ====== INDEX  ======================================================================================================

jQuery(document).ready(function($) {

// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
// A.1. BURGER MENU --------------------------------------------------------------------------------------------------- 
    
$('.reveal').click(function(e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hidden') ) {
        
        $(target).removeClass('hidden');
        $('.reveal').addClass('close');
        
    } else {
        
        $(target).addClass('hidden');
        $('.reveal').removeClass('close');
        
    }
    
    e.preventDefault();
    
  });
    
// A.1. END -----------------------------------------------------------------------------------------------------------
    
// A.2. GENERAL SHOW --------------------------------------------------------------------------------------------------
    
$('.showhide').click(function(e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hidden') ) {
        
        $(target).removeClass('hidden');
        $('.showhide').addClass('close');
        
    } else {
        
        $(target).addClass('hidden');
        $('.showhide').removeClass('close');
        
    }
    
    e.preventDefault();
    
  });
    
// A.2. END -----------------------------------------------------------------------------------------------------------
    
// A.2. END -----------------------------------------------------------------------------------------------------------
    
var currentContent = '';	
	$(".toggle-div").on('click', function(){
		currentContent = $(this).attr('name');
		if($('#'+currentContent).hasClass('on')){
			$('#'+currentContent).removeClass('on');			
		}else{
			hideAllContent();
			showCurrentContent(currentContent);
		}
	});

	function hideAllContent(){
		$('.toggle-content').removeClass('on');
	};
	
	function showCurrentContent(currentContentDiv){
		$('#'+currentContentDiv).addClass('on');
	};	
			 
// A.2. END -----------------------------------------------------------------------------------------------------------
    
// A.3. SCROLL TO LINK ------------------------------------------------------------------------------------------------
    
    $(".bob-textLink, .bob-backUp").click(function(event){
        
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 1000,'swing');
        
    });
    
// A.3. END -----------------------------------------------------------------------------------------------------------
    
// A.4. SHOW HIDE LOGO ------------------------------------------------------------------------------------------------

    var t = $(".wrapper").offset().top;

    $(document).scroll(function(){

        if (document.documentElement.clientWidth > 640) {

            // Hide the logo, and show as you scroll
            if($(this).scrollTop() > t)
            {   
                $('.logo').css({"display":"block"});

            }else{
                $('.logo').css({"display":"none"});
            }


        } else {}


    });
    
// A.4. END -----------------------------------------------------------------------------------------------------------
    
// A.5. SCREEN SIZE CHECK ---------------------------------------------------------------------------------------------
    
    var screen = $( window ).width();
    console.log('I am a phone, and my width is: ' + screen);
    
// A.5. END -----------------------------------------------------------------------------------------------------------

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	
});