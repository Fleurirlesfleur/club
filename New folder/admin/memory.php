<?php 
  include('../config/dbase.php');
  //session_start();
  /*function getprofile()
  {
    global $con;
    $id=$_SESSION['uid'];
    $sql1="Select * from events where eve_id=$id";
    return mysqli_query($con,$sql1);
  }*/
  if(isset($_POST['save'])){
    $title=$_POST['title'];
    $mdate=$_POST['date'];
    $mdesc=$_POST['description'];

  $sql="INSERT INTO memories(title,date,description) VALUES('$title','$mdate','$mdesc')";
  $rs=mysqli_query($con,$sql);
  //header('location: adminClubManagement.php');

  }
  //$sql2="Select * from events";
?>