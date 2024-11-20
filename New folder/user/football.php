<?php 
 include("../admin/createActivity.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Football</title>
    <link rel="stylesheet" href="club.css" />
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="notification.css" />
  </head>
  <body>
    
   <div class="mother">
          
    <nav>
      <a href="homePage.php" class="logo"><img src="newLogo.png"></a>
      <div class="link">
        <a href="homePage.php" class="link">Home</a>
        <a href="About.php" class="link">About Us</a>
        <a href="annoncement.php" class="link">Events</a>
        <!--<a href="contact.php" class="link">Contact</a>-->
        
        
  <!--<div class="notification-container">
   <img src= "bell-fill.svg" class="notification-btn" alt=""  width="25px" height="25px">
    <div class="notification-content">
        <a href="#">You have submitted the registration form</a>
        <a href="#">Notification 2</a>
        <a href="#">Notification 3</a>
    </div>
  </div>-->
        
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
      </div>
    </nav>
        
    
    <section class="hero">
        <div class="hero-content">
            <h1>UCSM FOOTBALL CLUB</h1>
            <p>Join our UCSM's Football Club and immerse yourself in the exhilarating world of the beautiful game. Whether you're a seasoned player or just looking to kick around with friends, our club offers a vibrant community where passion for football thrives. From intense matches to friendly tournaments, we foster teamwork, skill development, and a love for the sport both on and off the field.
            </p>
        </div>
        
    </section>
    
    <hr>
    <div class="arrow">
      <a href="homePage.php">
        <img src="../image/arrow-left-circle1.svg" >
      </a>
      </div>
    <h1>Memories Of FootBall CLub</h1>
<div class="grid-container">
  <div>
    <img class='grid-item grid-item-1' src='football1.jpg' alt=''>

  </div>
  <div>
    <img class='grid-item grid-item-2' src='football2.jpg' alt=''>
  
  </div>
  <div>
    <img class='grid-item grid-item-3' src='football3.jpg' alt=''>

  </div>
  <div>
    <img class='grid-item grid-item-4' src='football4.jpg' alt=''>
    
  </div>
  <div>
    <img class='grid-item grid-item-5' src='football5.jpg' alt=''>
 
  </div>
  <div>
    <img class='grid-item grid-item-6' src='football6.jpg' alt=''>
    
  </div>
  <div>
    <img class='grid-item grid-item-7' src='football7.jpg' alt=''>
   
  </div>
  <div>
    <img class='grid-item grid-item-8' src='football8.jpg' alt=''>
    
  </div>
  <div>
    <img class='grid-item grid-item-9' src='football9.jpg' alt=''>
   
  </div>
  <div>
    <img class='grid-item grid-item-10' src='football10.jpg' alt=''>
   
  </div>
</div>

<hr>
<br>

<div class="memories">
<h1>Memories</h1>
    <table>
        <thead>
            <tr>
            
               <th>Date</th>
               <th>Description</th>
              
               
            </tr>
        </thead>
        <tbody>
          <?php  
             include("../config/dbase.php");
             $sql1="SELECT * FROM memories where title='Football Club'";
             if($result=mysqli_query($con,$sql1)){
              while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                <form action="adminFootbal.php" method="post">

                            
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            
                  </form>
                </tr>
                <?php
              }
             }
          ?>
        </tbody>
    </table>
</div>
<br>
<hr>
<br>

<h1>Members List</h1>
    <table>
        <thead>
            <tr>
            <th>NAME</th>
               <th>MKPT</th>
               <th>CLUB NAME</th>
               <th>PHONE</th>
               <th>YEAR</th>
               <th>MAJOR</th>
               
            </tr>
        </thead>
        <tbody>
        <?php
            include("../config/dbase.php");
              $sql = "SELECT * FROM student where club_name='football club'";
              if($result = mysqli_query($con, $sql)){
                  while ($row = mysqli_fetch_array($result)) {
                    
          ?>
                <tr>
                  <form action="adminFootbal.php" method="post">
                <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['mkpt'] ?></td>
                            <td><?php echo $row['club_name'] ?></td>
                            <td><?php echo $row['ph'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            <td><?php echo $row['major'] ?></td>
                  </form>
                </tr>
                <?php
                  }
                }
                ?>
            <!--<tr>
                <td>1.</td>
                <td>Ma Hnin Wutt Yee Htun</td>
                <td>MKPT-6977</td>
                
            </tr>
            <tr>
                 <td>2.</td>
                 <td>Ma Phoo Myat Thwe</td>
                 <td>MKPT-7011</td>
                 
             </tr>
             <tr>
                <td>3.</td>
                <td>Ma Thant Shwe Yee Naing</td>
                <td>MKPT-7017</td>
                
            </tr>
            <tr>
                <td>4.</td>
                <td>Ma Ngu War Thein</td>
                <td>MKPT-6979</td>
                
            </tr>-->
        </tbody>
    </table>
<br>
<hr>

      <h1>Acitivity For Today!</h1>
      <div class="dashboard-box">
        <h2> Title</h2>
        <div class="announcement-details">
        <?php 
        
              $sql="SELECT * FROM clubs WHERE club_name='Football club' ORDER BY club_id DESC";
               $rs=mysqli_query($con,$sql);
               
              if(mysqli_num_rows($rs)>0){
                while($row=mysqli_fetch_assoc($rs)){
                  echo nl2br("From: " .$row['club_name']);
                  echo "<br>";
                  echo nl2br("Date: " .$row['date']);
                  echo "<br>";
                  echo "Time: " .$row['time'];
                  echo "<br>";
                  echo "Description: " .$row['description'];
                  echo "<br>";
                  echo "<br>";
                  echo "<hr>";
                  echo "<br>";
                }
              }
          ?>
        </div>
      </div>
      
      
    
    
<br>
<br>
<hr>
<footer>
  <div class="footer">
    

    <ul class="list">
    <p class="copyright">
      UCSM Club Information System@2024
    </p>
  </div>
</footer>
</div>

  </body>
</html>

