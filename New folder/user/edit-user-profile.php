<?php
  include("editUser.php");
  //session_start();
  $result=getprofile();
  $row=mysqli_fetch_assoc($result);
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
      <a href="annoncement.php" class="link">Events</a>
      <a href="About.php" class="link">About Us</a>
      <a href="contact.php" class="link">Contact</a>
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

      <form action="edit-user-profile.php" enctype='multipart/form-data'method="post">
        <div class="profile-container">
        <div class="profile">
          <!--<img id="profile-pic" src="reProfileIcon.png" alt="Profile Picture">-->
          <input type="file" id="file-input" name="profile" accept="image/*" style="display: none;">
          <label for="file-input" id="upload-button" >
          <img src="<?php //if(!isset($_POST['profile'])){
                    echo $row['pic'];
            //}?>">
<svg class="edit-icon"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <!--<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['pic']).'"/>'; ?>-->
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
        
          </label>
        </div>
          
      </div>
      </div>
      
     
  </div>
  <div class="grid-sec">
    <div class="gridsec-item"><h1 class="title">User Details</h1></div>
    <div class="gridsec-item"></div>
    <div class="gridsec-item">
      <h1 class="head">Name</h1>
      <input type="text" name="name" placeholder="Enter new name" class="edit-input" />
    </div>
    <div class="gridsec-item">
      <h1 class="head">Email Address</h1>
      <input type="text" name="email" placeholder="Enter your new email" class="edit-input" />
    </div>
    
    <div class="gridsec-item">
      <h1 class="head">Student ID</h1>
      <?php $rs=mysqli_fetch_assoc(getprofile());
           echo $rs['mkpt']; ?>
    </div>
   
    <div class="gridsec-item">
      <h1 class="head">Address</h1>
      <input type="text" name="address" placeholder="New Address" class="edit-input" />
    </div>
   
    <div class="gridsec-item">
      <h1 class="head">Gender</h1>
      <?php $rs=mysqli_fetch_assoc(getprofile());
              echo $rs['gender'] ?>
    </div>
    
    <div class="gridsec-item">
      <h1 class="head">Year</h1>
      <select name="year" id="yrOfStudy" class="edit-input">
                            <option value="FirstYearSemI">First Year First Semester</option>
                            <option value="FirstYearSemII">First Year Second Semester</option>
                            <option value="SecondYearSemI">Second Year First Semester</option>
                            <option value="SecondYearSemII">Second Year Second Semester</option>
                            <option value="ThirdYearSemI">Third Year First Semester</option>
                            <option value="ThirdYearSemII">Third Year Second Semester</option>
                            <option value="FourthYearSemI">Fourth Year First Semester</option>
                            <option value="FourthYearSemII">Fourth Year Second Semester</option>
                            <option value="FifthYearSemI">Fifth Year First Semester</option>
                           
                        </select>
    </div>
    
    <div class="gridsec-item">
      <h1 class="head">Major</h1>
      <input type="text" name="major" placeholder="Enter your new major" class="edit-input" />
    </div>
    <div class="gridsec-item"></div>
    <div class="gridsec-item"><button class="editBtn" name="btnforprofile">Change Profile Picture</button></div>
    <div class="gridsec-item">
      <button class="editBtn" name="edit">Change Personal Details</button>
    </div>
    <div class="gridsec-item">
      
    </div>
  </div>
</form>
<script>
  document.getElementById('file-input').addEventListener('change',function(){
    var file=this.files[0];
    if(file){
      var reader=new FileReader();
      reader.onload=function(e){
        document.getElementById('profile-pic').setAttribute('src',e.target.result);
      };
      reader.readAsDataURL(file);
    }
  });
  </script>
</body>
</html>