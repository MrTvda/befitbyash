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
                <div class="card-header">Toevoegen blogs</div>

                <div class="card-body">
                  <form action="{{route('addBlog')}}" method="post">
                    @csrf
                    <!-- <div class="form-group row mb-0">
                      <label for="name" class="col-md-2 col-form-label">Blognaam </label>
                      <div class="col-md-10">
                        <input class="form-control" type="text" name="name" placeholder="Blognaam" required><br>
                      </div>
                    </div> -->
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Blognaam</span>
                      </div>
                      <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Voer blognaam in ...">
                    </div>
                    <textarea class="form-control rounded" name="blog" rows="10" cols="80"></textarea><br>
                    <input class="btn btn-primary mb-3" type="submit" name="submit" value="Aanmaken">
                  </form>
                  <hr>
                  <h1>Blogs</h1>
                  <hr>
                  @foreach ($blog as $blogs)
                    <h2>{{$blogs -> name}}</h2>
                    <p>{!!$blogs -> blog!!}</p>
                    <p>foto: {{optional($blogs->image)->blogname}}</p>
                    <p>Datum: {{$blogs -> created_at -> format('d-m-Y , H:i:s')}}</p>
                    <a href="{{route('editBlogPage', $blogs -> id)}}"><button class="btn btn-success">Edit</button></a>
                    <a href="{{route('removeBlog', $blogs -> id)}}"><button class="btn btn-danger">Delete</button></a>
                    <hr>
                  @endforeach
                  {{ $blog -> links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
