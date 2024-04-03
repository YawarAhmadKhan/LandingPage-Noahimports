<?php
include "../db/db.php";
// Add new link in navbar
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $url = $_POST['url'];
    $sql = "INSERT INTO `navbarlinks`(`title`, `url`) VALUES ('$title', '$url')";
    $res = mysqli_query($con,$sql);
    if($res){
        ?>
        <script>
            alert("New Link Has Added");
        </script>
        <?php
    }else{
        echo "Error";
    }
}





?>
<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <div class="wrapper">
    <?php include "include/sidebar.php";?>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <h1 style="text-align: center; margin-top:20px">Navbar CMS</h1>
            <div class="content" style="margin-top: 20px;">
                <div class="container">
                    <div class="row" style="margin-bottom: 50px;">
                        <div class="col-md-6">
                            <?php
                            $sql = "SELECT * FROM `navbarlogo`";
                            $res = mysqli_query($con,$sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    $logo = $row['image'];
                                }
                            }
                            ?>
                            <img src="../uploads/<?php echo $logo;?>" alt="" width="50%">
                        </div>
                        <div class="col-md-6">
                            <h1>Update Navbar Logo</h1>
                            <form action="backend/updateNavbarLogo.php" method="POST" enctype="multipart/form-data">
                                <label for="">Logo URL</label>
                                <input type="text" name="url" placeholder="index.php" class="form-control" name="url">
                                <br>
                                <label for="">Chose New Logo</label>
                                <input type="file" name="file" value="" class="form-control">
                                <br>
                                <input type="submit" name="submit" value="Update Logo" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Add A New Link</h1>
                            <form action="#" method="POST">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" placeholder="Home" name="title">
                            </div>
                            <div class="form-group">
                                <label for="">URL</label>
                                <input type="text" class="form-control" placeholder="index.php" name="url">
                            </div>
                            <br>
                            <input type="submit" name="submit" value="Add Link" class="btn btn-success">
                            </form>


                        </div>
                        <div class="col-md-6">
                            <h1>All Links In Navbar</h1>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="color: white;">#</th>
                                        <th style="color: white;">Title</th>
                                        <th style="color: white;">Link</th>
                                        <th style="color: white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $sql = "SELECT * FROM `navbarlinks`";
                                    $res = mysqli_query($con, $sql);
                                    if(mysqli_num_rows($res) > 0){
                                        while($row = mysqli_fetch_array($res)){
                                            ?>
<tr>
                                        <td style="color: white;"><?php echo $row['id'];?></td>
                                        <td style="color: white;"><?php echo $row['title'];?></td>
                                        <td style="color: white;"><?php echo $row['url'];?></td>
                                        <td style="color: white;">
                                           <a href="backend/deleteNavbarLink.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this link?')">Remove</a>
                                           <a href="backend/editNavbarLink.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-sm" style="color: white;">Edit</a>
                                        </td>
                                    </tr>
                                            <?php
                                        }
                                    }
                                    
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>