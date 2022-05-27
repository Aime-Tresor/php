<?php
session_start();
include 'db.php';
if($_POST>0){
$result = mysqli_query($con, "SELECT `ln`,`em` FROM `users` WHERE em='". $_POST["em"] . "' ");
$row = mysqli_fetch_array($result);
if(is_array($row)){
    $_SESSION['username'] = $row['em'];
    $_SESSION['lastname'] = $row['ln'];
    header("Location:login-p.php");

}
else{
    $_SESSION['invalid'] = 'Invalid username';
    header("Location:login.php");
}
}





?>