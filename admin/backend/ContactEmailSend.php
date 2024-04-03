<?php
include "../../db/db.php";
if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subjects'];
   $message = $_POST['message'];

  // the message
$msg = "Mr. ".$name." \n Message you from Noah Imports.\n Client Information:\n Name: ".$name."\n Email: ".$email."\n Subject: ".$subject."\n Message: ".$message."";



// send email
if(mail("info@noahimports.com","Client Message From Noah Imports",$msg)){
    header('location:../../contact.php');
}else{
    echo "ERROR";
}



  
}