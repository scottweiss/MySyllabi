<?php 
session_start();
include "connect.php";
$className = $_POST["className"];
$professor = $_POST["professor"];
$section = $_POST["classSection"];
$location = $_POST["classLocation"];
$subjectID = $_POST["classSubjectID"];
$startTime = $_POST["startTime"];
$endTime = $_POST["endTime"];
$userID = $_SESSION["ID"];


$startTimeArray = explode("%3A", $startTime);
$startTimeFinal =  $startTimeArray[0] . ":" .  $startTimeArray[1]. ":00";

$endTimeArray = explode("%3A", $endTime);
$endTimeFinal =  $endTimeArray[0] . ":" .  $endTimeArray[1]. ":00";




$newClass = mysqli_query($con, "INSERT INTO classes (ID, creatorID, name, section, professor, classLocation, startTime, endTime)
VALUES ('', '$userID', '$className', '$section', '$professor', '$location', '$startTimeFinal', '$endTimeFinal')");

$getClassID = mysqli_query($con, "Select ID FROM `classes` WHERE creatorID='$userID' and name='$className' and section='$section' and professor = '$professor' and classLocation = '$location'");


while($getClassID = mysqli_fetch_array($getClassID))
  {
  echo "the class id is " .$getClassID['ID'];
  $classID = $getClassID['ID'];
$newClass = mysqli_query($con, "INSERT INTO `classInSubject` (ID, subjectID, classID)
VALUES ('', '$subjectID', '$classID')");

  header("Location: ../viewClass.php?class=" . $getClassID['ID'] . " ");

  }


//header('Location: .php');

// echo $className . " " . $professor . " " . $section . " " . $location . " " . $subjectID . " " . $userID;



               
?>