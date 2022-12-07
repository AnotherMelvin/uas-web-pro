<!DOCTYPE html>
<html lang="en">
@include('pages.header')

<body>
    @include('pages.nav')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <div>
                <h1 style="font-size: 32pt;">Selamat Datang di Gereja Maria Bunda Segala Bangsa Kota Wisata</h1>
                <!-- <a href="/layout/bergabung" class="btn-get-started">MARI BERGABUNG</a> -->
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

    <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header mb-5">
                    <h3 class="section-title">Pastor Kami</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="pic"><img src="assets/img/team-2.jpg" alt=""></div>
                            <h4>RD. Bonifasius Heribertus Beke</h4>
                            <span>Pastor Paroki</span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="assets/img/team-3.jpg" alt=""></div>
                            <h4>RD. Agustinus Deddy Budiawan</h4>
                            <span>Pastor Vikaris</span>
                        </div>
                    </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= About Section ======= -->
        <section id="about" style="background-color: rgb(97, 17, 33)">
            <div class="container" data-aos="fade-up">
                <div class="row about-container">
                    <div class="col-lg-6 background order-lg-1 order-1" data-aos="fade-left" data-aos-delay="100"><img
                        src="assets/img/Gambar_Bagian_Doa.png"></div>
                    <div class="col-lg-6 ps-5 content order-lg-2 order-2" style="background-color: rgb(97, 17, 33);">
                        <h2 class="title text-light">Jadwal Misa</h2>
                        <p>
                        <blockquote class="blockquote text-light">
                            Sabtu pkl. 18.00 WIB. <br /><br />
                            Minggu pkl. 05.30, 07. 30, dan 10.00 WIB. <br />
                            (Perayaan Ekaristi pkl. 10.00 WIB live streaming) <br /> <br/>
                            Kapel St. Lusia Cileungsi: Minggu pkl. 08.30 WIB. <br />
                        </blockquote>
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title mb-5">Berita Gereja</h3>
                    <!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p> -->
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Kerygma</li>
                            <li data-filter=".filter-card">Martyria</li>
                            <li data-filter=".filter-web">Koinioia</li>
                            <li data-filter=".filter-web">Liturgia</li>
                            <li data-filter=".filter-web">Diakonia</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>DONOR DARAH 11 DESEMBER 2022</h4>
                            <p>November 30, 2022</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>BAZAAR NATAL 2022</h4>
                            <p>November 26, 2022</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>DOA UNTUK KORBAN GEMPA CIANJUR</h4>
                            <p>November 26, 2022</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>SEMINAR KESEHATAN: "SEHAT TANPA OBAT"</h4>
                            <p>November 19, 2022</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>PENGUMPULAN BOTOL PLASTIK KOSONG UNTUK POHON NATAL</h4>
                            <p>November 19, 2022</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>LOMBA MEWARNAI DAN MENYANYI LAGU NATAL</h4>
                            <p>November 17, 2022</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>SOSIALISASI PEMILU 2024</h4>
                            <p>November 13, 2022</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>PERINGATAN ARWAH SEMUA ORANG BERIMAN</h4>
                            <p>October 24, 2022</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>SEHARI BERSAMA ECO ENZYME</h4>
                            <p>October 15, 2022</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        @include('pages.map')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('pages.footer')
</body>

</html>