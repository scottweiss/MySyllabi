<?php
include '../php/connect.php';
$email = $_POST["email"];
echo $email;
$result=mysqli_query($con, "SELECT * FROM `users` WHERE  email='$email'");

//Mysql_num_row is counting table row
$getToken = mysqli_fetch_array($result);

$token = $getToken['token'];

$count=mysqli_num_rows($result);
if ($count == 1){

	echo "user is in system";
$to = $email;
$subject = "MySylla.bi Password Reset";
$message = "Forgot your password? Don't worry! You can reset your password by visiting  

http://www.tbd.scottaweiss.com/resetPasswordFromEmail.php?token=".$token."";
$from = "scott@scottaweiss.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);


	header("location: ../resetPassword.php?e=13");
}
else{
    header("location: ../resetPassword.php?e=12");
}


// $to = "scottaweiss@gmail.com";
// $subject = "MySylla.bi Password Reset";
// $message = "Hello! This is a test!";
// $from = "scott@scottaweiss.com";
// $headers = "From:" . $from;
// mail($to,$subject,$message,$headers);
// echo "Mail Sent.";
?>