$(document).ready(function () {
    //nav toggle
    $('#mobile-nav-menu-btn').on('click', function () {
        $('#mobil-dropdown-menu').slideToggle(200);
        $(this).css('display', 'none');
        $('#mobile-nav-menu-btn-open').css('display', 'block');
    });

    //change nav menu icon
    $('#mobile-nav-menu-btn-open').on('click', function () {
        $('#mobil-dropdown-menu').slideToggle(200);
        $(this).css('display', 'none');
        $('#mobile-nav-menu-btn').css('display', 'block');
    });


    if($('body').is('.contains-slider')) {
        //uncheck all
        $('input').prop('checked', false);

        //form error observer
        $('.personal-data input').on('focus', function () {
            if($(this).hasClass("input-error")) {
                $(this).removeClass("input-error");
                $(this).attr("placeholder", "");
            }
        });

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

function formSubmit() {
    let name = $('#name');
    let bday = $('#bday');
    let adress = $('#adress');
    let mail = $('#mail');
    let list = [[name, "Namen"],[bday, "Geburtstag"],[adress, "Adresse"],[mail, "Email"]];
    let submit = true;

    $.each(list, function (i, value) {
        if(!value[0].val()) {
            submit = false;
            value[0].attr("placeholder", "Bitte " + value[1] + " eingeben!");
            value[0].addClass("input-error");
        }
    });
    return submit;
}