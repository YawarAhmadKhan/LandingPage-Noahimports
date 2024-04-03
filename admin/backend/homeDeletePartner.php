<?php
include "../../db/db.php";
$id = $_GET['id'];
$sql = "DELETE FROM `partners` WHERE id = '$id'";
$res = mysqli_query($con, $sql);
if($res){
    header('location:../home.php');
}else{
    echo $con->error;
}
?>