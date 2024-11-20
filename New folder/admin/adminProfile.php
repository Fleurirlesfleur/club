<?php 
   include('profiledb.php');
   //session_start();
   $rs=getprofile();
   //$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="adminProfile.css">

  <link rel="stylesheet" href="dashboard.css">
</head>
<body>

	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo"></div> 
			<img src="../user/newLogo.png" class="icn menuicn" id="menuicn" alt="menu-icon"> 
		</div> 

	

		<!--<div class="message"> 
			<div class="circle"></div> 
			<img src= "../user/bell-fill.svg" class="icn" alt=""> 
			 
		</div>-->

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option5"> 
						<img src="../user/columns-gap.svg" width="30px" height="30px"> 
						<a href="dashboard.php"><h3> Dashboard</h3> </a>
					</div> 

					<div class="nav-option option5"> 
						<img src= "../user/person-circle.svg" width="30px" height="30px"> 
						<a href="adminProfile.php"><h3>Profile</h3></a>
					</div> 

					<div class="nav-option option5"> 
						<img src="../user/calendar4-event.svg" class="nav-img" alt="articles"> 
						<a href="adminAnnouncement.php"><h3> Create New Event </h3> </a>
					</div> 

					<div class="nav-option option5"> 
						<img src="../user/check2-all.svg" class="nav-img" alt="articles"> 
						<a href="adminApproval.php"><h3> Admin Approval </h3> </a>
					</div>

					<div class="nav-option option5"> 
						<img src="../user/clipboard2-check.svg" class="nav-img" alt="articles"> 
						<a href="adminClubManage.php"><h3> Club Management </h3> </a>
					</div>

					<div class="nav-option option5"> 
						<img src="../user/chat-left.svg" class="nav-img" alt="articles"> 
						<a href="chatmember.php"><h3> Communication Tool </h3> </a>
					</div>
					 

					<div class="nav-option option5"> 
					<img src= "../user/box-arrow-left.svg"
							class="nav-img"
							alt="logout"/>
							<a href="index.php"><h3>Logout</h3>  </a>
						
						
					</div> 

				</div> 
			</nav> 
		</div>  
		<div class="main"> 

			<div class="searchbar2"> 
				<input type="text"
					name=""
					id=""
					placeholder="Search"> 
				<div class="searchbtn"> 
				<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button"> 
				</div> 
			</div> 

			
      <div class="grid-con">
        <div class="grid-item"><h1 class="header">My Profile</h1></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>
          <div class="grid-item">
            <div class="profile-container">
              <div class="profile-pic">
			  <img src="../user/profileIcon.png" alt="Profile Picture">
  
		      <!--<input type="file" name="profile" id="file-input" accept="image/*" style="display: none;">-->
  
		 
            </div>

             
                  <!--<span class="edit-icon">✎</span>-->
              </div>
          </div>
          
          <div class="grid-item">
          <h1><?php $rs=mysqli_fetch_assoc(getprofile());
		        echo $rs['a_name']; ?></h1>
          <span>Admin</span></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item">
			<a href="editAdminProfile.php" class="edit-profile-btn">✎Edit Profile</a></div>
          <div class="grid-item">Name*</div>
          <div class="grid-item"><?php $rs=mysqli_fetch_assoc(getprofile());
		        echo $rs['a_name']; ?></div>
          <div class="grid-item">Email*</div>
          <div class="grid-item"> <?php $rs=mysqli_fetch_assoc(getprofile());
		        echo $rs['a_email']; ?></div>
		  <div class="grid-item">Phone No.</div>		
          <div class="grid-item"><?php $rs=mysqli_fetch_assoc(getprofile());
		        echo $rs['a_ph']; ?></div>
          <div class="grid-item">Address</div>
          <div class="grid-item"><?php $rs=mysqli_fetch_assoc(getprofile());
		        echo $rs['a_address']; ?></div>
      </div>

			 
		</div> 
	</div> 

	

</body>
</html>