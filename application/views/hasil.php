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
        <h1 class="text-light"><a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/assets/img/logo.png"></a></h1>
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
          <h2>Cek Produk Original</h2>
          <!-- <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio Details</li>
          </ol> -->
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <dir class="row">
          <dir class="col-lg-12">
          <div class="alert alert-info alert-dismissible">
                  <h5><i class="icon fas fa-ban"></i> Info !</h5>
                  Hai Bunda, jika kode yang bunda masukkan tidak terdaftar silakan hubungi Cutomer Service kami di <a href="https://wa.me/62816243514">0816-243-514</a> . Kode akan kami bantu cek manual jika ada kendala dengan sistem online kami. Terima kasih.
                </div>
          </dir>
        </dir>

        <div class="row">

          

            <?php if ($kode->result() != null) {
                      foreach ($kode->result() as $row) {
             ?>

             <div class="col-lg-8">
            <!-- <h2 class="portfolio-title">This is an example of portfolio detail</h2> -->
            <div class="owl-carousel portfolio-details-carousel">
              <img src="<?php echo base_url() ?>assets/assets/img/ty.png" class="img-fluid" alt="">
              <!-- <img src="<?php echo base_url() ?>assets/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <img src="<?php echo base_url() ?>assets/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""> -->
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">

            <h3>Informasi Produk</h3>
            <ul>
              <li><strong>Kode Produk</strong>: <?php echo $row->kode_bcf; ?></li>
              <li><strong>Tanggal Pembelian</strong>: <?php $pecah = explode("-", $row->tgl_jual);
                                                      $tgl = $pecah[0]; $tahun = $pecah[2];
                                                      if ($pecah[1]=="01") {
                                                        $bulan = "Januari";
                                                      }elseif ($pecah[1]=="02") {
                                                        $bulan = "Februari";
                                                      }elseif ($pecah[1]=="03") {
                                                        $bulan = "Maret";
                                                      }elseif ($pecah[1]=="04") {
                                                        $bulan = "April";
                                                      }elseif ($pecah[1]=="05") {
                                                        $bulan = "Mei";
                                                      }elseif ($pecah[1]=="06") {
                                                        $bulan = "Juni";
                                                      }elseif ($pecah[1]=="07") {
                                                        $bulan = "Juli";
                                                      }elseif ($pecah[1]=="08") {
                                                        $bulan = "Agustus";
                                                      }elseif ($pecah[1]=="09") {
                                                        $bulan = "September";
                                                      }elseif ($pecah[1]=="10") {
                                                        $bulan = "Oktober";
                                                      }elseif ($pecah[1]=="11") {
                                                        $bulan = "November";
                                                      }elseif ($pecah[1]=="12") {
                                                        $bulan = "Desember";
                                                      }
                                                      echo $pecah[2]." ".$bulan." ".$pecah[0];
                                                ?></li>
              <li><strong>Lisensi Resmi</strong>: Baby Cloudfoam</li>
            </ul>

            <p>
              Produk Anda merupakan produk Original Baby Cloudfoam. Terima kasih telah mempercayakan pelayanan kami.
            </p>

            <?php } }
            else { ?>

              <div class="col-lg-8">
            <!-- <h2 class="portfolio-title">This is an example of portfolio detail</h2> -->
            <div class="owl-carousel portfolio-details-carousel">
              <img src="<?php echo base_url() ?>assets/assets/img/sr.png" class="img-fluid" alt="">
              <!-- <img src="<?php echo base_url() ?>assets/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <img src="<?php echo base_url() ?>assets/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""> -->
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">

               <p>
              Maaf, Kode yang Anda masukkan tidak terdaftar dalam sistem kami. Silakan hubungi Customer Service kami di atas untuk kami bantu cek manual terlebih dahulu. Terima kasih.
            </p>
            <?php } ?>

            <br>
            <a href="<?php echo base_url() ?>index.php/info"><img src="<?php echo base_url() ?>assets/assets/img/giveaway.jpg" hight="350px" width="350px"></a>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

<?php include "footer.php"; ?>