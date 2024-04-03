<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $para = $_POST['paragraph'];

    $sql = "UPDATE `aboutheader` SET `title`='$title',`paragraph`='$para' WHERE 1";
    $res = mysqli_query($con, $sql);
    if($res){
        header('location:../about.php');

    }else{
        echo "Error";
    }

}
?>