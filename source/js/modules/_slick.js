import Get from '../helpers/Get';

$(document).ready(function () {
    var active = 0;

    if(Get.data['model']) {
        if($('.top-slider').find('[data-utm="' + Get.data['model'] + '"]').length) {
            active = $('.top-slider').find('[data-utm="' + Get.data['model'] + '"]').index()+1;
        }
    }

    $('.top-slider').slick({
        dots: false,
        slidesToScroll: 1,
        slidesToShow: 1,
        infinite: true,
        centerMode: false,
        initialSlide: active,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    centerMode: false,
                    initialSlide: 3
                }
            }
        ]
    })
    ;

    if ($(window).width() < 768) {
        $('.mobile-slider').slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            dots: false,
            infinite: false,
            prevArrow: '<div class="slick-arrow slick-arrow--prev"></div>',
            nextArrow: '<div class="slick-arrow slick-arrow--next"></div>',
        })
    }
});