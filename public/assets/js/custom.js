
// Testimonial Slider
var tscTslider = $ (".classic_testimonial_slider");
  if(tscTslider.length) {
      tscTslider.owlCarousel({
        loop:true,
        nav:true,
        navText: ["<i class='flaticon-left-arrow'></i>" , "<i class='flaticon-right-arrow-1'></i>"],
        dots:false,
        autoplay:true,
        autoplayTimeout:4000,
        smartSpeed:1200,
        autoplayHoverPause:true,
        lazyLoad:true,
        items:1
    });
  }

// Progress Bar
var url = window.location.pathname; //get the full url
var filename = url.substring(url.lastIndexOf('/')+1); //get filename from url
if (filename == "web-designing-company-mumbai.php") {
  var offsetTop = $(".scroll_bar").offset().top;
  $(window).scroll(function() {
    var height = $(window).height();
    if ($(window).scrollTop() + height > offsetTop) {
      jQuery(".progress-bar").each(function() {
        jQuery(this).find(".progress-content").animate(
          {
            width: jQuery(this).attr("data-percentage")
          },
          2000
        );

        jQuery(this).find(".progress-number-mark").animate(
          {
            left: jQuery(this).attr("data-percentage")
          },
          {
            duration: 2000,
            step: function(now, fx) {
              var data = Math.round(now);
              jQuery(this).find(".percent").html(data + "%");
            }
          }
        );
      });
    }
  });
}