<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="login-box">
        <!--header section-->
       
        <div class="logo">
          <img src="newLogo.png" height="150px" width="300px" />
        </div>
        <div class="pageTitle">
          <h2>UCSM Club Activities<br> Information System</h2>

        </div>
        <!---input section-->
        <form  action='' method="post" class="formdisplay">
        <div class="input">
          <input type="text" name="mkpt" class="input-box" placeholder="mkpt-" required />
        </div>
        <div class="input">
          <input type="password"  id="myInput" name="password" class="input-box" placeholder="Password" required/>
         <div class="input">
          <input type="checkbox" onclick="myFunction()" >Show Password</div>
        </div>
        <?php
        session_start();
        if(isset($_POST['login'])){
          $mkpt=$_POST['mkpt'];
          $password=$_POST['password'];
          require_once "../config/dbase.php";
          $sql="Select * from student WHERE mkpt= '$mkpt'";
          $rs = mysqli_query($con,$sql);
          $user=mysqli_fetch_array($rs,MYSQLI_ASSOC);
          if($user){
             
            if(($mkpt===$user['mkpt'])&& $password===$user['password']){
              
              $_SESSION["uid"]=$user['id'];
              if($user['status']=='MEMBER'){
                header("Location: homePage.php");
              }
                else if(empty($user['club_name']) || $user['status']=='PENDING' || $user['status']=='Waiting'){
                    header("Location: guestHome.php");
                }
                /*if($user['status']='MEMBER'){
                  header("Location: homePage.php");
                }*/
              //die();
              
            }else{
              echo "<div class='alert'>⚠️Password does not match</div>";
            }
          }else{
              echo "<div class='alert'>⚠️Mkpt does not match</div>";
            }
            
          }
        
        ?>
        <!--button section-->
        <a href="login.php">
          <button class="signin-btn" name="login">Login</button>
        </a>
        <!--<div class="keepme-singin">
          <input type="checkbox" class="inputSpam" />
          <span>Keep me signed in</span>
        </div>-->
        <div class="signUp">
          <span>Your don't have an account?</span>
          <a href="signUp.php">Sign Up here</a>
        </div>
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
