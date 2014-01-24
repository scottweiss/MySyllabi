<?php
session_start();
include ("connect.php");
include ("password.php");




if(isset($_POST['class'])) {
    // id index exists
$classID = mysqli_real_escape_string($con, $_POST["classID"]);
$reportType = "classes";

$oldProfessor  = mysqli_real_escape_string($con, $_POST["oldProfessor"]);
$oldSection  = mysqli_real_escape_string($con, $_POST["oldSection"]);
$oldClassLocation = mysqli_real_escape_string($con, $_POST["oldClassLocation"]);

$newProfessor  = mysqli_real_escape_string($con, $_POST["newProfessor"]);
$newSection  = mysqli_real_escape_string($con, $_POST["newSection"]);
$newClassLocation = mysqli_real_escape_string($con, $_POST["newClassLocation"]);

if ($oldProfessor == $newProfessor && $oldSection == $newSection && $newClassLocation == $oldClassLocation){

	header("location: ../report.php?e=15&class=".$classID."");
}
else{

echo $oldSection. " ".$oldProfessor." ".$oldClassLocation ." " . $newSection. " ".$newProfessor." ".$newClassLocation." ".$reportType." ".$classID;

$flagID = substr(str_shuffle(MD5(microtime())), 0, 36);


$getUserIDfromClassID=mysqli_query($con, "SELECT * FROM `classes` WHERE ID='$classID'");

while ($userIDd = mysqli_fetch_array($getUserIDfromClassID)){
	echo $userIDd['creatorID'];
}

$newFlag = mysqli_query($con, "INSERT INTO `flags` (flagID, flagType, objectID)
VALUES ('$flagID', '$reportType', '$classID')");

if ($oldProfessor !== $newProfessor){
	echo "New Professor Name";
	$newFlagError = mysqli_query($con, "INSERT INTO `flagErrors` (ID, flagID, errorField, correctionField)
VALUES ('', '$flagID', 'professor', '$newProfessor')");
}

if ($oldClassLocation !== $newClassLocation){
	echo "New Location";
	$newFlagError = mysqli_query($con, "INSERT INTO `flagErrors` (ID, flagID, errorField, correctionField)
VALUES ('', '$flagID', 'classLocation', '$newClassLocation')");
}

if ($oldSection !== $newSection){
	echo "New Section";
	$newFlagError = mysqli_query($con, "INSERT INTO `flagErrors` (ID, flagID, errorField, correctionField)
VALUES ('', '$flagID', 'section', '$newSection')");
}

}

}

if(isset($_GET["assignment"])) {
    // id index exists
$assignmentID = $_GET["assignment"];
$reportType = "assignment";
}

$newProfessor  = mysqli_real_escape_string($con, $_POST["newProfessor"]);
$newLocation  = mysqli_real_escape_string($con, $_POST["newSection"]);
$newClassLocation = mysqli_real_escape_string($con, $_POST["newClassLocation"]);




$result=mysqli_query($con, "SELECT * FROM `users` WHERE username='$_SESSION[username]'");






// Figure out whether the report is a class or assignment.

// Get the username and email address of original author (oa).

// Somehow add info to the three flags tables which will inturn notify users once logged in.

// Send and email to oa with unique link to a correction page.

// Return user to confirmation page.



?>