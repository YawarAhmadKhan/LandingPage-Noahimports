<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $title1 = $_POST['title1'];
    $title2 = $_POST['title2'];
    $paragraph = $_POST['paragraph'];

    $sql = "UPDATE `aboutsteptext` SET `title1`='$title1',`title2`='$title2',`paragraph`='$paragraph' WHERE 1";

if ($con->query($sql) === TRUE) {
  header('location:../about.php');
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

    
}