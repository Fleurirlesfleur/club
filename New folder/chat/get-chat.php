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
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'.$row['msg'] .'</p>
                                </div>
                                </div>';
                }
                else{
                    $output .=' <div class="chat incoming">
                                <img src="profileIcon.jpg" alt="Profile Photo" class="profile-photo">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
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