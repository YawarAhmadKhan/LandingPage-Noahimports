<?php
include "../../db/db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `faq` WHERE id = '$id'";
$res = mysqli_query($con, $sql);
if($res){
    header('location:../faq.php');
}else{
    echo $con->error;
}
?>