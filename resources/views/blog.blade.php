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
                <div class="card-header bg-dark text-light">
                  <a class="float-right" href="{{route('addBlogPage')}}"><button class="btn btn-success">Toevoegen</button></a>
                  <h2 class="my-0">Blogs</h2>
                </div>
                <div class="card-body">
                  <table class="table">
                    <tr>
                      <th colspan="2">Blog</th>
                    </tr>
                    @foreach ($blogs as $blog)
                    <tr>
                      <td>{{$blog -> name}}</td>
                      <td class="text-right">
                        <a class="mr-2" href="{{route('editBlogPage', $blog -> id)}}"><button class="btn btn-primary">Wijzigen</button></a>
                        <a href="{{route('removeBlog', $blog -> id)}}"><button class="btn btn-danger">Verwijderen</button></a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
