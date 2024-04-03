<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $heading = $_POST['heading'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $email = $_POST['email'];





    $sql = "UPDATE `contact` SET `heading`='$heading',`phone`='$number',`address`='$address',`email`='$email' WHERE 1";

if ($con->query($sql) === TRUE) {
  header('location:../contact.php');
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

    
}