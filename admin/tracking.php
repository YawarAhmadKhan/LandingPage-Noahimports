<?php
include "../db/db.php";



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
            <h1 style="text-align: center; margin-top:20px">Tracking Page CMS</h1>
            <div class="content" style="margin-top: 20px;">
                <div class="container">
                    <div class="row">
                    <h1>Section 1</h1>
                    <p>Example Image</p>
                    <img src="../uploads/trackingHeader.JPG" alt="" style="margin-bottom: 20px;">
                    
                        <div class="row" style="margin-bottom: 20px;">
                        <?php
                            $sql = "SELECT * FROM `trackingheader`";
                            $res = mysqli_query($con, $sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    $image = $row['image'];
                                 }
                            }
                            ?>
                        <div class="col-md-6">
                            <p>Section 1 current Image</p>
                            <img src="../uploads/<?php echo $image;?>" alt="">
                            
                        </div>
                        <div class="col-md-6">
                            <form action="backend/trackingHeaderUpdate.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Update Image for Header</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <br>
                                <input type="submit" name="submit" class="btn btn-success" value="Update Section 1 info">
                            </form>

                        </div>
                   

                    </div>
                    
                    <hr>
                    <div class="row">
                        <h1>Section 2</h1>
                        <p>Example Image</p>
                        <img src="../uploads/trackingUnderHeader.JPG" alt="" style="margin-bottom: 20px;">
                            <div class="row">
                            <?php
                            $sql = "SELECT * FROM `trackingunderheader`";
                            $res = mysqli_query($con,$sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    $uhimage = $row['image'];
                                    $uhtitle1 = $row['title1'];
                                    $uhtitle2 = $row['title2'];



                                }
                            }
                            ?>
                            <div class="col-md-6">
                                <form action="backend/trackingUnderHeaderUpdate.php" method="POST" enctype="multipart/form-data">
                                <p>Change Texts For Section 2</p>
                                <div class="form-group">
                                    <label for="">Uper Heading</label>
                                    <input type="text" name="title1" class="form-control" value="<?php echo $uhtitle1;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Lower Heading</label>
                                    <input type="text" name="title2" class="form-control" value="<?php echo $uhtitle2;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Update Image for section 2</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <br>
                                <input type="submit" name="submit" class="btn btn-success" value="Update Section 2 info">
                                </form>
                            </div>
                                <div class="col-md-6">
                              
                                    <p>Section 2 current Image</p>
                                    <img src="../uploads/<?php echo $uhimage?>" alt="">

                                </div>
                                
                            </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <h1>Last Section</h1>
                        <p>Example Image</p>
                        <img src="../uploads/trackingLastBlueSection.JPG" alt="" style="margin-bottom: 20px;">
                        <form action="backend/trackingLastBlueSection.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                            <?php
                                $sql = "SELECT * FROM trackinglastbluesection";
                                $result = $con->query($sql);
                                
                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                    $lsimage = $row['image'];
                                  }
                                } else {
                                  echo "0 results";
                                }
                                ?>
                               
                                
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="">Update Last Section Image</label>
                                       <input type="file" name="file" class="form-control">
                                   </div>
                                   <br>
                            <input type="submit" name="submit" class="btn btn-success" value="Update Last Section">

                               </div>
                               <div class="col-md-6">
                                   <img src="../uploads/<?php echo $lsimage;?>" alt="">
                               </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <br>

                    
                    
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