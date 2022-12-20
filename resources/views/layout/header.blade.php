<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <a href="/"><img src="/src/img/logo.png" width="252px" alt="logo"></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="index.html">Regna</a></h1>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="/">Beranda</a></li>
          <li class="dropdown"><a href="/"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('profile/sejarah')}}">Sejarah</a></li>
              <li><a href="{{url('profile/pastor')}}">Pastor</a></li>
              <li><a href="{{url('profile/wilayah')}}">Lingkungan & Wilayah</a></li>
              <li><a href="{{url('profile/dewan')}}">Dewan Paroki</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{url('articles/berita')}}"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="{{url('articles/berita')}}"><span>Kerygma</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="https://ksmbsb.blogspot.com/" target="_blank">Kitab Suci</a></li>
                  <li><a href="{{url('articles/berita')}}">Pemandu</a></li>
                  <li><a href="{{url('articles/berita')}}">Emmaus Journey</a></li>
                </ul>
              </li>
              <li><a href="{{url('articles/berita')}}">Martyria</a></li>
              <li><a href="{{url('articles/berita')}}">Koinonia</a></li>
              <li><a href="{{url('articles/berita')}}">Liturgia</a></li>
              <li><a href="{{url('articles/berita')}}">Marturia</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="/"><span>Download</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('download/form')}}">Form</a></li>
              <li><a href="{{url('download/teks')}}">Teks</a></li>
              <li><a href="https://drive.google.com/drive/folders/1ix5haMcuvVEtB-F9qVaWI1ooHEGeniKK" target="_blank">BKSN</a></li>
              <li><a href="/">APP</a></li>
              <li><a href="https://drive.google.com/drive/folders/1wziFyjRX0VSC9mm2q5d_Mwq8n_Y0LEs9" target="_blank">AAP</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="{{url('articles/renungan')}}">Renungan</a></li>
          <!-- <li><a class="nav-link" href="/">Galeri</a></li> -->
          <li><a class="nav-link" href="/dashboard"><img src="/src/img/login.png" width="27px" alt="login"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->