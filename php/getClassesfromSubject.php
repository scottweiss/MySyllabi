<?php
$s=$_GET["s"];

include 'connect.php';

$sql="SELECT * FROM classInSubject WHERE subjectID = '".$s."'";

$result = mysqli_query($con,$sql);

// echo "<table>";





$count=mysqli_num_rows($result);

if ($count == 0){
	echo "<div class='shameTopMargin'>It seems no classes have been added. Go right ahead and <a href=\"addClasses.php\">create a class!</a></div>";
}



while($row = mysqli_fetch_array($result))
  {
    $sql="SELECT *, TIME_FORMAT(startTime, '%l:%i %p') as 'ampmStartTime', TIME_FORMAT(endTime, '%l:%i %p') as 'ampmEndTime' FROM classes WHERE ID = '".$row['classID']."'";
    $relClasses = mysqli_query($con,$sql);


    while($relClass = mysqli_fetch_array($relClasses))
    {
    	
    	
  // echo "<tr><td>" . $relClass['name'] . "</td><td><input type='button' value='add'>\n";
    	  echo "<div class='class'>";
  echo "<div class='clName'><a href=viewClass.php?class=" . $relClass['ID'] . ">" . $relClass['name'] . "</a></div>"; 
  echo "<table>";
  echo "<tr><th>Instructor:</th><td>" .$relClass['professor'] . "</td></tr>";
  echo "<tr><th>Section:</th><td>" . $relClass['section'] . "</td></tr>";
  echo "<tr><th>Class Location:</th><td>" . $relClass['classLocation']. "</td></tr>";
  echo "<tr><th>Class Time:</th><td>" . $relClass['ampmStartTime']. " - " .  $relClass['ampmEndTime'] . "</td></tr>";
  echo "</table>";
  echo "</div>";

 
  };}
// echo "</table>";
?>

 