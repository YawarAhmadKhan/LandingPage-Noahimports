<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "UPDATE `servicelastbluesection` SET `image`='$filename' WHERE 1";
        $res = mysqli_query($con,$sql);
        if($res){
            header('location:../services.php');
        }else{
            echo "No";
        }
    }
    
}
?>