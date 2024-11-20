<div class="container">
    <form action="index.php" method="post" enctype="multipart/form-data">

    <input type="file" accept="" name="image">
    
    <label for="name">Name:</label>
    <input type="text" name='name' ><br><br>
    <button type='submit' name= 'add'>Add Product</button>
    
</form>  
</div>
<?php 
include ('../config/db.php');
if(isset($_POST['add'])){ 
    $target_dir = "..uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if(!$check) {
            echo "Please upload an Image.";
            $uploadOk = 0;
        }
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
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["image"]["name"])). " has been uploaded.";
            
            //insert into database
            $sql=mysqli_query($conn,"INSERT INTO user VALUES('','".$_POST['title']."','.$target_file.')");
            $title=$_POST['title'];
            
            header("Location:index.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
       
       }?>
<?php

$result = mysqli_query($conn,"SELECT * FROM user"); 


?>

<table border="1" cellpadding="5" cellspacing="5">
<tr> <th>Image</th></tr>

<?php

while($row = mysqli_fetch_array($result)) {

$id = $row['id'];
echo $row['image'];

?>
    <tr>

        <td><img src="../<?php echo $row['image'];?>" alt="<?php echo $row['image'];?> " height="75" width="75"></td>

   </tr>

<?php   
} 


?>
</table>
<img src="uploads/TGCF.jpg" alt="TGCF" height="75" width="75">