import '../helpers/functions';

$(document).ready(function () {
    var disclaimer = $('.disclaimer');
    disclaimer.attr('data-height', disclaimer.innerHeight());
    disclaimer.css('height', 0).addClass('cutted');

    $(document).on('click', '[disclaimer-show]', function () {
        disclaimer.attr('data-height', disclaimer.get(0).scrollHeight);
        if (disclaimer.hasClass('opened'))
            animateHeight(disclaimer, 0);
        else
            animateHeight(disclaimer, disclaimer.attr('data-height'));

        disclaimer.toggleClass('opened');
        $(this).find('span').toggle();
    })
});