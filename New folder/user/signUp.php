<?php
include("signup1.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signUp.css" />
    <title>SignUp</title>
  </head>
  <body>
    <div class="container">
      <div class="login-box">
        <!--header section-->
        <div class="logo">
          <img src="newLogo.png" height="150px" width="300px" />
        </div>
        <div class="pageTitle">
          <h2>Create Your Account</h2>
        </div>
        <!---input section-->
        <form action="signUp.php" method="post">
        <div class="input">
            <input type="text" name="name" class="input-box" placeholder="username" required />
          </div>
        <div class="input">
          <input type="text" name="mkpt" class="input-box" placeholder="mkpt-" required />
        </div>
        <div class="input">
          <input type="password" id="myInput" name="password" class="input-box" placeholder="Password" required />
          <div class="input">
          <input type="checkbox" onclick="myFunction()" >Show Password</div>
        </div>
        <!--button section-->
        <a href="singUp.php">
          <button class="signin-btn" name="signin-btn">Sign Up</button>
        </a>
        
</form>
      </div>
    </div>
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
