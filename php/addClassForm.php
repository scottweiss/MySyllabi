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
 echo "<form action=\"php/createClassScript.php\" method=\"post\" id=\"createClassForm\">";
while($subject = mysqli_fetch_array($result))
  {
echo "
 				<label for=\"className\">
                    Class Name:
                    <input class=\"loginInput\" type=\"text\" name=\"className\" id=\"field1\" placeholder=\"" . $subject['subjectCode']  . " 101\"required=\"required\">
               </label>

               <label for=\"professor\">
                    Professor's Name:
                    <input class=\"loginInput\" type=\"text\" name=\"professor\" id=\"field2\" placeholder=\"Prof. Anthony Drexel\" required=\"required\">
               </label>

               <label for=\"classSection\">
                    Class Section:
                    <input class=\"loginInput\" type=\"text\" name=\"classSection\" id=\"field3\" placeholder=\"001\" required=\"required\">
               </label>

               <label for=\"classLocation\">
                    Class Location:
                    <input class=\"loginInput\" type=\"text\" name=\"classLocation\" id=\"field4\" placeholder=\"Building Room #\" required=\"required\">
               </label>
               <input type=\"text\" value=\"" . $q. "\" name=\"classSubjectID\" class=\"hidden\">
              
               <input type=\"submit\" value=\"Create Class\" formaction=\"php/createClassScript.php\" formmethod=\"post\">
";
}
echo "</form>";
?>