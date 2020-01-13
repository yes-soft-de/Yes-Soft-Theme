var customNav = $('.navbar.custom-nav'),
    projectItem = $('div.project-item'),
    info = $('.info'),
    verticalSwipingSlick = true,
    verticalSlick = true,
    dotsSlick = true,
    upButton = $('.move-up .move-up-button');

// Make Web Loader
// window.addEventListener('load', function () {
//     $('.full').css('display', 'none');
// });


// Padding For The Document
$('body').css('padding-top', customNav.innerHeight());

// Check For Mobile screen size
if (window.innerWidth < '576') {
    verticalSlick = false;
    verticalSwipingSlick = false;
    dotsSlick = false;
} else {
    verticalSlick = true;
    verticalSwipingSlick = true;
    dotsSlick = true;
}
// Slider all Section
$('.home-slider, .our-projects-slider, .specialise-slider, .about-us-slider, .our-team-slider').slick({
    autoplay: true,
    vertical: verticalSlick,
    verticalSwiping: verticalSwipingSlick,
    dots: dotsSlick,
    arrows: false,
    autoplaySpeed: 4000,
});

$("#project-1 .row div.project-item").click(function () {
    $(this).addClass("selected").siblings(projectItem).removeClass("selected");
    $(this).parents("#project-1").siblings(info).children().hide();
    $("." + $(this).data("t")).fadeIn();
});

$("#project-2 .row div.project-item").click(function () {
    $(this).addClass("selected").siblings(projectItem).removeClass("selected");
    $(this).parents("#project-2").siblings(info).children().hide();
    $("." + $(this).data("t")).fadeIn();
});

$("#project-3 .row div.project-item").click(function () {
    $(this).addClass("selected").siblings(projectItem).removeClass("selected");
    $(this).parents("#project-3").siblings(info).children().hide();
    $("." + $(this).data("t")).fadeIn();
});

// E-commerce Service Detail Page
$("#project-4 .row div.project-item").click(function () {
    $(this).addClass("selected").siblings(projectItem).removeClass("selected");
    $(this).parents("#project-4").siblings(info).children().hide();
    $("." + $(this).data("t")).fadeIn();
});




// Scrolling Event

$(window).scroll(function () {

    // Make the Navbar Fixed And Give It Box Shadow Attribute

    if ( $(window).scrollTop() > customNav.innerHeight() ) {

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



//Our Team Carousal

// $('.team-carousal').slick({
//
//     centerMode: true,
//
//     centerPadding: '0',
//
//     slidesToShow: 3,
//
//     slidesToScroll: 1,
//
//     autoplaySpeed: 3000,
//
//     autoplay: true,
//
//     responsive: [
//
//         {
//
//             breakpoint: 1024,
//
//             settings: {
//
//                 arrows: false,
//
//                 slidesToShow: 1
//
//             }
//
//         }
//
//     ]
//
// });





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





