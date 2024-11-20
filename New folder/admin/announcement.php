<?php 
  include('../config/dbase.php');
  session_start();
  /*function getprofile()
  {
    global $con;
    $id=$_SESSION['uid'];
    $sql1="Select * from events where eve_id=$id";
    return mysqli_query($con,$sql1);
  }*/
  if(isset($_POST['create'])){
    $aname=$_POST['announcement-header'];
    $adate=$_POST['announcement-date'];
    $atime=$_POST['announcement-time'];
    $adesc=$_POST['announcement-description'];

  $sql="INSERT INTO events(eve_name,eve_time,eve_date,eve_desc) VALUES('$aname','$atime','$adate','$adesc')";
  $rs=mysqli_query($con,$sql);
  //header('location: dashboard.php');

  }
  //$sql2="Select * from events";
?>