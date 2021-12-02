<?php
session_start(); 
$user=$_POST['uname'];
$pass=$_POST['psw'];

if ($user =='Pattarawadee' and $pass =='1234'){
    $_SESSION['user']=$user;
    $_SESSION['name'] = "ภัทรวดี นะราชรัมย์";
    header("location:page1.php");
}else{
  header("location:index.php");
}