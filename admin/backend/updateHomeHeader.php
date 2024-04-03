<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $text = $_POST['text'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "UPDATE `homeheader` SET `logo`='$filename',`text`='$text' WHERE 1";
        $res = mysqli_query($con,$sql);
        if($res){
            header('location:../home.php');
        }else{
            echo "No";
        }
    }
    
}
?>