@extends('layout.body')

@section('title', 'Paroki Maria Bunda Segala Bangsa')
@section('header', 'Selamat Datang')

@section('content')
<!-- ======= Facts Section ======= -->
    <section class="facts">
      <div class="container text-center" data-aos="fade-up">
        <p>
          Berdasarkan perkembangan situasi terkini terkait pandemi Covid-19 yang sudah berangsur membaik, maka dengan ini kami menyampaikan beberapa keputusan terkait Perayaan Ekaristi di Gereja Maria Bunda Segala Bangsa sebagai berikut:
        </p>
      </div>
    </section><!-- End Facts Section -->

<!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
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

          <div class="col-lg-6 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100">
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
      <div class="container" data-aos="fade-up">
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
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Pastor Paroki MBSB</h3>
          <p class="section-description">Periode Tahun 2021</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="src/img/pastor-1.jpg" alt=""></div>
              <h4>RD. Bonifasius Heribertus Beke</h4>
              <span>Pastor Paroki</span>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="pic"><img src="src/img/pastor-2.jpg" alt=""></div>
              <h4>RD. Agustinus Deddy Budiawan</h4>
              <span>Pastor Vikaris</span>
            </div>
          </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Artikel</h3>
          <p class="section-description">Karya, informasi, serta pengumuman seputar Paroki MBSB Kota Wisata</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active px-4">Semua</li>
              <li data-filter=".filter-app" class="px-4">Berita</li>
              <li data-filter=".filter-web">Renungan</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="src/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="src/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="src/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="src/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="src/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="src/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="src/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="src/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="src/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="src/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="src/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="src/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="src/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="src/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="src/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="src/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="src/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="src/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-6 portfolio-item filter-app">
            <a href="#berita" class="float-lg-start">Lihat Selengkapnya - Berita</a>
          </div>

          <div class="col-lg-6 portfolio-item filter-web">
            <a href="#renungan" class="float-lg-end">Lihat Selengkapnya - Renungan</a>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
@endsection