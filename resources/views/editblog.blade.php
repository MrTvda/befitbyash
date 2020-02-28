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
                  <a href="{{route('blog')}}"><button type="button" class="btn btn-secondary">Vorige pagina</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
