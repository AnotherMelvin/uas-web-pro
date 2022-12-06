<!DOCTYPE html>
<html lang="en">
@include('pages.header')
<body>
    @include('pages.nav')
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
          <div class="container">

            <div class="d-flex justify-content-between align-items-center">
              <h2>Inner Page</h2>
              <ol>
                <li><a href="/">Home</a></li>
                <li>Inner Page</li>
              </ol>
            </div>

          </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page pt-4">
          <div class="container">
            <div class="form">
                <form action="{{ url('layout/saveBergabung') }}" method="post" role="form" class="php-email-form">
                  <div class="form-group mt-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal Bergabung" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>

                  <div class="form-group mt-3">
                    <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" required></textarea>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama Sebelumnya" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="alasan" rows="5" placeholder="Alasan Bergabung" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
                  <br>
                  <br>
                </form>
              </div>
          </div>
        </section>
        @include('layout.map')
      </main><!-- End #main -->
@include('pages.footer')
</body>
</html>
