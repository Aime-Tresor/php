<?php
session_start();
include 'db.php';
if($_POST>0){
$result = mysqli_query($con, "SELECT `pw` FROM `users` WHERE pw ='". $_POST['pw'] . "' ");
$row = mysqli_fetch_array($result);
if(is_array($row)){
    $_SESSION['password'] = $row['pw'];
      header("Location:dash.php");  
    
}
else{
    $_SESSION['invalid-p'] = 'Invalid password';
    header("Location:login.php");
}
}





?>