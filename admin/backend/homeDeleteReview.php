<?php
include "../../db/db.php";
$id = $_GET['id'];
$sql = "DELETE FROM `clientreview` WHERE id = '$id'";
$res = mysqli_query($con, $sql);
if($res){
    header('location:../home.php');
}else{
    echo "NO";
}
?>