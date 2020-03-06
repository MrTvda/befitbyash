@extends('layouts.befitbyash')

@section('content')
  <div class="container d-flex justify-content-center">
    <div class="card border-0">
      <div class="card-header bg-dark text-white">
        <h2 class="my-0">Contact formulier</h2>
      </div>
      <div class="card-body">
        <form action="/contact-form-handler.php" method="post">
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
@endsection
