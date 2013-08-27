<?php session_start(); 

?>
<!DOCTYPE html>
  
            <?php
            include ("header.php");
            ?>


    <div id="mainContent">

        <div id="sideBar">

             <?php
             echo "Welcome " . $_SESSION["username"];
             
            include ("userNav.php");
            

             ?>
            
        </div><!-- end of sidebar -->



        <div id="content" class="stiched">
            MySylla.bi is an application that allows students to share their class schedules and assignments with their classmates through crowd-sourcing for an interactive and collaborative way to stay on schedule. View your course content in an agenda, monthly, or weekly view. 
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