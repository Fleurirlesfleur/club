<?php  
  include('../config/dbase.php');
  session_start();

  if(isset($_POST['edit'])){
    $cname=$_POST['header'];
    $cdate=$_POST['date'];
    $ctime=$_POST['time'];
    $cdesc=$_POST['description'];
 
    $sql="INSERT INTO clubs(club_name,time,date,description) VALUES('$cname','$ctime','$cdate','$cdesc')";
    $rs=mysqli_query($con,$sql);
    //header('location: adminClubManage.php');
  }
?>