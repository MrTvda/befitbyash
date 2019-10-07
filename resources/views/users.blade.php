@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>Naam / Email</th>
                        <th>Rechten</th>
                        <th>Wijzig rechten</th>
                      </tr>
                      @foreach($user as $user)
                        <tr>
                          <td>{{$user -> name}} <br> {{$user -> email}}</td>
                          <td><p class="text-center">{{$user -> user_role}}</p></td>
                          <td><a class="btn btn-primary float-right" href="{{route('changeUserRole', $user -> email)}}">Wijzigen</a></td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
