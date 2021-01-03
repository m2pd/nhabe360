console.log('second gulp task');
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $("#header").addClass("scroll");
    } else {
        $("#header").removeClass("scroll");
    }
});

//SLIDER
$('.owl-carousel').owlCarousel({
    margin: 20,
    dots: false,
    nav: true,
    navText: [$('.am-prev'), $('.am-next')],
    loop: true,
    responsive: {
        0: {
            items: 1
        },
        400: {
            items: 2
        },
        800: {
            items: 3
        },
        1000: {
            items: 4
        },
        1300: {
            items: 5
        }
    }
})
//CUSTOM NAV ARR ISSUE
$('.owl-carousel').find('.owl-nav').removeClass('disabled');
$('.owl-carousel').on('changed.owl.carousel', function (event) {
    $(this).find('.owl-nav').removeClass('disabled');
});

//TOOLTIP
$('[data-toggle="tooltip"]').tooltip();

//CHECKBOX
$(".checkbox-menu").on("change", "input[type='checkbox']", function () {
    $(this).closest("li").toggleClass("active", this.checked);
});

$(document).on('click', '.allow-focus', function (e) {
    e.stopPropagation();
});

//HIDE MAP

$('.control .icon').click(function () {
    $('.left-item').slideToggle(1000, function () {
        // if ($('.right-item').hasClass('col-sm-7')) {
        //     $('.right-item').removeClass('col-sm-7')
        //     $('.right-item').addClass('col-sm-12')
        // } else {
        //     $('.right-item').addClass('col-sm-7')
        //     $('.right-item').removeClass('col-sm-12')
        // }

        if ($('.left-item').hasClass('d-none')) {
            $('.left-item').removeClass('d-none');
            $('.right-item').attr('class', 'col-sm-7 right-item');
        } else {
            $('.left-item').addClass('d-none');
            $('.right-item').attr('class', 'col-sm-12 right-item');
        }
    });


})