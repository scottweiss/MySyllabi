<?php session_start(); 
?>
<!DOCTYPE html>

            <?php
            include ("header.php");
            include ("php/connect.php");
            ?>


    <div id="mainContent">

        <div id="sideBar">

             <?php
            
             
            include ("userNav.php");
            

             ?>
            
        </div><!-- end of sidebar -->



        <div id="content" class="stiched">
           <div class="contentHead">My Classes</div> (this currently just lists ALL of the classes in the system, not classes you have joined.)
           <?php



    $result = mysqli_query($con,"SELECT *, TIME_FORMAT(startTime, '%l:%i %p') as 'ampmStartTime', TIME_FORMAT(endTime, '%l:%i %p') as 'ampmEndTime' FROM classes");

while($row = mysqli_fetch_array($result))
  {
  echo "<div class='class'>";
  echo "<div class='clName'><a href=viewClass.php?class=" . $row['ID'] . ">" . $row['name'] . "</a></div>"; 
  echo "<table>";
  echo "<tr><th>Instructor:</th><td>" .$row['professor'] . "</td></tr>";
  echo "<tr><th>Section:</th><td>" . $row['section'] . "</td></tr>";
  echo "<tr><th>Class Location:</th><td>" . $row['classLocation']. "</td></tr>";
  echo "<tr><th>Class Time:</th><td>" . $row['ampmStartTime']. " - " .  $row['ampmEndTime'] . "</td></tr>";
  echo "</table>";
  echo "</div>";
}



// <table>
//     <tr><th>Instructor:</th><td>Prof. Scott Weiss</td></tr>
//     <tr><th>Section:</th><td>001</td></tr>
//     <tr><th>Class Location:</th><td>RUSH 205</td></tr>
//     <tr><th>Time:</th><td>2:00 PM - 3:50 PM</td></tr>
// </table>




           ?>
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