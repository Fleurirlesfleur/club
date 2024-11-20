<?php
    //session_start();
    include('../config/dbase.php');
    if(isset($_POST['send'])){
        $out_id=$_POST['out_id'];
        $in_id=$_POST['in_id'];
        $_SESSION['msg']=$_POST['msg'];

        if(!empty($_SESSION['msg'])){
            $sql = "INSERT INTO messages(out_id,in_id,msg) 
                              VALUES ({$out_id},{$in_id},'{$_SESSION['msg']}')";
            $con->query($sql);
            unset($_SESSION['msg']);
        }
        
    }else{
        header("../user/index.php");
    }
    
    if (isset($_POST['delete'])) {
        include('../config/dbase.php');
        $msg = $_POST['mmsg'];
        $sql = "DELETE FROM messages WHERE msg = '$msg'";
        mysqli_query($con, $sql);
      }
?>

