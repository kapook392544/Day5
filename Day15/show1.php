<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<style>
    .mys{
     /*background-color: paleturquoise; */
    background-image: url(https://sudsapda.com/app/uploads/2019/08/%E0%B8%8B%E0%B8%B5%E0%B8%A3%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B9%8C%E0%B9%80%E0%B8%81%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B5%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%9B%E0%B8%B1%E0%B8%87.jpg);
    }
 
 .jtex{
    color: white;
    text-shadow: 20px 20px #000000;
 }
</style>
<div class="jumbotron text-center text-dark mys" style="margin-bottom:0">
<h1 class="jtext">เพจ Kapook Ka</h1>
<h3 class="jtext">ซีรี่ย์จีน</h3>
<h3 class="jtext">ซีรี่ย์เกาหลี</h3>
</div>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark text-danger">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="page1.php">หน้า1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="page2.php">หน้า2</a>
      </li>
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">ข้อมูลเพิ่มเติม</a>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="add_student.php">เพิ่มข้อมูล</a>
    <a class="dropdown-item" href="show1.php">เเสดงข้อมูล</a>
      <a class="dropdown-item" href="#">สรุปจำนวน</a>
      <a class="dropdown-item" href="#">รายงาน</a>
    </div>
  </li>
      <li class="nav-item">
        <a class="nav-link" href="page3.php">หน้า3</a>
      </li>  
  </li>
      <li class="nav-item">
        <a class="nav-link" href="page4.php">หน้า4</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
     </li>                    
   </ul>
</div> 
</nav>  
<div class="container">
  <?php
  include_once('connect.php'); 

  $sql = "select * from student2";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      ?>
      <table border='1'>
          <tr>
              <th>รหัสนักเรียน</th>
              <th>ชื่อนักเรียน</th>
              <th>รหัสเกรด</th>
              <th>ตัวย่อกลุ่มห้องเรียน</th>
              <th>แก้ไข</th>
              <th>ลบ</th>
          </tr>
      
      <?php
      while($row = mysqli_fetch_assoc($result)) {
          ?>
        <tr>
              <td><?php echo $row['student_id']?></td>
              <td><?php echo $row['name']?></td>
              <td><?php echo $row['group_id']?></td>
              <td><?php echo $row['level_group']?></td>
              <td>
                <a href="edit_student.php?id=<?php echo $row['student_id']?>">
                  <button class="btn bg-info"><i class="fas fa-edit"></i>เเก้ใข</button>
                </a>
              </td>
              <td>
                <a href="delete.php?id=<?php echo $row['id']?>">
                  <button class="btn bg-danger">
                  <i class="fas fa-trash-alt"></i><a href="delete.php?id=<?php echo $row['student_id']?>">ลบ</button>
                </a>
              </td>          
        </tr>          
        <?php
        }
        ?>               
        </table>                
        <?php                                
        } else {            
        echo "0 results";            
        }            
        mysqli_close($conn);
        ?>                       
</div>          
              <style>          
              .fsty{
                  padding-top: 10px;
                  padding-bottom: 10px;
              }
          </style>
<div class="jumbotron bg-secondary text-white fsty " style="margin-bottom:0">
          <div class="row">
              <div class="col-sm-6">
                    <span>
                    @ วิทยาลัยเทคนิคชลบุรี แผนกเทคโนโลยีสารสนเทศ
                    </span>
          </div>
          <div class="col-sm-6 text-right">
                  <span>
                  จัดทำโดยนางสาว ภัทรวดี นะราชรัมย์  1/2 เลขที่ 027  
                  </span>
          </div> 
</div>
                      



                  

                