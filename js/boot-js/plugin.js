
$(document).ready(function(){

    /* -- Typing -- */
    function typingFunc(text,ele,spd){
        var i = 0;
        var txt = text;
        var speed = spd; 
        $('#'+ele).text('');
        function typeWriter() {
            if (i < txt.length) {
                document.getElementById(ele).innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }
        typeWriter();
    }

    var ele1_txt = $('#ele1').text();
    var ele2_txt = $('#ele2').text();
    /* -- ./Typing -- */


    /* -- Overlay animation -- */
    $('.overlay-page .robot').addClass('go').delay(3000).queue(function(next){
        $(this).addClass('dance');
        next();
    });
    $('.info #ele1').delay(4000).queue(function(next){
        $('.overlay-page .info').addClass('open');
        typingFunc(ele1_txt,'ele1',150);
        next();
    });
    $('.info #ele2').delay(10000).queue(function(next){
        $('.overlay-page .info h4').css({'display': 'block'});
        typingFunc(ele2_txt,'ele2',100);
        $('.overlay-page .yes-list img').addClass('open');
        next();
    });
    $('.overlay-page .yes-list img').delay(12000).queue(function(next){
        $(this).addClass('open');
        next();
    });
    $('.overlay-page .info').delay(16000).queue(function(next){
        $('.overlay-page .info').addClass('remove');
        $('.overlay-page .yes-list img').removeClass('open');
        next();
    });

    $('.overlay-page .section-info').delay(18000).queue(function(next){
        $(this).addClass('go');
        next();
    });
  
    $('.overlay-page .robot').delay(20000).queue(function(next){
        $(this).addClass('leave');
        $('.overlay-page .section-info').fadeOut(1000);
        next();
    });

  
    $('body').delay(25000).queue(function(next){
        $('.overlay-page').fadeOut(2000);
        $('body').css({'overflow-y':'scroll'});
    }); 
    /* -- ./Overlay animation -- */

    /* -- Content Animation -- */
    $(window).on('scroll',function(){
        $('.part-box').each(function(){
            var box_position = $(this).offset().top;
            box_position = box_position - 500;
            console.log(box_position);
            if(window.pageYOffset > box_position) {
                $(this).addClass('open');
            }
        });
    });
    /* -- ./Content Animation -- */

});
