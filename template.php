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

$result = mysqli_query($con,"SELECT TIME_FORMAT('16%3A03', '%l:%i %p') as 'ampmStartTime'");

while($row = mysqli_fetch_array($result)){
    echo $row['ampmStartTime'];
};

            include ("footer.php");
        ?>

        </div>
        <!-- End site content -->
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>