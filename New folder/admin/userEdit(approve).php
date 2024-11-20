<?php 
include('../config/dbase.php');
/*$sql="SELECT * FROM student";
    
    if(isset($_GET['id'])){
    if(isset($_POST['decline'])){
        /* $_GET['id'];
        $id=$_GET['id'];*/
       /* $sql="DELETE FROM student WHERE id=$id";
        $con->query($sql);
        //header('location: adminApproval(football).php');
    }
    if(isset($_POST['approve'])){
        $sql1="UPDATE student SET status='MEMBER' where id=$id";
        $con->query($sql1);
    }
}
    /*else (isset($_POST['approve'])){
        $_GET['id'];
        $id=$_GET['id'];
       // $club=$_GET['club_name'];
        $query="UPDATE student SET status='MEMBER' where id=$id";
        $con->query($query);*/

        

    
        //if($club='football club'){
            //header('location: adminApproval(football).php');
        //}else if($page='music club'){
            /*header('location: adminApproval(music).php');
        }*/
    //}
    
    if(isset($_POST['approve'])) {
        $id = $_POST['id'];
        $query = "UPDATE student SET status='MEMBER' WHERE id=$id";
        $con->prepare($query);
        //$stmt->bind_param("i", $id);
        //$stmt->execute();
        echo $id;
        header('location: adminApproval.php');
       }
      
    
   /* if(isset($_POST['decline'])) {
        $id = $_GET['id'];
        $query = "UPDATE student SET status='PENDING' WHERE id=$id";
        $con->prepare($query);
       /* $stmt->bind_param("i", $id);
        $stmt->execute();*/
        //header('location: adminApproval.php');
    //}
   
    //$sql = "SELECT * FROM student";      
    
?>