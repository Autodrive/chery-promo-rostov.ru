
$(document).ready(function () {
    $('[data-href]').click(function (e) {
        if ($(e.target).attr('href')) return;
        e.preventDefault();
        var target = $('#' + $(this).attr('data-href'));
        function scroll() {
            $('html, body').animate({
                scrollTop : target.offset().top - $('header').height() - 25
            }, 550); 
        }
        if ($('.header_burger').hasClass('active')) {
            setTimeout(
                scroll, 500 );  
        } else {
            $('html, body').animate({
                scrollTop : target.offset().top - $('header').height()
            }, 550);
        }
        
    });
    
    $('.header_burger').click(function () {
        $('.header_burger, .menu-container').toggleClass('active');
    });
    $('.menu-item').click(function () {
        $('.header_burger, .menu-container').removeClass('active');
    });

});