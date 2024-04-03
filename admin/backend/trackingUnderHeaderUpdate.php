<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $title1 = $_POST['title1'];
    $title2 = $_POST['title2'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "UPDATE `trackingunderheader` SET `title1`='$title1',`title2`='$title2',`image`='$filename' WHERE 1";
        $res = mysqli_query($con,$sql);
        if($res){
            header('location:../tracking.php');
        }else{
            echo "No";
        }
    }
    
}
?>