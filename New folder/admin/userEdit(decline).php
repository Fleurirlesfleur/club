<?php  
 include("../config/dbase.php");
 if(isset($_POST['decline'])) {
    $id = $_GET['id'];
    $query = "UPDATE student SET status='PENDING' WHERE id=$id";
    $con->prepare($query);
   /* $stmt->bind_param("i", $id);
    $stmt->execute();*/
    //header('location: adminApproval.php');
}
?>