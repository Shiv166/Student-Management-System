<?php include "./db.php" ?>

<?php
session_start();
if (isset($_POST['submit'])) {

  $sub_name = $_POST['sub_name'];
  $prof_name = $_POST['prof_name'];
  $branch = $_POST['branch'];
  $sem = $_POST['sem'];
  $description = $_POST['description'];
  $file = $_FILES['file']['name'];
  $path ="assets/file/".$file;
  
  $query = "INSERT INTO materials (sub_name,prof_name,branch,sem,description,file) VALUES ('$sub_name','$prof_name','$branch','$sem','$description','$file')";

  $select_user_query = mysqli_query($conection, $query);
  move_uploaded_file($_FILES['file']['tmp_name'], "images/material/" . $_FILES['file']['name']);

  if ($select_user_query) {
    header("Location:./study_materials.php");
    exit;
    }
 else {
    $_SESSION['stauts'] = "Error";
    header("Location:./study_materials.php");
    exit;
    }
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
    <title>Study Materials</title>
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
<h3 style="text-align: center; color:#e43c5c"><b>Study Materials</b></h3></br></br>
</div>

<div class="body">

    <form method="POST" enctype="multipart/form-data">
        <div class="row clearfix" style="margin-left:450px; ">
            <div class="form-group">
                <label for="formGroupExampleInput2">Subject Name :</label>
                <input type="text" class="form-control" name="sub_name" style="width:340px;" id="formGroupExampleInput2">
            </div>                                      
                     
</div>

<div class="row clearfix" style="margin-left:450px; ">
    <div class="form-group">
        <label for="formGroupExampleInput2">Professor Name :</label>
        <input type="text" class="form-control" name="prof_name" style="width:340px;" id="formGroupExampleInput2">
    </div>                                                           
</div>

<div class="row clearfix" style="margin-left:450px;">
    <div class="form-group">
        <label for="disabledSelect">Branch :</label>
            <select id="disabledSelect" name="branch" class="form-control" >
                <option> --Select--</option>
                <option>Computer Engineering</option>
                <option>Information Technology</option>
                <option>Mechanical Engineering</option>
                <option>Civil Engineering</option>
                <option>Aeronautical Engineering</option>
                <option>Electrical Engineering</option>
                <option>Electonics & Communication Engineering</option>
            </select>                                                                  
    </div>
</div>

<div class="row clearfix" style="margin-left:450px; ">
    <div class="form-group">
        <label for="disabledSelect">Semester :</label>
            <select id="disabledSelect" class="form-control" name="sem" style="width:340px;" >
                <option> --Select--</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
            </select>
    </div>
</div>

<div class="row clearfix" style="margin-left:450px; ">
    <div class="form-group">
        <label for="text">Description :</label>
        <textarea class="form-control" name="description" id="text" rows="3" cols="34"></textarea>
    </div>
</div>

<div class="row clearfix" style="margin-left:450px; ">
<div class="form-group">
<div class="form-group">
    <label for="exampleFormControlFile1">Add Material</label>
    <input type="file" name="file" class="form-control-file" id="material">
</div>
</div>
</div>
    <input style="margin-left: 600px; padding-left:15px; padding-right:15px; margin-top:10px;"type="submit" name="submit" class="btn btn-primary btn-sm m-l-10 waves-effect" value="Submit">       
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


                                         