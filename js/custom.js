var customNav = $('.navbar.custom-nav'),
    upButton = $('.move-up .move-up-button');

// Padding For The Document
$('html').css('padding-top', customNav.innerHeight());

// Scrolling Event
$(window).scroll(function () {
    // Make the Navbar Fixed And Give It Opacity Attribute
    if ( $(window).scrollTop() > customNav.innerHeight() ) {
        customNav.css('opacity', '.6');
    } else {
        customNav.css('opacity', '1');
    }
    // Make the Move up Button Visible And Unvisible
    if ( $(window).scrollTop() > '750' ) {
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

// idea opacity
setInterval( function () {
    const active = $('#ideas li.active');
    if ( active.is(':last-child') ) {
        $('#ideas li').eq(0).addClass('active');
    } else {
        active.next().addClass('active');
    }
    active.removeClass('active');
}, 2300 );


//Projects Carousal
$('.project-carousal').slick({
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplaySpeed: 3000,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }
    ]
});

//Service Carousal
$('.service-carousal').slick({
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                centerMode: true,
                arrows: false,
                slidesToShow: 1
            }
        }
    ]
});

//Our Team Carousal
$('.team-carousal').slick({
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplaySpeed: 3000,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }
    ]
});


// add border to navbar after 86px
function navbar () {
    const nav = $('.navbar');
    if ($(window).scrollTop() >= 100) {
        nav.addClass('border-bottom')
    } else {
        nav.removeClass('border-bottom')
    }
}
$(window).ready(navbar);
$(window).scroll(navbar);


