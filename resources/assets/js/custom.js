var scrolltotop = {
    setting: {
        startline: 100,
        scrollto: 0,
        scrollduration: 1e3,
        fadeduration: [500, 100]
    },
    controlHTML: '<img src="images/click-top.png" />',
    controlattrs: {
        offsetx: 10,
        offsety: 10
    },
    anchorkeyword: "#top",
    state: {
        isvisible: !1,
        shouldvisible: !1
    },
    scrollup: function() {
        this.cssfixedsupport || this.$control.css({
            opacity: 0
        });
        var t = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto);
        t = "string" == typeof t && 1 == jQuery("#" + t).length ? jQuery("#" + t).offset().top : 0, this.$body.animate({
            scrollTop: t
        }, this.setting.scrollduration)
    },
    keepfixed: function() {
        var t = jQuery(window),
            o = t.scrollLeft() + t.width() - this.$control.width() - this.controlattrs.offsetx,
            s = t.scrollTop() + t.height() - this.$control.height() - this.controlattrs.offsety;
        this.$control.css({
            left: o + "px",
            top: s + "px"
        })
    },
    togglecontrol: function() {
        var t = jQuery(window).scrollTop();
        this.cssfixedsupport || this.keepfixed(), this.state.shouldvisible = t >= this.setting.startline ? !0 : !1, this.state.shouldvisible && !this.state.isvisible ? (this.$control.stop().animate({
            opacity: 1
        }, this.setting.fadeduration[0]), this.state.isvisible = !0) : 0 == this.state.shouldvisible && this.state.isvisible && (this.$control.stop().animate({
            opacity: 0
        }, this.setting.fadeduration[1]), this.state.isvisible = !1)
    },
    init: function() {
        jQuery(document).ready(function(t) {
            var o = scrolltotop,
                s = document.all;
            o.cssfixedsupport = !s || s && "CSS1Compat" == document.compatMode && window.XMLHttpRequest, o.$body = t(window.opera ? "CSS1Compat" == document.compatMode ? "html" : "body" : "html,body"), o.$control = t('<div id="topcontrol">' + o.controlHTML + "</div>").css({
                position: o.cssfixedsupport ? "fixed" : "absolute",
                bottom: o.controlattrs.offsety,
                right: o.controlattrs.offsetx,
                opacity: 0,
                cursor: "pointer"
            }).attr({
                title: "Scroll to Top"
            }).click(function() {
                return o.scrollup(), !1
            }).appendTo("body"), document.all && !window.XMLHttpRequest && "" != o.$control.text() && o.$control.css({
                width: o.$control.width()
            }), o.togglecontrol(), t('a[href="' + o.anchorkeyword + '"]').click(function() {
                return o.scrollup(), !1
            }), t(window).bind("scroll resize", function(t) {
                o.togglecontrol()
            })
        })
    }
};
scrolltotop.init();

const mediaQuery = window.matchMedia('(min-width: 768px)')
    // Check if the media query is true
if (mediaQuery.matches) {
    // Then trigger an alert
    $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });
}


var $bannerSlider = jQuery('.banner-slider');
var $bannerFirstSlide = $('div.banner-slide:first-child');

$bannerSlider.on('init', function(e, slick) {
    var $firstAnimatingElements = $bannerFirstSlide.find('[data-animation]');
    slideanimate($firstAnimatingElements);
});
$bannerSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
    var $animatingElements = $('div.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
    slideanimate($animatingElements);
});
$bannerSlider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 4000,
    swipe: true,
    adaptiveHeight: true,
    responsive: [{
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            autoplaySpeed: 4000,
            swipe: true,
        }
    }]
});

function slideanimate(elements) {
    var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    elements.each(function() {
        var $this = $(this);
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function() {
            $this.removeClass($animationType);
        });
    });
}


$('.bfaf_slider').slick({
    speed: 2000,
    cssEase: 'linear',
    swipe: false,
    loop: true,
    slidesToShow: 2,
    arrows: true,
    dots: false,
    autoplay: true,
    responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: true,
            }
        },

    ]

});

$('.doctors_slider').slick({
    speed: 2000,
    cssEase: 'linear',
    swipe: true,
    loop: true,
    slidesToShow: 4,
    swipeToSlide: true,
    touchThreshold: 10,
    arrows: false,
    dots: false,
    autoplay: true,
    responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false,
            }
        },

    ]

});

$('.patients_slider').slick({
    speed: 2000,
    cssEase: 'linear',
    swipe: true,
    loop: true,
    slidesToShow: 1,
    swipeToSlide: true,
    touchThreshold: 10,
    arrows: true,
    dots: false,
    autoplay: true,
    responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false,
            }
        },

    ]

});

$('.modal').on('show.bs.modal', function(e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog  flipInX  animated');
})

$('.modal').on('hide.bs.modal', function(e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog  flipOutX  animated');
})

// data color
jQuery("[data-color]").each(function() {
    jQuery(this).css('color', jQuery(this).attr('data-color'));
});
// data background color
jQuery("[data-bgcolor]").each(function() {
    jQuery(this).css('background-color', jQuery(this).attr('data-bgcolor'));
});


$('.timer').countTo();
$('.fun-fact').appear(function() {
    $('.timer').countTo();
}, {
    accY: -100
});

$('.service_slider').slick({
    speed: 2000,
    cssEase: 'linear',
    swipe: true,
    loop: true,
    infinite: true,
    swipeToSlide: true,
    touchThreshold: 10,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    fade: false,
    autoplay: true,
    responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: true,
            }
        },

    ]

});



$('.gallery').slick({
    speed: 2000,
    cssEase: 'linear',
    swipe: true,
    loop: true,
    swipeToSlide: true,
    touchThreshold: 10,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    fade: false,
    autoplay: true,
    responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: false,
            }
        },

    ]

});


function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

$('.modal').on('show.bs.modal', function(e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog  flipInX  animated');
})

$('.modal').on('hide.bs.modal', function(e) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog  flipOutX  animated');
})