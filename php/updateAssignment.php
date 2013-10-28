<?php 
session_start();
include "connect.php";
$assignmentName = mysql_real_escape_string($_POST["assignmentName"]);
$assignmentDueDate = mysql_real_escape_string($_POST["assignmentDueDate"]);
$assignmentDescription = mysql_real_escape_string($_POST["assignmentDescription"]);
$assignmentType = mysql_real_escape_string($_POST["assignmentType"]);
$classID = $_POST["classID"];
//$startTime = $_POST["startTime"];
//$endTime = $_POST["endTime"];
$userID = $_SESSION["ID"];
$assignmentID = $_POST["assignmentID"];
echo $assignmentName . $assignmentDueDate . $assignmentDescription . $assignmentType . $assignmentID;
// $startTimeArray = explode("%3A", $startTime);
// $startTimeFinal =  $startTimeArray[0] . ":" .  $startTimeArray[1]. ":00";

// $endTimeArray = explode("%3A", $endTime);
// $endTimeFinal =  $endTimeArray[0] . ":" .  $endTimeArray[1]. ":00";




$newAssignment = mysqli_query($con, "UPDATE `assignments` SET name='$assignmentName', dueDate='$assignmentDueDate', type='$assignmentType', description='$assignmentDescription' WHERE ID = '$assignmentID'");

// $getClassID = mysqli_query($con, "SELECT * FROM `classes` WHERE creatorID='$userID' and name='$className' and section='$section' and professor = '$professor' and classLocation = '$location'");


// while($getClassID = mysqli_fetch_array($getClassID))
//   {
//   echo "the class id is " .$getClassID['ID'];
//   $classID = $getClassID['ID'];
// $newClass = mysqli_query($con, "INSERT INTO `classInSubject` (ID, subjectID, classID)
// VALUES ('', '$subjectID', '$classID')");
// $userInClass = mysqli_query($con, "INSERT INTO `userClasses` (ID, userID, classID)
// VALUES ('', '$userID', '$classID')");

header("Location: ../viewClass.php?class=".$classID."&s=3");

//   }

?>