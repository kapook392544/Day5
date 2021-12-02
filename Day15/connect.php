<?php
$servername = "localhost";
$username = "root";
$password = "123456789k";
$dbname = "it64";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}