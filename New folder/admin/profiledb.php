<?php
 include('../config/dbase.php');
 session_start();
 //$aid=$_SESSION['aid'];
 $aid=1;
 function getprofile(){
   global $con;
   //$aid=$_SESSION['aid'];
   $sql1="SELECT * FROM admins WHERE a_id=1";
   return mysqli_query($con,$sql1);
 }

 if(isset($_POST['edit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    if(isset($_FILES['profile'])){
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
              $sql=mysqli_query($con,"UPDATE admins SET a_pic='$target_file' WHERE a_id=1");
              //$title=$_POST['title'];
              
              //header("Location: .php");
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
          
         }
      }
    //$sql="UPDATE admins SET a_name='$name',a_email='$email',a_ph='$phone',a_address='$address' WHERE id=$aid";
    //$result=mysqli_query($con,$sql);

    if($name!=null){
      $sql="UPDATE admins Set a_name='$name' WHERE a_id=$aid";
      $rs=mysqli_query($con,$sql);
    }
    if($email!=null){
      $sql="UPDATE admins Set a_email='$email' WHERE a_id=$aid";
      $rs=mysqli_query($con,$sql);
    }
    if($phone!=null){
      $sql="UPDATE admins Set a_ph='$phone' WHERE a_id=$aid";
      $rs=mysqli_query($con,$sql);
    }
    if($address!=null){
      $sql="UPDATE admins Set a_address='$address' WHERE a_id=$aid";
      $rs=mysqli_query($con,$sql);
    }
    header('location: adminProfile.php');
 }
 /*if(isset($_POST['save'])){
  $image=$_POST['image'];

  $sql="INSERT INTO memories(memory) VALUES('$image')";
  $rs=mysqli_query($con,$sql);
 }*/

?>