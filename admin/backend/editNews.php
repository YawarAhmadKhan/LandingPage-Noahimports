<?php
include "../../db/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM news WHERE id = '$id'";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){
        $title = $row['title'];
        $category = $row['category'];
        $description = $row['description'];
        $tags = $row['tags'];
        $auth = $row['authName'];
     }
}

// Update Data
if(isset($_POST['submit'])){
    $auth = $_POST['auth'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $tags = $_POST['tags'];
    $date = date('d-m-y');

    // Auth Image
    $filename2 = $_FILES["authImage"]["name"];
    $tempname2 = $_FILES["authImage"]["tmp_name"];    
    $folder2 = "../../uploads/".$filename2;
    move_uploaded_file($tempname2, $folder2);

     // Multiple News Images
     $mulImages = $_FILES['newsImage']['name'];
     $mulImages = implode(",",$mulImages);
    foreach($_FILES['newsImage']['name'] as $key=>$val){
        move_uploaded_file($_FILES['newsImage']['tmp_name'][$key],'../../uploads/'.$val);
    }

    // Update Data
    $sql = "UPDATE `news` SET `authName`='$auth',`authImage`='$filename2',`images`='$mulImages',`title`='$title',`category`='$category',`description`='$description',`tags`='$tags',`date`='$date' WHERE id = '$id'";
    $res = mysqli_query($con,$sql);
    if($res){
        header('location:../news.php');
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

    <title>Edit News</title>
  </head>
  <body class="bg-dark text-light">
    <div class="conatiner">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 style="text-align: center;">Edit News</h1>
                <form action="#" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="">Auth</label>
                        <input type="text" class="form-control" value="<?php echo $auth?>" name="auth">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" value="<?php echo $title?>" name="title">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class="form-control" value="<?php echo $category?>" name="category">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo $description;?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tags</label>
                        <input type="text" class="form-control" value="<?php echo $tags?>" name="tags">
                    </div>
                    <div class="form-group">
                        <label for="">Auth Image</label>
                        <input type="file" class="form-control" name="authImage">
                    </div>
                    <div class="form-group">
                        <label for="">News Images</label>
                        <input type="file" class="form-control" name="newsImage[]" multiple>
                    </div><br>
                    <input type="submit" class="btn btn-success btn-block" name="submit" value="Update News" style="margin-bottom: 20px;">
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