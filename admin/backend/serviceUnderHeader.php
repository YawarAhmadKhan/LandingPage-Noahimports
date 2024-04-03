<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $unique = rand();
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "INSERT INTO `servicetabbutton`(`button_title`, `unique_id`) VALUES ('$title','$unique')";
        $res = mysqli_query($con,$sql);
        if($res){
            $sql = "INSERT INTO `servicetabcontent`(`title`, `image`, `description`, `unique_id`) VALUES ('$title','$filename','$description','$unique')";
        $res = mysqli_query($con,$sql);
        if($res){
            header('location:../services.php');
        }else{
            echo "No";
        }
        }else{
            echo "No";
        }
    }
    
}
?>