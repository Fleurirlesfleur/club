<?php 
 include("createActivity.php");
 include("dashboardNav.php")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat Member List</title>
    
    <link rel="stylesheet" href="dashboard.css"> 
    <link rel="stylesheet" href="../user/clubmember.css">

  </head>
<body>
    
  <div class="main">
    
  <table>
        <thead>
            <tr>
            <th>NAME</th>
               <th>MKPT</th>
               <th>CLUB NAME</th>
               <th>PHONE</th>
               <th>YEAR</th>
               <th>MAJOR</th>
               
               <th></th>

            </tr>
        </thead>
        <tbody>
        <?php
            include("../config/dbase.php");
              $sql = "SELECT * FROM student where status='MEMBER'";
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
                            <td><a href="../chat/adminchat.php?id=<?php echo $row['id']?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
          <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
        </svg>
		</a></td>
                  </form>
                </tr>
                <?php
                  }
                }
                ?>
                  </tbody>
                  </table>
              </div>
                  </body>
                  </html>