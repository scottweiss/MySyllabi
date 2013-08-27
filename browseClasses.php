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
            
        </div><!-- end of sidebar -->



        <div id="content" class="stiched">
            
            <div class="contentHead">Browse Classes <a href="addClasses.php">Add a Class</a></div> 
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
 $sql="SELECT * FROM classes";
    $relClasses = mysqli_query($con,$sql);
    while($relClass = mysqli_fetch_array($relClasses))
  echo "<tr><td>" . $relClass['name'] . "</td><td><input type='button' value='add'>\n";

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
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>