<?php include "./db.php" ?>

<?php
  if (isset($_POST["submit"])) {

  $fname = $_POST['fullname'];
  $num = $_POST['num'];
  $br_sem = $_POST['br_sem'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO student(fullname,num,br_sem,email,password) ";
  $query .= "VALUES('{$fname}','{$num}','{$br_sem}','{$email}','{$password}')";

  $create_post_query = mysqli_query($conection, $query);

  header('Location:./add_student.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add students</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="img/logo.png" rel="icon">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div id="wrapper">

        
<?php include "./sidebar.php" ?>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">  
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fas fa-search fa-fw"></i>
                    </a>                   
                </li>

                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                </li>

                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fas fa-envelope fa-fw"></i>
                        <span class="badge badge-danger badge-counter">7</span>
                    </a>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                        <img class="img-profile rounded-circle"
                            src="img/undraw_profile.svg">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
            
            <!-- Start of Form -->
            <div class="card shadow mb-4" style= "margin: 10px; padding: 10px">
                <div class="header">
                    <h3 style="padding: 10px; text-align: center; color:#e43c5c"><b>Add Students</b></h3></br></br>
                </div>

                <div class="body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="column clearfix" style="margin-left:400px;">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-group" >
                                                <label>Fullname :</label>
                                                <input class="form-control" name="fullname" id="fullname" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-group" >
                                                <label>Enrollment Number :</label>
                                                <input class="form-control" name="num" id="num" required/>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-group" >
                                                <label>Semester And Branch :</label>
                                                <input class="form-control" name="br_sem" id="br_sem" placeholder="Eg: 6 CE" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-group">
                                                <label>Email :</label>
                                                <input class="form-control" name="email" id="email" required/>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-group">
                                                <label>Password :</label>
                                                <input class="form-control" name="password" id="password" required/>    
                                            </div>
                                        </div>
                                    </div>

                                    <input style="margin-left: 200px; padding-left:15px; padding-right:15px; margin-top:30px; "type="submit" name="submit" class="btn btn-primary btn-sm m-l-10 waves-effect" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
             
             </div>
             <!-- End of Form -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>