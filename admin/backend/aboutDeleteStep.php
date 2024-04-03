<?php
include "../../db/db.php";
$id = $_GET['id'];
$sql = "DELETE FROM aboutsteps WHERE id = '$id'";

if ($con->query($sql) === TRUE) {
  header('location:../about.php');
} else {
  echo "Error deleting record: " . $con->error;
}

?>