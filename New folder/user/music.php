<?php 
 include("../admin/createActivity.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music</title>
    <link rel="stylesheet" href="club.css" />
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="notification.css"/>
  </head>
  <body>
    
   <div class="mother">
          
    <nav>
        <a href="homePage.php" class="logo"><img src="newLogo.png"></a>
        <div class="link">
          <a href="homePage.php" class="link">Home</a>
          <a href="About.php" class="link">About Us</a>
          <a href="annoncement.php" class="link">Events</a>
          
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
        </a>
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
            <h1>UCSM Music CLUB</h1>
            <p>Step into the melodious realm of our UCSM's Music Club, where harmonies and rhythms converge to create unforgettable experiences. Whether you're a virtuoso or a novice, our inclusive community celebrates musical diversity and creativity. From jam sessions to performances, workshops to open mics, our club provides a platform for students to express themselves, collaborate, and cultivate their musical talents.
            </p>
        </div>
       
        <br>
        
    </section>
    <hr>
    <div class="arrow">
      <a href="homePage.php">
        <img src="../image/arrow-left-circle1.svg" >
      </a>
      </div>
    <h1>Memories Of Music CLub</h1>
<div class="grid-container">
  <div>
    <img class='grid-item grid-item-1' src='../image/music1.jpg' alt=''>
    
  </div>
  <div>
    <img class='grid-item grid-item-2' src='../image/music2.jpg' alt=''>
    
  </div>
  <div>
    <img class='grid-item grid-item-3' src='../image/music3.jpg' alt=''>
    
  </div>
  <div>
    <img class='grid-item grid-item-4' src='../image/music4.jpg' alt=''>
    
  </div>
  <div>
    <img class='grid-item grid-item-5' src='../image/music5.jpg' alt=''>
  </div>
  <div>
    <img class='grid-item grid-item-6' src='../image/music6.jpg' alt=''>
  </div>
  <div>
    <img class='grid-item grid-item-7' src='../image/music7.jpg' alt=''>
  </div>
  <div>
    <img class='grid-item grid-item-8' src='../image/music8.jpg' alt=''>
  </div>
  <div>
    <img class='grid-item grid-item-9' src='../image/music9.jpg' alt=''>
  </div>
  <div>
    <img class='grid-item grid-item-10' src='../image/music10.jpg' alt=''>
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
             $sql1="SELECT * FROM memories where title='Music Club'";
             if($result=mysqli_query($con,$sql1)){
              while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                <form action="adminMusic.php" method="post">

                            
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

<h1>Member List</h1>
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
              $sql = "SELECT * FROM student where club_name='music club'";
              if($result = mysqli_query($con, $sql)){
                  while ($row = mysqli_fetch_array($result)) {
                    
          ?>
                <tr>
                  <form action="adminMusic.php" method="post">
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
        </tbody>
    </table>
<br>
<hr>

      <h1>Acitivity For Today!</h1>
      <div class="dashboard-box">
        <h2> Title</h2>
        <div class="announcement-details">
        <?php 
        
        $sql="SELECT * FROM clubs WHERE club_name='Music club' ORDER BY club_id DESC";
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

