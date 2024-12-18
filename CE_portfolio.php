<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assignment Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.0.1
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages ">
  <div class="container d-flex align-items-center justify-content-between">

<a href="./index.php" class="logo"><img src="assets/img/Logo-SMS.png" alt="" class="img-fluid"></a>

<nav id="navbar" class="navbar">
<ul>
<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="height: 10px; width:10px;"></span>
                      <img class="img-profile rounded-circle"
                          src="assets/img/undraw_profile.svg">
                  </a>
                  <!-- Dropdown - User Information -->
                  <ul>
                      <li><a href="./marks.php">Marks</a></li>
                      <li><a href="./rules.php">Rules & Regulations</a></li>
                      <li><a href="./Registration/register_new.php">Sign up</a></li>
                  </ul>
              </li>
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
  </header>
  
  <main id="main">
    
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
     <i class="fa fa-arrow-left"><a href="index.php"></i> Back</a></button>
        <ol>
          <li>Home</li>
          <li>Assignment Details</li>
        </ol>
        <h2>Assignment Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    
    
    <!-- ======= Portfolio Details Section ======= -->

    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="col gy-4">
          <div class="row-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/CE.jpg" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <?php include "./db.php" ?>

          <?php
          $query ="select * from materials";
          $select_user_query = mysqli_query($conection,$query);
          $nums = mysqli_num_rows($select_user_query);
          while($res= mysqli_fetch_array($select_user_query)){

            ?>

          <div class="row-lg-4">
            <div class="container">
            <div class="portfolio-info">
              <h3>Assignment details</h3>
              <ul>
                <li><strong>Subject Name</strong>: <?php echo $res['sub_name']; ?></li>
                <li><strong>Professor Name</strong>: <?php echo $res['prof_name']; ?></li>
                <li><strong>Branch</strong>: <?php echo $res['branch']; ?></li>
                <li><strong>Semester</strong>: <?php echo $res['sem']; ?></li>
              </ul>
                    
            <div class="portfolio-description">
              <p><?php echo $res['description']; ?></p>     
            </div> 

            <section id="contact" class="contact" style="padding: 10px;">
            
            <form role="form" class="php-email-form">
            <a href="assets/<?php echo $res['file'];?>" download rel="noopener noreferrer" target="_self"><button type="submit"><i class="fa fa-download"></i> Download</button></a>
            <br><br>
            <label for="exampleFormControlFile1">Upload your work :</label></br>
            <input type="file" name="file" class="form-control-file" id="material">
            </form>
                  </section>
                </div>
              </div>
            </div>
                
          <?php
           }
          ?>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./includes/footer.php" ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>