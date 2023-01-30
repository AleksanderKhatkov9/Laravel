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
                    <h1 class="mb-0 site-logo"><a href="/" class="h2 mb-0">Map<span class="text-primary">.</span> </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#home-section" class="nav-link">Home</a></li>
                            <li><a href="/map" class="nav-link">Map</a></li>
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

    <section class="site-section" id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h2 class="text-black">Hey there, I'm John The Founder</h2>
                </div>
                <div class="col-md-6 mb-5">
                    <p>Placeholder text here. Far far away, behind the word mountains, far from the countries Vokalia
                        and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                        coast of the Semantics, a large language ocean.</p>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                        decided to leave for the far World of Grammar.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p class="mt-5"><img src="images/signature.jpg" alt="Free website template by Free-Template.co"
                                         class="img-fluid w-25"></p>
                </div>
                <div class="col-md-5 ml-auto">
                    <h2 class="text-black mb-4 h6">Upcmoing Speaking Gigs</h2>
                    <ul class="list-unstyled">
                        <li class="mb-4">
                            <h3 class="text-black m-0">Build Conference</h3>
                            <span class="text-muted">Bristol, UK, 7th June 2019</span>
                        </li>
                        <li class="mb-4">
                            <h3 class="text-black m-0">The Life Conference</h3>
                            <span class="text-muted">London, UK, 19th September 2019</span>
                        </li>
                        <li class="mb-4">
                            <h3 class="text-black m-0">Build Conference</h3>
                            <span class="text-muted">Bristol, UK, 7th June 2019</span>
                        </li>
                        <li class="mb-4">
                            <h3 class="text-black m-0">The Life Conference</h3>
                            <span class="text-muted">London, UK, 19th September 2019</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 text-left">
                    <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co"
                         class="rounded-circle img-fluid w-50 mb-4">
                    <h3 class="h4 text-black">Jean</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <p>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </p>
                </div>
                <div class="col-lg-3 text-left">
                    <img src="images/person_2.jpg" alt="Free Website Template by Free-Template.co"
                         class="rounded-circle img-fluid w-50 mb-4">
                    <h3 class="h4 text-black">Rob</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <p>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </p>

                </div>
                <div class="col-lg-3 text-left">
                    <img src="images/person_3.jpg" alt="Free Website Template by Free-Template.co"
                         class="rounded-circle img-fluid w-50 mb-4">
                    <h3 class="h4 text-black">Parker</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <p>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </p>
                </div>
                <div class="col-lg-3 text-left">
                    <img src="images/person_4.jpg" alt="Free Website Template by Free-Template.co"
                         class="rounded-circle img-fluid w-50 mb-4">
                    <h3 class="h4 text-black">Kyle</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <p>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </p>
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
        </div>
    </section>

    <div class="container" style="display: block" id="form1">
        <button type="button" class="btn btn-success" id="addUser">Add Users</button>
        <table id="table" class="display" style="width: 100%">
            <thead>
            <tr>
                <th>N</th>
                <th>File</th>
                <th>Content</th>
                <th>Location</th>
                <th>Actions</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $element)
                <tr>
                    <td>{{$element ->id}}</td>
                    <td> <img class="image-flud" src="{{asset('storage/img/'.$element->file) }}" alt="blog-img" width="200px"></td>
                    <td>{{$element ->content}}</td>
                    <td>{{$element ->location}}</td>
                    <td>
                        <a href="/edit?id={{$element->id}}">
                            <button type="button" class="btn btn-success" name="update" id="update">Edit</button>
                        </a>
                    </td>
                    <td>
                        <form action="/users/delete" method="post">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{$element->id}}"/>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <h2 style="text-align: center; padding-top: 30px">Добавить файл &#128221;</h2>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <form action="/map/save" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="file" class="form-label" id="text">Выбрать файл &#128194;</label>
                            <input type="file" class="form-control form-control-lg" name="file" id="file">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="form-label" id="text">Контент &#128172;</label>
                                <textarea name="content" id="content" class="form-control" placeholder="Write your message." cols="20" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Кординаты</label>
                            <input type="text" class="form-control" name="location" id="location">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mr-auto">
                                <input type="submit" class="btn btn-block btn-primary text-white py-2 px-5" value="Отправить ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });

        $('#addUser').click(function () {
            // $("#form1").css("display", "none");
            // $("#form2").css("display", "block");
        });
    </script>

    @include('map.footer')

</div> <!-- .site-wrap -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
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


</body>
</html>
