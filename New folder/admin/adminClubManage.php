<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Admin Club Management</title> 
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

			<div class="box-container"> 
				<a href="adminFootbal.php">
				<div class="box box1"> 
					<div class="text"> 
						<h2 class="topic-heading">Football Club</h2> 
						
					</div> 

					<img src="../user/football-svgrepo-com.svg" alt="Views"> 
				</div> 
			</a>
			<a href="adminArt.php">
				<div class="box box2"> 
					<div class="text"> 
						<h2 class="topic-heading">Art CLub</h2> 
					</div> 

					<img src="../user/paint-svgrepo-com.svg" alt="likes"> 
				</div> 
			</a>
				<a href="adminMusic.php">
				<div class="box box3"> 
					<div class="text"> 
						<h2 class="topic-heading">Music Club</h2> 
						
					</div> 

					<img src= "../user/music-svgrepo-com.svg" alt="comments"> 
				</div> 
				</a>
				<a href="adminPhoto.php">
                <div class="box box4"> 
					<div class="text"> 
						<h2 class="topic-heading">Photo Club</h2> 
						
					</div> 

					<img src= "../user/camera-svgrepo-com.svg" alt="comments"> 
				</div> 
				</a>
		

 </div>
 </div>
 </div>
</body> 
</html>
