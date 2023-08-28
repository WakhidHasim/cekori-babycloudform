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
          <h2>Artikel Baby Cloudfoam</h2>
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

          <div class="col-lg-8">

            <div class="card-body">
                <table id="example2" class="table">
                  <thead>
                  <tr>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($blog->result() as $b) {
                    ?>
                  <tr>
                    <td width="10%"><img src="data:<?php echo $b->picture_type; ?>;base64,<?php echo $b->picture; ?>" height="120px" width="120px"></td>
                    <td><h4><b>
                      <?php echo $b->title; ?>
                      </b></h4>
                      <p><?php echo "Dipost : ".$b->date; ?></p>
                      <a href="<?php echo base_url(); ?>index.php/blog/post/<?php echo $b->id_post; ?>">Selengkapnya >></a>
                    </td>
                  </tr>

                    <?php } ?>
                  </tfoot>
                </table>
              </div>
          </div>

          <div class="col-lg-4">
            
            <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Kategori</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>index.php/blog/tags/parenting">Parenting</a></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>index.php/blog/tags/pregnancy">Pregnancy</a></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>index.php/blog/tags/baby">Baby</a></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>index.php/blog/tags/toodler">Toodler</a></td>
                  </tr>
                  </tfoot>
                </table>
              </div>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

<?php include "footer.php"; ?>