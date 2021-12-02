<?php
include_once "connect.php";

$id=$_POST['student_id'];
$name=$_POST['name'];
$group_id=$_POST['group_id'];
$level_group=$_POST['level_group'];

$sql="update student2 set name='$name' ,group_id='$group_id' ,level_group='$level_group' where student_id='$id ' ";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:show1.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  