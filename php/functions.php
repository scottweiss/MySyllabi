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
  
  echo "<table border='1px' class='assignmentTable'>";
  echo "<tr><th>Assignment</th><th>Type</th><th>Due Date</td>";

    if($row["creatorID"] == $_SESSION["ID"]){
echo "<th><form action='addAssignment.php' method='post'>
    <button class='tableButton' name='classID' type='submit' value='".$row['ID']."'>+</button>
</form></th>";
}
if($row["creatorID"] != $_SESSION["ID"]){
echo "<th>Flag Assignment</th>";
}
  echo "</tr>";
$getAssignments = mysqli_query($con,"SELECT * FROM assignments WHERE `classID` = '$row[ID]' ORDER BY dueDate");
while($assignment = mysqli_fetch_array($getAssignments))
  {
  // echo "<table border='1px'>";
  // echo "<tr><th>Assignment</th><th>Type</th><th>Due Date</td></tr>";
  echo "<tr><td>".$assignment['name']."</td><td>".$assignment['type']."</td><td>".$assignment['dueDate']."</td>";
if($row["creatorID"] == $_SESSION["ID"]){
echo "<td><form action='editAssignment.php' method='post'>
<input type='text' name='assignmentID'  value='".$assignment['ID']."' hidden>
    <button class='tableButton' name='classID' type='submit' value='".$row['ID']."'>edit</button>
</form></td>";
}

if($row["creatorID"] != $_SESSION["ID"]){
echo "<th><form action='flagAssignment.php' method='post'>
    <button class='tableButton' name='classID' type='submit' value='".$row['ID']."'>Flag</button>
</form></th>";
}
  echo "</tr>";
  
  //echo "</table>";

}


echo "</table>";

  echo "</div>";
}

}

function displayClassPlain($ID){
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
  
}


  echo "</div>";
}




function deleteUser($userID){
include ("php/connect.php");
$result = mysqli_query($con,"DELETE * From classes WHERE `ID` = '$userID'");
   header("location: ../admin.php?e=5");
}

function deleteClass(){

}

function modifyClass(){

}



function getListType($listType){
include ("php/connect.php");
$result = mysqli_query($con,"SELECT * FROM $listType ORDER BY ID ");

while($row = mysqli_fetch_array($result)){

  echo "<option value='". $row['ID']."'>"; 
echo $row[$listType];

  echo "</option>";
  
}
}






?>