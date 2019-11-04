<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Be fit by Ash - Blogs</title>
</head>
<body class="mb-5" style="background-color: #cfdcd3 !important">
  <nav class="navbar navbar-expand-md mb-4 navbar-dark bg-dark shadow">
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
    <div class="sticky-top sidebar">
    <div class="col-md-3 float-left mb-2">
      <img src="/img/logo.png" alt="logo" class="px-0 d-block mx-auto w-75 mb-4 mt-2 pt-3">
        <ul class="list-group shadow d-none d-md-block" id="list-blog">
          @foreach ($blog as $blog1)
            <a class="list-group-item list-group-item-action bg-dark text-white lead shadow" href="#{{$blog1 -> name}}">{{$blog1 -> name}}</a>
          @endforeach
        </ul>
      </div>
    </div>
      <div class="card card col-md-9 p-0 border-0">
        <div class="card-header bg-dark text-white contentbar sticky-top">
          <h2 class="m-0">Blogs</h2>
        </div>
        <div class="card-body shadow">
          <div class="align-left pb-0 text-dark">
            {{ $blog->links() }}
          </div>
          <div data-spy="scroll" data-target="#list-blog" data-offset="10000" class="scrollspy">
          @foreach ($blog as $blogs)
            <div id="{{$blogs -> name}}" class="mb-4">
              <div class="card">
                <div class="card-body">
                  <h4>{{$blogs -> name}}</h4>
                  {!!$blogs -> blog!!}
                </div>
                <div class="card-footer bg-transparent">
                  <div class="float-right">
                    <p class="text-muted mb-0 font-italic">Datum: {{$blogs -> created_at -> format('d / m / Y')}}</p>
                  </div>
                  <div class="float-left">
                    <a href="https://www.facebook.com/BefitbyAsh/"><i class="fa fa-facebook-square mr-3 fa-2x text-dark"></i></a>
                    <a href="https://www.instagram.com/befitbyash/"><i class="fa fa-instagram fa-2x text-dark"></i></a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          <div class="mb-0">
            {{ $blog->links() }}
          </div>
          <a href="#" class="back-to-top shadow"><i class="fa fa-2x fa-angle-up text-dark"></i></a>
        </div>
      </div>
    </div>
    </div>
  </main>
  <script type="text/javascript">
    $(document).ready(function(){
      $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
        // scroll body to 0px on click
      $('#back-to-top').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 400);
        return false;
      });
    });
  </script>
</body>
</html>
