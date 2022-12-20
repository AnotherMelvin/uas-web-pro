@extends('layout.body')

@section('title', 'Renungan')
@section('header', 'Renungan')

@section('content')
<!-- ======= Facts Section ======= -->
    <section class="facts">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-8 col-md-8">
            <div class="row">
                <?php $i = 0;?>
                @foreach($renungan as $rn)
                <div class="col-lg-6 col-md-6 header-box">
                    <a href="/articles/{{$rn['id']}}/{{$rnLink[$i]}}">
                        <img src="{{asset($rnHeader[$i])}}" class="img-fluid" alt="#">
                        <h4 class="pt-3 mb-1"><b>{{$rn['title']}}</b></h4>
                        <p>{{$rnDate[$i]}}</p>
                    </a>
                </div>
                <?php $i++;?>
                @endforeach
            </div>
          <div class="col-lg-4 col-md-4">
            <!-- filler -->
          </div>
        </div>
        {{$renungan->links()}}
      </div>
    </section><!-- End Facts Section -->
@endsection