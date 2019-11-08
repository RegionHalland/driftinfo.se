$(function() {

    // ****************************
    // *** Cookie notice accept ***
    // ****************************
    $("#cookie-consent").on( "click", function() {
        // set cookie with vanilla javascript function
        setCookie('cookie_notice_accepted','1',365);
        // Hide div with cookie notice text + button
        $(".rh-cookie").hide();
    });

    // Dölj alla kort från start
    $(".rh-disturbance-card__content").hide();

    // Byt synlighet på kortet när man klickar toggle-knappen
    $(".rh-disturbance-card__toggle").on("click", function(){
        $("*[data-toggleid=" + event.target.id + "]").toggle();
        // Byt pil på toggle knappen
        $("#" + event.target.id).toggleClass("icon-plus").toggleClass("icon-minus");
    });

});

// **************************************
// *** Javascript set cookie function ***
// **************************************
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

// Back to top button
$(document).ready(function () {

    var $btnBackToTop = $("#back-to-top"),
        btnBackToTopLimitOnHead = 500,
        btnBackToTopCurrentPos = $(window).scrollTop(); // Initial state

    btnBackToTopCurrentPos < btnBackToTopLimitOnHead ? $btnBackToTop.hide() : $btnBackToTop.show();

    $(window).scroll(throttle(function () {
        btnBackToTopCurrentPos = $(this).scrollTop(); // Update current position

        if (btnBackToTopCurrentPos > btnBackToTopLimitOnHead) {
            !$btnBackToTop.is(':visible') && $btnBackToTop.fadeIn("slow");
        } else {
            $btnBackToTop.is(':visible') && $btnBackToTop.fadeOut("slow");
        }
    }, 200));

    $btnBackToTop.click(function (e) {
        e.stopPropagation();
        $('body,html').animate({ scrollTop: 0 }, 800);
    });
});

function throttle(fn, threshhold, scope) {
    threshhold || (threshhold = 250);
    var last,
        deferTimer;
    return function () {
        var context = scope || this;

        var now = +new Date,
            args = arguments;
        if (last && now < last + threshhold) {
            // hold on to it
            clearTimeout(deferTimer);
            deferTimer = setTimeout(function () {
                last = now;
                fn.apply(context, args);
            }, threshhold);
        } else {
            last = now;
            fn.apply(context, args);
        }
    };
}