<!DOCTYPE html>
   
            <?php
            $index = true;
            include ("header.php");
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
            <form name="email-form"action="php/sendPasswordReset.php" method="post">

                <input class="loginInput" type="email" name="email" class="mainSearch" placeholder="Email Address" required>
               
                <input class="loginInput" type="submit" name="submit" value="Send Email" >
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