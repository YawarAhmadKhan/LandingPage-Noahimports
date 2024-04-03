<?php
include "../../db/db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $reviews = $_POST['reviews'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    move_uploaded_file($tempname, $folder);
    $sql = "UPDATE `clientreview` SET `name`='$name',`review`='$reviews',`image`='$filename' WHERE id = '$id'";
    $res = mysqli_query($con, $sql);
    if($res){
        header('location:../home.php');
    }else{
        echo "NO";
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

    <title>Update Review</title>
  </head>
  <body class="bg-dark text-white">

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Edit Review</h1>
                <?php
                $sql = "SELECT * FROM clientreview WHERE id ='$id'";
                $result = $con->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $review = $row['review'];
                    $image = $row['image'];

                  }
                } else {
                  echo "0 results";
                }
                ?>
               <form action="#" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                    <label for="">Client Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                </div>
                <div class="form-group">
                    <label for="">Review</label>
                    <textarea name="reviews" id="" cols="30" rows="10" class="form-control"><?php echo $review;?></textarea>
                </div>
                <div class="form-group">
                    <label for="">OLD Image</label>
                    <img src="../../uploads/<?php echo $image;?>" width="200px" class="ml-5" alt="">
                </div>
                <div class="form-group">
                    <label for="">Upload New Image</label>
                    <input type="file" name="file" class="form-control"> 
                </div><br>
                <input type="submit" name="submit" class="btn btn-success btn-block" value="Update">
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