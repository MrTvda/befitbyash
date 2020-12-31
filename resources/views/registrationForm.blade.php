@extends('layouts.befitbyash')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card col-md-6 border-0 p-0">
      <div class="card-header bg-dark text-white">
        <h2 class="my-0">Inschrijfformulier</h2>
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
        <form action="{{route('sendRegistrationMail')}}" method="post">
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
            <label for="0612345678">Telefoonnummer*</label>
            <input class="form-control" type="number" name="phoneNumber" placeholder="0612345678">
          </div>
          <div class="form-group">
            <label for="Adres">Adres*</label>
            <input class="form-control" type="text" name="address" placeholder="Adres">
          </div>
          <div class="form-group">
            <label for="Postcode">Postcode*</label>
            <input class="form-control" type="text" name="postalCode" placeholder="1234 AB">
          </div>
          <div class="form-group">
            <label for="Plaats">Plaats*</label>
            <input class="form-control" type="text" name="country" placeholder="Plaats">
          </div>
          <p class="font-italic text-secondary">~ De velden met een * zijn verplicht</p>
          <button class="btn btn-dark mt-3" type="submit" name="submit">Verzenden</button>
        </form>
      </div>
    </div>
  </div>
@endsection