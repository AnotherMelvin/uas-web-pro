<!-- ======= Contact Section ======= -->
<section id="contact" class="pt-0">
      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0681796345725!2d106.95383931468665!3d-6.38520239537974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6994864f287c01%3A0x4d35915c4febb4fd!2sGereja%20Katolik%20Maria%20Bunda%20Segala%20Bangsa!5e0!3m2!1sid!2sid!4v1670417208570!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <div class="container mt-5">
        <div class="row justify-content-start">

          <div class="col-lg-4 col-md-6 my-1">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>Perumahan Kota Wisata, Jl. Transyogi Km. 6<br />Nagrak, Gunung Putri, Bogor 16967</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>sekretariatmbsb@gmail.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>(021) 8493 2402</p>
              </div>
            </div>

            <div class="social-links">
              <a href="https://m.facebook.com/media/set/?set=a.10150370425684638.431957.91119074637" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/mbsbkotwis/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/@MABUSEBA" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 my-1">
              <div class="link">
                <div>
                  <a href="https://keuskupanbogor.org/" target="_blank"><p class="mb-3">KEUSKUPAN BOGOR</p></a>
                  <a href="https://www.mirifica.net/" target="_blank"><p class="mb-3">MIRIFICA</p></a>
                  <a href="https://www.sesawi.net/" target="_blank"><p class="mb-3">SESAWI</p></a>
                  <a href="https://www.vatican.va/content/vatican/en.html" target="_blank"><p class="mb-3">VATICAN</p></a>
                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 my-1">
            <h3>Contact Form</h3>
            <form action="{{url('/')}}" method="post" role="form">
              @csrf
              <div class="form-group">
                Nama: <input type="text" name="name" class="form-control mt-1" id="name" placeholder="Nama Anda" required>
              </div>
              <div class="form-group mt-3">
                Email: <input type="email" class="form-control mt-1" name="email" id="email" placeholder="Alamat Email" required>
              </div>
              <div class="form-group mt-3">
                Pesan: <textarea class="form-control mt-1" name="message" rows="5" placeholder="Pesan Anda" required></textarea>
              </div>
              <div class="my-3">
                <!-- <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div> -->
              </div>
              <div class="text-center php-email-form"><button type="submit">Send</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2022 <strong>Paroki Maria Bunda Segala Bangsa</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
        Designed with <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->