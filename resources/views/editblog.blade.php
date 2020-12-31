@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-9">
      <div class="card border-0">
        <div class="card-header bg-dark text-light">
          <h2 class="my-0">Blog wijzigen: {{$blog -> name}}</h2>
        </div>

        <div class="card-body">
          <p>Laatste update: {{$blog -> updated_at -> format('d-m-Y H:i:s')}}</p>
          <hr>
          <form action="{{route('editBlogName', $blog -> id)}}" method="post">
            @csrf
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-dark text-light border-dark" id="inputGroup-sizing-default">Blognaam</span>
              </div>
              <input type="text" name="name" class="form-control text-input bg-secondary text-white border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$blog -> name}}">
            </div>
            <input class="btn btn-primary mb-3" type="submit" name="submit" value="Aanpassen">
          </form>
          <hr>
          <h3>Tekst</h3>
          <form action="{{route('editBlog', $blog -> id)}}" method="post">
            @csrf
            <textarea class="form-control rounded" name="blog" rows="10" cols="80">
                      {!!$blog -> blog!!}
                    </textarea>
            <input class="btn btn-primary my-3" type="submit" name="submit" value="Aanpassen">
          </form>
          <hr>
          <h3>Foto</h3>
          @if(optional($blog->image)->blogname == null)
          <form action="{{route('addImage', $blog -> id)}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="input-group mb-3">
              <div class="custom-file">
                <input name="image" type="file" class="custom-file-input bg-dark text-light" id="image" aria-describedby="image">
                <label class="custom-file-label bg-secondary text-light border-dark" for="image">Choose file</label>
              </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text bg-dark text-light border-dark" for="size">Grootte</label>
              </div>
              <select name="size" class="custom-select bg-secondary text-light border-dark" id="size">
                <option selected value="col-md-3">Klein</option>
                <option value="col-md-4">Middel</option>
                <option value="col-md-5">Groot</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text bg-dark text-light border-dark" for="place">Plaatsing</label>
              </div>
              <select name="place" class="custom-select bg-secondary text-light border-dark" id="place">
                <option value="float-right" selected>Rechts</option>
                <option value="float-left">Links</option>
              </select>
            </div>

            <input class="btn btn-success my-3" type="submit" name="submit" value="Toevoegen">
          </form>
          @else
          <div class="">
            <img class="w-25 mb-3" src="/img/blogs/{{optional($blog->image)->img_source}}" alt="">
          </div>
          <a href="{{route('removeImage', optional($blog->image)->id)}}"><button class="btn btn-danger">Verwijderen</button></a>
          @endif
          <hr>
        </div>
      </div>
      <div class="card mt-4">
        <div class="card-header bg-dark text-light">
          <h2 class="mb-0">{{$blog -> name}} (Preview)</h3>
        </div>
        <div class="card-body">
          @if(optional($blog->image)->img_source != null)
          @if(optional($blog->image)->img_place == 'float-right')
          <div class="p-0 mb-3 ml-md-3 {{optional($blog->image)->img_size}} {{optional($blog->image)->img_place}}">
            <img class="w-100 rounded" src="/img/blogs/{{optional($blog->image)->img_source}}" alt="">
          </div>
          @else
          <div class="p-0 mb-3 mr-md-3 {{optional($blog->image)->img_size}} {{optional($blog->image)->img_place}}">
            <img class="w-100 rounded" src="/img/blogs/{{optional($blog->image)->img_source}}" alt="">
          </div>
          @endif
          @endif
          {!!$blog -> blog!!}
        </div>
      </div>
      <div class="mt-4">
        <a class="float-left" href="{{route('blog')}}"><button type="button" class="btn btn-secondary">Terug</button></a>
        <a class="float-right" href="{{route('removeBlog', $blog -> id)}}"><button class="btn btn-danger">Verwijder blog</button></a>
      </div>
    </div>
  </div>
</div>

<script type="application/javascript">
  $('.custom-file-input').on('change', function() { 
    let fileName = $(this).val().split('\\').pop(); 
    $(this).next('.custom-file-label').addClass("selected").html(fileName); 
  });
</script>

@endsection