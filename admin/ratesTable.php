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
            <h1 style="text-align: center; margin-top:20px">Rates Table CMS</h1>
            <div class="content" style="margin-top: 20px;">
                <div class="container">
                    <div class="row">
                    <h1>Section 1</h1>
                    <p>Example Image</p>
                    <img src="../uploads/rates.JPG" alt="" style="margin-bottom: 20px;">
                    
                        <div class="row" style="margin-bottom: 20px;">
                        <?php
                            $sql = "SELECT * FROM `ratescolumn`";
                            $res = mysqli_query($con, $sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    $col1 = $row['col1'];
                                    $col2 = $row['col2'];
                                    $col3 = $row['col3'];

                                 }
                            }
                            ?>
                        
                        <div class="col-md-6">
                            <form action="backend/ratesColumnUpdate.php" method="POST">
                            <h4>Update Table Column</h4>
                            <div class="form-group">
                                <label for="">Column 1</label>
                                <input type="text" name="col1" class="form-control" value="<?php echo $col1;?>"> 
                            </div>
                            <div class="form-group">
                                <label for="">Column 2</label>
                                <input type="text" name="col2" class="form-control" value="<?php echo $col2;?>">
                            </div>
                            <div class="form-group">
                                <label for="">Column 3</label>
                                <input type="text" name="col3" class="form-control" value="<?php echo $col3;?>">
                            </div>
                            <br>
                            <input type="submit" name="submit" class="btn btn-success" value="Update Columns Info"> 
                            </form>
                            <hr>
                            <form action="backend/ratesRowsInsert.php" method="POST">
                            <h4>Add data For Rows</h4>
                            <div class="form-group">
                                <label for="">Column 1 Data</label>
                                <input type="text" name="col1d" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Column 2 Data</label>
                                <input type="text" name="col2d" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Column 3 Data</label>
                                <input type="text" name="col3d" class="form-control" value="">
                            </div>
                            <br>
                            <input type="submit" name="submit" class="btn btn-success" value="Update Rates Table Info">
                            </form>

                        </div>

                        <div class="col-md-6">
                            <h4>All Data Of Rates Table</h4>
                            <table class="table">
                                <thead>


                                    <tr>
                                        <th style="color: white;"><?php echo $col1;?></th>
                                        <th style="color: white;"><?php echo $col2;?></th>
                                        <th style="color: white;"><?php echo $col3;?></th>
                                        <th style="color: white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                            $sql = "SELECT * FROM `ratesrows`";
                            $res = mysqli_query($con, $sql);
                            if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                                    ?>
                                        <tr>
                                            <td style="color: white;"><?php echo $row['col1'];?></td>
                                            <td style="color: white;"><?php echo $row['col2'];?></td>
                                            <td style="color: white;"><?php echo $row['col3'];?></td>
                                            <td style="color: white;"><a href="backend/deleteRateRow.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Do You Realy Want To Delete This?')">Delete</a>
                                            <a href="backend/updateRateRow.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-sm" style="color: white;">Edit</a>
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