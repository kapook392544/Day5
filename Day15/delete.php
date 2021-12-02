<?php
include_once('connect.php'); 
$id=$_GET['id'];

$sql = "DELETE FROM student2 WHERE student_id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
 // header("locatiion:show1.php");//
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>