<?php
include "../../db/db.php";
$id = $_GET['id'];
$sql = "DELETE  FROM `navbarlinks` WHERE id = $id";
$res = mysqli_query($con,$sql);
if($res){
    header('location:../index.php');
    
}else{
    echo "Error";
    
}
?>