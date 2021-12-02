<?php session_start(); ?>
<nav class="navbar navbar-expand-sm bg-danger navbar-danger">
      <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="page1.php">เพจ 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="page2.php">เพจ 2 </a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">ข้อเสนอเเนะ</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">การปฏิบัติ</a>
          <a class="dropdown-item" href="#">ข้อบังคับ</a>
          <a class="dropdown-item" href="#">ความสุจริต</a>  
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="page3.php">เพจ 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="page4.php">เพจ 4</a>
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