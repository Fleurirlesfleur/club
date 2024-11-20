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
  <nav>
    <a href="homePage.php" class="logo"><img src="newLogo.png"></a>
    <div class="link">
      <a href="homePage.php" class="link">Home</a>
      <a href="About.php" class="link">About Us</a>
      <a href="annoncement.php" class="link">Events</a>
      <!--<a href="contact.php" class="link">Contact</a>-->
      
      
      <a href="../chat/chat.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
        <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
      </svg></a>
  
    </div>
    <div class="notification-container">
    <img src="reProfileIcon.png" class="notification-btn"  width="50px" height="50px">
    <div class="notification-content">
      <a href="userProfile.php" id="profile-link">Profile</a>
      <a href="index.php">LogOut</a>
    </div>
    
  </nav>

      
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
              $sql="SELECT * FROM events ORDER BY eve_id DESC";
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
      <a href="homePage.php">
        <img src="../image/arrow-left-circle.svg" >
      </a>
      </div>
      
      <footer>
        <div class="footer">
          
  
          <ul class="list">
          <p class="copyright">
            UCSM Club Information System@2024
          </p>
        </div>
      </footer>
</body>
</html>
