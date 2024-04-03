<?php
include "../../db/db.php";
$id = $_GET['id'];

// Select Data
$sql = "SELECT * FROM faq WHERE id = '$id'";
$res = mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){
        $question = $row['question'];
        $answer = $row['answer'];

    }
}

// Update Data
if(isset($_POST['submit'])){
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $sql = "UPDATE `faq` SET `question`='$question',`answer`='$answer' WHERE id = '$id'";
    $res = mysqli_query($con,$sql);
    if($res){
        header('location:../faq.php');
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
                <h1 style="text-align: center;">FAQ's Edit</h1>
                <form action="#" method="POST">
                <div class="form-group">
                        <label for="">Question</label>
                        <input type="text" class="form-control" value="<?php echo $question?>" name="question">
                    </div>
                    <div class="form-group">
                        <label for="">Answer</label>
                        <textarea name="answer" id="" cols="30" rows="10" class="form-control"><?php echo $answer?></textarea>
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