

<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Dashboard</title> 
	<link rel="stylesheet" href="dashboard.css"> 
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo"></div> 
			<img src="../user/newLogo.png" class="menuicn" id="menuicn" alt="menu-icon"> 
		</div>         
 
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option5"> 
						<img src="../user/columns-gap.svg" width="30px" height="30px"> 
						<a href="dashboard.php"><h3>Dashboard</h3></a>
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
						<a href="chatmember.php"><h3>Communication Tool </h3></a>
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

				<div class="box box1"> 
					<div class="text"> 
						<h2 class="topic-heading">
							<?php   include('../config/dbase.php');
                        //include('userEdit.php');
                        $query="SELECT * FROM student where status='PENDING'"; 
                        $result = mysqli_query($con,$query);
                        $row = mysqli_num_rows($result);
						//$num=mysqli_num_rows($row);
						  echo "$row";

                            ?></h2> 
						<h2 class="topic">New Registration Form</h2> 
					</div> 

					<img src="../user/check2-all.svg" alt="Views"> 
				</div> 


				<div class="box box3"> 
					<a href="adminTodayAnnouncement.php" class="link">
					<div class="text"> 
						<h2 class="topic-heading">Today's</h2> 
						<h2 class="topic">Announcement</h2> 
					</div> 
					</a>
					<img src= "../user/megaphone.svg" alt="comments"> 
				</div> 

				
			</div> 
</div>
          <!--<div class="report-container"> 
				<div class="report-header"> 
					<h1 class="recent-Articles">Recent Articles</h1> 
					<button class="view">View All</button> 
				</div> 

				<div class="report-body"> 
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>MKPT</th>
								<th>Email </th>
								<th>Ph no. </th>
								<th>Year </th>
								<th>Major </th>
								<th>Approval </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Phoo Myat Thwe</td>
								<td>7011</td>
								<td>phoomyatthwe@gmail.com</td>
								<td>09-789456123</td>
								<td>Second year</td>
								<td>CS</td>
								<td><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
									<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
								  </svg>
								  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-x-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
									<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
								  </svg></td>
							</tr>
							<tr>
								<td>Hnin Wutt Yee Htun</td>
								<td>6977</td>
								<td>hninwuttyee@gmail.com</td>
								<td>09-789456123</td>
								<td>Second year</td>
								<td>CS</td>
								<td><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
									<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
								  </svg>
								  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-x-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
									<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
								  </svg></td>
							</tr>
							<tr>
								<td>Ngu War Thein</td>
								<td>6979</td>
								<td>nguwarthein@gmail.com</td>
								<td>09-789456123</td>
								<td>Second year</td>
								<td>CS</td>
								<td><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
									<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
								  </svg>
								  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-x-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
									<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
								  </svg></td>
							</tr>
							<tr>
								<td>Thant Shwe Yee Naing</td>
								<td>7017</td>
								<td>thantshweyee@gmail.com</td>
								<td>09-789456123</td>
								<td>Second year</td>
								<td>CS</td>
								<td><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
									<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
								  </svg>
								  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-x-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
									<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
								  </svg></td>
							</tr>
							<tr>
								<td>Mya Yoon Wai</td>
								<td>7019</td>
								<td>myayoonwai@gmail.com</td>
								<td>09-789456123</td>
								<td>Second year</td>
								<td>CS</td>
								<td><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
									<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
								  </svg>
								  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-x-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
									<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
								  </svg></td>
							</tr>
							<tr>
								<td>Kay Thi</td>
								<td>7001</td>
								<td>kaythi@gmail.com</td>
								<td>09-789456123</td>
								<td>Second year</td>
								<td>CS</td>
								<td><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
									<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
								  </svg>
								  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#582761" class="bi bi-x-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
									<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
								  </svg></td>
							</tr>
						</tbody>
					</table>

					</div> 
				</div> 
			</div> 
		</div> 
	</div> -->

	<script src="./index.js"></script> 
</body> 
</html>
