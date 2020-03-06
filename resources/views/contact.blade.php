@extends('layouts.befitbyash')

@section('content')
  <div class="container">
    <div class="card border-0 shadow">
      <div class="card-header bg-dark text-white">
        <h2 class="my-0">Contact</h2>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 my-3 ml-3 float-left">
            <img class="w-100 shadow rounded" src="/img/header2.jpg" alt="">
          </div>
          <div class="col-md my-3">
            <h4 class="mb-3 font-weight-bold font-italic">Be fit by Ash</h4>
            <p class="mb-0 font-weight-bold">Adres</p>
            <p class="mb-2">Molenvlietweg 18,<br> 1432 GW Aalsmeer</p>
            <p class="mb-0 font-weight-bold">Email</p>
            <p class="mb-2">BefitbyAsh@outlook.com</p>
            <p class="mb-0 font-weight-bold">Telefoon nummer</p>
            <p class="mb-5">+31 6 10144676</p>
            <h5 class="font-weight-bold">Volg mij!</h5>
            <a href="https://www.facebook.com/BefitbyAsh/"><i class="fa fa-facebook-square mr-3 fa-2x text-dark"></i></a>
            <a href="https://www.instagram.com/befitbyash/"><i class="fa fa-instagram fa-2x text-dark"></i></a>
            <br>
            @guest
            @else
            <a href="{{route('contactForm')}}"><button class="btn btn-dark mt-4">Neem contact op</button></a>
            @endguest
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
