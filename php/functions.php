<?php
function displayType($dType)
{
require 'connect.php';
echo $dType;
$echotable = mysqli_query($con,"SELECT * FROM ". $dType ."Type");
echo "<table>";
while($rowww = mysqli_fetch_array($echotable))
  {
  echo "<tr><td>" . $rowww['ID'] . "</td><td>" . $rowww[$dType . 'Type'] . "</td></tr>";
  }
  echo "</table>";
}

function createUser($username, $password){
echo $username . password_hash($password, PASSWORD_DEFAULT);
}


function 


?>