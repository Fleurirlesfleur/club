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
        
  <a href="#">
       
      </a>
      </div>
      <div class="notification-container">
      <img src="reProfileIcon.png" class="notification-btn"  width="50px" height="50px">
      <div class="notification-content">
        <a href="index.php">LogOut</a>
      </div>
      </div>
    </nav>
        

    <section class="hero">
        <div class="hero-content">
            <h1>UCSM FOOTBALL CLUB</h1>
            <p>UCSM Football club,  unites students in athletic pursuit and camaraderie. 
              Training under experienced coaches, players develop skills and teamwork, 
              preparing for local tournaments and intercollegiate matches. With pride in representing their college,
               the club embodies sportsmanship and excellence. Supported by enthusiastic fans,UCSM Football club fosters a vibrant community of
                football enthusiasts, fostering friendships and memories that extend far beyond the field.
            </p>
        </div>
        <!--<hr>
        <br>
        <h2>Click The Button To Register Clubs</h2>
        <br>
        <a href="Registration.html" class="formBtn">Register</a>-->
    </section>
    <hr>
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
      
      <p class="copyright">
        UCSM Club Information System@2024 Created by Group2
  
      </p>
    </div>
  </footer>
</div>

  </body>
</html>

