<?php
include "../../db/db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "SELECT * FROM ratesrows WHERE id = '$id'";
$run = mysqli_query($con, $sql);
if(mysqli_num_rows($run) > 0){
    while($row = mysqli_fetch_array($run)){
        $col1 = $row['col1'];
        $col2 = $row['col2'];
        $col3 = $row['col3'];

    }
}

// Update Data
if(isset($_POST['submit'])){
    $col1 = $_POST['col1'];
    $col2 = $_POST['col2'];
    $col3 = $_POST['col3'];
    

    $sql = "UPDATE `ratesrows` SET `col1`='$col1',`col2`='$col2',`col3`='$col3' WHERE id = '$id'";
    $run = mysqli_query($con,$sql);
    if($run){
        header('location:../ratesTable.php');

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
                  <form action="#" method="POST">
                      <div class="form-group">
                        <label for="">Column 1 Data</label>
                        <input type="text" name="col1" class="form-control" value="<?php echo $col1;?>">
                      </div>
                      <div class="form-group">
                        <label for="">Column 2 Data</label>
                        <input type="text" name="col2" class="form-control" value="<?php echo $col2;?>">
                      </div>
                      <div class="form-group">
                        <label for="">Column 3 Data</label>
                        <input type="text" name="col3" class="form-control" value="<?php echo $col3;?>">
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