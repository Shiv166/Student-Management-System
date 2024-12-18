<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assignment Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages ">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="./index.php" class="logo"><img src="assets/img/Logo-SMS.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar">
      <ul>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="height: 10px; width:10px;"></span>
          <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
          </a>
        <li><a href="./marks.php">Marks</a></li>
        <li><a href="./rules.php">Rules & Regulations</a></li>
        <li><a href="./Registration/register_new.php">Sign up</a></li>
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
            <li>Marks</li>
          </ol>
          <h2>Marks</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->
    
    <!-- ======= Assignment Details Section ======= -->

    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row-lg-4">
          <?php include "./db.php" ?>
          <?php
          $query ="select * from marks";
          $select_user_query = mysqli_query($conection,$query);
          $nums = mysqli_num_rows($select_user_query);
          while($res= mysqli_fetch_array($select_user_query)){
          ?>

          <div class="row-lg-4">
            <div class="portfolio-info">  
              <ul>  
                <li><strong>Branch</strong>: <?php echo $res['branch']; ?></li>
                <li><strong>Semester</strong>: <?php echo $res['sem']; ?></li>
                <li><strong>Enrollment Number</strong>: <?php echo $res['num']; ?></li>
                <li><strong>Subject Name</strong>: <?php echo $res['sub_name']; ?></li>
                <li><strong>Marks</strong>: <?php echo $res['marks']; ?></li>
              </ul>   
            </div>
          </div>       
          <?php
           }
          ?>
        </div>
      </div>
    </section>
  <!-- End Portfolio Details Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./includes/footer.php" ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Javascript -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>