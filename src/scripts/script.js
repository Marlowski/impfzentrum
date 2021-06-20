$(document).ready(function () {
    //nav toggle
    $('#mobile-nav-menu-btn').on('click', function () {
        $('#mobil-dropdown-menu').slideToggle(200);
    });


    if($('body').is('.contains-slider')) {
        //uncheck all
        $('input').prop('checked', false);

        $('.slider-next, .slider-prev').on('click', function (e) {
            e.preventDefault();
        });

        $('.booking-slider-form-container input[type="radio"] + label, .booking-slider-form-container input[type="radio"]').on('click', function () {
            setTimeout(function () {
                $('.slick-slider').slick('slickNext');
            }, 250);
        });

        $('.booking-slider-form-container').slick({
            slidesToShow: 1,
            adaptiveHeight: true,
            infinite: false,
            nextArrow: $('.slider-next'),
            prevArrow: $('.slider-prev')
        });
    }
});