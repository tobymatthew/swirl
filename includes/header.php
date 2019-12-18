<?php

require 'start.php';


if(isset($_SESSION['username'])){
    $userLoggedIn=$_SESSION['username'];
}

else{
    header("Location:register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <script src="bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/jquery-3.4.1.js"></script>
</head>
<body>