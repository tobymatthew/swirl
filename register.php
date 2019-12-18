<?php
require_once 'start.php';
require 'includes/signupPlaceholder.php';
require 'includes/LoginPlaceholder.php';


//creating variables to prevent errors
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/register_style.css?v=<?php echo time();?>">
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
   <script src="assets/js/jquery-3.4.1.js"></script>
    <script src="assets/js/register.js"></script>


    <title>Swirl Feed</title>
</head>

<body>

   <?php
      if(isset($_POST['reg_button'])){

        echo '
          <script>
          $(Document).ready(function(){

                $("#first").hide();
                $("#second").show();
          });
          
          </script>
        
        ';

     }
   ?>

    <!--creating the Login form below -->
    <div class="wrapper">
        <div class="login_box">
            <div class="login_hearder">
                <h1>Swirlfeed!</h1>
                <p>Login or Sign up below</p>
            </div>
            <div id="first">
                    <form action="register.php" method="POST">

                        <input type="email" name="log_email" placeholder="Email" value="<?php 
                if(isset($_SESSION['log_email'])){
                    echo $_SESSION['log_email'];
                }
                ?>" required> <br>
                        <input type="password" name="log_password" placeholder="Password">
                        <br>
                        <?php 
                if(in_array("Email or Password doesn't exist <br>",$error_array)) echo "Email or Password doesn't exist"; ?>

                        <input type="submit" name="log_button" value="login">
                        <br>
                        <a href="#" class="signup" id="signup"> Need an account?Register here!</a>
                        <br>
                    </form>
            </div>

            <!--creating the register form below -->
            <div id="second">
                    <form action="register.php" method="POST">
                        <input type="text" name="reg_fname" placeholder="First Name " value="<?php 
                if(isset($_SESSION['reg_fname'])){
                    echo $_SESSION['reg_fname'];
                }
                
                ?>" required>
                        <?php
                if(in_array("Name must have more than two character and less than 25 <br>",$error_array)) {
                echo "Name must have more than two character and less than 25 <br>";
                }
                ?>
                        <br>

                        <input type="text" name="reg_lname" placeholder="Last Name " value="<?php 
                if(isset($_SESSION['reg_lname'])){
                    echo $_SESSION['reg_lname'];
                }
                ?>" required>

                        <?php
                if(in_array("Name must have more than two character and less than 25 <br>",$error_array)){
                echo"Name must have more than two character and less than 25 <br>";
                }
                ?>
                        <br>


                        <input type="email" name="reg_email" placeholder="Email" value="<?php 
                if(isset($_SESSION['reg_email'])){
                    echo $_SESSION['reg_email'];
                }
                ?>" required>

                        <?php
                if(in_array("Email already exists <br>",$error_array)) echo"Email already exists <br>";
                if(in_array("invalid email format <br>",$error_array)) echo"invalid email format <br>";
                ?>
                        <br>

                        <input type="password" name="reg_password" placeholder="Password">
                        <br>

                        <input type="password" name="reg_password2" placeholder="Confirm password"><br>
                        <?php
                if(in_array("password must contain A-Z characters or numbers <br>",$error_array)) echo"password must contain A-Z characters or numbers <br>";
                if(in_array("password must be between between 6-30 characters <br>",$error_array)) echo"password must be between between 6-30 characters <br>";
                ?>

                        <input type="submit" name="reg_button" value="register"> <br>
                        <?php
                if(in_array("<span> You have Successfuly signed up </span>",$error_array)) echo"<span style='color:#14c800'> You have Successfuly signed up </span>";
                ?>
                        <br>
                        <a href="#" class="signin" id="signin"> Already have an account?Sign in here!</a>


                    </form>
            </div>
        </div>
    </div>

</body>

</html>