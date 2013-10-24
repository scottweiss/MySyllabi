<?php
session_start(); 
$classID = $_POST["classID"];
$userID = $_SESSION["ID"];
include ("connect.php");
$addClass = mysqli_query($con, "INSERT INTO `userClasses` (ID, userID, classID)
VALUES ('', '$userID', '$classID')");
   header("location: ../browseClasses.php?e=8");
?>