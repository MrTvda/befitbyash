<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Be fit by Ash</title>
</head>
<body class="mb-4" style="background-color: #cfdcd3 !important">
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-lg mb-4">
  <a class="navbar-brand" href="/" style="font-style: italic; font-size: 1.7em; color: #cfdcd3 !important; font-weight: bold">Be fit by Ash</a>
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
        <a class="nav-link" href="/diensten">Diensten</a>
      </li>
      <li class="nav-item pr-4 pl-4 active">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<main>
  <div class="container d-flex justify-content-center">
    <div class="card border-0">
      <div class="card-header bg-dark text-white">
        <h2 class="my-0">Contact formulier</h2>
      </div>
      <div class="card-body">
        <form action="contact-form-handler.php" method="post">
          <div class="form-group">
            <label for="Naam">Naam</label>
            <input type="text" class="form-control" name="name" placeholder="Naam">
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input class="form-control" type="email" name="mail" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="Onderwerp">Onderwerp</label>
            <input class="form-control" type="text" name="subject" placeholder="Onderwerp">
          </div>
          <div class="form-group">
            <label for="Bericht">Bericht</label>
            <textarea class="form-control" name="message" placeholder="Bericht" rows="4" cols="60"></textarea>
          </div>
          <button class="btn btn-dark mt-3" type="submit" name="submit">Verzenden</button>
        </form>
      </div>
    </div>
  </div>
</main>
</body>
</html>
