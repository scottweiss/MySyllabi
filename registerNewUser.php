<?php
include 'php/password.php';
include 'php/connect.php';

$username = $_POST["userName"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = $_POST["password_confirm"];
$password_hash = password_hash("$password", PASSWORD_DEFAULT);

echo "<table><tr><td>username</td><td>" . $username . "</td></tr>" . 
	 "<tr><td>email address</td><td>" . $email . "</td></tr>" . 
	 "<tr><td>password</td><td>" . $password . "</td></tr>" .
	 "<tr><td>password confirmation</td><td>" .$password2 . "</td></tr>" . 
	 "<tr><td>password hash</td><td>" . $password_hash . "</td></tr></table>" ;

	 $result = mysqli_query($con,"SELECT *, TIME_FORMAT(startTime, '%l:%i %p') as 'ampmStartTime', TIME_FORMAT(endTime, '%l:%i %p') as 'ampmEndTime' FROM classes");

while($row = mysqli_fetch_array($result))
  {
  echo "<div class='class'>";
  echo "<span class='clName'>" . $row['name'] . "</span> " . $row['classLocation'];
  echo $row['professor'] . " " . $row['ampmStartTime']. " - " .  $row['ampmEndTime'] ;
  echo "</div>";
  }


?>