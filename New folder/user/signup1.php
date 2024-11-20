<?php 
include('../config/dbase.php');
session_start();
if(isset($_POST['signin-btn'])){
$name=$_POST['name'];
$mkpt=$_POST['mkpt'];
$password=$_POST['password'];
$error=array();

if(!ctype_upper(substr($name,0,1))){
    array_push($error,"Name must start with a capital letter.");
}
if(strlen($password)<8){
    array_push($error,"Password must be at least 8 characters long");
}//else{
//    $sql="SELECT * FROM student WHERE mkpt='$mkpt'";
//    $result=mysqli_query($con,$sql);
//    $rowCount=mysqli_num_rows($result);

//if($rowCount>0){
  //  $user=mysqli_fetch_array($result,MYSQLI_ASSOC);


    //if($password!=$user['password']){
       // array_push($error,"Wrong Password");
   // }
//}
//}
/*if(count($error)==0){
    header('location: index.php');
    exit();
    }*/
    /*array_push($error,"Wrong mkpt");*/
    //header("location: index.php");



/*if($rowCount>0){
    
    array_push($error,"Wrong mkpt");


}else{*/
if(count($error)>0){
    foreach($error as $error){
        echo "<div class='alert alert-danger'>$error</div>";
    }
}else{

$sql1 = "INSERT INTO student(name,mkpt,password) VALUES ('$name','$mkpt','$password')";
$rs=mysqli_query($con,$sql1);
$stmt=mysqli_stmt_init($con);
$prepareStmt=mysqli_stmt_prepare($stmt,$sql1);
if($prepareStmt){
    echo "<div class='alert alert-success'>You have sign up successfully.</div>";
    header('location: index.php');
}
else{
    die("Something went wrong");
}
}
}
//$rowCount=mysql_num_rows($result);

?>