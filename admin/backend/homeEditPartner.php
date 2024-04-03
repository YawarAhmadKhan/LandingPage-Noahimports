<?php
include "../../db/db.php";
$id = $_GET['id'];

// SELECT data
$sql = "SELECT `id`, `image` FROM `partners` WHERE id = '$id'";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){
        $image = $row['image'];
    }
}

// Update Data
if(isset($_POST['submit'])){
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "UPDATE `partners` SET `image`='$filename' WHERE id = '$id'";
        $res = mysqli_query($con, $sql);
        if($res){
            header('location:../home.php');
        }else{

        }
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit News</title>
  </head>
  <body class="bg-dark text-light">
    <div class="conatiner">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 style="text-align: center;">Partners Edit</h1>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <p>Old Image</p>
                <img src="../../uploads/<?php echo $image?>" width="100%" alt="" style="margin-top: 20px; margin-bottom: 20px;">
                <div class="form-group">
                    <label for="">Upload New Partners Image</label>
                    <input type="file" name="file" class="form-control">
                </div>    
                <br>
                    <input type="submit" class="btn btn-success btn-block" name="submit" value="Update FAQ's" style="margin-bottom: 20px;">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>