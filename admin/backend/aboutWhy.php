<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    

    $sql = "UPDATE `aboutwhynoha` SET `title`='$title',`description`='$desc' WHERE 1";
    $res = mysqli_query($con, $sql);
    if($res){
        header('location:../about.php');
    }else{
        echo $con->error;
    }





    
}
?>