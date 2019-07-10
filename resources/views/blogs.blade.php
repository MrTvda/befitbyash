<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Be fit by ash</title>
</head>
<body>
  <header>
    <div class="navbar">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/blogs">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </header>
  <main class="main-blog">
    <div class="wrapper">
      <div class="sidebar">
        <img id="foto-sidebar" src="/img/logo.jpg" alt="Logo">
        <aside>
          <ul>
            @foreach ($blog as $blog1)
              <li><a href="#">{{$blog1 -> name}}</a></li>
            @endforeach
          </ul>
        </aside>
      </div>

      <div class="container">
        @foreach ($blog as $blog)
        <div id="{{$blog -> name}}" class="blog">
          <h1>{{$blog -> name}}</h1>
          <hr>
          <p>{!!$blog -> blog!!}</p>
        </div>
        @endforeach
      </div>
    </div>

  </main>
</body>
</html>
