<?php session_start(); 
?>
<!DOCTYPE html>
  
            <?php
            include ("header.php");
            include "php/connect.php";
            ?>


    <div id="mainContent">

        <div id="sideBar">

             <?php
             
             
            include ("userNav.php");
            

             ?>
            
        </div><!-- end of sidebar -->



        <div id="content" class="stiched">
            Work in progress
            <form class="fullWidth">
                <?php

                $getSchoolList = mysqli_query($con,"SELECT * FROM school");
                echo "<select onchange='addSubject(this.value)'>\n<option selected>Pick a School</option>\n";

                while($row = mysqli_fetch_array($getSchoolList))
                  {

                  echo "<option name='school' value='" . $row['ID'] . "'>" . $row['schoolName'] . "</option>\n";

                  }
                  echo "</select>";

                ?>

                <div id="addSubjectSelect"></div>
                <div id="addClassForm"></div>
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