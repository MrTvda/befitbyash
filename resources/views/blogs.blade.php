@extends('layouts.befitbyash')

@section('content')
    <div class="sticky-top sidebar">
    <div class="col-md-3 float-left mb-2">
      <img src="/img/logo.png" alt="logo" class="px-0 d-block mx-auto w-75 mb-4 mt-2 pt-3">
        <ul class="list-group shadow d-none d-md-block" id="list-blog">
          @foreach ($blog as $blog1)
            <a class="list-group-item list-group-item-action bg-dark text-white lead shadow" href="#{{$blog1 -> name}}">{{$blog1 -> name}}</a>
          @endforeach
        </ul>
        <div class="justify-content-center mt-4 d-none d-md-flex">
          {{ $blog->links() }}
        </div>
      </div>
    </div>
      <div class="card col-md-9 p-0 border-0 bg-transparent">
        <div class="card-body bg-transparent p-0">
          <div data-spy="scroll" data-target="#list-blog" data-offset="10000" class="scrollspy">
          @foreach ($blog as $blogs)
            <div id="{{$blogs -> name}}" class="py-2">
          </div>
            @if($loop -> last)
              <div class="card shadow border-0 mb-4">
            @else
              <div class="card shadow border-0">
            @endif
                <div class="card-header bg-dark text-white pb-0">
                  <h3>{{$blogs -> name}}</h3>
                </div>
                <div class="card-body">
                  @if(optional($blogs->image)->img_source != null)
                    @if(optional($blogs->image)->img_place == 'float-right')
                    <div class="p-0 mb-3 ml-md-3 {{optional($blogs->image)->img_size}} {{optional($blogs->image)->img_place}}">
                      <img class="w-100 rounded shadow" src="img/blogs/{{optional($blogs->image)->img_source}}" alt="">
                    </div>
                    @else
                    <div class="p-0 mb-3 mr-md-3 {{optional($blogs->image)->img_size}} {{optional($blogs->image)->img_place}}">
                      <img class="w-100 rounded shadow" src="img/blogs/{{optional($blogs->image)->img_source}}" alt="">
                    </div>
                    @endif
                  @endif
                  {!!$blogs -> blog!!}
                </div>
                <div class="card-footer bg-transparent">
                  <div class="float-right">
                    <p class="text-muted mb-0 font-italic">Datum: {{$blogs -> created_at -> format('d / m / Y')}}</p>
                  </div>
                  <div class="float-left">
                    <a target="_blank" href="https://www.facebook.com/BefitbyAsh/"><i class="fa fa-facebook-square mr-3 fa-2x text-dark"></i></a>
                    <a target="_blank" href="https://www.instagram.com/befitbyash/"><i class="fa fa-instagram fa-2x text-dark"></i></a>
                  </div>
                </div>
              </div>
          @endforeach
          @if($blog->hasPages())
            {{ $blog->links() }}
          @endif
          <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fa fa-chevron-up"></i></a>
        </div>
      </div>
    </div>
    </div>
@endsection
