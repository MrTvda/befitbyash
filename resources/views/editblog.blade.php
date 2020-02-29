<!DOCTYPE html>
<head>
  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>
    tinymce.init({
        selector: 'textarea',
        plugins: "paste autolink link anchor wordcount lists",
        menubar: false,
        toolbar: 'undo redo | formatselect | bold italic underline | justifyfull | bullist numlist',
        paste_as_text: true,
        link_context_toolbar: true,
        default_link_target: "_blank",
        width: '100%',
        theme_advanced_buttons3 : "hr,removeformat,visualaid,separator,sub,sup,separator,charmap"
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$blog -> name}}</div>

                <div class="card-body">
                  <form action="{{route('editBlog', $blog -> id)}}" method="post">
                    @csrf
                    <textarea class="form-control rounded" name="blog" rows="10" cols="80">
                      {!!$blog -> blog!!}
                    </textarea>
                    <input class="btn btn-primary my-3" type="submit" name="submit" value="Aanpassen">
                  </form>
                  <hr>
                  <form action="{{route('addImage', $blog -> name)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Grootte</label>
                      </div>
                      <select name="size" class="custom-select" id="inputGroupSelect01">
                        <option selected>Kies ...</option>
                        <option value="col-md-2">Klein</option>
                        <option value="col-md-4">Middel</option>
                        <option value="col-md-6">Groot</option>
                      </select>
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Plaatsing</label>
                      </div>
                      <select name="place" class="custom-select" id="inputGroupSelect01">
                        <option selected>Kies ...</option>
                        <option value="order-first">Links</option>
                        <option value="order-last">Rechts</option>
                      </select>
                    </div>

                    <input class="btn btn-primary my-3" type="submit" name="submit" value="Aanpassen">
                  </form>
                  <div class="row">
                    <div class="col-md">
                      <p>{!!$blog->blog!!}</p>
                    </div>
                    @if(optional($blog->image)->blogname != null)
                      <div class="{{optional($blog->image) -> img_size}} {{optional($blog->image) -> img_place}}">
                        <img src="/img/{{optional($blog->image) -> img_source}}" class="w-100" alt="">
                      </div>
                    @endif
                  </div>
                  <hr>
                  <a href="{{route('blog')}}"><button type="button" class="btn btn-secondary">Vorige pagina</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
