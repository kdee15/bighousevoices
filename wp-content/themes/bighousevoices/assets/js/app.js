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
	$(".div-toggle").on('click', function(){
		currentContent = $(this).attr('name');
		if($('#'+currentContent).hasClass('on')){
			$('#'+currentContent).hide(0);
			$('#'+currentContent).removeClass('on');			
		}else{
			hideAllContent();
			showCurrentContent(currentContent);
		}
	});

	function hideAllContent(){
		$('.toggle-content').hide();
		$('.toggle-content').removeClass('on');
	};
	
	function showCurrentContent(currentContentDiv){
		$('#'+currentContentDiv).addClass('on');
		$('#'+currentContentDiv).show(1000,'left', 1000);
	};	
			 
// A.2. END -----------------------------------------------------------------------------------------------------------

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
    
});

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

// END OF FILE ========================================================================================================
// FACEBOOK

//<div id="fb-root"></div>

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=354705318018129";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));