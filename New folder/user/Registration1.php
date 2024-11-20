<?php
  //session_start();
 include('Registrationdb.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="Registration.css">
</head>
<body>

    
    <div class="form">
        
        
            <!--Form header-->
            <div class="form-header">
                
                    <img src="newLogo2.png" class="logo" width="200px">
                    <h4>Registration Form For Membership</h4>
            </div>
            <!--Form body-->
            <form class="submit-form" action="Registration1.php" method="post">
            <div class="form-body">
                <div class="horzontal-group">
                    
                    <div class="form-group">
                        <label for="name" class="label-title">Name</label>
                        <input type="text" name="name" id="lastname" class="form-input" placeholder="enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="label-title">Student ID</label>
                        <input type="text" name="mkpt" id="lastname" class="form-input"  placeholder="enter your student ID" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="label-title">Phone no.</label>
                        <input type="text" name="phone" id="lastname" class="form-input"  placeholder="enter your phone no." required>
                        
                        
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="label-title">Major</label>
                        <select name="major" id="major" class="form-input">
                            <option value="cst">CST</option>
                            <option value="cs">CS</option>
                            <option value="ct">CT</option>
                            <option value="se">Software Engineering</option>
                            <option value="ke">Knowledge Engineering</option>
                            <option value="bis">Business Information System</option>
                            <option value="ne"> Computer Communication and Network</option>
                            <option value="hpc">High Performance Computing</option>
                            <option value="es">Embedded System</option>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="clubname" class="club-title">Choose club</label>
                        <select name="club" id="clubname" class="form-input">
                            <option value="football club">Football Club</option>
                            <option value="music club">Music Club</option>
                            <option value="photo club">Photo Club</option>
                            <option value="art club">Art Club</option>
                          
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="label-title">Year of study</label>
                        <select name="year" id="yrOfStudy" class="form-input">
                            <option value="FirstYearSemI">First Year First Semester</option>
                            <option value="FirstYearSemII">First Year Second Semester</option>
                            <option value="SecondYearSemI">Second Year First Semester</option>
                            <option value="SecondYearSemII">Second Year Second Semester</option>
                            <option value="ThirdYearSemI">Third Year First Semester</option>
                            <option value="ThirdYearSemII">Third Year Second Semester</option>
                            <option value="FourthYearSemI">Fourth Year First Semester</option>
                            <option value="FourthYearSemII">Fourth Year Second Semester</option>
                            <option value="FifthYearSemI">Fifth Year First Semester</option>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email" class="label-title">Email</label>
                        <input type="email" name="email" id="lastname" class="form-input" placeholder="enter your email" required>
                    </div>
                    <div class="form-group" >
                        <label for="gender"  class="label-title">Gender</label><br><br>
                        <input type="radio" name="gender" value="male" id="male" class="radioBtn">Male
                        <input type="radio" name="gender" value="female" id="female" class="radioBtn">Female
                    </div>
                </div>
            </div>
            
            
            <!--Form footer-->
            <div class="form-footer">
                
                <button type="submit" name="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</div>
</form>

</body>
</html> 