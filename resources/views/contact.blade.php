@extends('layouts.befitbyash')

@section('content')
  <div class="container">
    <div class="card border-0 shadow">
      <div class="card-header bg-dark text-white">
        <h2 class="my-0">Contact</h2>
      </div>
      <div class="card-body">
          <div class="col-md-4 p-0 ml-3 mb-3 float-right">
            <img class="w-100 shadow rounded" src="/img/header2.jpg" alt="">
          </div>
          <div>
            <h4 class="mb-3 font-weight-bold font-italic">Be fit by Ash</h4>
            <p>Heeft u interesse in ons trainingsaanbod of wilt u voedingsadvies. Meld u aan. <br>Voor vragen/opmerkingen kunt u contact met ons opnemen via het contactformulier of door te bellen, appen of mailen. Als u twijfelt, bel gerust!</p>
            <p class="mb-0 font-weight-bold">Plaats</p>
            <p class="mb-2">Nieuw-Vennep</p>
            <p class="mb-0 font-weight-bold">Email</p>
            <p class="mb-2">BefitbyAsh@outlook.com</p>
            <p class="mb-0 font-weight-bold">Telefoon nummer</p>
            <p class="mb-3">+31 6 10144676</p>
            <a href="{{route('contactForm')}}"><button class="btn btn-dark mt-4 mr-2">Contact</button></a>
            <a href="{{route('registrationForm')}}"><button class="btn btn-dark mt-4">Aanmelden</button></a>
            <h5 class="font-weight-bold mt-4">Volg mij!</h5>
            <a href="https://www.facebook.com/BefitbyAsh/"><i class="fa fa-facebook-square mr-3 fa-2x text-dark"></i></a>
            <a href="https://www.instagram.com/befitbyash/"><i class="fa fa-instagram fa-2x text-dark"></i></a>
          </div>
      </div>
    </div>
  </div>
@endsection
