<?php 
     include('../config/dbase.php');
     if(isset($_POST['decline'])) {
			$id = $_POST['id'];
			$query = "UPDATE student SET status='PENDING' WHERE id=$id";
			$con->query($query);
			//$result=mysqli_query($con,$query);
			//$ss=$con->prepare($query);
			  // $ss->bind_param("i", $id);
				//$ss->execute();
				//echo 'hello';
				//echo $row['id'] ;
				}
				if(isset($_POST['accept'])) {
					$id = $_POST['id'];
					$query = "UPDATE student SET status='Waiting' WHERE id=$id";
					$con->query($query);
					//$result=mysqli_query($con,$query);
					//$ss=$con->prepare($query);
					  // $ss->bind_param("i", $id);
						//$ss->execute();
						//echo 'hello';
						//echo $row['id'] ;
						}
						
						
				?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Admin Approval</title> 
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
						<a href="adminAnnouncement.php"><h3>Create New Event</h3> </a>
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
					<img src= "../user/box-arrow-left.svg"class="nav-img" alt="logout"/>
							<a href="index.php"><h3>Logout</h3>  </a>
						
						
					</div> 

				</div> 
			</nav> 
		</div> 
		<div class="report-container"> 
            <div class="report-header"> 
                <h1 class="recent-Articles">Registration Form Requests</h1> 
                
            </div> 

            <div class="report-body"> 
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>MKPT</th>
                            <th>Club Name </th>
                            <th>Ph no. </th>
                            <th>Year </th>
                            <th>Major </th>
                            <th>Approval </th>
                        </tr>
                    </thead>
                    <tbody>
		             <?php   
					     
                        //include('userEdit.php');
						 
                              //include("../config/dbase.php");
                              /*if(isset($_POST['decline'])) {
                              $id = $_GET['id'];
                              $query = "UPDATE student SET status='PENDING' WHERE id=$id";
                              $con->prepare($query);
                              /* $stmt->bind_param("i", $id);
                              $stmt->execute();*/
                              //header('location: adminApproval.php');
                                // }
                                 
                          $query="SELECT * FROM student where status='PENDING' AND email!='NULL'"; 
                          if($result = mysqli_query($con, $query)){
                          while ($row = mysqli_fetch_array($result)){
                            ?>
							
                            <tr>
							<form action="adminApproval.php" method="post">
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['mkpt'] ?></td>
                            <td><?php echo $row['club_name'] ?></td>
                            <td><?php echo $row['ph'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            <td><?php echo $row['major'] ?></td>
                            <td>
                             <input  type="hidden" name="id" value="<?php echo $row['id']; ?>" />
							
							 <button type="submit" class="approvebtn" name="accept" >Accept</button>		
                              
                              
							  <button type="submit" class="approvebtn" name="decline" >Decline</button>								 
                            
                              </td>
							  </form>
                          </tr>
                          <?php   }  
                          }
                      ?>
			         <!--<div class="box-container"> 
                      <a href="adminApproval(football).php">
				      <div class="box box1"> 
					  <div class="text"> 
						<h2 class="topic-heading">Football Club</h2> 
						
					  </div> 
         
					   <img src="../user/football-svgrepo-com.svg" alt="Views"> 
				       </div> 
                        </a>
                         <a href="adminApproval(art).php">
				         <div class="box box2"> 
					     <div class="text"> 
						<h2 class="topic-heading">Art CLub</h2> 
					     </div> 

					     <img src="../user/paint-svgrepo-com.svg" alt="likes"> 
				         </div> 
                        </a>
                         <a href="adminApproval(music).php">
				         <div class="box box3"> 
					   <div class="text"> 
						<h2 class="topic-heading">Music Club</h2> 
						
					   </div> 

					  <img src= "../user/music-svgrepo-com.svg" alt="comments"> 
				     </div> 
                     </a>
                     <a href="adminApproval(photo).php">
                       <div class="box box3"> 
				        	<div class="text"> 
				            		<h2 class="topic-heading">Photo Club</h2> 
						
				      	</div> 

					    <img src= "../user/camera-svgrepo-com.svg" alt="comments"> 
				          </div> 
                         </a>
        
				

                         </div>
                         </div>-->
					</tbody>
				</table>
			</div>
 </div>
</body> 
</html>
