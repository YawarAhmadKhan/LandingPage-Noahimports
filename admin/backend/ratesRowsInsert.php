<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $col1 = $_POST['col1d'];
    $col2 = $_POST['col2d'];
    $col3 = $_POST['col3d'];

    $sql = "INSERT INTO `ratesrows`(`col1`, `col2`, `col3`) VALUES ('$col1','$col2','$col3')";
    $res = mysqli_query($con, $sql);
    if($res){
        header('location:../ratesTable.php');
    }else{
        echo $con->error;
    }





    
}
?>