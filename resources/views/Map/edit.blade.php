<?php ?>
@include('Map.header')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@foreach($post as $element)
    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <h2 style="text-align: center; padding-top: 30px">Изменить файл &#128221;</h2><br>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <form action="/map/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <input type="hidden" class="form-control" name="id" id="id" value="{{$element->id}}">
                            <img class="image-flud" src="{{asset('storage/img/'.$element->file) }}" alt="blog-img" width="200px">
                            <input type="file" class="form-control form-control-lg" name="file" id="file" value="{{$element->file}}">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="form-label" id="text"><h2>Контент &#128172;</h2></label>
                                <textarea name="content" id="content" class="form-control" placeholder="Write your message." cols="20" rows="5">{{$element->content}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"><h2>Кординаты</h2></label>
                            <input type="text" class="form-control" name="point" id="point" value="{{$element->point}}">
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
@endforeach


@include('Map.footer')


<script>
    $('#delete').click(function () {
        let id = $('#delete').val();
        alert(id);
    });
</script>






