// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// ====== INDEX  ======================================================================================================
// ==
// == A. BURGER MENU
// == B. HOMEPAGE CAROUSEL
// ==
// ====== INDEX  ======================================================================================================

jQuery(document).ready(function($) {

// A. BURGER MENU +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


    
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
    
    // B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// END OF FILE ========================================================================================================