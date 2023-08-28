<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Baby Cloudfoam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/assets/img/logo.png" rel="icon">
  <link href="<?php echo base_url() ?>assets/assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url() ?>assets/assets/css/font1.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v2.3.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>assets/assets/img/logo.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url(); ?>index.php/home#header">Beranda</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/home#about">Tentang Kami</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <li><a href="<?php echo base_url(); ?>index.php/home#testimonials">Testimoni</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/home#pricing">Paket</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="<?php echo base_url(); ?>index.php/home#contact">Kontak Kami</a></li>
          <li><a href="<?php echo base_url() ?>index.php/blog">Blog</a></li>
          <li><a href="<?php echo base_url() ?>index.php/produk">Produk</a></li>

          <li class="get-started"><a href="<?php echo base_url() ?>index.php/cekori">Cek Original</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Produk Baby Cloudfoam</h2>
          <!-- <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio Details</li>
          </ol> -->
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Katalog Produk</h2>
          <p>Dapatkan Produk Original Dengan Harga Resmi</p>
        </div>

        <div class="row">

          <?php foreach ($katalog->result() as $k) { ?>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="data:<?php echo $k->tipe1; ?>;base64,<?php echo $k->gambar1; ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href="<?php echo base_url(); ?>index.php/produk/detail/<?php echo $k->id_produk; ?>">Cek Detail</a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $k->nama; ?></h4>
                <span><s><?php echo $k->harga_coret; ?></s></span>
                <h6>Rp <?php echo $k->harga_jual; ?></h6>
              </div>
            </div>
          </div>

        <?php } ?>

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
   <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Baby Cloudfoam</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <!-- <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/assets/js/main.js"></script>

</body>

</html>