<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="userProfile.css"/>
    <link rel="stylesheet" href="notification.css">
  </head>
  <body>
    
   <div class="mother">
          
    <nav>
      <a href="guestHome.php" class="logo"><img src="newLogo.png"></a>
      <div class="link">
        <a href="guestHome.php" class="link">Home</a>
        <a href="guestAbout.php" class="link">About Us</a>
        <a href="guestEvent.php" class="link">Events</a>
        
        
  <div class="notification-container">
   <img src= "bell-fill.svg" class="notification-btn" alt=""  width="25px" height="25px">
   <?php
   include("../config/dbase.php");
   $sql="SELECT * from student WHERE status='Waiting'";
          $rs = mysqli_query($con,$sql);
          if(mysqli_num_rows($rs)>0){
          $user=mysqli_fetch_array($rs,MYSQLI_ASSOC);
          $status="";
          $id=$user['id'];
   if($user['status']=='Waiting'){
    $status .= '<div class="circle"></div>
                <div class="notification-content">
                <form action="" method="post">
                <input type="submit" name="statusbtn" value="You have submitted the registration form">
                </form>
                </div>';
                echo $status;}
                

                if(isset($_POST['statusbtn'])){
                  $query="UPDATE student set status='MEMBER' where id=$id";
                  if($con->query($query)){
                    header("location: homePage.php");
                  }
               
                  }
                }
                
    ?>
  </div>
        
  
        
    
      </div>
      <div class="notification-container">
      <img src="reProfileIcon.png" class="notification-btn"  width="50px" height="50px">
      <div class="notification-content">
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
   <hr>
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
             
            //if(($mkpt===$user['mkpt'])&& $password===$user['password']){
              
              $_SESSION["uid"]=$user['id'];
              if($user['status']=='MEMBER'){
                header("Location: homePage.php");
              }
                /*if(empty($user['club_name']) || $user['status']=='PENDING'){
                    header("Location: guestHome.php");
                }
                /*if($user['status']='MEMBER'){
                  header("Location: homePage.php");
                }*/
              die();
              
            }/*else{
              echo "<div class='alert'>⚠️Password does not match</div>";
            }
          }else{
              echo "<div class='alert'>⚠️Mkpt does not match</div>";
            }*/
            
          }
        
        ?>
        <br>
        <div class="register">
          <h1>Click The Button To Register Clubs</h1>
          <br>
          <br>
          <a href="Registration1.php" class="formBtn">Register</a>
        </div>
        <br>
        <br>
  <hr>
   <div class="container">
    <div class="box">
      <img src="homeFootball.jpg" alt="Image" class="image">
      <div class="content">
        <h2>Football Club</h2>
        <p>Welcome to the heart of UCSM! Our centralized Club Information System is the one-stop destination
    for the vibrant community of four key clubs that define our campus spirit. Dive into the dynamic worlds of the 
  .</p>
          <div class="seemoreBtn">
            <a href="guestfootball.php">
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
            <a href="guestArt.php">
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
            <a href="guestPhoto.php">
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
            <a href="guestMusic.php">
            <button>See More</button>
            </a>
          </div>
       
      </div>
    </div>
  </div>
</div>
  <footer>
    <div class="footer">
      
      <p class="copyright">
        UCSM Club Information System@2024
      </p>
    </div>
  </footer>
 
  </body>
</html>

