<?php include_once 'head.php'?>
<?php require_once 'jumbotron.php';?>
<?php require_once 'navigater.php';?>
<div class="container" style="margin-top:30px">
  <h3>เพิ่มข้อมูลนักเรียน</h3>
    <div class='col-md-4'>
      <form action="add_student.pr.php" method='post'>
        <div class="form-group">
          <label for="student_id">รหัสนักเรียน</label>
          <input type="text" class="form-control" placeholder="รหัสนักเรียน" name="student_id">
        </div>
        <div class="form-group">
          <label for="name">ชื่อนักเรียน</label>
          <input type="text" class="form-control" placeholder="ชื่อนักเรียน" name="name">
        </div>
        <div class="form-group">
          <label for="group_id">รหัสเกรด</label>
          <input type="text" class="form-control" placeholder="รหัสเกรด" name="group_id">
        </div>
        <div class="form-group">
          <label for="level_group">ตัวย่อกลุ่มห้องเรียน</label>
          <input type="text" class="form-control" placeholder="ตัวย่อกลุ่มห้องเรียน" name="level_group">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  <br>
</div>
<?php include_once 'footer.php'?>
</body>
</html>
      
  


 


    



