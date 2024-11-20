<?php 
  include("announcement.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Announcement Dashboard</title>
  <link rel="stylesheet" href="announcement.css">
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
			
		</div> -->

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
						<a href="adminApproval.php"><h3> Admin Approval </h3></a> 
					</div>

					<div class="nav-option option5"> 
						<img src="../user/clipboard2-check.svg" class="nav-img" alt="articles"> 
						<a href="adminClubManage.php"><h3> Club Management </h3></a> 
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

            <div class="announcement-box">
                <h2>Create Announcement</h2>
                <form action="#" method="post">
                    <label for="announcement-header">Header:</label>
                    <input type="text" id="announcement-header" name="announcement-header" required><br>
            
                    <label for="announcement-date">Date:</label>
                    <input type="date" id="announcement-date" name="announcement-date" required><br>
            
                    <label for="announcement-time">Time:</label>
                    <input type="time" id="announcement-time" name="announcement-time" required><br>
            
                    <label for="announcement-description">Description:</label><br>
                    <textarea id="announcement-description" name="announcement-description" rows="4" required></textarea><br>
            
                    <input type="submit" name="create" value="Create Announcement">
                </form>
            </div>

			 
		</div> 
	</div> 

</body>
</html>
