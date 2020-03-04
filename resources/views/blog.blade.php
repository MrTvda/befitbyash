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
                <div class="card-header bg-dark text-light"><h2 class="my-0">Toevoegen blogs</h2></div>

                <div class="card-body">
                  <form action="{{route('addBlog')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-light border-dark" id="inputGroup-sizing-default">Blognaam</span>
                      </div>
                      <input type="text" name="name" class="form-control text-input bg-secondary text-white border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Voer blognaam in ...">
                      <div class="input-group-append">
                        <button class="btn btn-light border-dark" type="submit" name="submit">Aanmaken</button>
                      </div>
                    </div>
                  </form>
                  <hr>
                  <h1>Blogs</h1>
                  <table class="table">
                    <tr>
                      <th colspan="2">Blog</th>
                    </tr>
                  @foreach ($blog as $blogs)
                    <tr>
                      <td>{{$blogs -> name}}</td>
                      <td class="text-right">
                        <a href="{{route('editBlogPage', $blogs -> id)}}"><button class="btn btn-success">Edit</button></a>
                        <!-- <a href="{{route('removeBlog', $blogs -> id)}}"><button class="btn btn-danger">Delete</button></a> -->
                      </td>
                    </tr>
                  @endforeach
                  </table>
                  {{ $blog -> links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
