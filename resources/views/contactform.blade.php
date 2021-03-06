@extends('layouts.befitbyash')

@section('content')
  <div class="container d-flex justify-content-center">
    <div class="card border-0 col-md-6 p-0">
      <div class="card-header bg-dark text-white">
        <h2 class="my-0">Contactformulier</h2>
      </div>
      <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if (session('sent'))
          <div class="alert alert-success">
            {{ session('sent') }}
          </div>
        @endif
        <form action="{{route('sendContactMail')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="Naam">Naam*</label>
            <input type="text" class="form-control" name="name" placeholder="Naam">
          </div>
          <div class="form-group">
            <label for="Email">Email*</label>
            <input class="form-control" type="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="Onderwerp">Onderwerp*</label>
            <input class="form-control" type="text" name="subject" placeholder="Onderwerp">
          </div>
          <div class="form-group">
            <label for="Bericht">Bericht*</label>
            <textarea class="form-control" name="message" placeholder="Bericht" rows="4" cols="60"></textarea>
          </div>
          <p class="font-italic text-secondary">~ De velden met een * zijn verplicht</p>
          <button class="btn btn-dark mt-3" type="submit" name="submit">Verzenden</button>
        </form>
      </div>
    </div>
  </div>
@endsection
