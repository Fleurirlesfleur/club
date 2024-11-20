<?php
    include('../config/dbase.php');
    session_start();
    include('insert-chat.php');
    //include('get-chat.php');
    $id=$_SESSION['uid'];
    $a_id = 1;
    $sql = mysqli_query($con, "SELECT * FROM admins");
        if(mysqli_num_rows($sql)>0){
            $row=mysqli_fetch_assoc($sql);
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MESSAGE BOX</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>
    <body>
        <div class="wrapper">

        <header>
                
                <a href="../user/homePage.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="profileIcon.jpg"  class="profile-photo">
                <div class="details">
                    <span>Phoo Myat</span>
                </div>
            </header>

            <div class="chat-area">
             
            <?php
    //session_start();
    include('../config/dbase.php');
    if(isset($_POST['send'])){
        $out_id = $_POST['out_id'];
        $in_id = $_POST['in_id'];
        $output="";

        $sql = "SELECT * FROM messages 
              LEFT JOIN student ON student.id = messages.in_id
              WHERE (out_id = {$out_id} AND in_id = {$in_id})
              OR (out_id = {$in_id} AND in_id = {$out_id}) ORDER BY msg_id";
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['out_id'] === $out_id){
                    $output .= '<div class="chat-box">
                                <div class="chat outgoing">
                                <div class="details">
                                <p>how are ur broooooooooooooooooooooooooo</p>
                                    <p>'.$row['msg'] .'</p>
                                </div>
                                </div>
                                </div>';
                }
                else{
                    $output .=' <div class="chat-box">
                                <div class="chat incoming">
                                <div class="sender">
                                <img src="profileIcon.jpg" alt="Profile Photo" class="profile-photo">
                                <div class="details">
                                <p>I am find brooooooooooooooooooooooooooooo</p>
                                    <p>'. $row['msg'] .'</p>
                                    <p>I am find brooooooooooooooooooooooooooooo</p>
                                </div>
                                </div>
                                </div>
                                </div>';

                }
            }
            echo $output;
        }      
            
    }
    else{
        header("../user/index.php");
    }
?>
</div>
        <form class="typing-area" action="chat1.php" method="post">
                <input type="text" name="out_id" value="<?php echo $_SESSION['uid']; ?>" hidden>
                <input type="text" name="in_id" value="<?php echo $a_id; ?>" hidden>
                <input type="text" name="msg" class="input-field" placeholder="Type a message here...">
                <button type="submit" name="send" class="button"><i class="fab fa-telegram-plane"></i></button>
            </form>

        </div>
        <script src="javascript/chat.js"></script>
    </body>
</html>