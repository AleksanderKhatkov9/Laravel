<!doctype html>
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
                            <li class="has-children">
                                <a href="#about-section" class="nav-link">About</a>
                                <ul class="dropdown">
                                    <li><a href="#training-section" class="nav-link">Our Training</a></li>
                                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                                    <li><a href="#blog-section" class="nav-link">Blog</a></li>
                                    <li class="has-children">
                                        <a href="#">More Links</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#training-section" class="nav-link">Our Training</a></li>
                            <li><a href="#services-section" class="nav-link">Services</a></li>
                            <li><a href="#contact-section" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>

    </header>


    <section class="site-blocks-cover overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">

                    <div class="row">
                        <div class="col-lg-11">
                            <h1>We are <span class="typed-words"></span></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum modiblanditiis error. <a
                                    href="#">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12" style="margin-top: -7%;">
                    <div class="slide-one-item home-slider owl-carousel">
                        <img src="images/coach_hero_1.jpg" alt="Free Website Template by Free-Templat.co"
                             class="img-fluid img">
                        <img src="images/coach_hero_2.jpg" alt="Free Website Template by Free-Templat.co"
                             class="img-fluid img">
                        <img src="images/coach_hero_3.jpg" alt="Free Website Template by Free-Templat.co"
                             class="img-fluid img">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section" id="services-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="text-black">Our Services</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                        decided to leave for the far World of Grammar.</p>
                </div>
            </div>

            <div class="nonloop-block-13 owl-style owl-style-md owl-carousel">
                <div class="service">
                    <div class="icon"><span class="flaticon-badge display-1 text-primary"></span></div>
                    <h3 class="text-black mb-3">Life Coach Training</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>

                <div class="service">
                    <div class="icon"><span class="flaticon-target display-1 text-primary"></span></div>
                    <h3 class="text-black mb-3">Release Your Potential</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>

                <div class="service">
                    <div class="icon"><span class="flaticon-agreement display-1 text-primary"></span></div>
                    <h3 class="text-black mb-3">Transforming Lives</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>

                <div class="service">
                    <div class="icon"><span class="flaticon-line-chart display-1 text-primary"></span></div>
                    <h3 class="text-black mb-3">Life Coach Training</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>

                <div class="service">

                    <div class="icon"><span class="flaticon-target-1 display-1 text-primary"></span></div>
                    <h3 class="text-black mb-3">Release Your Potential</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>

                <div class="service">
                    <div class="icon"><span class="flaticon-bar-chart display-1 text-primary"></span></div>
                    <h3 class="text-black mb-3">Transforming Lives</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section" id="testimonials-section" data-aos="fade">
        <div class="container">

            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-6 text-center mb-5">
                    <h2 class="text-black mb-2">Happy Customers</h2>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="owl-carousel owl-style owl-carousel-one no-owl-nav">
                    <div>
                        <div class="block-testimony-1 text-center">

                            <blockquote class="mb-4">
                                <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad
                                    Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t
                                    listen. She packed her seven versalia, put her initial into the belt and made
                                    herself on the way.&rdquo;</p>
                            </blockquote>

                            <figure>
                                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                            </figure>
                            <h3 class="font-size-20 text-black">Ricky Fisher</h3>
                        </div>
                    </div>

                    <div>
                        <div class="block-testimony-1 text-center">
                            <blockquote class="mb-4">
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text by the name of
                                    Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                            </blockquote>

                            <figure>
                                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                            </figure>
                            <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>
                        </div>
                    </div>

                    <div>
                        <div class="block-testimony-1 text-center">
                            <blockquote class="mb-4">
                                <p>&ldquo;A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia. It is a paradisematic country, in which roasted parts of
                                    sentences fly into your mouth.&rdquo;</p>
                            </blockquote>
                            <figure>
                                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                            </figure>
                            <h3 class="font-size-20 text-black">Mellisa Griffin</h3>
                        </div>
                    </div>

                    <div>
                        <div class="block-testimony-1 text-center">
                            <blockquote class="mb-4">
                                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                    at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>

                            <figure>
                                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                            </figure>
                            <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>
                        </div>
                    </div>
                </div>
            </div>


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

<script src="js/main.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>


@foreach($list as $element)
<div class="container">
    <p>{{$element->id}}</p>

</div>



@endforeach





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
</html>
