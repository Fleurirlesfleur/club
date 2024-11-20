<?php
  include("../admin/announcement.php");
 // session_start();
  //$rs=getprofile();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Announcement Dashboard</title>
  <link rel="stylesheet" href="announcement.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="notification.css">
</head>
<body>
  

      
      <div class="dashboard-box">
        <!--<h2>Announcement Title</h2>-->
        <div class="announcement-details">
          
          <!--<p>Date: <span id="announcement-date"></span></p>
          <p>Time: <span id="announcement-time"></span></p>
          <p>Description: <span id="announcement-description"></span></p>-->
        </div>
      <hr>
<br><br>
      
        <h2>Announcements</h2><br>
        <div class="announcement-details">
           <?php 
              $sql="SELECT * FROM events ORDER BY eve_date DESC";
               $rs=mysqli_query($con,$sql);
               
              if(mysqli_num_rows($rs)>0){
                while($row=mysqli_fetch_assoc($rs)){
                  echo nl2br("From: " .$row['eve_name']);
                  echo "<br>";
                  echo nl2br("Date: " .$row['eve_date']);
                  echo "<br>";
                  echo "Time: " .$row['eve_time'];
                  echo "<br>";
                  echo "Description: " .$row['eve_desc'];
                  echo "<br>";
                  echo "<br>";
                  echo "<hr>";
                  echo "<br>";
                }
              }
          ?>
        </div>
    <hr>
      <br> <br>
      
        <!--<h2>Announcement Title</h2>
        <div class="announcement-details">
            <p>Date       :15.2.2024</p>
            <p>Time       :13 PM</p>
            <p>Description:Get ready, football enthusiasts! We are thrilled to announce a thrilling football match that will set your adrenaline pumping. Mark your calendars for [Date] at [Time] as our teams clash on the field in an epic battle for victory. Join us at [Location] for an unforgettable experience filled with skillful plays, cheers, and unforgettable moments. Don't miss out on the action – it's a match you won't want to miss! See you there!</p>
        </div>-->
      </div>
      <div class="arrow">
      <a href="dashboard.php">
        <img src="../image/arrow-left-circle.svg" >
      </a>
      </div>
      
     
</body>
</html>
