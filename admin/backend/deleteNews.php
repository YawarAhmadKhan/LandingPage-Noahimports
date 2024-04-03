<?php
include "../../db/db.php";
$id = $_GET['id'];
$sql = "DELETE FROM news WHERE id = '$id'";

if ($con->query($sql) === TRUE) {
  header('location:../news.php');
} else {
  echo "Error deleting record: " . $con->error;
}

?>