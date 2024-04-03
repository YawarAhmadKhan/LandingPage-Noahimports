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
            <h1 style="text-align: center; margin-top:20px">Home Page CMS</h1>
            <div class="content" style="margin-top: 20px;">
                <div class="container">
                    <div class="row">
                    <h1>Section 1</h1>
                    <p>Example Image</p>
                    <img src="../uploads/homeHeader.JPG" alt="" style="margin-bottom: 20px;">
                    <form action="backend/updateHomeHeader.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-6" style="margin-top: 20px;">
                            <?php
                            $sql = "SELECT * FROM `homeheader`";
                            $res = mysqli_query($con,$sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    $text = $row['text'];
                                    $image = $row['logo'];
                                }
                            }
                            ?>
                            <p>Section 1 current Image</p>
                            <img src="../uploads/<?php echo $image;?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Update Section 1 text</label>
                                <textarea class="form-control" name="text" cols="30" rows="10"><?php echo $text?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Update Section 1 image</label>
                                <input type="file" name="file" value="<?php echo $image?>" class="form-control">
                            </div>
                            <br>
                            <input type="submit" name="submit" value="Update Section 1 Info" class="btn btn-success">
                        </div>
                        </div>
                    </form>

                    </div>
                    <hr>
                    <div class="row">
                        <h1>Section 2</h1>
                        <p>Example Image</p>
                        <img src="../uploads/HomeUnderHeader.JPG" alt="" style="margin-bottom: 20px;">
                        <form action="backend/updateHomeUnderHeader.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                <?php
                            $sql = "SELECT * FROM `homeunderheader`";
                            $res = mysqli_query($con,$sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    $title1 = $row['title1'];
                                    $title2 = $row['title2'];
                                    $image2 = $row['logo'];
                                }
                            }
                            ?>
                                    <p>Section 2 current Image</p>
                                    <img src="../uploads/<?php echo $image2?>" alt="">

                                </div>
                                <div class="col-md-6">
                                    <p>Update Section 2 Text</p>
                                    <div class="form-group">
                                        <label for="">Uper Text</label>
                                        <input type="text" name="title1" value="<?php echo $title1?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Lower Text</label>
                                        <input type="text" name="title2" value="<?php echo $title2?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Update Section 2 Image</label>
                                        <input type="file" name="file" value="<?php echo $image2?>" class="form-control">
                                    </div>
                                    <br>
                                    <input type="submit" name="submit" value="Update Section 2 info" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="row">
                        <h1>Partners Section</h1>
                        <img src="../uploads/partners.JPG" alt="" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <p>Upload New Partner</p>
                            <form action="backend/homeUploadPartner.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Upload Partner Image</label>
                                <input type="file" name="file" class="form-control">
                            </div><br>
                            <input type="submit" name="submit" class="btn btn-success" value="Upload Partner">
                            </form>
                        </div>
                        <div class="col-md-6">
                            <p>All Partners</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="color: white;">#</th>
                                        <th style="color: white;">Partner</th>
                                        <th style="color: white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM partners";
                                    $result = $con->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                        <td style="color: white;"><?php echo $row['id'];?></td>
                                        <td style="color: white;"><img src="../uploads/<?php echo $row['image'];?>" width="20%" alt=""></td>
                                        <td style="color: white;"><a href="backend/homeEditPartner.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm mt-2">Edit</a> <a href="backend/homeDeletePartner.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm mt-2" onclick="return confirm('Are you realy want to delete this?')">Delete</a></td>
                                    </tr>
                                        <?php
                                      }
                                    } else {
                                      echo "0 results";
                                    }
                                    ?>

                                    
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h1>Reviews Section</h1>
                        <img src="../uploads/reviews.JPG" alt="" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <form action="backend/homeAddReview.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Client Name</label>
                                    <input type="text" name="cname" class="form-control" placeholder="Jhon De">
                                </div>
                                <div class="form-group">
                                    <label for="">Review Text</label>
                                    <textarea name="review" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Upload Client Image</label>
                                    <input type="file" name="file" class="form-control">
                                </div><br>
                                <input type="submit" name="submit" class="btn btn-success" value="Add Review">
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h4>All Reviews</h4>
                            <table class="table">
                                <thead>
                                    <th style="color: white;">#</th>
                                    <th style="color: white;">Image</th>
                                    <th style="color: white;">Client Name</th>
                                    <th style="color: white;">Review</th>
                                    <th style="color: white;">Action</th>

                                </thead>
                                <tbody>
                                   <?php
                                   $sql = "SELECT * FROM clientreview";
                                   $result = $con->query($sql);
                                   
                                   if ($result->num_rows > 0) {
                                     // output data of each row
                                     while($row = $result->fetch_assoc()) {
                                       ?>
                                        <tr>
                                       <td style="color: white;"><?php echo $row['id'];?></td>
                                       <td style="color: white;"><img src="../uploads/<?php echo $row['image'];?>" width="70px" alt=""></td>
                                       <td style="color: white;"><?php echo $row['name'];?></td>
                                       <td style="color: white;"><?php echo $row['review'];?></td>
                                       <td style="color: white;"><a onclick="return confirm('Are you sure you want to delete this?')" href="backend/homeDeleteReview.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm mt-1">Delete</a> <a href="backend/homeUpdateReview.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm mt-1">Edit</a></td>

                                   </tr>
                                       <?php
                                     }
                                   } else {
                                     echo "0 results";
                                   }
                                   ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h1>Last Section</h1>
                        <p>Example Image</p>
                        <img src="../uploads/homeLastSection.JPG" alt="" style="margin-bottom: 20px;">
                        <form action="backend/homeLastSection.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                            <?php
                            $sql = "SELECT * FROM `homelastbluesection`";
                            $res = mysqli_query($con,$sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    $lstitle1 = $row['title1'];
                                    $lstitle2 = $row['title2'];
                                    $lsimage3 = $row['logo'];
                                }
                            }
                            ?>
                                <p>Edit Last Section Text</p>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Uper Text</label>
                                    <input type="text" name="lstitle1" value="<?php echo $lstitle1?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Lower Text</label>
                                    <input type="text" name="lstitle2" value="<?php echo $lstitle2?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Update Last Section Image</label>
                                    <input type="file" name="file" value="<?php echo $lsimage3?>" class="form-control">
                                </div>
                                <br>
                                <input type="submit" name="submit" value="Update Last Section Info" class="btn btn-success">
                                    
                                </div>
                                <div class="col-md-6">
                                    <p>Last Section Current Image</p>
                                    <img src="../uploads/<?php echo $lsimage3?>" alt="">
                                </div>
                            </div>
                        </form>
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
<script src="https://cdn.tiny.cloud/1/b2zuuxcumlt9yd3tzhegweganpijevld3vlnsvxbeayx5xed/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>