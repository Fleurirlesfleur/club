<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="userProfile.css"/>
    <link rel="stylesheet" href="notification.css">
  </head>
  <body>
    
   <div class="mother">
          
    <nav>
     
      <a href="homePage.php" class="logo"><img src="newLogo.png"></a>
      <div class="link">
        <a href="homePage.php" class="link">Home</a>
        <a href="About.php" class="link">About Us</a>
        <a href="annoncement.php" class="link">Events</a>
        <!--<a href="contact.php" class="link">Contact</a>--->
    <!--<div class="notification-container">
      <div class="circle"></div>
   <img src= "bell-fill.svg" class="notification-btn" alt=""  width="25px" height="25px">
   
  </div>-->
  <a href="../chat/chat.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
          <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
        </svg>
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

   
    
    <div class="hero">
        <div class="hero-content">
            <h1>UCSM Club Information System</h1>
            <p>
                Welcome to the heart of UCSM! Our centralized Club Information System is the one-stop destination
                 for the vibrant community of four key clubs that define our campus spirit. Dive into the dynamic worlds of the 
                 Football, Art, Photo, and Music clubs, where passion meets strategy, and camaraderie takes center stage. 
                 Discover the latest updates, events, and achievements of each club, fostering a sense of unity and pride among our
                  UCSM members. Join us in celebrating the diverse talents and collective spirit that make our universit
                y clubs an integral part of campus life. Explore, engage, and become a part of something extraordinary
            </p>
        </div>
        <br>
        
   </div>
   <hr>
   <!--<hr>
        <br>
        <h2>Click The Button To Register Clubs</h2>
        <br>
        <a href="Registration1.php" class="formBtn">Register</a>-->
        
   <div class="container">
    <div class="box">
      <img src="homeFootball.jpg" alt="Image" class="image">
      <div class="content">
        <h2>Football Club</h2>
        <p>Welcome to the heart of UCSM! Our centralized Club Information System is the one-stop destination
    for the vibrant community of four key clubs that define our campus spirit. Dive into the dynamic worlds of the 
  .</p>
  <?php
        session_start();
        if(isset($_POST['login'])){
          $mkpt=$_POST['mkpt'];
          $password=$_POST['password'];
          require_once "../config/dbase.php";
          $sql="Select * from student WHERE mkpt= '$mkpt'";
          $rs = mysqli_query($con,$sql);
          $user=mysqli_fetch_array($rs,MYSQLI_ASSOC);
          if($user){
             
            if(($mkpt===$user['mkpt'])&& $password===$user['password']){
              
              $_SESSION["uid"]=$user['id'];
              if($user['status']=='MEMBER'){
                header("Location: homePage.php");
              }
                /*else if(empty($user['club_name']) || $user['status']=='PENDING'){
                    header("Location: guestHome.php");
                }*/
                /*if($user['status']='MEMBER'){
                  header("Location: homePage.php");
                }*/
              die();
              
            }else{
              echo "<div class='alert'>⚠️Password does not match</div>";
            }
          }else{
              echo "<div class='alert'>⚠️Mkpt does not match</div>";
            }
            
          }
        
        ?>
          <div class="seemoreBtn">
            <a href="football.php">
            <button>See More</button>
            </a>
          </div>
       
      </div>
    </div>
  </div>

  <div class="container">
    <div class="box">
      <img src="homeArt.jpg" alt="Image" class="image">
      <div class="content">
        <h2>Art Club</h2>
        <p>Welcome to the heart of UCSM! Our centralized Club Information System is the one-stop destination
    for the vibrant community of four key clubs that define our campus spirit. Dive into the dynamic worlds of the 
  .</p>
          <div class="seemoreBtn">
            <a href="art.php">
            <button>See More</button>
            </a>
          </div>
       
      </div>
    </div>
  </div>

 
  <div class="container">
    <div class="box">
      <img src="homePhoto.jpg" alt="Image" class="image">
      <div class="content">
        <h2>Photo Club</h2>
        <p>Welcome to the heart of UCSM! Our centralized Club Information System is the one-stop destination
    for the vibrant community of four key clubs that define our campus spirit. Dive into the dynamic worlds of the 
  .</p>
          <div class="seemoreBtn">
            <a href="photo.php">
            <button>See More</button>
        </a>
          </div>
       
      </div>
    </div>
  </div>

  <div class="container">
    <div class="box">
      <img src="homeMusic.jpg" alt="Image" class="image">
      <div class="content">
        <h2>Music Club</h2>
        <p>Welcome to the heart of UCSM! Our centralized Club Information System is the one-stop destination
    for the vibrant community of four key clubs that define our campus spirit. Dive into the dynamic worlds of the 
  .</p>
          <div class="seemoreBtn">
            <a href="music.php">
            <button>See More</button>
        </a>
          </div>
       
      </div>
    </div>
  </div>


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

