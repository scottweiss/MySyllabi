<?php
$q=$_GET["q"];

include 'connect.php';

$sql="SELECT * FROM subject WHERE ID = '".$q."'";

$result = mysqli_query($con,$sql);


// echo "<select onchange='getClassList(this.value) || showAddClassForm(this.value)'><option selected>Pick a subject.</option>";

// while($row = mysqli_fetch_array($result))
//   {


//   echo "<option name='school' value='" . $row['ID'] . "'>" . $row['subjectCode'] . " - " .  $row['subjectName'] ."</option>\n";

 
//   }
// echo "</select>";
while($subject = mysqli_fetch_array($result))
  {
echo "
<form>
 				<label for=\"className\">
                    Class Name:
                    <input class=\"loginInput\" type=\"text\" name=\"className\" id=\"field1\" placeholder=\" " . $subject['subjectCode']  . " 101\"required=\"required\">
               </label>

               <label for=\"professor\">
                    Professor's Name:
                    <input class=\"loginInput\" type=\"text\" name=\"professor\" id=\"field1\" placeholder=\"Prof. Anthony Drexel\" required=\"required\">
               </label>

               <label for=\"classSection\">
                    Class Section:
                    <input class=\"loginInput\" type=\"text\" name=\"classSection\" id=\"field1\" placeholder=\"001\" required=\"required\">
               </label>
               
</form>";
}

?>