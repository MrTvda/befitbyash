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
                      <td>Blog</td>
                      <td><a href="{{route('blog')}}" class="btn btn-primary float-right">View</td>
                    </tr>
                    <tr>
                      <td>Users</td>
                      <td><a href="{{route('users')}}" class="btn btn-primary float-right" style="">View</td>
                    </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
