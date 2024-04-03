<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $year = $_POST['year'];
    $title = $_POST['title'];
    $paragraph = $_POST['paragraph'];
    $btntext = $_POST['btntext'];
    $btnurl = $_POST['btnurl'];




    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
    $folder = "../../uploads/".$filename;
    if(move_uploaded_file($tempname, $folder)){
        $sql = "UPDATE `aboutunderheader` SET `image`='$filename',`year`='$year',`title`='$title',`paragraph`='$paragraph',`btntext`='$btntext',`btnurl`='$btnurl' WHERE 1";
        
        if ($con->query($sql) === TRUE) {
         header('location:../about.php');
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }

    }
}
?>