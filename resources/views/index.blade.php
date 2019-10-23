<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Be fit by Ash</title>
</head>
@guest
@if (Route::has('register'))
<body style="background-color: #cfdcd3 !important">
  <nav class="navbar navbar-dark bg-dark shadow-lg mb-5">
    <a class="navbar-brand" href="/" style="font-style: italic; font-size: 1.7em; color: #cfdcd3 !important; font-weight: bold">Be fit by Ash</a>
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
  <a class="navbar-brand" href="/" style="font-style: italic; font-size: 1.7em; color: #cfdcd3 !important; font-weight: bold">Be fit by Ash</a>
  <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" style="font-size: 1.2em;">
      <li class="nav-item pr-4 pl-4 active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item pr-4 pl-4">
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
<main>
  <div class="container">
    <div class="card border-0 shadow">
      <div class="card-header bg-dark text-white">
        <h2 class="my-0">Home</h2>
      </div>
      <div class="card-body">
        <div class="col-md-6 float-left my-3">
          <p>Mijn naam is Ashley van den Berg en oprichtster van Be fit by Ash. Mijn liefde voor sport zit er van jongs af aan al in. Tijdens mijn 4 jarige opleiding aan het CIOS heb ik mij verdiept in het menselijk lichaam, personal training, fitness en voeding.</p>
          <p>Momenteel ben ik werkzaam bij een kinderopvang waar ik met veel plezier sportles geef! De andere dagen ben ik te vinden bij Doe fysiotherapie in Nieuw-Vennep. Hier mag ik het uiterste uit mensen halen. Er word hard getraind, maar ook is er altijd tijd voor een praatje!</p>
          <p>Be fit by Ash coacht mensen naar een gezonder leefstijl! Succesvol afvallen bereik je vooral met de juiste mindset en een plan die past bij jou. Ga voor de beste versie van jezelf en zet jezelf is op de 1e plaats. Eis geen perfectie en geef jezelf de tijd!</p>
          <p>Lekker eten? Normaal eten? Veel eten? Af en toe snoepen? En vooral blijven genieten van eten? JA DAT KAN!!</p>
        </div>
        <div class="col-md-6 float-right my-3">
          <img class="w-100 rounded shadow" src="/img/foto-ashley.jpg">
        </div>
      </div>
    </div>
  </div>
</main>
</body>
@endguest
</html>
