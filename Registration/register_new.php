<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title class="logo">Registration</title>
  <link rel="stylesheet" href="./style.css">
  <link href="../assets/img/logo.png" rel="icon">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assignment Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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
<!-- partial:index.partial.html -->
 


<section class="user">

  <div class="user_options-container">
    
    <div class="user_options-text">
      <div class="user_options-registered">
        <h2 class="user_registered-title">Student Account?</h2>
        <p class="user_registered-text">Students can Login from here and continue experiance with your Evaluation System.</p>
        <form class="forms_form" method="POST" action="./register_student.php">
          <div class="forms_buttons">
            <button class="user_registered-login" id="login-button">Login</button>
          </div>
        </form>
        
      </div>
    </div>

    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Faculty Account?</h2>
        <p class="user_registered-text">Faculty can Login from here and continue Evaluation System.</p>
        <form class="forms_form" method="POST" action="./register_admin.php">
          <div class="forms_buttons">
            <input type="submit" value="LOGIN" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>

  </div>
</section>


<!----------Designed By Pradeep Singh Tomar------------>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
