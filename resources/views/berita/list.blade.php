@extends('layout.body')

@section('title', 'Berita Gereja')
@section('header', 'Berita Gereja')

@section('content')
<!-- ======= Facts Section ======= -->
    <section class="facts">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-8 col-md-8">
            <div class="row">
                <?php $i = 0;?>
                @foreach($berita as $br)
                <div class="col-lg-6 col-md-6">
                    <a href="/articles/{{$br['id']}}/{{$brLink[$i]}}">
                        <img src="{{asset($brHeader[$i])}}" class="img-fluid" alt="#">
                        <h4 class="pt-3 mb-1"><b>{{$br['title']}}</b></h4>
                        <p>{{$brDate[$i]}}</p>
                    </a>
                </div>
                <?php $i++;?>
                @endforeach
            </div>
          <div class="col-lg-4 col-md-4">
            <!-- filler -->
          </div>
        </div>
        {{$berita->links()}}
      </div>
    </section><!-- End Facts Section -->
@endsection