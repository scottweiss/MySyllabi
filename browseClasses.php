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
            
            <div class="contentHead">Browse Classes</div> 
            <form>
                <input type="text">  <input type="submit" value="Search">
            </form>
            <a href="addClasses.php">Add a Class</a>
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