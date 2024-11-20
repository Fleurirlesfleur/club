<?php
     while($row = mysqli_fetch_assoc($sql)){
        $output .= '<a href="chat.php?a_id='.$row['id'].'">
                    <div class="content">
                    <img src="profileIcon.jpg" alt="Profile Photo" class="profile-photo">
                    <div class="details">
                        <span>'. $row['a_name'] .'</span>
                        <p>This is text message</p>
                    </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                    </a>';
    }
?>