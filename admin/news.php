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
            <h1 style="text-align: center; margin-top:20px">News CMS</h1>
            <div class="content" style="margin-top: 20px;">
                <div class="container">
                    <div class="row">
                    <h1>Section 1</h1>
                    <p>Example Image</p>
                    <img src="../uploads/news.JPG" alt="" style="margin-bottom: 20px;">
                    
                        <div class="row" style="margin-bottom: 20px;">
                        
                        <div class="col-md-6">
                        <form action="backend/newsUpload.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="">News Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">News Category</label>
                            <input type="text" name="category" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">News Detail</label>
                            <textarea name="detail" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tags</label>
                            <input type="text" name="tags" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Select Multiple Images For News</label>
                            <input type="file" name="newsImages[]" class="form-control" multiple>
                        </div><br>
                        <div class="form-group">
                            <label for="">Auth Name</label>
                            <input type="text" name="authName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Auth Image</label>
                            <input type="file" name="authImage" class="form-control">
                        </div><br>
                        <input type="submit" name="submit" class="btn btn-success" value="Upload News">
                        </form>
                            
                        </div>

                        <div class="col-md-6">
                            <h4>All News</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="color: white;">#</th>
                                        <th style="color: white;">Auth</th>
                                        <th style="color: white;">Auth Image</th>
                                        <th style="color: white;">News Image</th>
                                        <th style="color: white;">Title</th>
                                        <th style="color: white;">Category</th>
                                        <th style="color: white;">Description</th>
                                        <th style="color: white;">Tags</th>
                                        <th style="color: white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM news";
                                    $result = $con->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                          $images = $row['images'];
                                          $image = explode(",",$images);
                                        ?>
                                    <tr>
                                        <td style="color: white;"><?php echo $row['id']?></td>
                                        <td style="color: white;"><?php echo $row['authName']?></td>
                                        <td style="color: white;"><img style="width: 50px; height: 50px;" src="../uploads/<?php echo $row['authImage']?>" alt=""></td>
                                        <td style="color: white;"><img style="width: 50px; height: 50px;" src="../uploads/<?php echo $image[0]?>" alt=""></td>
                                        <td style="color: white;"><?php echo $row['title']?></td>
                                        <td style="color: white;"><?php echo $row['category']?></td>
                                        <td style="color: white;"><?php echo substr($row['description'],1,30)?>...</td>
                                        <td style="color: white;"><?php echo $row['tags']?></td>
                                        <td style="color: white;"><a href="backend/editNews.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm mt-2">Edit</a> <a href="backend/deleteNews.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm mt-2" onclick="return confirm('Do you realy want to delete this?')">Delete</a></td>
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