
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>MESSAGE BOX</title>
            <link rel="stylesheet" href="style.css">
            <link rek="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

        </head>
        <body>
            <div class="wrapper">
                <section class="users">
                    <header>
                        <?php
                        include_once "../config/dbase.php";
                        $sql = mysqli_query($con, "SELECT * FROM student");
                        if(mysqli_num_rows($sql)>0){
                            $row=mysqli_fetch_assoc($sql);
                        }
                        ?>
                        <div class="content">
                            <img src="profileIcon.jpg" alt="Profile Photo" class="profile-photo">
                            <div class="details">
                                <span><?php echo $row['name'] ?></span>
                                <p>Active now</p>
                            </div>
                        </div>
                    </header>
                    <div class="search">
                        <span class="text">Select an user to start chat</span>
                        <input type="text" placeholder="Enter name to search...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="users-list">
                        
                    </div>
                </section>
            </div>
            <script src="javascript/userlist.js"></script>
        </body>
    </html>
</DOCTYPE>