@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card border-0">
                <div class="card-header bg-dark text-light">
                  <h2 class="my-0">Blog toevoegen</h2>
                </div>

                <div class="card-body">
                  <form action="{{route('addBlog')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-light border-dark" id="inputGroup-sizing-default">Blognaam</span>
                      </div>
                      <input type="text" name="name" class="form-control text-input bg-secondary text-white border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Voer blognaam in ...">
                    </div>
                    <hr>
                    <h3>Tekst</h3>
                    <textarea class="form-control rounded" name="blog" rows="10" cols="80">
                    </textarea>
                    <input class="btn btn-success my-3" type="submit" name="submit" value="Toevoegen">
                  </form>
                </div>
            </div>
            <div class="mt-4">
              <a class="float-left" href="{{route('blog')}}"><button type="button" class="btn btn-secondary">Vorige pagina</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
