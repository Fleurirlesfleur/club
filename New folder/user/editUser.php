<?php
 



include('../config/dbase.php');
 session_start();
 $id=$_SESSION['uid'];
function getprofile()
{global $con;
   $id=$_SESSION['uid'];
   $sql1="Select * from student where id=$id";
 return mysqli_query($con,$sql1);
}

if(isset($_POST['change'])){
    $name=$_POST['name'];
    //$edit=$_FILES['profile']['tmp_name'];
    $edit=addslashes(file_get_contents($_FILES['profile']['tmp_name']));
    $email=$_POST['email'];
    $address=$_POST['address'];
    $year=$_POST['year'];
    $major=$_POST['major'];
    $club=$_POST['club'];
    $gender=$_POST['gender'];
    //$id=$_SESSION['uid'];
//$sql2="Select * from reg where email=$email";
//$sql1="UPDATE profile Set p_name='$name',email='$email',address='$address',year='$year',major='$major'";

$sql1="INSERT INTO student pic='$edit' where id=$id";

$sql="UPDATE student Set pic='$edit',name='$name',address='$address',email='$email',year='$year',major='$major' WHERE id=$id ";
$result=mysqli_query($con,$sql);
$stmt=mysqli_stmt_init($con);
$prepareStmt=mysqli_stmt_prepare($stmt,$sql);
if($prepareStmt){
    echo "<div class='alert alert-success'>You have update successfully!</div>";
    header('location: userProfile.php');
}else{
    die("Something went wrong");
}

}
if(isset($_POST['add'])){ 
 
// Check if image file is a actual image or fake image
  /*if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["pic"]["tmp_name"]);
      if(!$check) {
          echo "Please upload an Image.";
          $uploadOk = 0;
      }
  }*/
}


//for profile update
if(isset($_FILES['profile']) && isset($_POST['btnforprofile'])){
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["profile"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  

     $check = getimagesize($_FILES["profile"]["tmp_name"]);
      if(!$check) {
          echo "Please upload an Image.";
          $uploadOk = 0;
      }
  

// Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType !="jpeg"
  && $imageFileType != "gif") {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;}
// Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars(basename($_FILES["profile"]["name"])). " has been uploaded.";
          
          //insert into database
          $sql=mysqli_query($con,"UPDATE student SET pic='$target_file' WHERE id=$id");
          //$title=$_POST['title'];
          
          //header("Location: .php");
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
      
     }
  }
if(isset($_POST['edit'])){
   $name=$_POST['name'];
   //$edit=$_FILES['profile']['name'];
   $image_name=$_FILES['profile']['name'];
   $tmp_name=$_FILES['profile']['tmp_name'];
   //$imageName=uniqid().$_FILES['profile']['name'];
   $path='image/'.$image_name;
   move_uploaded_file($tmp_name,$path);

   $sql="UPDATE student Set pic='$path' WHERE id=$id";
   //$image_extension=pathinfo($image,PATHINFO_EXTENSION);
   //$filename=time().'.'.$image_extension;

   $email=$_POST['email'];
   $address=$_POST['address'];
   $year=$_POST['year'];
   $major=$_POST['major'];
   $id=$_SESSION['uid'];
//$sql2="Select * from reg where email=$email";
//$sql1="UPDATE profile Set p_name='$name',email='$email',address='$address',year='$year',major='$major'";
 
/*$query="UPDATE student Set pic='$filename' WHERE id=$id"; 
$query_run=mysqli_query($con,$query);*/

if($query_run){
   move_uploaded_file($_FILES['profile']['tmp_name'], $path."/".$filename);
}

if($name!=null){
   $sql="UPDATE student Set name='$name' WHERE id=$id ";
$result=mysqli_query($con,$sql);
}
if($image!=null){
   move_uploaded_file($src,$path."/".$filename);
   $sql="UPDATE student Set pic='$image' WHERE id=$id ";
$result=mysqli_query($con,$sql);
}
if($email!=null){
   $sql="UPDATE student Set email='$email' WHERE id=$id ";
$result=mysqli_query($con,$sql);
}
if($address!=null){
   $sql="UPDATE student Set address='$address' WHERE id=$id ";
$result=mysqli_query($con,$sql);
}
if($year!=null){
   $sql="UPDATE student Set year='$year' WHERE id=$id ";
$result=mysqli_query($con,$sql);
}
if($major!=null){
   $sql="UPDATE student Set major='$major' WHERE id=$id ";
$result=mysqli_query($con,$sql);
}
/*$sql="UPDATE student Set pic='$edit',name='$name',address='$address',email='$email',year='$year',major='$major' WHERE id=$id ";
$result=mysqli_query($con,$sql);
$stmt=mysqli_stmt_init($con);
$prepareStmt=mysqli_stmt_prepare($stmt,$sql);
if($prepareStmt){
   echo "<div class='alert alert-success'>You have update successfully!</div>";
   header('location: userProfile.php');
}else{
   die("Something went wrong");
}*/
header('location: userProfile.php');

}

?>