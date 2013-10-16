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
            <h2>Change Password</h2>
            <form name="change-password-form" action="changePassword.php" method="post">
                <input class="loginInput" type="password" name="oldPassword" class="mainSearch" placeholder="Current Password" required>
                <input class="loginInput" type="password" name="newPassword" class="mainSearch" placeholder="New Password" required>
                <input class="loginInput" type="password" name="newPassword2" class="mainSearch" placeholder="New Password" required>
                <input class="formInput" type="submit" name="submit" value="Change Password" >
            </form>
            <h2>Change Email</h2>
            <form name="change-email-form" action="changeEmail.php" method="post">
                <input class="loginInput" type="text" name="oldEmail" class="mainSearch" placeholder="Current Password" required>
                <input class="loginInput" type="password" name="newEmail" class="mainSearch" placeholder="New Password" required>
                
                <input class="formInput" type="submit" name="submit" value="Change Email" >
            </form>
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