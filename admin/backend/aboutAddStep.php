<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
  $filename = $_FILES["file"]["name"];
  $tempname = $_FILES["file"]["tmp_name"];    
  $folder = "../../uploads/".$filename;
  move_uploaded_file($tempname, $folder);
    $title = $_POST['title'];
    $paragraph = $_POST['paragraph'];

    $sql = "INSERT INTO `aboutsteps`(`title`, `paragraph`, `image`) VALUES ('$title', '$paragraph', '$filename')";
    
    if ($con->query($sql) === TRUE) {
      header('location:../about.php');
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>