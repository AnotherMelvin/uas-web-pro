@extends('layout.body')

@section('title', $article['title'])
@section('header', 'Artikel')

@section('content')
<!-- ======= Facts Section ======= -->
    <section class="facts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <h1><b>{{$article['title']}}</b></h1>
              <p class="ps-1">{!!$article['subtitle']!!}</p>
              <hr>
              <div class="ps-1 mb-4">
                <img class="d-inline-block align-middle border border-2 rounded-circle" src="/src/img/default.jpg" width="48px" alt="profile">
                <div class="d-inline-block align-middle ms-2">
                  Posted on: {{$date}} <br /> By: {{$author['name']}}
                </div>
              </div>
              <img class="mb-4 d-block" src="{{asset($header)}}" width="100%">
              <article>
                {!!$article['content']!!}
              </article>
          </div>
          <div class="col-lg-4 col-md-4">
            <!-- filler -->
          </div>
        </div>
      </div>
    </section><!-- End Facts Section -->
@endsection