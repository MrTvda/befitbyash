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
  <div class="container">
    <div class="card border-0 shadow">
      <div class="card-header bg-dark text-white">
        <h2 class="my-0">Contact</h2>
      </div>
      <div class="card-body">
        <div class="row">
        <div class="col-md float-right my-3">
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
              <textarea class="form-control" name="message" placeholder="Bericht" rows="8" cols="80"></textarea>
            </div>
            <button class="btn btn-primary mt-3" type="submit" name="submit">Verzenden</button>
          </form>
        </div>
        <div class="col-md my-3 float-left">
          <img class="w-100 shadow rounded" src="img/header2.jpg" alt="">
        </div>
        <div class="col-md">
          <h4 class="mb-3 font-weight-bold font-italic">Be fit by Ash</h4>
          <p class="mb-0 font-weight-bold">Adres</p>
          <p class="mb-2">Molenvlietweg 18,<br> 1432 GW Aalsmeer</p>
          <p class="mb-0 font-weight-bold">Email</p>
          <p class="mb-2">BefitbyAsh@outlook.com</p>
          <p class="mb-0 font-weight-bold">Telefoon nummer</p>
          <p class="mb-5">+31 6 10144676</p>
          <a href="https://www.facebook.com/BefitbyAsh/"><i class="fa fa-facebook-square mr-3 fa-2x text-dark"></i></a>
          <a href="https://www.instagram.com/befitbyash/"><i class="fa fa-instagram fa-2x text-dark"></i></a>
        </div>
      </div>
      </div>
    </div>
  </div>
</main>
</body>
</html>
