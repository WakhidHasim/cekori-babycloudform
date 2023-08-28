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
          <h2>Deskripsi Produk Baby Cloudfoam</h2>
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

        <div class="row">

          <?php foreach ($katalog->result() as $k) { ?>

          <div class="col-lg-8">
            <div class="owl-carousel portfolio-details-carousel">
              <?php if ( $k->gambar1 != null) { ?>
              <img src="data:<?php echo $k->tipe1; ?>;base64,<?php echo $k->gambar1; ?>" class="img-fluid" alt="">
              <?php } ?>
              <?php if ( $k->gambar2 != null) { ?>
              <img src="data:<?php echo $k->tipe2; ?>;base64,<?php echo $k->gambar2; ?>" class="img-fluid" alt="">
              <?php } ?>
              <?php if ( $k->gambar3 != null) { ?>
              <img src="data:<?php echo $k->tipe3; ?>;base64,<?php echo $k->gambar3; ?>" class="img-fluid" alt="">
              <?php } ?>
              <?php if ( $k->gambar4 != null) { ?>
              <img src="data:<?php echo $k->tipe4; ?>;base64,<?php echo $k->gambar4; ?>" class="img-fluid" alt="">
              <?php } ?>
              <?php if ( $k->gambar5 != null) { ?>
              <img src="data:<?php echo $k->tipe5; ?>;base64,<?php echo $k->gambar5; ?>" class="img-fluid" alt="">
              <?php } ?>
              <?php if ( $k->gambar6 != null) { ?>
              <img src="data:<?php echo $k->tipe6; ?>;base64,<?php echo $k->gambar6; ?>" class="img-fluid" alt="">
              <?php } ?>
              <?php if ( $k->gambar7 != null) { ?>
              <img src="data:<?php echo $k->tipe7; ?>;base64,<?php echo $k->gambar7; ?>" class="img-fluid" alt="">
              <?php } ?>
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Deskripsi Produk</h3>
            <ul>
              <li><strong>Nama</strong>: <?php echo $k->nama; ?></li>
              <li><strong>Harga</strong>: <?php echo $k->harga_jual; ?></li>
              <li><strong>Kode Original</strong>: <?php echo $k->kode_ori; ?></li>
              <li><strong>Produsen</strong>: <?php echo $k->produsen; ?></a></li>
            </ul>

            <p>
              <?php echo $k->deskripsi; ?>
            </p>

            <a href="https://wa.me/62811331768" class="btn btn-primary">Beli</a>
            <?php if ($k->link_shopee != null) { ?>
            <a href="<?php echo $k->link_shopee; ?>" target="blank" class="btn btn-warning">Shopee</a>
            <?php } ?>
            <?php if ($k->link_tokped != null) { ?>
            <a href="<?php echo $k->link_tokped; ?>" target="blank" class="btn btn-warning">Shopee</a>
            <?php } ?>
            <?php if ($k->link_lazada != null) { ?>
            <a href="<?php echo $k->link_lazada; ?>" target="blank" class="btn btn-warning">Shopee</a>
            <?php } ?>
          </div>

        <?php } ?>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

<?php include "footer.php"; ?>