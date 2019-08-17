<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Be fit by ash - Blogs</title>
</head>
<body style="background-color: #cfdcd3 !important">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-color: #cfdcd3">
    <a class="navbar-brand" href="#">Be fit By Ash</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/blogs">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tarieven">Tarieven</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <main>
    <div class="container">
      <div id="list-blog" class="col-md-3 float-left mt-3 sticky-top">
        <div class="list-group">
          <img src="/img/logo.png" alt="logo" class="pb-2 center" style="width: 75%; height: auto; margin: 0 auto;">
          @foreach ($blog as $blog1)
            <a class="list-group-item list-group-item-action" href="#{{$blog1 -> name}}">{{$blog1 -> name}}</a>
          @endforeach
        </div>
      </div>
      <div data-spy="scroll" data-target="#list-blog" data-offset="0" class="scrollspy">
        @foreach ($blog as $blog)
        <div id="{{$blog -> name}}" class="col-md-9 float-right mt-3 ">
          <div class="card">
            <div class="card-header">
              <h4 class="mt-1">{{$blog -> name}}</h4>
              <p class="card-subtitle text-muted mb-0">Datum: 16/8/2019</p>
            </div>
            <div class="card-body">
              {!!$blog -> blog!!}
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </main>
</body>
</html>
