	<?php 
include '/php/connect.php';
$con=mysqli_connect("localhost","scottawe_tbd","booker424","scottawe_tbd");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


		
	$result = mysqli_query($con,"SELECT *, TIME_FORMAT(startTime, '%l:%i %p') as 'ampmStartTime', TIME_FORMAT(endTime, '%l:%i %p') as 'ampmEndTime' FROM classes");

while($row = mysqli_fetch_array($result))
  {
  echo "<div class='class'>";
  echo "<span class='clName'>" . $row['name'] . "</span> " . $row['classLocation'];
  echo $row['professor'] . " " . $row['ampmStartTime']. " - " .  $row['ampmEndTime'] ;
  echo "</div>";
  }




include 'php/password.php';
include 'php/functions.php';		
	
// displayType("assignment");
//createUser("scottweiss", "puddingpops");



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