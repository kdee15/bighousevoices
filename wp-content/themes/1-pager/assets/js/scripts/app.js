// A. SCROLL TO LINK JS ++++++++++++++++++++++++++++++++++++++++++
			
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

// A. END ++++++++++++++++++++++++++++++++++++++++++

// B. END ++++++++++++++++++++++++++++++++++++++++++

// B. END ++++++++++++++++++++++++++++++++++++++++++

// C. LIGHTBOX WINDOW SLIDER +++++++++++++++++++++++++++++++++++++++

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
	
// C. END ++++++++++++++++++++++++++++++++++++++++++

// D. SHOW HIDE LOGO ON SCROLL ++++++++++++++++++++++++++++++++++++++++++

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

// D. END ++++++++++++++++++++++++++++++++++++++++++