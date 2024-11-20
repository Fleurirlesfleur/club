<?php 
    //session_start();
  include('editUser.php');
  $rs=getprofile();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="userProfile.css">
  <link rel="stylesheet" href="home.css">
</head>
<body>

            
  <nav>
    <a href="homePage.php" class="logo"><img src="newLogo.png"></a>
    <div class="link">
      <a href="homePage.php" class="link">Home</a>
      <a href="About.php" class="link">About Us</a>
      <a href="annoncement.php" class="link">Events</a>
      <a href="../chat/chat.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
            <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
          </svg>
        </a>
     
    </div>
    <div class="dropdown">
    <div class="dropbtn"><img src="reProfileIcon.png"></div>
    <div class="dropdown-content">
      <a href="userProfile.php" id="profile-link">Profile</a>
      <a href="index.php">LogOut</a>
    </div>
    </div>
  </nav>

  <div class="grid-con">
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item"><h1 class="header">My Profile</h1></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
      <div class="grid-item"></div>
      <div class="grid-item">
        <div class="profile-container">
        <div class="profile">
        <?php $rs=mysqli_fetch_assoc(getprofile()); if (empty($rs['pic'])){ echo '<img id="profile-pic" src="reProfileIcon.png" alt="Profile Picture">';}else { echo '<img src="' . $rs['pic'] . '" alt="' . $rs['pic'] . '">'; } ?>

            
          
        <!--<img id="profile-pic" src="<?php echo $rs['pic']?>" alt="Profile Picture">-->
          <input type="file" name="profile" id="file-input" accept="image/*" style="display: none;">
          
                 
        </div>

        <!--<img src="<?php if($rs) echo $rs['pic'];?> alt="<?php echo $rs['pic'];?>"/>
        <img src="images/Screenshot (77).png" alt="test"/>-->
      </div>
      </div>
      <div class="grid-item"></div>
      <div class="grid-item"></div>
      <div class="grid-item"></div>
      <div class="grid-item"></div>
      <div class="grid-item">
        <h1><?php $rs=mysqli_fetch_assoc(getprofile());
                  
                  echo $rs['name'];
                  ?></h1>
        <?php $rs=mysqli_fetch_assoc(getprofile());
                   echo $rs['club_name'] ?>
      
      </div>
      <div class="grid-item"></div>
     
  </div>
  <div class="grid-sec">
    <div class="gridsec-item"><h1 class="title">User Details</h1></div>
    <div class="gridsec-item"><a href="edit-user-profile.php" class="edit-profile-btn" name="change">✎Edit Profile</a>
  </div>
    <div class="gridsec-item">
      <h1 class="head">Email Address</h1>
      <?php $rs=mysqli_fetch_assoc(getprofile());
                  echo $rs['email'];
                  ?>
       
    </div>
    
    <div class="gridsec-item">
      <h1 class="head">Student ID</h1>
      <?php $rs=mysqli_fetch_assoc(getprofile());
           echo $rs['mkpt'];
           ?>
    </div>
   
    <div class="gridsec-item">
      <h1 class="head">Address</h1>
      <?php $rs=mysqli_fetch_assoc(getprofile());
             echo $rs['address'];  ?>
    </div>
   
    <div class="gridsec-item">
      <h1 class="head">Gender</h1>
      <?php $rs=mysqli_fetch_assoc(getprofile());
             echo $rs['gender'] ;?>
    </div>
    
    <div class="gridsec-item">
      <h1 class="head">Year</h1>
      <?php $rs=mysqli_fetch_assoc(getprofile());
             echo $rs['year']; ?>
    </div>
    
    <div class="gridsec-item">
      <h1 class="head">Major</h1>
      <?php $rs=mysqli_fetch_assoc(getprofile());
            echo $rs['major'];
      ?>
    </div>
  </div>

</body>
</html>