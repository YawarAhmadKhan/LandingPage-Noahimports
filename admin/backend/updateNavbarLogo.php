<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $url = $_POST['url'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "UPDATE `navbarlogo` SET `image`='$filename',`url`='$url' WHERE 1";
        $res = mysqli_query($con,$sql);
        if($res){
            header('location:../index.php');
        }else{
            echo "No";
        }
    }
    
}
?>