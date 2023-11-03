import '../helpers/functions';
import URL from '../helpers/URL';
$(document).ready(function () {

    $('[agreement]').click(function(e){
        e.preventDefault();
        $('#agreement').addClass('show');
        $('html').addClass('no-scroll');
        $('html, header').css('margin-right', getScrollbarWidth());
    });

    if (URL.hash === '#agreement')
        $('[agreement]').click();

    $('#agreement .close').click(function(){
        $('#agreement').removeClass('show');

        $('html').removeClass('no-scroll');
        $('html, header').css('margin-right', '');
    });
});