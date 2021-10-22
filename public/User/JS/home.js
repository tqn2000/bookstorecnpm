$('.banner').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 1000,
    prevArrow: '<button class="slick-prev slick-arrow " aria-label="Previous " type="button " style=" "><i class="bi bi-chevron-left "></i></button>',
    nextArrow: '<button class="slick-next slick-arrow " aria-label="Next " type="button " style=" "><i class="bi bi-chevron-right "></i></button>'
});
$('.hot-selling-row').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: '<button class="slick-prev slick-arrow " aria-label="Previous " type="button " style=" "><i class="bi bi-chevron-left "></i></button>',
    nextArrow: '<button class="slick-next slick-arrow " aria-label="Next " type="button " style=" "><i class="bi bi-chevron-right "></i></button>',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
(() => {
    let val = [0, 1, 2, 3, 4];
    $('.list-hot-selling').each(function(index, item) {
        if (index == val[0] || index == val[0] + 5) {
            val[0] = index;
            $(item).addClass('orange-top');
        }
        if (index == val[1] || index == val[1] + 5) {
            val[1] = index;
            $(item).addClass('green-top');
        }
        if (index == val[2] || index == val[2] + 5) {
            val[2] = index;
            $(item).addClass('blue-top');
        }
        if (index == val[3] || index == val[3] + 5) {
            val[3] = index;
            $(item).addClass('orange-top');
        }
        if (index == val[4] || index == val[4] + 5) {
            val[4] = index;
            $(item).addClass('green-top');
        }
    });
})();

function hideClass(name, show, hide) {
    $(name).removeClass(show);
    $(name).addClass(hide);
}

function showClass(name, show, hide) {
    $(name).addClass(show);
    $(name).removeClass(hide);
}

function backToTop() {
    $(window).scroll(function() {
        var e = $(this).scrollTop();
        if (e > 300) {
            showClass('.btn-up', 'btn-up-visible', 'btn-up-hidden')
        } else {
            hideClass('.btn-up', 'btn-up-visible', 'btn-up-hidden')
        }
    })
    $('.btn-up').click(function() {
        $('html,body').animate({
            scrollTop: 0,
        }, 0)
    })
}
backToTop();

function qucikView() {
    $('.close-quick-view').on('click', function() {
        hide();
    })
    $('.overlay').on('click', function() {
        hide();
    })
    $('.btn-quick-view').click(function(e) {
        e.preventDefault();
        let id = $(this).parents('.item-sell').attr('id');
        //post data 
        $.ajax({
            type: "post",
            url: "/GetProduct",
            data: { id: id },
            dataType: "html",
            success: function(response) {
                $('.quick-view-pro').html('');
                $('.quick-view-pro').append(html);
            }
        });
        showClass('.overlay', 'show-overlay', 'close-overlay');
        showClass('.quick-view-pro', 'show-qview', 'hide-qview ');
        showClass('.ban-quick-view', 'show-ban-qview', 'hide-ban-qview');
    });

    function hide() {
        hideClass('.overlay', 'show-overlay', 'close-overlay');
        hideClass('.quick-view-pro', 'show-qview', 'hide-qview ');
        hideClass('.ban-quick-view', 'show-ban-qview', 'hide-ban-qview');
    }
}
//show nav3 and hidden nav3 in tablet and mobile 
(() => {
    $('.btn-nav-mobile').on('click', function() {
        showClass('.list-menu-res', 'show-lst-menu ', 'hiden-lst-menu');
        // showClass('.content-main', 'move-contain', 'back-contain ');
        showClass('.black-bag', 'show-back-bag', 'hiden-bach-bag');
    })
    $('.black-bag').on('click', function() {
        hideClass('.list-menu-res', 'show-lst-menu ', 'hiden-lst-menu');
        // hideClass('.content-main', 'move-contain', 'back-contain ');
        hideClass('.black-bag', 'show-back-bag', 'hiden-bach-bag');

    })
})();
qucikView();
$(document).ready(function() {
    $('.list-unstyled').hide();
    $('.btn-show-category').on('click', function() {
        $('.list-unstyled').slideToggle();;
    })
    $('.has-children').on('click', function() {
        $('.menu-child-1').css('left', '0');
        $('.list-menu-res ').children('.nav-ul').css('visibility', 'hidden')
    })
    $('.btn-come-back , .btn-turn-pro ,.black-bag').on('click', function() {
        $('.menu-child-1').css('left', '-300px');
        $('.list-menu-res ').children('.nav-ul').css('visibility', 'visible')
    })
});