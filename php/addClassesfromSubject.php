<?php
$s=$_GET["s"];

include 'connect.php';

$sql="SELECT * FROM classInSubject WHERE subjectID = '".$s."'";

$result = mysqli_query($con,$sql);

echo "<table>";

while($row = mysqli_fetch_array($result))
  {
    $sql="SELECT * FROM classes WHERE ID = '".$row['classID']."'";
    $relClasses = mysqli_query($con,$sql);
    while($relClass = mysqli_fetch_array($relClasses))
  echo "<tr><td>" . $relClass['name'] . "</td><td><input type='button' value='add'>\n";

 
  }
echo "</table>";
?>