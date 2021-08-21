<?php 
session_start();
header('location:login.php');

$server = "localhost";
$user = "root";
$pass = "";
$database = "lifeatnub";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

    $name= $_POST['user'];
$password= $_POST['password'];

     $s="SELECT *FROM userregistation WHERE name='$name'";
$result= mysqli_query($conn,$s);
  $num = mysqli_num_rows($result);
  
  if($num == 1){
    "<script>alert('User Name Already Taken .')</script>";
    
  }
  else{
    $reg = " INSERT INTO userregistation(name,password) VALUES ('$name', '$password') ";
    mysqli_query($conn, $reg);
    "<script>alert('Registration Succesfull .')</script>";
  
  }

?>