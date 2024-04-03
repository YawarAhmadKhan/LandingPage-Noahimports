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
            <h1 style="text-align: center; margin-top:20px">Company Page CMS</h1>
            <div class="content" style="margin-top: 20px;">
                <div class="container">
                    <div class="row">
                    <h1>Section 1</h1>
                    <p>Example Image</p>
                    <img src="../uploads/aboutHeader.JPG" alt="" style="margin-bottom: 20px;">
                    
                        <div class="row">
                        <div class="col-md-12">
                            <?php
                            $sql = "SELECT * FROM `aboutheader`";
                            $res = mysqli_query($con, $sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    $title = $row['title'];
                                    $para = $row['paragraph'];
                                 }
                            }
                            ?>
                            <form action="backend/aboutHeaderUpdate.php" method="POST">
                            <div class="form-group">
                                <label for="">Heading</label>
                                <input type="text" name="title" placeholder="About Us" class="form-control" value="<?php echo $title?>">
                            </div>
                            <div class="form-gorup">
                                <label for="">Paragraph</label>
                                <textarea name="paragraph" id="" cols="30" rows="10" class="form-control"><?php echo $para;?></textarea>
                            </div>
                            <br>
                            <input type="submit" name="submit" class="btn btn-success" value="Update Section 1 info">
                            </form>
                        </div>
                        </div>
                   

                    </div>
                    <hr>
                    <div class="row">
                        <h1>Section 2</h1>
                        <p>Example Image</p>
                        <img src="../uploads/aboutUnderHeader.JPG" alt="" style="margin-bottom: 20px;">
                        <form action="backend/aboutUnderHeaderUpdate.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                <?php
                            $sql = "SELECT * FROM `aboutunderheader`";
                            $res = mysqli_query($con,$sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    $image = $row['image'];
                                    $uhtitle = $row['title'];
                                    $year = $row['year'];
                                    $uhpara = $row['paragraph'];
                                    $btntext = $row['btntext'];
                                    $btnurl = $row['btnurl'];


                                }
                            }
                            ?>
                                    <p>Section 2 current Image</p>
                                    <img src="../uploads/<?php echo $image?>" alt="">

                                </div>
                                <div class="col-md-6">
                                    <p>Update Section 2 Text</p>
                                    <div class="form-group">
                                        <label for="">Year</label>
                                        <input type="text" name="year" value="<?php echo $year?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="text" name="title" value="<?php echo $uhtitle?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Paragraph</label>
                                        <textarea name="paragraph" id="" cols="30" rows="10" class="form-control"><?php echo $uhpara?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Button Text</label>
                                        <input type="text" name="btntext" class="form-control" value="<?php echo $btntext?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Button URL</label>
                                        <input type="text" name="btnurl" class="form-control" value="<?php echo $btnurl?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Update Section 2 Image</label>
                                        <input type="file" name="file" value="<?php echo $image?>" class="form-control">
                                    </div>
                                    <br>
                                    <input type="submit" name="submit" value="Update Section 2 info" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="row">
                        <h1>Why Noah Imports</h1>
                        <img src="../uploads/whyNoah.jpg" style="margin-bottom: 20px;" alt="">
                        <?php
                        $sql = "SELECT * FROM aboutwhynoha";
                        $result = $con->query($sql);
                        
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                            $whytitle = $row['title'];
                            $whydesc = $row['description'];
                          }
                        } else {
                          echo "0 results";
                        }
                        
                        ?>
                        <div class="col-md-12">
                            <h3>Update Why Noah Section</h3>
                            <form action="backend/aboutWhy.php" method="POST">
                            <div class="form-group">
                                <label for="">Edit Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $whytitle;?>">
                            </div>
                            <div class="form-group">
                                <label for="">Edit Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo $whydesc;?></textarea>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-success" name="submit" value="Update">
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h1>Last Section</h1>
                        <p>Example Image</p>
                        <img src="../uploads/aboutSteps.JPG" alt="" style="margin-bottom: 20px;">
                        <form action="backend/aboutStepText.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <h4>Uper Heading of Steps</h4>
                                <?php
                                $sql = "SELECT * FROM aboutsteptext";
                                $result = $con->query($sql);
                                
                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                    $sptitle1 = $row['title1'];
                                    $sptitle2 = $row['title2'];
                                    $spparagraph = $row['paragraph'];
                                  }
                                } else {
                                  echo "0 results";
                                }
                                ?>
                                <div class="form-group">
                                    <label for="">Uper Title</label>
                                    <input type="text" name="title1" class="form-control" value="<?php echo $sptitle1;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Lower Title</label>
                                    <input type="text" name="title2" class="form-control" value="<?php echo $sptitle2;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Paragraph</label>
                                <textarea name="paragraph" id="" cols="30" rows="10" class="form-control"><?php echo $spparagraph;?></textarea>
                                </div>
                            </div>
                            <br>
                            <input type="submit" name="submit" class="btn btn-success" value="Update Steps Uper Area">
                        </form>
                    </div>
                    <br>

                    <div class="row">
                        <h4>Steps Area</h4>
                        <div class="col-md-6">
                           <form action="backend/aboutAddStep.php" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                                <label for="">Step Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Step Description</label>
                                <textarea name="paragraph" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Add Icon</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <br>
                            <input type="submit" name="submit" class="btn btn-success" value="Add New Step">
                           </form>
                        </div>
                        <div class="col-md-6">
                            <h4>All Steps</h4>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="color:white;">#</th>
                                    <th style="color:white;">Title</th>
                                    <th style="color:white;">Description</th>
                                    <th style="color:white;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM aboutsteps";
                                    $result = $con->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                        <td style="color:white;"><?php echo $row['id'];?></td>
                                        <td style="color:white;"><?php echo $row['title'];?></td>
                                        <td style="color:white;"><?php echo $row['paragraph'];?></td>
                                        <td style="color:white;"><a class="btn btn-danger btn-sm" href="backend/aboutDeleteStep.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do You Realy Want To Delete This?')">Delete</a>
                                        <a href="backend/aboutEditStep.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-sm" style="color: white;">Edit</a>
                                    </td>
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