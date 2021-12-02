<?php include_once 'head.php'?>
<?php require_once 'jumbotron.php';?>
<?php require_once 'navigater.php';
include_once 'connect.php';

$id=$_GET['id'];
$sql="select * from student2 where student_id='$id' ";
//echo $sql;//
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="container" style="margin-top:30px">
  <h3>เเก้ใขข้อมูลนักเรียน</h3>
      <div class='col-md-4'>
        <form action="edit_student_pr .php" method='post'>
          <div class="form-group">
            <label for="student_id">รหัสนักเรียน</label>
            <input type="text" class="form-control" value="<?php echo $row['student_id']?>" name="student_id" readonly>
          </div>
          <div class="form-group">
            <label for="name">ชื่อนักเรียน</label>
            <input type="text" class="form-control" value="<?php echo $row['name']?>" name="name">
          </div>
          <div class="form-group">
            <label for="group_id">รหัสเกรด</label>
            <input type="text" class="form-control" value="<?php echo $row['group_id']?>" name="group_id">
          </div>
          <div class="form-group">
            <label for="level_group">ตัวย่อกลุ่มห้องเรียน</label>
            <input type="text" class="form-control" value="<?php echo $row['level_group']?>" name="level_group">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>

</div>
<?php require_once 'footer.php'?>
</body>
</html>

 


    



