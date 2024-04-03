<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $name = $_POST['cname'];
    $review = $_POST['review'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "INSERT INTO `clientreview`(`name`, `review`, `image`) VALUES ('$name', '$review', '$filename')";
        $res = mysqli_query($con,$sql);
        if($res){
            header('location:../home.php');
        }else{
            echo "No";
        }
    }
    
}
?>