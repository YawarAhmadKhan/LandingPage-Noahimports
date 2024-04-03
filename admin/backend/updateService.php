<?php
include "../../db/db.php";
$id = $_GET['id'];

// SELECT DATA
$sql = "SELECT * FROM servicetabdata WHERE buttonid = '$id'";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){
        $title = $row['title'];
        $description = $row['description'];
    }
}

// UPDATE DATA
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "UPDATE `servicetabbutton` SET `title`='$title' WHERE unique_id = '$id'";
        $res = mysqli_query($con, $sql);
        if($res){

            $sql = "UPDATE `servicetabdata` SET `title`='$title',`description`='$description',`image`='$filename' WHERE buttonid = '$id'";
        $res = mysqli_query($con, $sql);
        if($res){
            header('location:../services.php');
        }else{
            echo $con->error;
        }
            
        }else{
            echo $con->error;
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

    <title>Noah Imports</title>
  </head>
  <body class="bg-dark text-light">
      <div class="container">
          <div class="row">
              <div class="col-md"></div>
              <div class="col-md">
                  <h1>Edit Service</h1>
                  <form action="#" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $title;?>">
                      </div>
                      <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"><?php echo $description;?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="file" class="form-control">
                      </div><br>
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