<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Approval(Music)</title>
  <link rel="stylesheet" href="">
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
				<a href="adminProfile.php">
			<img src= "../user/person-circle.svg" height="50px" width="50px"> </a>
			</div> 
		</div> 

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
						<a href="adminAnnouncement.php"><h3> Add New Event </h3> </a>
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
        <div class="report-container"> 
            <div class="report-header"> 
                <h1 class="recent-Articles">Registration Form Request(Music Club)</h1> 
                
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
                    <?php   include('../config/dbase.php');
                        include('userEdit.php');
                        $query="SELECT * FROM student where status='PENDING' AND club_name='music club'"; 
                        if($result = mysqli_query($con, $query)){
                          while ($row = mysqli_fetch_array($result)){
                            ?>
                            <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['mkpt'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['ph'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            <td><?php echo $row['major'] ?></td>
                            <td>
                            <form action="adminApproval(music).php" method="post">
                              <button class="approvebtn" name="approve">
                              <a class='btn btn-success btn-sm+' href="userEdit.php?id=<?php echo $row['id'] ?>">ACCESS</a>
                              </button>
                              <button class="approvebtn" name="decline" >
                              <a class='btn btn-success btn-sm+' href="userEdit.php?id=<?php echo $row['id'] ?>">DECLINE</a>
                              </button></form>
                              </td>
                          </tr>
                          <?php   }  
                          }
                      ?>
                        <!--<tr>
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
                            <td>Hnin Wutt Ye Htun</td>
                            <td>6977</td>
                            <td>hninwuttye@gmail.com</td>
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
                            <td>Thant Shwe Ye Naing</td>
                            <td>7017</td>
                            <td>thantshweye@gmail.com</td>
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
                        </tr>-->
                    </tbody>
                </table>

                </div> 
            </div>
            </div> 
	</div> 

</body>
</html>
