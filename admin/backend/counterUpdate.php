<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $title1 = $_POST['title1'];
    $title2 = $_POST['title2'];
    $firsttext = $_POST['firsttext'];
    $firstnum = $_POST['firstnum'];
    $secondtext = $_POST['secondtext'];
    $secondnum = $_POST['secondnum'];
    $thirdtext = $_POST['thirdtext'];
    $thirdnum = $_POST['thirdnum'];
    $fourthtext = $_POST['fourthtext'];
    $fourthnum = $_POST['fourthnum'];

    $sql = "UPDATE `counter` SET `title1`='$title1',`title2`='$title2',`firsttext`='$firsttext',`firstnum`='$firstnum',`secondtext`='$secondtext',`secondnum`='$secondnum',`thirdtext`='$thirdtext',`thirdnum`='$thirdnum',`fourthtext`='$fourthtext',`fourthnum`='$fourthnum' WHERE 1";
    $res = mysqli_query($con, $sql);
    if($res){
        header('location:../counter.php');
    }else{
        echo $con->error;
    }





    
}
?>