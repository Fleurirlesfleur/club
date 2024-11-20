<?php
  include('../config/dbase.php');
  session_start();
  if(isset($_POST['login'])){
  $name=$_POST['name'];
  $password=$_POST['password'];

  $sql="INSERT INTO admins(a_name,a_pwd) VALUES ('$name','$password')";
  $rs=mysqli_query($con,$sql);
  }
?>