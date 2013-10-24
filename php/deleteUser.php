<?php
$userID = $_POST["userID"];
include ("connect.php");
mysqli_query($con,"DELETE FROM `users` WHERE userID = '$userID'");
   header("location: ../admin.php?e=5");
?>