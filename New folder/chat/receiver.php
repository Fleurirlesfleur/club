<?php
    session_start();
    include_once "../config/dbase.php";
    $sql = mysqli_query($conn, "SELECT * FROM admins");
    $output = "";

    if(mysqli_num_rows($sql) ==1){
        $output .= "No users are available to chat";
    }else if(mysqli_num_rows($sql) > 0){
       include "data.php";
    }
    echo $output;

?>

