
$(function () {
    
    $(".blog-post").hide().slice(0, 2).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".blog-post:hidden").slice(0, 1).slideDown();
        if ($(".blog-post:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });

	$(window).stellar({
		horizontalScrolling: false 
	});

	// Custom Scrollbar
	var nice = $("html").niceScroll({
		cursorwidth: 8,
		cursorborder: "0px solid #0d65af",
		cursorborderradius: '10px'
	});

	$('.main-nav a:not(.dropdown-toggle)').bind('click', function(event) {
		var $anchor = $(this);

		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');

		event.preventDefault();
	});
	/*
	* Fun Fact with Count Animation
	*/
	$('.st-ff-count').appear();
	$(document.body).on('appear', '.st-ff-count', function(e, $affected) {
		$affected.each(function(i) {
			if (parseInt($(this).data('runit'))) {
				$(this).countTo({
					speed: 3000,
					refreshInterval: 50
				});
				$(this).data('runit', "0");
			};

		});
	});

	/*$('[data-toggle="tooltip"]').tooltip();*/

	


    function home_height () {
		var element = $('.st-home-unit'),
			elemHeight = element.height(),
			winHeight = $(window).height()
			padding = (winHeight - elemHeight - 200) /2;

		if (padding < 1 ) {
			padding = 0;
		};
		element.css('padding', padding+'px 0');
	}
	home_height ();

	$(window).resize(function () {
		home_height ();
	});


	var fadeStart=$(window).height()/3 // 100px scroll or less will equiv to 1 opacity
    ,fadeUntil=$(window).height() // 200px scroll or more will equiv to 0 opacity
    ,fading = $('.st-home-unit')
    ,fading2 = $('.hero-overlayer')
	;

	$(window).bind('scroll', function(){
	    var offset = $(document).scrollTop()
	        ,opacity=0
	        /*,opacity2=1*/
	    ;
	    if( offset<=fadeStart ){
	        opacity=1;
	        /*opacity2=0;*/
	    }else if( offset<=fadeUntil ){
	        opacity=1-offset/fadeUntil;
	        /*opacity2=offset/fadeUntil;*/
	    }
	    fading.css({'opacity': opacity});

	    if (offset >= 120) {
	    	$('.st-navbar').addClass("st-navbar-mini");
	    } else if (offset <= 119) {
	    	$('.st-navbar').removeClass("st-navbar-mini");
	    }
	});


	


	$(".testimonials-carousel ul").owlCarousel({
        items: 1,
        navigation: true,
        pagination: true,
        singleItem:true,
        autoPlay: true,
        navigationText: ['<i class="ct-etp etp-arrow-left7"></i>', '<i class="ct-etp etp-arrow-right8"></i>'],
        transitionStyle: "backSlide"
    });

    $('.clients-carousel').owlCarousel({
    	items: 5,
    	autoPlay: true,
    	pagination: false
    });

	/*
     * Contact Form Validation Code
     */
    function checkEmpty(selector) {
        if (selector.val()=="" || selector.val()==selector.prop("placeholder")) {
          selector.addClass('formFieldError',500);
          return false;
        } else {
          selector.removeClass('formFieldError',500); 
          return true;
        }
    }
    function validateEmail(email) {
        var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
        if (!regex.test(email.val())) {
          email.addClass('formFieldError',500); 
          return false;
        } else {
          email.removeClass('formFieldError',500); 
          return true;
        }
    }

    $('.contact-form').submit(function () {
      var $this = $(this),
          result = true;

      if(!checkEmpty($this.find('#fname'))){              
        result=false;
      }
      if(!validateEmail($this.find('#email'))) {
        result=false;
      }
      if(!checkEmpty($this.find('#mssg'))) {
        result=false;
      }
      
      if(result==false) {
        return false;
      }

      var $btn = $("#send").button('loading');

      var data = $this.serialize();

      $.ajax({
          url: "sender.php", 
          type: "POST",        
          data: data,     
          cache: false,
          success: function (html) {
          	console.log(html);
              if (html==1) {
                  $('#result-message').addClass('alert alert-success').html('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Success!</strong> Message Send. We will contact with you soon.').delay(500).slideDown(500).delay(10000).slideUp('slow');

                  $btn.button('reset');
                  
              } else {
                  $('#result-message').addClass('alert alert-danger').html('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Error!</strong> Message Sending Error! Please try again').delay(500).slideDown(500).delay(10000).slideUp('slow');
                  $btn.button('reset');
              }
          },
          error: function (a, b) {
            if (b == 'error') {
              $('#result-message').addClass('alert alert-danger').html('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Error!</strong> Message Sending Error! Please try again').delay(500).slideDown(500).delay(10000).slideUp('slow');
            };
            $btn.button('reset');
          }
      });

      return false;
    });
    
    $(".js-request").slideUp();
    $(".posit3").on("click", function(){
        $(".js-request").slideToggle("fast");
    });
    
    $(".tweets-container .container-fluid .row").load("twitter/index.php", "", function () {
        $(".tweets-container").children().each(function () {
            $(this).html( $(this).html().replace(/(@[a-zA-Z0-9.,_!""\//]+)/g, '<a target="_blank"  href="http://twitter.com/$1">$1</a>') );
            $(this).html( $(this).html().replace(/(#[a-zA-Z0-9.,_:;!\//]+)/g, '<a target="_blank"  href="http://twitter.com/$1">$1</a>') );
            $(this).html( $(this).html().replace(/(^|\s|<\w)(((https?|ftp):\/\/).+?)(\s|$)/g, ' <a target="_blank"  href="$2">$2</a>'+" ") );
            $(this).html( $(this).html().replace(/(Kwara_P3)/g, '<a target="_blank"  href="http://twitter.com/Kwara_P3">Kwara_P3</a>'+" ") );
        });
    });

});