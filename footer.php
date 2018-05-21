<div id="prefooter">
    <div class="line-top"></div>
</div>

<!--PRE-FOOTER-->
<section class="pre-footer">
    <div class="container">
        <div class="row pre-footer-inner">
            <div class="col-md-3 pre-footer-list">
                <h4>Produkter fra Polen</h4>
                <hr>
                <ul class="list-inner">
                    <li class="nav-item"><?php the_field('opis_kontakt'); ?></li>
                    <a href="<?php echo esc_url(home_url('/reklama')); ?>">
                        <button type="button">Kontakt</button>
                    </a>
                </ul>
            </div>
            <div class="col-md-3 pre-footer-list">
                <h4><?php the_field('tytul_kolumna1_stopka'); ?></h4>
                <hr>
                <ul class="list-inner">
                    <li class="nav-item">
                        <a href="<?php echo esc_url(home_url('/o_nas')); ?>">
                            <?php the_field('tytul_about_stopka'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(home_url('/regulamin')); ?>">
                            <?php the_field('tytul_regulamin_stopka'); ?>
                        </a></li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(home_url('/cookie')); ?>">
                            <?php the_field('tytul_cookie_stopka'); ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 pre-footer-list">
                <h4><?php the_field('tytul_kolumna2_stopka'); ?></h4>
                <hr>
                <ul class="list-inner">
                    <li class="nav-item"><a href="<?php echo esc_url(home_url('/cennik')); ?>">Cennik</a></li>
                    <li class="nav-item"><a href="<?php echo esc_url(home_url('/reklama')); ?>">Reklama</a></li>
                </ul>
            </div>
            <div class="col-md-3 pre-footer-list">
            </div>
        </div>
    </div>
</section>

<div id="footer" class="footer_background">
    <div class="container ">
        <div class="footer-text row ">
            <div class="col-md-12 footer-inner">
                <span class="footer-inner-text">Copyright © <span class="bspan">2018</span> Produkter fra Polen </span>
                <span class="footer-inner-text"><a href="http://www.dwakolory.com.pl/" target="_blank" style="color:#fff; text-decoration:none">Projekt i wykonanie: <span class="bspan">Dwa Kolory</span></a></span>
            </div>
        </div>
    </div>
</div>

<!--SCRIPT-->
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
        integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script>
    window.onload = function () {
        $slideshow = $('.opinions-slider').slick({
            dots: true,
            autoplay: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"></button>',
            nextArrow: '<button type="button" class="slick-next"></button>',
            slidesToShow: 1,
            slidesToScroll: 1
        });
        $('.slider-box').click(function () {
            $slideshow.slick('slickGoTo', parseInt($slideshow.slick('slickCurrentSlide')) + 1);
        });
    };
</script>

<script>
    //mapa
    var $headerMapCont = $('#entry .map');
    if ($headerMapCont.size() > 0) {

        //omijam i wracam po
        function initHeaderMap() {
            //
            function createHeaderMap($cnt, lat, lng) {
                var opts = {
                    center: new google.maps.LatLng(lat, lng),
                    zoom: 8,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                // tworzymy mape do zm hm
                var headerMap = new google.maps.Map($cnt.get(0), opts);

                if (restaurantsList) {
                    for (var entry in restaurantsList) {

                        var geocoder = new google.maps.Geocoder();

                        geocoder.geocode({
                            address: restaurantsList[entry].city
                        }, function (results, status) {
                            // jeśli status jest ok
                            if (status == google.maps.GeocoderStatus.OK) {
                                //rysujemy na  mapce kółeczko
                                var options = {
                                    strokeColor: "#000",
                                    strokeOpacity: 1,
                                    strokeWeight: 2,
                                    fillColor: "#f55b0c",
                                    fillOpacity: 1,
                                    center: results[0].geometry.location,
                                    map: headerMap,
                                    radius: restaurantsList[entry].restaurantsCount * 3500
                                }

                                new google.maps.Circle(options);

                            } else {
                                alert("Geocode was not successful for the following reason: " + status);
                            }

                        });
                    }
                }
            }

            //prosimy o lokalizację
            if (navigator.geolocation) {
                //f zwrotna uruchomiona po wyrażeniu zgody na podanie położenia, position - aktualna pozyucja
                var success = function (position) {
                    //tworzy mapkę headerMapCont leci jako arg do f header map
                    createHeaderMap($headerMapCont, position.coords.latitude, position.coords.longitude)
                };

                var error = function () {
                    createHeaderMap($headerMapCont, 52.259, 21.020); //warsaw coords
                }

                navigator.geolocation.getCurrentPosition(success, error);

            } else {
                // jeśli przegladarka nie obsługuje geo
                createHeaderMap($headerMapCont, 52.259, 21.020)
            }
        }

        //po załadowaniu drzewa dok i mapki
        google.maps.event.addDomListener(window, 'load', initHeaderMap);
    }

    var $rightMapCont = $('.map');
    if ($rightMapCont.size() > 0) {

        var address = $.trim($('input#gmap-address').val());

        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({
            address: address
        }, function (results, status) {

            if (status == google.maps.GeocoderStatus.OK) {

                var mapOptions = {
                    center: results[0].geometry.location,
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var rightMap = new google.maps.Map($rightMapCont.get(0), mapOptions);

                new google.maps.Marker({
                    position: results[0].geometry.location,
                    map: rightMap
                });

            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }

        });
    }
</script>
<?php wp_footer() ?>

</body>
</html>