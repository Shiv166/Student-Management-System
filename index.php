<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="Registration/register_new.php">
  <link rel="stylesheet" type="text/css" href="Registration/style.css">
  <script src="./Registration/script.js"></script>
  <title>Student Management System</title>
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
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "./includes/header.php" ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>The Website</strong></h3>
      <h1>Here you can find everthing related to your academics. </h1>
      <h2>All the things relaed to GTU and College will be available here.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

  <!-- ======= About Section ======= -->

  <?php include "./includes/about_section.php" ?>    

    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer some of the awesome <span>Services</span></h3>
          <p>Here you can find the various important links regarding to your Knowledge.</p>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a target="_blank" href="https://www.gtu.ac.in/News.aspx">GTU News</a></h4>
              <p class="description">Latest Information and News from the GTU.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a target="_blank" href="https://www.saffrony.ac.in/">College News</a></h4>
              <p class="description">News provided by the College to their Students.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a target="_blank" href="https://www.saffrony.ac.in/upcoming-events">Event News</a></h4>
              <p class="description">Here you will get the Events information by the College.</p>
            </div>
          </div>
        </div> 
      </div>
    </section>
    <!-- End Services Section -->
    
    <br><br>
   
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="text-center">
          <h3>Rules and Regulations</h3>
          <p>If you want to know more regarding rules and regulations then please follow the linke below.</p>
          <a class="cta-btn" href="rules.php">Read here</a>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Assignments Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Assignments</h2>
          <h3>Check your<span> Assignments</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app" class="filter-active">All</li>
              <li data-filter=".filter-app">Sem 2</li>
              <li data-filter=".filter-card">Sem 4</li>
              <li data-filter=".filter-web">Sem 6</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/CE.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Computer Engineering</h4>
              <p>CE</p>
              <a href="marks.php" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="CE"><i class="bx bx-plus"></i></a>
              <a href="CE_portfolio.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/IT.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Information Technology</h4>
              <p>IT</p>
              <a href="assets/img/portfolio/IT.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="IT"><i class="bx bx-plus"></i></a>
              <a href="IT_portfolio.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/ME.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mechanical Engineering</h4>
              <p>ME</p>
              <a href="assets/img/portfolio/ME.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ME"><i class="bx bx-plus"></i></a>
              <a href="ME_portfolio.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Computer Engineering</h4>
              <p>CE</p>
              <a href="assets/img/portfolio/CE.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="CE"><i class="bx bx-plus"></i></a>
              <a href="CE_portfolio.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Information Technology</h4>
              <p>IT</p>
              <a href="assets/img/portfolio/IT.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="IT"><i class="bx bx-plus"></i></a>
              <a href="IT_portfolio.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mechanical Engineering</h4>
              <p>ME</p>
              <a href="assets/img/portfolio/ME.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ME"><i class="bx bx-plus"></i></a>
              <a href="ME_portfolio.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>         

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Computer Engineering</h4>
              <p>CE</p>
              <a href="assets/img/portfolio/CE.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="CE"><i class="bx bx-plus"></i></a>
              <a href="CE_portfolio.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Information Technology</h4>
              <p>IT</p>
              <a href="assets/img/portfolio/IT.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="IT"><i class="bx bx-plus"></i></a>
              <a href="IT_portfolio.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mechanical Engineering</h4>
              <p>ME</p>
              <a href="assets/img/portfolio/ME.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ME"><i class="bx bx-plus"></i></a>
              <a href="ME_portfolio.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">
        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Why do you need to use this Website? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>Here you can find everthing related to your academics and all the things related to GTU and College will be available here.</p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Who all can use this website?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>Website is developed in such a way that it can be used by both Faculties as well as Students.</p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Which are the diffrent functionalities that this Website provide? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>It provides functionalites such as Students can see their Assignments assigned by the Faculties. Also, they can find their result of all the exams in this Website only.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="section-title">
          <h2>Myself</h2>
          <h3>Let Me Tell You About <span>Myself</span></h3>
        </div>

        <div class="row">
          <div class="container">
            <div class="member">
              <div class="member-img" style="align-items: left;">
                <img src="assets/img/team/1.png" class="img-fluid" alt="" style="height:350px; width:350px;">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Shivang Khatri</h4>
                <span>Owner</span>
              </div>
              <div class="member-info" >
                <p style= "font-size: 16px; padding-left: 16px; padding-right: 16px;">"Results-oriented UI/UX Designer, Front-end and Full stack developer enthusiast with a strong foundation in HTML, CSS, Bootstrap, ReactJS and designing tools like Figma, Adobe XD, Adobe Illustrator. Proven ability to design wireframes, prototypes and visual designs along with developing scalable systems with coding languages. Passionate about designing interactive prototypes and developing scalable systems. Seeking challenging opportunities to contribute skills to dynamic team and organization."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>Post your query here and you can feedback us also.</p>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>409, Summit Ave Apt 201</p>
                <p>Arlington, TX - 76013</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>khatrishivang2000@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 (000) 000 0000</p>
              </div>

            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading..</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End main -->

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