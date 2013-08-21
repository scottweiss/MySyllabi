<?php
// Create connection
$con=mysqli_connect("localhost","scottawe_tbd","booker424","scottawe_tbd");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>