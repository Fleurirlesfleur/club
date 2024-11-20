<?php 
 include('../config/dbase.php');
 include('createActivity.php');
 include('memory.php');

 /*if(isset($_POST['save'])){
  //$name=$_POST['name'];
  if(isset($_FILES['picture'])){
    $target_dir = "images/";
    //echo "hello";
    //echo $_FILES[ 'profile' ][ 'name' ];
  $target_file = $target_dir . basename($_FILES["picture"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
      if(!$check) {
          echo "Please upload an Image.";
          $uploadOk = 0;
      }
  

// Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType !="jpeg"
  && $imageFileType != "gif") {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;}
// Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars(basename($_FILES["profile"]["name"])). " has been uploaded.";
          
          //insert into database
          $sql=mysqli_query($con,"INSERT INTO memories Values('Football Club','$target_file')");
          //$title=$_POST['title'];
          
          //header("Location: .php");
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
      
     }
  }
}*/

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
    <title>Admin Football</title>
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
            <h1 class="headOfTable">Football Club</h1>
      

      <div class="announcement-box" >
        <h2>Create Memories</h2>
        <!--<h1>Update and delete Photos</h1>
        <div class="gallery" id="gallery">
           Images Update code have to be here -->
           <form action="adminFootbal.php" method="post">
            <label for="announcement-header">From:</label>
                          <input type="text" id="announcement-header" value="Football Club" name="title" required><br>
                  
                          <label for="announcement-date">Date:</label>
                          <input type="date" id="announcement-date" name="date" required><br>
                  
                            
                          <label for="announcement-description">Description:</label><br>
                          <textarea id="announcement-description" name="description" rows="4" required></textarea><br>
            <!--<input type="file" name="picture" id="file-input" accept="image/*" >
            <button id="add-btn" class="add-btn" name="add">Add Image</button>-->
      
            <button type='submit' id="saveBtn" class="saveBtn" name="save">Save</button>
            </div>
       
      
      <br>
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
            //include("../config/dbase.php");
              $sql = "SELECT * FROM student where club_name='football club'";
              if($result = mysqli_query($con, $sql)){
                  while ($row = mysqli_fetch_array($result)) {
                    
          ?>
                <tr>
                  <form action="adminFootbal.php" method="post">
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
                <input type="text" id="announcement-header" value="Football club" placeholder="Football club" name="header" required><br>
        
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

