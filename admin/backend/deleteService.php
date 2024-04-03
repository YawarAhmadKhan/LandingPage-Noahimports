<?php
include "../../db/db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `servicetabbutton` WHERE unique_id = '$id'";
$res = mysqli_query($con, $sql);
if($res){
    $sql = "DELETE FROM `servicetabdata` WHERE buttonid = '$id'";
$res = mysqli_query($con, $sql);
if($res){
    header('location:../services.php');
}else{  
    echo $con->error;
}
}else{  
    echo $con->error;
}

?>