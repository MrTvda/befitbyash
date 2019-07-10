@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <table class="table">
                    <tr>
                      <th>Naam</th>
                      <th>Email</th>
                      <th>Gebruikers rol</th>
                      <th>Wijzig rol</th>
                    </tr>
                    @foreach($user as $user)
                      <tr>
                        <td>{{$user -> name}}</td>
                        <td>{{$user -> email}}</td>
                        <td>{{$user -> user_role}}</td>
                        <td><a class="btn btn-primary" href="{{route('changeUserRole', $user -> email)}}">Wijzigen</a></td>
                      </tr>
                    @endforeach
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
