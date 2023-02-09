$(document).ready(function () {
    var topMenu = $(".header__menu"),
        topMenuHeight = $('.header').outerHeight(),
        menuItems = $('.js__scroll__to');

    menuItems.click(function (e) {
        e.preventDefault();
        var $this = $(this);
        var dataHref = $this.attr("data-header");
        var offsetTop = $('.' + dataHref).offset().top;
        $('html, body').stop().animate({
            scrollTop: offsetTop - topMenuHeight
        }, 900);
        changeClassHeader(offsetTop);
        e.preventDefault();
    });
    document.addEventListener("mousewheel", onWheel);

    function onWheel(e) {
        changeClassHeader($(window).scrollTop());
        changeClassOnScroll()
    }
    $(window).on("keypress", onPress);

    function onPress(e) {
        changeClassHeader($(window).scrollTop());
        changeClassOnScroll()
    }

    changeClassHeader($(window).scrollTop());

    function setActiveClassHeader(currentName, state) {
        $('.header a.active').removeClass('active');
        state = state || false;
        if (state) {
            $('[data-header="' + currentName + '"]').addClass('active');
        } else {
            currentName.addClass('active');
        }
    }

    function changeClassHeader(offsetTop) {
        if (offsetTop > 0) {
            $('.header').addClass('header_scroll');
        } else {
            $('.header').removeClass('header_scroll');
        }
    }

    function changeClassOnScroll() {
        $('section').each(function () {
            var currentElement = $(this).offset().top;
            if (currentElement <= $(window).scrollTop() && currentElement + $(this).height() >= $(window).scrollTop()) {
                var currentClass = $(this).attr('class');
                setActiveClassHeader(currentClass, true)
            }
        });
    }

});

$(document).ready(function () {
    $('[name="country"]').on('change', function () {
        var geoKey = $(this).find('option:selected').val();
        var data = $jsonData.prices[geoKey];
        var price = data.price;
        var oldPrice = data.old_price;
        var currency = data.currency;
        $("[value = " + geoKey + "]").attr("selected", true).siblings().attr('selected', false);

        $('.price_land_s1').text(price);
        $('.price_land_s2').text(oldPrice);
        $('.price_land_curr').text(currency);
    });
});