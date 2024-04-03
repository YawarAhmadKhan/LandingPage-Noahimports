<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $para = $_POST['para'];

    $sql = "UPDATE `footer` SET `paragraph`='$para' WHERE 1";

if ($con->query($sql) === TRUE) {
  header('location:../footer.php');
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

    
}