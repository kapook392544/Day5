<?php
session_start(); 
$user=$_POST['uname'];
$pass=$_POST['psw'];

if ($user =='kapuk' and $pass =='392544'){
    $_SESSION['user']=$user;
    $_SESSION['name'] = "ภัทรวดี นะราชรัมย์";
  header("location:page1.php");
}else{
  header("location:index.php");
}