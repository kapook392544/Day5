<?php
include_once "connect.php";

$student_id=$_POST['student_id'];
$name=$_POST['name'];
$group_id=$_POST['group_id'];
$level_group=$_POST['level_group'];

$sql="insert into student2 values('$student_id','$name','$group_id','$level_group')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:show1.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  