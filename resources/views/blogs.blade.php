<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Be fit by Ash - Blogs</title>
</head>
<body class="mb-5" style="background-color: #cfdcd3 !important">
  <nav class="navbar navbar-expand-md fixed-nav navbar-dark bg-dark shadow-lg mb-4">
    <a class="navbar-brand" href="/" style="font-style: italic; font-size: 1.7em; color: #cfdcd3 !important; font-weight: bold">Be fit by Ash</a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="font-size: 1.2em;">
        <li class="nav-item pr-4 pl-4">
          <a class="nav-link stretched-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item pr-4 pl-4 active">
          <a class="nav-link" href="/blogs">Blogs</a>
        </li>
        <li class="nav-item pr-4 pl-4">
          <a class="nav-link" href="/diensten">Diensten</a>
        </li>
        <li class="nav-item pr-4 pl-4 ">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <main role="main" class="container">
    <div class="sticky-top">
      <div id="list-blog" class="col-md-3 float-left mb-2 sticky-top">
        <img src="/img/logo.png" alt="logo" class="px-0 d-block mx-auto w-75 mb-4 mt-2">
        <ul class="list-group shadow d-none d-md-block">
          <h2 class="list-group-item bg-dark text-white">Blogs</h2>
          @foreach ($blog as $blog1)
            <a class="list-group-item list-group-item-action bg-dark text-white" href="#{{$blog1 -> name}}">{{$blog1 -> name}}</a>
          @endforeach
        </ul>
      </div>
    </div>
    <div data-spy="scroll" data-target="#list-blog" data-offset="100" class="scrollspy">
      @foreach ($blog as $blog)
      <div id="{{$blog -> name}}" class="col-md-9 float-right mb-4">
        <div class="card border-0 shadow">
          <div class="card-header bg-dark text-white">
            <h4 class="mt-1 mb-0">{{$blog -> name}}</h4>
          </div>
          <div class="card-body">
            {!!$blog -> blog!!}
            <p class="text-muted mb-0 mt-4 pl-0 font-italic">Datum: {{$blog -> created_at -> format('d / m / Y')}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </main>
</body>
</html>
