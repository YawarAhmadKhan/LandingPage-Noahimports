<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $category = $_POST['category'];
    $detail = $_POST['detail'];
    $tags = $_POST['tags'];
    $authName = $_POST['authName'];
    $filename2 = $_FILES["authImage"]["name"];
    $tempname2 = $_FILES["authImage"]["tmp_name"];    
    $folder2 = "../../uploads/".$filename2;
    move_uploaded_file($tempname2, $folder2);
    $date = date('d-m-y');
    // Multiple Images
    $mulImages = $_FILES['newsImages']['name'];
    $mulImages = implode(",",$mulImages);
   foreach($_FILES['newsImages']['name'] as $key=>$val){
       move_uploaded_file($_FILES['newsImages']['tmp_name'][$key],'../../uploads/'.$val);
   }
    // Multiple Images
   

    $sql = "INSERT INTO `news`(`authName`, `authImage`, `images`, `title`, `category`, `description`, `tags`, `date`) VALUES ('$authName', '$filename2', '$mulImages', '$title', '$category', '$detail', '$tags', '$date')";

if ($con->query($sql) === TRUE) {
  header('location:../news.php');
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

    
}
?>