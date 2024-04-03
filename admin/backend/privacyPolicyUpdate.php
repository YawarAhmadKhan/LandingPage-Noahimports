<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $data = $_POST['data'];

    $sql = "UPDATE `privacypolicy` SET `data`='$data' WHERE 1";
    $res = mysqli_query($con, $sql);
    if($res){
        header('location:../privacyPolicy.php');
    }else{
        echo $con->error;
    }
}