<?php

if(isset($_POST['log_button'])){

    $email=filter_var($_POST['log_email'],FILTER_VALIDATE_EMAIL); //sanitize Email
    $_SESSION['log_email']=$email; //store in variable session

    $password=md5($_POST['log_password']);

$check_database_query=mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND  password='$password'");
$check_login_succesful=mysqli_num_rows($check_database_query);

if($check_login_succesful==1){
   $rows=mysqli_fetch_array($check_database_query);
   $username=$rows['username'];
   
   $query_closed=mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND user_closed='yes'");
   if($query_closed==1){
       $reopen_account=mysqli_query($con,"UPDATE users SET user_closed='no' WHERE email='$email'");
       
   }

   $_SESSION['username']=$username;
   header("Location:index.php");
   exit();



}

else{
    array_push($error_array,"Email or Password doesn't exist <br>");


}



}

?>