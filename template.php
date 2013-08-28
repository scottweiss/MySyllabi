<!DOCTYPE html>
    <?php

    $index = true;
            include ("header.php");
            include ("php/connect.php");
        ?>

    <div id="mainContent">

        <div id="sideBar">
            
             <?php
            include ("php/login.php");
            ?>

        </div><!-- end of sidebar -->

        <div id="content" class="stiched">

            
             <div class='class'>
  <div class='clName'><a href='viewClass.php?class=1'>INFO 101</a></div> 

<table>
    <tr><th>Instructor:</th><td>Prof. Scott Weiss</td></tr>
    <tr><th>Section:</th><td>001</td></tr>
    <tr><th>Class Location:</th><td>RUSH 205</td></tr>
    <tr><th>Time:</th><td>2:00 PM - 3:50 PM</td></tr>
</table>

  </div><!-- end of class -->
        
        </div><!-- end of content -->


        <div class="clearfix"></div>

    </div>
<?php

$time = '15%3A30';
$times = explode("%3A", $time);
echo $times[0] . ":" .  $times[1]. ":00";

            include ("footer.php");
        ?>

        </div>
        <!-- End site content -->
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>