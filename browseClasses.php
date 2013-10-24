<?php session_start(); 
?>
<!DOCTYPE html>

            <?php
            include ("header.php");
            include ("php/connect.php")
            ?>
    

    <div id="mainContent">

        <div id="sideBar">

             <?php
            include ("userNav.php");
             ?>

        <script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                $('#classesTable').dataTable();
                }
                );
    </script>
            
        </div><!-- end of sidebar -->

        <div id="content" class="stiched">
            <table id="classesTable" class="display">
                <thead>
                    <tr>
                        <td>Class</td>
                        <td>Professor</td>
                       <td>Add/Drop</td>
                    </tr>
                </thead>
                <tbody>

            <?php
            $result3 = mysqli_query($con,"SELECT * FROM `classes`");

            while($row3 = mysqli_fetch_array($result3))
            {
                echo "<tr>";
                echo "<td><a href='viewClass.php?class=" . $row3['ID']."'>" . $row3['name'] . "</a></td>"; 
                echo "<td>" . $row3['professor'] . "</td>";

                $result24=mysqli_query($con, "SELECT * FROM `userClasses` WHERE userID='".$_SESSION["ID"]."' AND  classID='". $row3['ID']."'");
 if ($count=mysqli_num_rows($result24) == 1)
{

 echo "<td><form action='php/dropClass.php' method='post'>
    <button class='nostyle' name='classID' type='submit' value='".$row3['ID']."'>Drop Class</button>
</form></td>";
} else
                echo "<td><form action='php/enrollClass.php' method='post'>
    <button class='nostyle' name='classID' type='submit' value='".$row3['ID']."'>Enroll in Class</button>
</form></td>";






              
                echo "</tr>";

            }
          
          ?>
</tbody>
</table>

<div class="spacer"></div>
            <div class="contentHead">Join a Class</div> 
            <form class="fullWidth">
                <?php

                $getSchoolList = mysqli_query($con,"SELECT * FROM school");
                echo "<select onchange='showUser(this.value)'>\n<option selected>Pick a School</option>\n";

                while($row = mysqli_fetch_array($getSchoolList))
                  {

                  echo "<option name='school' value='" . $row['ID'] . "'>" . $row['schoolName'] . "</option>\n";

                  }
                  echo "</select>";

                ?>

                <div id="txtHint"></div>
                <div id="classTable"><table>
<?php
 // $sql="SELECT * FROM classes";
 //    $relClasses = mysqli_query($con,$sql);
 //    while($relClass = mysqli_fetch_array($relClasses))
 //  echo "<tr><td>" . $relClass['name'] . "</td><td><input type='button' value='add'>\n";

?>

</table>
                </div>
            </form>
            
        </div><!-- end of content -->


        <div class="clearfix"></div>

        

    </div>

        <?php

            include ("footer.php");
        
        ?>

        </div>
        <!-- End site content -->

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>