$(window).on('load', function() {
    // code here
    $('body').css('padding-top', $('.navbar.custom-nav').innerHeight());
});
jQuery(document).ready( function($) {

    var customNav = $('.navbar.custom-nav'),
      projectItem = $('div.project-item'),
      info = $('.info'),
      verticalSwipingSlick = true,
      verticalSlick = true,
      dotsSlick = true,
      upButton = $('.move-up .move-up-button'),
      rtl = false,
      projectsArray = ['project-1', 'project-3', 'project-4', 'project-5', 'project-6', 'project-7', 'project-8', 'project-9'];



    $('.booking button.booking-button').click(function () {
        $('.booking').addClass('booking-overlay');
        $('.booking-popup').fadeIn(1000);
    });

    $('.booking_close').click(function () {
        $('.booking').removeClass('booking-overlay');
        $('.booking-popup').fadeOut(1000);
    });




    // if ($(window).read)
// Padding For The Document
//     $('body').css('padding-top', customNav.innerHeight());
//     console.log(customNav.innerHeight());

// Check For Mobile screen size
    if (window.innerWidth < '576') {
        verticalSlick = false;
        verticalSwipingSlick = false;
        dotsSlick = false;
        rtl = (window.document.dir === 'rtl');
    } else {
        verticalSlick = true;
        verticalSwipingSlick = true;
        dotsSlick = true;
        rtl = false;
    }

// Slider all Section
    $('.home-slider, .our-projects-slider, .specialise-slider, .about-us-slider, .our-team-slider').slick({
        rtl: rtl,
        autoplay: true,
        vertical: verticalSlick,
        verticalSwiping: verticalSwipingSlick,
        dots: dotsSlick,
        arrows: false,
        autoplaySpeed: 4000,
    });
	
	
	projectsArray.map(function (e, b, x) {
		var projectId ='#' + e;
		$(projectId + " .row div.project-item").click(function () {
			$(this).addClass("selected").siblings(projectItem).removeClass("selected");
			$(this).parents(projectId).siblings(info).children().hide();
			$("." + $(this).data("t")).fadeIn();
		});
	});

// Add bootstrap Table Class To Table We Create From blog Editor
    $('.service-page-table .post').find('table').addClass('table my-4').children('thead').addClass('thead-light');

// Scroll To Element
    $('#about_us').click(function () {
        $('html, body').animate({
            scrollTop: $('#about-us').offset().top - customNav.innerHeight()
        }, 500);
    });

// Scrolling Event
    $(window).scroll(function () {
        // Make the NavBar Fixed And Give It Box Shadow Attribute
        if ($(window).scrollTop() > customNav.innerHeight()) {
            customNav.css({
                '-webkit-box-shadow': '2px 2px 2px rgba(0,0,0,0.1)',
                '-moz-box-shadow': '2px 2px 2px rgba(0,0,0,0.1)',
                '-ms-box-shadow': '2px 2px 2px rgba(0,0,0,0.1)',
                '-o-box-shadow': '2px 2px 2px rgba(0,0,0,0.1)',
                'box-shadow': '2px 2px 2px rgba(0,0,0,0.1)'
            });
        } else {
            customNav.css({
                '-webkit-box-shadow': 'none',
                '-moz-box-shadow': 'none',
                '-ms-box-shadow': 'none',
                '-o-box-shadow': 'none',
                'box-shadow': 'none'
            });
        }

        // Make the Move up Button Visible And Unvisible
        if ($(window).scrollTop() > '750') {
            upButton.parent().fadeIn(1000);
        } else {
            upButton.parent().fadeOut(1000);
        }
    });

// Scrolling To Top By Up Button
    upButton.click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

// add border to navbar after 86px
    function navbar() {
        const nav = $('.navbar');
        if ($(window).scrollTop() >= 100) {
            // nav.addClass('border-bottom')
        } else {
            // nav.removeClass('border-bottom')
        }
    }

    $(window).ready(navbar);
    $(window).scroll(navbar);


});


