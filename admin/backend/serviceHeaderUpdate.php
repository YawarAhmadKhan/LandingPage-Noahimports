<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $title = $_POST['title'];

    $sql = "UPDATE `serviceheader` SET `title`='$title' WHERE 1";
    $res = mysqli_query($con,$sql);
    if($res){
        header('location:../services.php');
    }else{
        echo "No";
    }
    
}
?>