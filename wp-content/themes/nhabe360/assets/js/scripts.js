console.log('second gulp task');
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $("#header").addClass("scroll");
    } else {
        $("#header").removeClass("scroll");
    }
});

//SLIDER FEATURE FOR ME
$('#forme-carousel').owlCarousel({
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
            items: 4
        }
    }
})
//SLIDER
$('#discover-carousel').owlCarousel({
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

//SLIDER DETAILS
$(document).ready(function () {
    $('#list-carousel').owlCarousel({
        margin: 0,
        loop: true,
        autoplay: false,
        lazyLoad: true,
        dots: false,
        loop: true,
        responsive: {
            300: {
                items: 1
            },
            900: {
                items: 2
            },
            1100: {
                items: 1
            }
        }
    });
    $('#list-carousel-thumb').owlCarousel({
        margin: 10,
        dots: false,
        loop: true,
        autoplay: false,
        lazyLoad: true,
        nav: true,
        navText: [$('.ar-prev'), $('.ar-next')],
        loop: true,
        responsive: {
            300: {
                items: 3
            },
            900: {
                items: 5
            },
            1100: {
                items: 5
            }
        }
    })
})

//SLIDER THUMB
$(document).ready(function () {
    // lightSlider
    $('#detail .main-img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 300,
        lazyLoad: 'ondemand',
        asNavFor: '.thumb-nav',
        prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
        nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>'
    });
    // Thumbnail/alternates slider for product page
    $('.thumb-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        centerPadding: '0px',
        asNavFor: '.main-img-slider',
        dots: false,
        centerMode: false,
        draggable: true,
        speed: 200,
        focusOnSelect: true,
        prevArrow: '<div class="slick-prev"><i class="fas fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-next"><i class="fas fa-chevron-right"></i></div>'
    });


    //keeps thumbnails active when changing main image, via mouse/touch drag/swipe
    $('.main-img-slider', '#forme-carousel').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        //remove all active class
        $('.thumb-nav .slick-slide').removeClass('slick-current');
        //set active class for current slide
        $('.thumb-nav .slick-slide:not(.slick-cloned)').eq(currentSlide).addClass('slick-current');
    });



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