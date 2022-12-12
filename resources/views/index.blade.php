@extends('layout.body')

@section('title', 'Paroki Maria Bunda Segala Bangsa')
@section('header', 'Selamat Datang')

@section('content')
<!-- ======= Facts Section ======= -->
    <section class="facts">
      <div class="container text-center">
        <p>
          Berdasarkan perkembangan situasi terkini terkait pandemi Covid-19 yang sudah berangsur membaik, maka dengan ini kami menyampaikan beberapa keputusan terkait Perayaan Ekaristi di Gereja Maria Bunda Segala Bangsa sebagai berikut:
        </p>
      </div>
    </section><!-- End Facts Section -->

<!-- ======= About Section ======= -->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h1 class="title">JADWAL MISA</h1>
            <p>
              <b>MISA HARIAN</b><br />
              Senin - Jumat: <br />
              Pkl. 06.00 WIB <br /><br />

              <b>MISA MINGGUAN</b><br />
              Sabtu: <br />
              Pkl. 18.00 WIB <br /><br />

              Minggu:<br />
              Pkl. 05.30 WIB <br />
              Pkl. 07.30 WIB <br />
              Pkl. 10.00 WIB (Live Streaming) <br /><br />

              Kapel St. Lusia Cileungsi (Minggu): <br />
              Pkl. 08.30 WIB <br /><br />

              <b>JUMAT PERTAMA</b><br />
              Pkl. 18.00 WIB
            </p>
          </div>

          <div class="col-lg-6 order-lg-2 order-1">
            <iframe
              class="video"
              src="https://www.youtube.com/embed/mnOdWSlpnF8"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope;"
              allowfullscreen></iframe>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts">
      <div class="container">
        <p>
          Jadwal (kloter) umat per wilayah dan kartu tanda masuk sudah tidak berlaku lagi. Umat dapat hadir secara bebas di hari dan jam yang dipilih sesuai jadwal tersebut di atas.<br /><br />
          Umat hadir dan mengikuti Perayaan Ekaristi di Gereja Maria Bunda Segala Bangsa menggunakan aplikasi Peduli Lindungi.<br /><br />
          Umat diperbolehkan mengikuti Perayaan Ekaristi secara tatap muka tanpa batasan usia.<br /><br />
          Berkat untuk anak-anak diadakan setelah penerimaan komuni.<br /><br />
          Umat wajib mematuhi dan menjalankan protokol kesehatan yang berlaku. Kedisiplinan kita untuk menjaga kesehatan diri sendiri dan sesama menjadi prioritas kita bersama.<br /><br />
          Ketentuan ini berlaku mulai bulan Juni 2022 sampai dengan pemberitahuan selanjutnya.<br /><br />
        </p>
      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Pastor Paroki MBSB</h3>
          <p class="section-description">Periode Tahun 2021</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="member">
              <div class="pic"><img src="src/img/pastor-1.jpg" alt=""></div>
              <h4>RD. Bonifasius Heribertus Beke</h4>
              <span>Pastor Paroki</span>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="member">
              <div class="pic"><img src="src/img/pastor-2.jpg" alt=""></div>
              <h4>RD. Agustinus Deddy Budiawan</h4>
              <span>Pastor Vikaris</span>
            </div>
          </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Artikel</h3>
          <p class="section-description">Karya, informasi, serta pengumuman seputar Paroki MBSB Kota Wisata</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active px-4">Semua</li>
              <li data-filter=".filter-app" class="px-4">Berita</li>
              <li data-filter=".filter-web">Renungan</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <?php $i = 0;?>
          @foreach($berita as $br)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="articles/{{$br['id']}}/{{$brLink[$i]}}">
              <img src="{{asset($brHeader[$i])}}" class="img-fluid" alt="#">
              <div class="portfolio-info">
                <h4>{{$br['title']}}</h4>
                <p>{{$brDate[$i]}}</p>
              </div>
            </a>
          </div>
          <?php $i++;?>
          @endforeach

          <?php $j = 0;?>
          @foreach($renungan as $rn)
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href="articles/{{$rn['id']}}/{{$rnLink[$j]}}">
              <img src="{{asset($rnHeader[$j])}}" class="img-fluid" alt="#">
              <div class="portfolio-info">
                <h4>{{$rn['title']}}</h4>
                <p>{{$rnDate[$j]}}</p>
              </div>
            </a>
          </div>
          <?php $j++;?>
          @endforeach

          <div class="col-lg-12 portfolio-item filter-app filter-web">
            <a href="{{url('articles/berita')}}" class="float-lg-start">Lihat Selengkapnya - Berita</a>
            <a href="{{url('articles/renungan')}}" class="float-lg-end">Lihat Selengkapnya - Renungan</a>
          </div>
        </div>

        <div class="section-header mt-5 mb-4">
          <h3 class="section-title">GALERI</h3>
        </div>

        <div class="gallery js-flickity"
          data-flickity-options='{ "wrapAround": true, "autoPlay": true }'>
          <img class="gallery-cell" src="src/img/preview/1.jpg" alt="gal-1">
          <img class="gallery-cell" src="src/img/preview/2.jpg" alt="gal-2">
          <img class="gallery-cell" src="src/img/preview/3.jpg" alt="gal-3">
          <img class="gallery-cell" src="src/img/preview/4.jpg" alt="gal-4">
          <img class="gallery-cell" src="src/img/preview/5.jpg" alt="gal-5">
        </div>

        <div class="text-center mt-5">
          <a href="/"><h3>Lihat Galeri</h3></a>
        </div>
        
      </div>
    </section><!-- End Portfolio Section -->
@endsection