<?php session_start(); 

include '../php/connect.php';
include '../php/password.php';

$username = $_POST["userName"];
$password = $_POST["password"];
$password_hash = password_hash("$password", PASSWORD_DEFAULT);

//$sql = "Select * from users where password = '$password_hash' AND (email = '$username' OR username = '$username'"; 




$result=mysqli_query($con, "SELECT username, password FROM `users` WHERE username='$username' or email='$username' ");

// Mysql_num_row is counting table row
$getpass = mysqli_fetch_array($result);
$hash = $getpass['password'];
$username = $getpass['username'];

$count=mysqli_num_rows($result);
$rowcount=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if (password_verify($password, $hash)) {
    echo 'Password is valid!';
    $_SESSION["username"] = $username;
    header("location: ../home.php");
} else {
    echo 'Invalid password.';
    header("location: ../index.php?e=2");
}




?>