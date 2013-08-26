<?php session_start(); 
?>
<!DOCTYPE html>

            <?php
            include ("header.php");
            include 'php/connect.php'
            ?>


    <div id="mainContent">

        <div id="sideBar">

             <?php
             echo "Welcome " . $_SESSION["username"];
             
            include ("userNav.php");
            

             ?>
            
        </div><!-- end of sidebar -->



        <div id="content" class="stiched">
           <div class="contentHead">My Classes</div> 
           <?php



    $result = mysqli_query($con,"SELECT *, TIME_FORMAT(startTime, '%l:%i %p') as 'ampmStartTime', TIME_FORMAT(endTime, '%l:%i %p') as 'ampmEndTime' FROM classes");

while($row = mysqli_fetch_array($result))
  {
  echo "<div class='class'>";
  echo "<span class='clName'>" . $row['name'] . "</span> " . $row['classLocation'];
  echo $row['professor'] . " " . $row['ampmStartTime']. " - " .  $row['ampmEndTime'] ;
  echo "</div>";
  }

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