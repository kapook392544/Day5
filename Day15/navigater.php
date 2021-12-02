<?php session_start(); ?>
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
      <a class="dropdown-item" href="#">1</a>
      <a class="dropdown-item" href="#">2</a>
      <a class="dropdown-item" href="#">3</a>
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
<div>
    ผู้ใช้งาน : <?php echo $_SESSION['name'] ?>
  </div>  
</nav>  
<?php
if ($_SESSION['user']==''){
    header("location:index.php");
}
?>

    
    
  
  