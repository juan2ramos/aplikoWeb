$(function() {

  	/* SLIDER */
	if ($('.slider').length > 0) {
	        $('.slider').flexslider({
	        animation: "none",
	        slideshow: true,
	        prevText: "<",
	        nextText: ">" 
	      });
	}  

	 /*
     * Menu Scroll
     */
    var heightNav = 990,$section = $('.section');
    $(window).scroll(function() {
        var wSroll = $(window).scrollTop(),
        winWidth = $(window).width(),
        $topSection = [];
        if (wSroll > heightNav ) {
            $("body").addClass("fixed");
        }
        if (wSroll < heightNav ) {
            $("body").removeClass("fixed");
        }
        $.each($section, function() {
	      $topSection.push($(this).offset().top - 160);

	    });
        $.each($section, function(i) {
		    if ((wSroll >= $topSection[i]) && (wSroll <= $topSection[i] + $(this).height() + 90)) {
		    	var $id = $('#' + this.id + '-link');
		    	console.log($id);
		      $id.addClass('current');
		      
		    } else {	
		      $('#' + this.id + '-link').removeClass('current'); 
		      
		    }
  		});

    });
     $('.links').on('click', function(e){
	    e.preventDefault();
	    var currTarget = $(this).data('menu');
    	$('html, body').stop().animate({
      		scrollTop: $($('#' + currTarget)).offset().top - 160
    }, 500);
  });
});


