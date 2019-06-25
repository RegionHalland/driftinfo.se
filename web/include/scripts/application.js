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
