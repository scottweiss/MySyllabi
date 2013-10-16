<?php session_start();
?>
<!DOCTYPE html>
  
            <?php
            include ("header.php");
            ?>

    <div id="mainContent">
        <div id="sideBar">
             <?php
            include ("userNav.php");
             ?>
            
        </div><!-- end of sidebar -->

        <div id="content" class="stiched">
            <h2>View Users</h2>
            <h2>Active Flags</h2>
            
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