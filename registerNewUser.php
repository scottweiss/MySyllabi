<?php
include 'php/password.php';
include 'php/connect.php';

$username = $_POST["userName"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = $_POST["password_confirm"];
$password_hash = password_hash("$password", PASSWORD_DEFAULT);

function generateRandomString($length = 40) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
$token = generateRandomString();

$checkUsername=mysqli_query($con, "SELECT 'username' FROM `users` where username = '$username'");
$usernameCheckRun =mysqli_num_rows($checkUsername);

$checkEmail=mysqli_query($con, "SELECT 'email' FROM `users` where email = '$email'");
$emailCheckRun =mysqli_num_rows($checkEmail);


if($usernameCheckRun == 1){
	header('Location: register.php?e=0');
	
}
elseif ($emailCheckRun == 1){
	header('Location: register.php?e=1');
}
else{
$newUser = mysqli_query($con, "INSERT INTO users (userID, username, password, email, token)
VALUES ('', '$username', '$password_hash', '$email', '$token')");

header('Location: index.php?e=4');
}

?>