<?php session_start();
if (!isset($_POST["classID"])) {
    header('Location: logout.php');
    exit();
}
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
?>

<form action="php/createAssignment.php" method="post" id="createAssignmentForm">


        <label for="assignmentName">
                    Assignment Name:
                    <input class="loginInput" type="text" name="assignmentName" id="field1" placeholder=""required="required">
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
                    <input class="loginInput" type="date" name="assignmentDueDate" id="field1" placeholder=""required="required">
               </label>

                 <label for="assignmentDescription">
                    Description:
                    <textarea rows="4" class="loginInput" name="assignmentDescription" maxlength="1000" placeholder="Limit 1000 characters"></textarea>
               </label>
               
              
  
        <?php
echo "<input  type=\"text\" name=\"classID\" id=\"field1\"  value=\"$classID\" hidden>" ;
?>
 

               <button type="submit" value="Create Class" name="testing">Add Assignment</button>

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