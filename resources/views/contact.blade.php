<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Be fit By Ash</title>
</head>
@guest
@if (Route::has('register'))
<body style="background-color: #cfdcd3 !important">
  <nav class="navbar navbar-dark bg-dark shadow-lg mb-5">
    <a class="navbar-brand" href="/" style="font-style: italic; font-size: 1.7em; color: #cfdcd3 !important; font-weight: bold">Be Fit by Ash</a>
  </nav>
  <main class="container">
    <img class="w-75 mb-4"src="/img/logo.png" alt="" style="margin: 0 auto; display: block">
    <h1 class="text-center" style="font-size: 3em; font-weight: bold; font-style: italic">Work in progress</h1>
  </main>
</body>
@endif
@else
<body class="mb-5" style="background-color: #cfdcd3 !important">
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-lg mb-4">
  <a class="navbar-brand" href="/" style="font-style: italic; font-size: 1.7em; color: #cfdcd3 !important; font-weight: bold">Be Fit by Ash</a>
  <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" style="font-size: 1.2em;">
      <li class="nav-item pr-4 pl-4">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item pr-4 pl-4">
        <a class="nav-link" href="/blogs">Blogs</a>
      </li>
      <li class="nav-item pr-4 pl-4">
        <a class="nav-link" href="/tarieven">Tarieven</a>
      </li>
      <li class="nav-item pr-4 pl-4 active">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<main>
  <div class="container">
    <div class="card border-0 shadow">
      <div class="card-header bg-dark text-white">
        <h2 class="my-0">Contact</h2>
      </div>
      <div class="card-body">
        <div class="col-md-7 float-left my-3">
          <form class="" action="contact-formulier-handler.php" method="post">
            <div class="form-group row">
              <label for="Naam" class="col-sm-3 col-form-label">Naam</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="Naam" id="Naam" placeholder="Naam">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="Email">Email</label>
              <div class="col-sm-9">
                <input class="form-control" type="email" name="Email" id="Email" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="Onderwerp">Onderwerp</label>
              <div class="col-sm-9">
                <input class="form-control" type="email" name="Onderwerp" id="Onderwerp" placeholder="Onderwerp">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-label-form" for="Bericht">Bericht</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="Bericht" name="Bericht" placeholder="Bericht" rows="8" cols="80"></textarea>
              </div>
            </div>
            <button class="btn btn-primary"type="button" name="Button">Verzenden</button>
          </form>
        </div>
        <div class="col-md-5 float-right my-3">
          <img class="w-100 shadow rounded" src="img/foto-ashley.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</main>
</body>
@endguest
</html>
