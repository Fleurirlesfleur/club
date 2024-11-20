<?php
$conn=mysqli_connect("localhost","root","","register");
if(!$conn){
    echo "Database connected" . mysqli_connect_error();
}
?>
