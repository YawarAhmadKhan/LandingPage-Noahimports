<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $data = $_POST['data'];

    $sql = "UPDATE `termscondition` SET `data`='$data' WHERE 1";
    $res = mysqli_query($con, $sql);
    if($res){
        header('location:../termsCondition.php');
    }else{
        echo $con->error;
    }
}