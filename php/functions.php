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


function displayClass($ID){
include ("php/connect.php");
$result = mysqli_query($con,"SELECT *, TIME_FORMAT(startTime, '%l:%i %p') as 'ampmStartTime', TIME_FORMAT(endTime, '%l:%i %p') as 'ampmEndTime' FROM classes WHERE `ID` = '$ID'");

while($row = mysqli_fetch_array($result))
  {
  echo "<div class='class'>";
  echo "<div class='clName'><a href=viewClass.php?class=" . $row['ID'] . ">" . $row['name'] . "</a></div>"; 
  echo "<table>";
  echo "<tr><th>Instructor:</th><td>" .$row['professor'] . "</td></tr>";
  echo "<tr><th>Section:</th><td>" . $row['section'] . "</td></tr>";
  echo "<tr><th>Class Location:</th><td>" . $row['classLocation']. "</td></tr>";
  echo "<tr><th>Class Time:</th><td>" . $row['ampmStartTime']. " - " .  $row['ampmEndTime'] . "</td></tr>";
  echo "</table>";
  if($row["creatorID"] == $_SESSION["ID"]){
echo "<input type='button' value='Add Assignments'></input>";
}


  echo "</div>";
}

}

function deleteUser($userID){
include ("php/connect.php");
$result = mysqli_query($con,"DELETE * From classes WHERE `ID` = '$userID'");
}

function deleteClass(){

}

function modifyClass(){

}

?>