<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../user/login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="login-box">
        <!--header section-->
       
        <div class="logo">
          <img src="../user/newLogo.png" height="150px" width="300px" />
        </div>
        <div class="pageTitle">
          <h2>UCSM Club Activities<br> Information System</h2>

        </div>
        <!---input section-->
        <?php
        if(isset($_POST['login'])){
          $name=$_POST['name'];
          $password=$_POST['password'];
          require_once "../config/dbase.php";
          $sql="Select * from admins WHERE a_name= '$name'";
          $rs = mysqli_query($con,$sql);
          $user=mysqli_fetch_array($rs,MYSQLI_ASSOC);
          if($user){
            if(($name===$user['a_name'])&& $password===$user['a_pwd']){
              session_start();
              $_SESSION["aid"]=$user['a_id'];
              header("Location: dashboard.php");
              die();
            }else{
              echo "<div class='alert'>⚠️Password does not match</div>";
            }
          }else{
              echo "<div class='alert'>⚠️Name does not match</div>";
            }
          }
        
        ?>
        <form  action='' method="post" class="formdisplay">
        <div class="input">
          <input type="text" name="name" class="input-box" placeholder="name" required />
        </div>
        <div class="input">
          <input type="password"  id="myInput" name="password" class="input-box" placeholder="Password" required/>
         <div class="input">
          <input type="checkbox" onclick="myFunction()" >Show Password</div>
        </div>
       
        <!--button section-->
        <a href="dashboard.php">
          <button class="signin-btn" name="login">Login</button>
        </a>
        
      </div>
    </div>
      </form>
      <script>
        function myFunction(){
          var x=document.getElementById("myInput");
          if(x.type=="password"){
            x.type="text";
          }
          else{
            x.type="password";
          }
        }
        </script>


        
  </body>
</html>
