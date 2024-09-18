//when document is redy below function will run
$(document).ready(function() {
  setTimeout(function(){ 
    $("#myModal").modal({
      backdrop: 'static',
      keyboard: false
    }); 
  }, 12000);
})

///////////////////

$(function() {
  
  // contact form animations
  $('.popup_main_btn').click(function() {
    $('#popup_btn_form').fadeToggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#popup_btn_form");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
});

/////////////

/*
  Smooth scroll functionality for anchor links (animates the scroll
  rather than a sudden jump in the page)
*/
$('.js-anchor-link').click(function(e){
  e.preventDefault();
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
  }
});