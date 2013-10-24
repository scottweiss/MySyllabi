<?php
$classID = $_POST["classID"];
include ("connect.php");
mysqli_query($con,"DELETE FROM `classes` WHERE ID = '$classID'");
   header("location: ../admin.php?e=7");
?>