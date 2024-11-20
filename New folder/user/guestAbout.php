<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Your Organization Name</title>
  <link rel="stylesheet" href="About.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="notification.css">
</head>
<body>
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
                <div class="circle"></div><div class="notification-content">
                <form action="guestHome.php" method="post">
                <input type="submit" name="statusbtn" value="You have submitted the registration form">
                </form>
                </div>';}
                echo $status;

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
      
      <a href="#">LogOut</a>
    </div>
    
  </nav>
  <div class="header">
    <h1>About Us</h1>
  </div>
   
  

  <section class="main-content">
    <article>
      <h2>Welcome to Your Organization Name</h2>
      <p>Welcome to our cutting-edge Club Information System, where we streamline club operations and empower members. Our platform offers intuitive interfaces for seamless event registration, and communication channels. With robust analytics and efficient administration tools, we ensure your club runs smoothly. Join us as we revolutionize club management and enhance member experiences.</p>
    </article>

    <article>
      <h2>Our Mission</h2>
      <p>Our mission at the Club Information System is to revolutionize club management by providing innovative tools and streamlined processes. We aim to empower clubs of all sizes to efficiently organize events, and foster community engagement. Through user-friendly interfaces and comprehensive features, we strive to enhance the overall experience for administrators and members alike, making club management more accessible and enjoyable.</p>
    </article>

    <article>
      <h2>Meet Our Team</h2>
      <p>Get acquainted with the dynamic individuals powering the Club Information System. Our team is composed of dedicated experts in software development, design, and customer support. With a shared passion for revolutionizing club management, we collaborate tirelessly to innovate and deliver tailored solutions. Meet the faces behind our commitment to enhancing club experiences and fostering community engagement.</p>
    </article>
  </section>

  <footer>
    <div class="footer">
      
      <p class="copyright">
        UCSM Club Information System@2024 Created by Group2
      </p>
    </div>
  </footer>

</body>
</html>
