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

    <br><br><br>

    <div class="site-section bg-light" id="form1" style="display: none">
        <div class="container">
            <h2 style="text-align: center; padding-top: 30px">Создать  &#128221;</h2>
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

    <br><br><br>

    <div class="container" style="display: block" id="form2">
        <button type="button" class="btn btn-success" id="add_User">Добавить</button>
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
                    <td>{{$element ->point}}</td>
                    <td>
                        <a href="/edit?id={{$element->id}}">
                            <button type="button" class="btn btn-success" name="update" id="update">Edit</button>
                        </a>
                    </td>
                    <td>
                        <form action="/map/delete" method="post">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{$element->id}}"/>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br><br><br>
    </div>


    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
        $('#add_User').click(function (e) {
            e.preventDefault();
            $("#form1").css("display", "block");
            $("#form2").css("display", "none");
        });
    </script>

    @include('Map.footer')

</div> <!-- .site-wrap -->




<script src="js/main.js"></script>

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

</body>
