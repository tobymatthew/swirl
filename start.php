<?php
ob_start(); 
session_start();
//$timezone=date_default_timezone_set("Africa/Nigeria");
//connection varaible
$con=mysqli_connect("localhost", "root", "", "social"); 

// checking if there is error in the connection
if(mysqli_connect_errno()){ 

    echo "failed to connect".mysqli_connect_errno();
}

?>
