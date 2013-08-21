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