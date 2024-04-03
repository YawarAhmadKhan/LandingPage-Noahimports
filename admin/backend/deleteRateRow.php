<?php
include "../../db/db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$sql = "DELETE FROM `ratesrows` WHERE id = $id";
    $res = mysqli_query($con,$sql);
    if($res){
        header('location:../ratesTable.php');
    }else{
        echo $con->error;
    }
?>