<footer id="footer-top-placeholder" style="background-color: #F4F4F4; line-height: 1.4;">
    <div class="clearfix center px3 pb3" style="max-width: 1440px;">
        <div class="left-align col col-12 sm-col-12 md-col-4 lg-col-4">
            <p class="h2 pt3">Kontakta oss</p>
            <p>
                Region Halland<br>
                Box 517<br>
                301 80 Halmstad
            </p>
            <p>
                <strong>Telefon:</strong> 035 - 13 48 00<br>
                <strong>E-post:</strong> <a href="mailto:regionen@regionhalland.se">regionen@regionhalland.se</a>
            </p>

        </div>

        <div class="left-align col col-12 sm-col-12 md-col-4 lg-col-4">
            <p class="h2 pt3">Region Hallands webbplatser</p>
            <ul>
                <li><a class="rh-link--navigation" href="https://www.regionhalland.se">Regionhalland.se</a></li>
                <li><a class="rh-link--navigation" href="https://vardgivare.regionhalland.se">Vardgivare.regionhalland.se</a></li>
                <li><a class="rh-link--navigation" href="https://intra.regionhalland.se">Intra.regionhalland.se</a></li>
            </ul>
        </div>
        <div class="left-align col col-12 sm-col-12 md-col-4 lg-col-4">
            <p class="h2 pt3">Om webbplatsen</p>
            <ul>
                <li><a class="rh-link--navigation" href="">Om webbplatsen</a></li>
                <li><a class="rh-link--navigation" href="https://www.regionhalland.se/om-region-halland/dataskydd/">Behandling av personuppgifter</a></li>
                <li><a class="rh-link--navigation" href="">Cookies</a></li>
            </ul>


        </div>


    </div>
</footer>

<script src="{!! env('WP_HOME') !!}/include/scripts/jquery.3.3.1.min.js?ver=3.3.1"></script>

<script src="{!! env('WP_HOME') !!}/styleguide5.0.0/js/components.js"></script>

<script>

    // Dölj alla kort från start
    $(".rh-disturbance-card__content").hide();

    // Byt synlighet på kortet när man klickar toggle-knappen
    $(".rh-disturbance-card__toggle").on("click", function(){
        $("*[data-toggleid=" + event.target.id + "]").toggle();
        // Byt pil på toggle knappen
        $("#" + event.target.id).toggleClass("icon-chevron-up").toggleClass("icon-chevron-down");
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


    // ****************************
    // *** Cookie notice accept ***
    // ****************************
    $("#cookie-consent").on( "click", function() {
        // set cookie with vanilla javascript function
        setCookie('cookie_notice_accepted','1',365);
        // Hide div with cookie notice text + button
        $(".rh-cookie").hide();
    });

</script>
<script type="text/javascript">var _baTheme=0, _baMode='Aktivera Talande Webb', _baUseCookies=true, _baHideOnLoad=true;</script>
<script type="text/javascript" src="//www.browsealoud.com/plus/scripts/ba.js"></script>


<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-1181886-12');
</script>
