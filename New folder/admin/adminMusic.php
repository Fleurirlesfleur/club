<?php 
 include('../config/dbase.php');
 include('createActivity.php');
 include('memory.php');

 if(isset($_POST['delete'])){
  $id=$_POST['id'];
  $query="UPDATE student SET status='NULL',club_name='NULL' WHERE id='$id'";
  	$con->query(($query));
 }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Music</title>
    <link rel="stylesheet" href="announcement.css">
    <link rel="stylesheet" href="dashboard.css">
  </head>
  <body>
    <!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo"></div> 
			<img src="../user/newLogo.png" class="menuicn" id="menuicn" alt="menu-icon"> 
		</div> 

	

		<!--<div class="message"> 
			<div class="circle"></div> 
			<img src= "../user/bell-fill.svg" class="icn" alt="" height="34px" width="34px"> 
			
		</div> -->

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
						<a href="chatmember.php"><h3> Communication Tool </h3></a> 
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
      <a href="../admin/adminClubManage.php">
      <img src="../image/arrow-left-circle1.svg" width="40px" height="40px">  
      </a>
      <h1 class="headOfTable">Music Club</h1>
      <div class="announcement-box">
        <h1>Create Memories</h1>
        <form action="adminMusic.php" method="post">
            <label for="announcement-header">From:</label>
                          <input type="text" id="announcement-header" value="Music Club" name="title" required><br>
                  
                          <label for="announcement-date">Date:</label>
                          <input type="date" id="announcement-date" name="date" required><br>
                  
                            
                          <label for="announcement-description">Description:</label><br>
                          <textarea id="announcement-description" name="description" rows="4" required></textarea><br>
      <button id="saveBtn" class="saveBtn" name="save" >Save</button>
      </div>
 
      <br>

      <!--<div class="announcement-box">
        
          <h2>Edit memberlist</h2>
          
              <label for="name">Name:</label>
              <input type="text" id="name" name="username" required><br>
      
              <label for="mkpt">Mkpt:</label>
              <input type="text" id="mkpt" name="announcement-date" required><br>
      
             
      
              <input type="submit" value="Save" name="save">-->
          </form>
      
      
      <br>
      <div class="headOfTable">
      <h1>Member List</h1>

</div>
<br>
    <table class="delTable">
        <thead>
        <tr>
              <th>NAME</th>
               <th>MKPT</th>
               <th>CLUB NAME</th>
               <th>PHONE</th>
               <th>YEAR</th>
               <th>MAJOR</th>
               <th>REMOVE</th>
            </tr>
        </thead>
        <tbody>
          <?php
            include("../config/dbase.php");
              $sql = "SELECT * FROM student where club_name='music club'";
              if($result = mysqli_query($con, $sql)){
                  while ($row = mysqli_fetch_array($result)) {
                    
          ?>
                <tr>
                  <form action="adminMusic.php" method="post">
                <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['mkpt'] ?></td>
                            <td><?php echo $row['club_name'] ?></td>
                            <td><?php echo $row['ph'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            <td><?php echo $row['major'] ?></td>
                            <td>
                            <button type="submit" class="saveBtn" name="delete" >Delete</button>							
                            </td>
                  </form>
                  </tr>
                  <?php
                      }//end of while loop
                   }//end of if statement for
                   ?>
        </tbody>
    </table>

      <div class="secmain"> 
     
        <div class="announcement-box">
            <h2>Create Schedule for today</h2>
            <form action="#" method="post">
                <label for="announcement-header">From:</label>
                <input type="text" id="announcement-header" value="Music club" placeholder="Music club" name="header" required><br>
        
                <label for="announcement-date">Date:</label>
                <input type="date" id="announcement-date" name="date" required><br>
        
                <label for="announcement-time">Time:</label>
                <input type="time" id="announcement-time" name="time" required><br>
        
                <label for="announcement-description">Description:</label><br>
                <textarea id="announcement-description" name="description" rows="4" required></textarea><br>
        
                <input type="submit" value="Create Activity" name="edit">
            </form>
        </div>

   
</div>

<br>
<div class="arrow">
      <a href="adminClubManage.php">
        <img src="../image/arrow-left-circle.svg" >
      </a>
      </div>  

</div>

</div>
      <script>
        document.getElementById('add-btn').addEventListener('click', function() {
    document.getElementById('file-input').click();
    });
    
    document.getElementById('file-input').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
    const reader = new FileReader();
    reader.onload = function() {
    const imageContainer = document.createElement('div');
    imageContainer.classList.add('image-container');
    const img = document.createElement('img');
    img.src = reader.result;
    img.alt = 'Image';
    const deleteBtn = document.createElement('button');
    deleteBtn.classList.add('delete-btn');
    deleteBtn.textContent = 'Delete';
    deleteBtn.addEventListener('click', function() {
    imageContainer.remove();
    });
    imageContainer.appendChild(img);
    imageContainer.appendChild(deleteBtn);
    document.getElementById('gallery').appendChild(imageContainer);
    }
    reader.readAsDataURL(file);
    }
    });
    </script>
  </body>
</html>

