<?php 
  include("profiledb.php");
  $result=getprofile();
  $row=mysqli_fetch_assoc($result);
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

	

		<div class="message"> 
			<div class="circle"></div> 
			<img src= "../user/bell-fill.svg" class="icn" alt=""> 
			<div class="dp"> 
			<img src= "../user/person-circle.svg" height="50px" width="50px"> 
			</div> 
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option5"> 
						<img src="../user/columns-gap.svg" width="30px" height="30px"> 
						<a href="dashboard.php">
						<h3> Dashboard</h3> </a>
					</div> 

					<div class="nav-option option5"> 
						<img src= "../user/person-circle.svg" width="30px" height="30px"> 
						<a href="adminProfile.php"><h3>Profile</h3></a>
					</div> 

					<div class="nav-option option5"> 
						<img src="../user/calendar4-event.svg" class="nav-img" alt="articles"> 
						<a href="adminAnnouncement.php"><h3> Event Management </h3> </a>
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
						<h3> Communication Tool </h3> 
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
		  <form action="editAdminProfile.php" method="post">	

            <div class="profile-container">
              <div class="profile-pic">
                 <img src="../user/profileIcon.png" alt="Profile Picture">
				  <input type="file" id="file-input" name="profile" accept="image/*" style="display: none;">
				  <label for="file-input" id="upload-button" >
				  <!--<img src="<?php //if(!isset($_POST['profile'])){
                    echo $row['a_pic']; ?>">-->
			<!--<svg class="edit-icon"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  
               <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>-->

          </label>

              </div>
          </div>
          </div>
		  
          <div class="grid-item">
          <h1><?php $result=mysqli_fetch_assoc(getprofile());
		           echo $result['a_name'] ?></h1>
          <span>Admin</span></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"><!--<a href="editAdmin-profile.php" class="edit-profile-btn">✎Edit Profile</a>--></div>
          <div class="grid-item">Name*</div>
          <div class="grid-item">
            <input type="text" name="name" placeholder="Enter new name" class="edit-input" />
          </div>
          <div class="grid-item">Email*</div>
          <div class="grid-item"> <input type="email" name="email" placeholder="Enter new Email" class="edit-input" /></div>
          <div class="grid-item">Phone No.</div>
          <div class="grid-item"> <input type="text" name="phone" placeholder="Enter new phone no" class="edit-input" /></div>
          <div class="grid-item">Address</div>
          <div class="grid-item"> <input type="text" name="address" placeholder="Enter new address" class="edit-input" /></div>
          <div class="grid-item">
            <button class="editBtn" name="edit">Save Change</button>
          </div>
		  
      </div>
       
			</form>	 
		</div> 
	</div> 

	

</body>
</html>