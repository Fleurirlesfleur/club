<?php
 include('../config/dbase.php');
 session_start();
 $id=$_SESSION['uid'];
 /*if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}*/
if(isset($_POST['submit'])){
$mkpt=$_POST['mkpt'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$major = $_POST['major'];

$year = $_POST['year'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$club=$_POST['club'];
$error=array();
//$sql="SELECT * FROM student WHERE id='$id'";
//$result=mysqli_query($con,$sql);
//$rowCount=mysqli_num_rows($rs);
$sql="Select * from student";



    /*if(!ctype_upper(substr($name,0,1))){
        array_push($error,"Name must start with a capital letter.");
    }*/
    
    if(preg_match("/^[0-9]{2}[0-9]{9}$/",$phone)){
$sql1="UPDATE student SET ph='$phone',major='$major',year='$year',email='$email',gender='$gender',club_name='$club',status='PENDING' WHERE id=$id ";
$rs=mysqli_query($con,$sql1);
$stmt=mysqli_stmt_init($con);
$prepareStmt=mysqli_stmt_prepare($stmt,$sql1);

//if($prepareStmt){
    //echo "<div class='alert alert-success'>You have register successfully!</div>";
    header('location: guestHome.php');
//}
    
}else{
    echo "Invalid phone number";
}
}
//$user=mysqli_fetch_array($rs,MYSQLI_ASSOC);


/*$stmt = $con->prepare("SELECT id FROM students WHERE mkpt ='$mkpt'");
    $stmt->bind_param("s", $mkpt);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // MKPT provided by the user matches an MKPT from the database
        // Update the data in the user's row
        $stmt = $con->prepare("UPDATE students SET phone_number='$phone',major='$major',year='$year',gender='$gender', email ='$email' WHERE mkpt ='$mkpt'");
        $stmt->bind_param("sss", $name, $email, $mkpt);

        if ($stmt->execute()) {
            echo "Registration updated successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        // MKPT provided by the user does not match any MKPT from the database
        echo "Invalid MKPT (Student ID). Please enter a valid one.";
    }

    $stmt->close();
}

$con->close();

// Close MySQL connection

/*$name=$_POST['name'];
$mkpt=$_POST['mkpt'];
$sql1="Select * from student WHERE mkpt='$mkpt'";
$result=mysqli_query($con,$sql1);
$user=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($user){
    if(($name===$user['name'])){
        session_start();
        $_SESSION["user"]=$user['mkpt'];
        $sql = "INSERT INTO student(phone_number,major,year,email,gender) VALUES ('$phone','$major','$year','$email','$gender')";
        $rs = mysqli_query($con,$sql);
        die();
    }else{
         echo "<div class='alert'>⚠️MKPT DOES NOT MATCH!</div>";
    }
}else{
        echo "<div class='alert'>⚠️NAME DOES NOT MATCH!</div>";
    }
}*/





/*if($rs){
    echo "Registration Completed";
}*/

?>