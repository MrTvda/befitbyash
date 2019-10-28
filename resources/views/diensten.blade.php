<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/app.css">
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
      <li class="nav-item pr-4 pl-4 active">
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
          <h2 class="my-0">Diensten</h2>
        </div>
        <div class="card-body rounded">
          <div class="col-md-6 my-3 float-left">
            <img class="rounded shadow w-100" src="/img/header.jpg" alt="">
          </div>
          <div class="col-md-6 float-right mt-3">
            <h4 class="font-weight-bold mb-0">Personal training</h4>
            <p>
              Persoonlijke begeleiding is de meest effectieve trainingsmethode om iemand in conditie te brengen. Ik maak altijd een passend en op het lichaam van de klant afgestemd programma die past bij haar/zijn wensen!
            </p>
            <p>
              Be fit by Ash werkt met losse lessen en met pakketten van meerdere sessies. Hoe meer sessies, hoe meer korting!
            </p>
            <h4 class="font-weight-bold mb-0">Leefstijlpakket</h4>
            <p>
              Persoonlijke coach en begeleidingstraject op het gebied van voeding en mindset
            </p>
            <ul>
              <li>Intakegesprek</li>
              <li>Metingen en wegingen</li>
              <li>Voedingsanalyse</li>
              <li>Voedingsadvies en een persoonlijk op maat gemaakt schema</li>
              <li>8 vervolgconsulten over mindset, valkuilen, bruikbare tips en recepten</li>
            </ul>
            <h4 class="font-weight-bold mb-0">Combipakket</h4>
            <p>Ga voor de beste versie van jezelf en zet jezelf op de 1e plaats. Eis geen perfectie en geef jezelf de tijd! Personaltraining (vanaf 6 sessies) en het leefstijlpakket combineren voor het beste resultaat? <br> JA DAT KAN!</p>
            <p>Succesvol afvallen bereik je vooral met de juiste mindset en een plan wat past bij jou! Zet je vandaag een stap naar een gezondere jij?</p>
            <p>Meld je nu aan en krijg een <span class="font-weight-bold">gratis proefles</span>!</p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
@endguest
</html>
