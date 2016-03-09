
$(".reveal").on('click touchstart', function (e) {

    var target = $(this).attr('href');
    
    if ($(target).css('display') === 'none') {
      $('.aside-team').addClass('not-active');
      $(target).addClass('active');
      $(target).removeClass('not-active');
    }
    
    else {
      $(target).removeClass('active');
      $(target).addClass('not-active');
    }
    
    e.preventDefault();
    
});




