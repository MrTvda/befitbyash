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
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <form action="{{route('addBlog')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Blognaam"><br>
                    <textarea name="blog" rows="10" cols="80"></textarea><br>
                    <input type="submit" name="submit" value="Aanmaken">
                  </form>

                  <h1>Blogs</h1>
                  @foreach ($blog as $blog)
                    <h2>{{$blog -> name}}</h2>
                    <p>{!!$blog -> blog!!}</p>
                    <a href="{{route('removeBlog', $blog -> id)}}"><button class="btn btn-danger">Delete</button></a>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
