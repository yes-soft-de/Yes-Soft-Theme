
$(document).ready(function(){

    /* -- Show/Hide Whatsapp & mail Icons -- */
    if($(window).innerWidth() > 991 ) {
        $('.contact .whatsapp').css({
            'visibility' : 'hidden'
        });
        $('.contact .mail').css({
            'visibility' : 'visible'
        });
    } else {
        $('.contact .whatsapp').css({
            'visibility' : 'visible'
        });
        $('.contact .mail').css({
            'visibility' : 'hidden'
        });
    }
    $(window).resize(function(){
        if($(window).innerWidth() > 991 ) {
            $('.contact .whatsapp').css({
                'visibility' : 'hidden'
            });
            $('.contact .mail').css({
                'visibility' : 'visible'
            });
        } else {
            $('.contact .whatsapp').css({
                'visibility' : 'visible'
            });
            $('.contact .mail').css({
                'visibility' : 'hidden'
            });
        }
    });
    /* -- ./Show/Hide Whatsapp & mail Icons -- */
	
});