<?php 
session_start();

$server = "localhost";
$user = "root";
$password = "";
$database = "lifeatnub";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

    $name= $_POST['user'];
$password= $_POST['password'];

     $s="SELECT *FROM userregistation WHERE name='$name' && password='$password' ";
     
$result= mysqli_query($conn,$s);
  $num = mysqli_num_rows($result);
  
  if($num == 1){
    $_SESSION['username']=$name;
   header('location:home.php');
    
  }
  else{
    header('location:login.php');
  
  }

?>