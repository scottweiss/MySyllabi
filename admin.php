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
                 <script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.dataTables.js"></script>
                 <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#test').dataTable();
      } );
    </script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#classes').dataTable();
      } );
    </script>
            
        </div><!-- end of sidebar -->

        <div id="content" class="stiched">
            <div id="viewUsers" class="contentHead">View Users</div>
            <table id="test" class="display">
                <thead>
                    <tr>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Date Created</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>

<?php
           $result = mysqli_query($con,"SELECT * FROM `users` order by `dateCreated`");

          while($row = mysqli_fetch_array($result))
            {
                echo "<tr";




 $result2=mysqli_query($con, "SELECT * FROM `admin` WHERE userID='" . $row["userID"] . "'");
 if ($count=mysqli_num_rows($result2) == 1)
{

 echo " class='gradeA'";
}

                
                echo ">";
                echo "<td>" . $row['username'] . "</td>"; 
                echo "<td>" . $row['email'] . "</td>"; 
                echo "<td>" . $row['dateCreated'] . "</td>"; 
                 $result2=mysqli_query($con, "SELECT * FROM `admin` WHERE userID='" . $row["userID"] . "'");
 if ($count=mysqli_num_rows($result2) == 1)
{

 echo "<td><form action='admin.php?e=6' method='post'>
    <button class='nostyle' type='submit' value='?e=6'>Delete User</button>
</form></td>";
} else
                echo "<td><form action='php/deleteUser.php' method='post'>
    <button class='nostyle' name='userID' type='submit' value='".$row['userID']."'>Delete User</button>
</form></td>";
                echo "</tr>";

            }
          
          ?>
</tbody>
</table>

<div class="spacer"></div>

            <div id="viewFlags" class="contentHead">View Classes</div>

        <table id="classes" class="display">
                <thead>
                    <tr>
                        <td>Class</td>
                        <td>Professor</td>
                        <td>Created By</td>
                       <td></td>
                        
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
                echo "<td>" . 






                $row3['creatorID'] . "</td>";
                echo "<td><form action='php/deleteClass.php' method='post'>
    <button class='nostyle' name='classID' type='submit' value='".$row3['ID']."'>Delete Class</button>
</form></td>";
                echo "</tr>";

            }
          
          ?>
</tbody>
</table>

<div class="spacer"></div>

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
<script>
       $(document).ready( function () {
    $('#users').dataTable();
} );
   </script>
    </body>
</html>