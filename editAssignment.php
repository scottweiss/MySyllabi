<?php session_start();
if (!isset($_POST["classID"])) {
    header('Location: logout.php');
    exit();
}
if (!isset($_POST["assignmentID"])) {
    header('Location: logout.php');
    exit();
}
$assignmentID = $_POST["assignmentID"];
?>
<!DOCTYPE html>
  
            <?php
            include ("header.php");
            $classID = $_POST["classID"];
            ?>

    <div id="mainContent">
        <div id="sideBar">
             <?php
            include ("userNav.php");
             ?>

            
        </div><!-- end of sidebar -->

        <div id="content" class="stiched">
    
<?php
displayClassPlain($classID);
$getAssignments = mysqli_query($con,"SELECT * FROM assignments WHERE `ID` = '$assignmentID'");
$assignment = mysqli_fetch_array($getAssignments);
?>

<form action="php/updateAssignment.php" method="post" id="createAssignmentForm">


        <label for="assignmentName">
                    Assignment Name:
                    <input class="loginInput" type="text" name="assignmentName" id="field1" value="<?php echo $assignment['name'];?>"required="required">
               </label>

        <label for="assignmentType">
                    Assignment Type:
                    <select class="loginInput" name="assignmentType">

<?php
getListType('assignmentType');
?>
                    </select>
               </label>

        <label for="assignmentDueDate">
                    Date Due:
                    <input class="loginInput" type="date" name="assignmentDueDate" id="field1" value="<?php echo $assignment['dueDate'];?>"required="required">
               </label>

                 <label for="assignmentDescription">
                    Description:
                    <textarea rows="4" class="loginInput" name="assignmentDescription" maxlength="1000" value="Limit 1000 characters"><?php echo $assignment['description'];?></textarea>
               </label>
               
              
  
        <?php
echo "<input  type=\"text\" name=\"classID\" id=\"field1\"  value=\"$classID\" hidden>" ;
echo "<input  type=\"text\" name=\"assignmentID\" id=\"field1\"  value=\"$assignmentID\" hidden>" ;
?>
 

               <button type="submit" value="Create Class" name="testing">Update Assignment</button>

</form>

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

    </body>
</html>