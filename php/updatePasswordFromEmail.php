<?php
session_start();
include ("connect.php");
include ("password.php");
$token2  = $_POST["token2"];
$userID = $_POST["userID2"];
$newpassword  = mysqli_real_escape_string($con, $_POST["password"]);
$newpassword2 = mysqli_real_escape_string($con, $_POST["password_confirm"]);
$new_password_hash = password_hash("$newpassword", PASSWORD_DEFAULT);



$result=mysqli_query($con, "SELECT username, password, userID FROM `users` WHERE userID='$userID'");

// Mysql_num_row is counting table row
$getpass = mysqli_fetch_array($result);
$hash = $getpass['password'];

$count=mysqli_num_rows($result);
$rowcount=mysqli_num_rows($result);


if ($newpassword == $newpassword2) {
    echo 'Password is valid!';

   
$changePassword = mysqli_query($con, "UPDATE `users` SET  `password` = '$new_password_hash' WHERE userID = '$userID'");
   header("location: ../index.php?s=1");

} else {
    //Invalid password.';
     header("location: ../resetPasswordFromEmail.php?e=14&token=".$token2."");


}
?>