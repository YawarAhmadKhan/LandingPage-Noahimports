<?php
include "../../db/db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "SELECT * FROM aboutsteps WHERE id = '$id'";
$run = mysqli_query($con, $sql);
if(mysqli_num_rows($run) > 0){
    while($row = mysqli_fetch_array($run)){
        $title = $row['title'];
        $para = $row['paragraph'];
    }
}

// Update Data
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $para = $_POST['paragraph'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    move_uploaded_file($tempname, $folder);

    $sql = "UPDATE `aboutsteps` SET `title`='$title',`paragraph`='$para', `image`='$filename' WHERE id = '$id'";
    $run = mysqli_query($con,$sql);
    if($run){
        header('location:../about.php');

    }else{
        echo $con->error;
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

    <title>Noah Imports</title>
  </head>
  <body class="bg-dark text-light">
      <div class="container">
          <div class="row">
              <div class="col-md"></div>
              <div class="col-md">
                  <h1>Edit Link</h1>
                  <form action="#" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $title;?>">
                      </div>
                      <div class="form-group">
                          <label for="">URL</label>
                          <textarea name="paragraph" id="" cols="30" rows="10" class="form-control"><?php echo $para;?></textarea>
                      </div>
                      <div class="form-group">
                          <label for="">Update Icon</label>
                          <input type="file" name="file" class="form-control">
                      </div>
                      <br>
                      <input type="submit" name="submit" class="btn btn-success" value="Update">
                  </form>
              </div>
              <div class="col-md"></div>
          </div>
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>