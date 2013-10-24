<?php
session_start(); 
$classID = $_POST["classID"];
$userID = $_SESSION["ID"];
include ("connect.php");
$addClass = mysqli_query($con, "DELETE FROM  `userClasses` WHERE userID = $userID AND classID = $classID");
   header("location: ../browseClasses.php?e=9");
?>