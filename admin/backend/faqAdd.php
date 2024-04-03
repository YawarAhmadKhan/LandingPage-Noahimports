<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    // Insert Data
    $sql = "INSERT INTO `faq`(`question`, `answer`) VALUES ('$question', '$answer')";
    $res = mysqli_query($con, $sql);
    if($res){
        header('location:../faq.php');
    }else{
        echo $con->error;
    }

}
?>