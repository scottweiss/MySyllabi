<?php 
session_start();
include "connect.php";
$className = $_POST["className"];
$professor = $_POST["professor"];
$section = $_POST["classSection"];
$location = $_POST["classLocation"];
$subjectID = $_POST["classSubjectID"];
$userID = $_SESSION["ID"];


$newClass = mysqli_query($con, "INSERT INTO classes (ID, creatorID, name, section, professor, classLocation)
VALUES ('', '$userID', '$className', '$section', '$professor', '$location')");

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