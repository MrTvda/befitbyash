<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/app.css">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Be fit by ash</title>
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
<body class="mb-4" style="background-color: #cfdcd3 !important">
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
      <li class="nav-item pr-4 pl-4 active">
        <a class="nav-link" href="/tarieven">Tarieven</a>
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
          <h2 class="my-0">Tarieven</h2>
        </div>
        <div class="card-body rounded">
          <div class="col-md-6 my-3 float-left">
            <img class="rounded shadow w-100" src="/img/foto-ashley.jpg" alt="">
          </div>
          <div class="col-md-6 my-3 mx-0 float-right">
            <p>Be fit by Ash is aangesloten bij de BGN. De BGN-gewichtsconsulent wordt door een groot aantal verzekeraars vergoed vanuit de aanvullende zorgverzekering. Een BGN-gewichtsconsulent is in het bezit van een geldig diploma en volgt regelmatig bij en nascholingen om op de hoogte te blijven van de ontwikkelingen in het vakgebied!</p>
            <p>
              DOE 6 weeks to shred<br>
              Dit programma is in samenwerking met DOE fysiotherapie en duurt 6 weken.
            </p>
            <ul>
              <li>Intake</li>
              <li>Voedingsanalyse</li>
              <li>Op maat gemaakte schema's</li>
              <li>Tips en recepten</li>
              <li>Meten en wegen</li>
              <li>2x per week sportbegeleiding</li>
              <li>&euro;200,00 inc.</li>
            </ul>
            <p>Pakket van een intakegesprek en 12 vervolgconsulten</p>
            <ul>
              <li>Voedingsanalyse</li>
              <li>Op maat gemaakte schema's</li>
              <li>Tips en recepten</li>
              <li>Meten en wegen</li>
              <li>&euro;250,00 inc.</li>
            </ul>
            <p class="mb-0">Online coaching traject van 12 weken. In dit programma leer je wat gezond en bewust eten is. Tijdens mijn mails leer je over voeding, wat je op sommige momenten het beste kan eten en waarom, wat is nou gezond en veel lekkere recepten! Nu voor maar &euro;150 inc.!</p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
@endguest
</html>
