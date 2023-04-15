
@include('Map.header')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="/" class="h2 mb-0">Coach<span
                                class="text-primary">.</span> </a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#home-section" class="nav-link">Home</a></li>
                            <li><a href="/test" class="nav-link">Zoom map</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>
    </header>

    <section class="site-section" id="testimonials-section" data-aos="fade">
        <div class="container">
            <div class="row" style="text-align: center">
                <div id="map" style="width: 1200px; height: 900px"></div>
            </div>
        </div>
    </section>



    @include('map.footer')

</div> <!-- .site-wrap -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>

<script src="js/typed.js"></script>
<script>
    var typed = new Typed('.typed-words', {
        strings: ["Motivational Speakers", "Professional Speakers", "Business Speakers", "Professional Life Coach"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script>

<script src="{{asset('js/main.js')}}"></script>

<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>


<script>
    var placemarks = [
            {
                latitude: 53.90,
                longitude: 27.56,
                hintContent: '<div class="map__hint">ул. Литераторов, д. 19</div>',
                balloonContent: [
                    '<div class="map__balloon">',
                    '<img class="map__burger-img" src="img/burger.png" alt="Бургер"/>',
                    'Самые вкусные бургеры у нас! Заходите по адресу: ул. Литераторов, д. 19',
                    '</div>'
                ]
            },
            {
                latitude:  53.89,
                longitude: 27.56,
                hintContent: '<div class="map__hint">Малый проспект В О, д 64</div>',
                balloonContent: [
                    '<div class="map__balloon">',
                    '<img class="map__burger-img" src="img/burger.png" alt="Бургер"/>',
                    'Самые вкусные бургеры у нас! Заходите по адресу: Малый проспект В О, д 64',
                    '</div>'
                ]
            },
            {
                latitude: 59.93,
                longitude: 30.34,
                hintContent: '<div class="map__hint">наб. реки Фонтанки, д. 56</div>',
                balloonContent: [
                    '<div class="map__balloon">',
                    '<img class="map__burger-img" src="img/burger.png" alt="Бургер"/>',
                    'Самые вкусные бургеры у нас! Заходите по адресу: наб. реки Фонтанки, д. 56',
                    '</div>'
                ]
            }
        ],
        geoObjects= [];

    ymaps.ready(init);
    function init(){
        // Создание карты.
        var map = new ymaps.Map("map", {
            center: [53.902735, 27.555691],
            zoom: 12,
            behaviors: ['drag']
        });
        for (var i = 0; i < placemarks.length; i++) {
            geoObjects[i] = new ymaps.Placemark([placemarks[i].latitude, placemarks[i].longitude],
                {
                    hintContent: placemarks[i].hintContent,
                    balloonContent: placemarks[i].balloonContent.join('')
                },
                {
                    // iconLayout: 'default#image',
                    // iconImageHref: 'img/sprite.png',
                    // iconImageSize: [46, 57],
                    // iconImageOffset: [-23, -57],
                    // iconImageClipRect: [[415, 0], [461, 57]]
                });
        }
        var clusterer = new ymaps.Clusterer({
            clusterIcons: [
                {
                    href: 'https://cdn-icons-png.flaticon.com/512/4703/4703644.png',
                    size: [100, 100],
                    offset: [-50, -50]
                }
            ],
            clusterIconContentLayout: null
        });
        map.geoObjects.add(clusterer);
        clusterer.add(geoObjects);
    }
</script>




</body>
