<?php
include "../../db/db.php";
if(isset($_POST['submit'])){
    $col1 = $_POST['col1'];
    $col2 = $_POST['col2'];
    $col3 = $_POST['col3'];

    $sql = "UPDATE `ratescolumn` SET `col1`='$col1',`col2`='$col2',`col3`='$col3' WHERE 1";
    $res = mysqli_query($con, $sql);
    if($res){
        header('location:../ratesTable.php');
    }else{
        echo $con->error;
    }





    
}
?>