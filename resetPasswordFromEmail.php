<!DOCTYPE html>
   
            <?php
            $index = true;
            include ("header.php");
            ?>


            <?php
include ("php/connect.php");
if(isset($_GET['token'])) {
	$token = $_GET['token'];
	// echo $token;
	$result=mysqli_query($con, "SELECT * FROM `users` WHERE  token = '$token' ");
	$count=mysqli_num_rows($result);
		if ($count != 1){
			header("location: index.php");
		}
	$getID = mysqli_fetch_array($result);
	$ID = $getID['userID'];
	// echo $ID;
	//echo "<input type='text' value='".$ID."' name=\"userID\" form='password-update-form' hidden>";
	//echo "<input type='text' value='".$token."' name=\"token\" form='password-update-form' hidden>";
}


?>


    <div id="mainContent">

<!--        <div id="sideBar">

            <a href="register.php">Don't have an account?</a>
            <form action="login.php" method="post">
                <input class="loginInput" name="userName" class="mainSearch" placeholder="email or username">
                <input class="loginInput" type="password" name="password" class="mainSearch" placeholder="password">
                <input class="loginInput" type="submit" value="Login"><span class="alignRight"><a href="register.php">Forgot username or password?</a></span>
            </form>

            <a href="forgotPassword.php">Forgot password?</a>
            <span class="alignRight"><a href="register.php">Register</a></span>

        </div><!-- end of sidebar -->



        <div id="contennt" class="stiiched">

                <div class="success_box">All of the fields were successfully validated!</div>
    <div class="error_box"></div>
<h2>Forgot Password?</h2>Enter your email address to send a password reset link.
            <form name="password-update-form" action="php/updatePasswordFromEmail.php" method="post">
                <input class="loginInput" type="password" name="password" class="mainSearch" placeholder="Enter New Password" required>
                <input class="loginInput" type="password" name="password_confirm" class="mainSearch" placeholder="Confirm New Password" required>
                <input type='text' value="<?php echo $token; ?>" name="token2" hidden>
                <input type='text' value="<?php echo $ID; ?>" name="userID2" hidden>

                <input class="loginInput" type="submit" name="submit" value="Change Password" >
            </form>
        </div><!-- end of content -->


        <div class="clearfix"></div>

    </div>

        <?php

            include ("footer.php");
        
        ?>

		</div>


        
    </body>
</html>