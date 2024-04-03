<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $uni_id = rand();
    $title = $_POST['title'];
    $description = $_POST['description'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "INSERT INTO `servicetabbutton`(`title`, `unique_id`) VALUES ('$title', '$uni_id')";
        $res = mysqli_query($con,$sql);
        if($res){
            // Amother Query
            $sql = "INSERT INTO `servicetabdata`(`title`, `description`, `image`, `buttonid`) VALUES ('$title','$description','$filename','$uni_id')";
            $res = mysqli_query($con,$sql);
            if($res){
                header('location:../services.php');
            }else{
                $con->error;
            }


        }else{
            echo $con->error;
        }
    }
}

?>