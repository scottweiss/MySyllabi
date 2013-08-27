<?php
$q=$_GET["q"];

include 'connect.php';

$sql="SELECT * FROM subject WHERE schoolID = '".$q."'";

$result = mysqli_query($con,$sql);

echo "<select onchange='showAddClassForm(this.value)'><option selected>Pick a subject.</option>";

while($row = mysqli_fetch_array($result))
  {


  echo "<option name='school' value='" . $row['ID'] . "'>" . $row['subjectCode'] . " - " .  $row['subjectName'] ."</option>\n";

 
  }
echo "</select>";


?>